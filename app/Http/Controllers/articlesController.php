<?php

namespace App\Http\Controllers;

use App\Mail\EmailNotification;
use Illuminate\Http\Request;
use App\article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class articlesController extends Controller
{

    protected $width = 684;
    protected $height = 413;

    function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $where = [];
        if (!$user->admin) {
            $where['user'] = $user->id;
        }
        $data['articles'] = article::where($where)->orderBy('id', 'desc')->paginate(15);
        $data['isAdmin'] = $user->admin === 1;
        return view('articles', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('edit.add_article');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $article = new article;
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'thumbnail' => 'required',
            'contents' => 'required',
        ]);
        $article->title = $request->title;
        $article->description = $request->description;
        $article->status = $request->status;
        $path = $request->thumbnail->store('', 'public');

        // crop the image as thumbnail
        $this->createThumbnail($path);
        $article->user = $user->id;
        $article->thumbnail = $path;
        $article->contents = $request->contents;
        if ($article->save()) {
            Mail::to(env('NOTIFICATION_SEND'))->send(new EmailNotification(['name' => $user['name'], 'title' => $article->title, 'id' => $article->id]));
        }
        return redirect('articles?added=1');
    }


    protected function duplicateImage($path)
    {
        copy(public_path('uploads/' . $path), public_path('uploads/actual-' . $path));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        $where = [];
        if ($user->admin == 0) {
            $where['user'] = $user->id;
        }
        $item = article::where($where)->find($id);
        if (!isset($item->id)) {
            return redirect('articles');
        }
        return view('edit.edit_article', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article = article::find($id);
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'contents' => 'required',
        ]);
        $article->title = $request->title;
        $article->description = $request->description;
        if ($request->thumbnail) {
            $path = $request->thumbnail->store('', 'public');

            // crop the image as thumbnail
            $this->createThumbnail($path);

            $article->thumbnail = $path;
        }
        $article->contents = $request->contents;
        $article->save();
        return redirect('articles?updated=1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = article::find($id);
        $item->delete();
        return redirect('articles');
    }

    protected function createThumbnail($src)
    {
        $thumb_width = $this->width;
        $thumb_height = $this->height;
        $filename = public_path('uploads/' . $src);
        $src = public_path('uploads/' . $src);
        $_imageType = getimagesize($src);
        $image = "";
        $imageType = $_imageType['mime'];
        switch ($imageType) {
            case "image/gif":
                $image = imagecreatefromgif($src);
                break;
            case "image/pjpeg":
            case "image/jpeg":
            case "image/jpg":
                $image = imagecreatefromjpeg($src);
                break;
            case "image/png":
            case "image/x-png":
                $image = imagecreatefrompng($src);
                break;
        }

        $width = imagesx($image);
        $height = imagesy($image);
        $original_aspect = $width / $height;
        $thumb_aspect = $thumb_width / $thumb_height;
        if ($original_aspect >= $thumb_aspect) {
            // If image is wider than thumbnail (in aspect ratio sense)
            $new_height = $thumb_height;
            $new_width = $width / ($height / $thumb_height);
        } else {
            // If the thumbnail is wider than the image
            $new_width = $thumb_width;
            $new_height = $height / ($width / $thumb_width);
        }
        $thumb = imagecreatetruecolor($thumb_width, $thumb_height);
        // Resize and crop
        imagecopyresampled($thumb,
            $image,
            0 - ($new_width - $thumb_width) / 2, // Center the image horizontally
            0 - ($new_height - $thumb_height) / 2, // Center the image vertically
            0, 0,
            $new_width, $new_height,
            $width, $height);
        $cropped = false;
        switch ($imageType) {
            case "image/png":
            case "image/x-png":
                $image_Quality = intval(80 / 10);
                $image_Quality = $image_Quality == 10 ? 9 : $image_Quality;
                imagepng($thumb, $filename, $image_Quality);
                $cropped = true;
                break;
            case "image/pjpeg":
            case "image/jpeg":
            case "image/jpg":
                imagejpeg($thumb, $filename, 80);
                $cropped = true;
                break;
            case 'image/gif':
                imagegif($thumb, $filename);
                $cropped = true;
                break;
            default:
                $cropped = false;
        }
        $r = imagejpeg($thumb, $filename, 80);
        return $cropped;
    }

    public function approve($id, $status)
    {
        $user = Auth::user();
        if (!$user->admin) {
            return redirect('narratives');
        }
        $article = article::find($id);
        $article->status = $status === 1 ? 0 : 1;
        $article->save();
        return redirect('narratives');
    }
}
