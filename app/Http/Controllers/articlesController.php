<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\article;
use Illuminate\Support\Facades\Auth;

class articlesController extends Controller
{

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
        $data['articles'] = article::where($where)->paginate(15);
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
        $path = $request->thumbnail->store('', 'public');
        $article->user = $user->id;
        $article->thumbnail = $path;
        $article->contents = $request->contents;
        $article->save();
        return redirect('articles?added=1');
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
}
