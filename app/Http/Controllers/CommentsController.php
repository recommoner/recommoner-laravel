<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CommentsController extends Controller
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
        $this->isAdmin();
        $comments = DB::table('comments')->orderBy('id', 'desc')->paginate(20);
        return view('comments', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->isAdmin();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->isAdmin();
        $comment = new comment;
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'comment' => 'required',
            'post' => 'required',
            'status' => 'required',
        ]);
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->comment = $request->comment;
        $comment->post = $request->post;
        $comment->status = $request->status;
        $comment->updated_at = $request->updated_at;
        $comment->save();
        return redirect('narratives/' . $comment->post . '?comment_success#comments');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $status)
    {
        $this->isAdmin();
        $comment = comment::find($id);
        $comment->status = $status == 1 ? 0 : 1;
        $comment->save();
        return redirect('comments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->isAdmin();
        $item = comment::find($id);
        $item->delete();
        return redirect('comments');
    }

    protected function isAdmin()
    {
        $user = Auth::user();
        if (!$user->admin) {
            redirect('articles');
            exit;
        }
    }
}
