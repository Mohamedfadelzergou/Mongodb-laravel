<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        Auth::user()->statuses()->create([
            'body'=>$request->body,
        ]);
        return redirect()->back();
    }
    public function reply(Request $request,$status_id){
        $status=Status::find($status_id);
        if(!$status){
            return redirect()->back();
        }
        // if(!Auth::user()->isFriendsWith($status->user) && Auth::user()->id !== $status->user()->id){
        //     return redirect()->back();
        // }
        $reply=Reply::create([
            'body'=>$request->input('body'),
        ])->status()->associate(Status::find($status_id));
        $status->replies()->save($reply);
        return redirect()->back();
    }
    public function getLike($statusId){
        
        $status=Status::find($statusId);
        $like=$status->likes()->create([]);
        Auth::user()->likes()->save($like);
        return redirect()->back();
    }
    public function getLikereply($replayId){
        
        $replay=Reply::find($replayId);
        $like=$replay->likes()->create([]);
        Auth::user()->likes()->save($like);
        return redirect()->back();
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
