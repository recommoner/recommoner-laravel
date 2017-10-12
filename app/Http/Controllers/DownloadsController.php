<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\download;
class DownloadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('download');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $download = new download;
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'profession_affiliation' => 'required',
            'how_did_rec' => 'required',
//            'community' => 'required',
//            'business' => 'required',
//            'classroom' => 'required',
//            'research' => 'required',
        ]);
        $download->name = $request->name;
        $download->email = $request->email;
        $download->profession_affiliation = $request->profession_affiliation;
        $download->community = $request->community;
        $download->business = $request->business;
        $download->classroom = $request->classroom;
        $download->research = $request->research;
        $download->how_did_rec = $request->how_did_rec;
        $download->save();
        return redirect('downloads');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
