<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class FriendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $friends=User::all();
        $members=User::all();
        return view('friends',['users'=>$friends,'members'=>$members]);
    }
    public function getAdd($friend_id)
    {
        DB::table('friends')->insert([
            'user_id'=>Auth::user()->id,
            'friend_id'=>$friend_id,
            'accepted'=>true
        ]);
        // if(!$user){
        //     return ;
        // }
        // if(Auth::user()->id === $user->id){
        //     return redirect()->back();
        // }
        // if(Auth::user()->hasFriendRequestPending($user)||$user->hasFriendRequestPending(Auth::user())){

        // }
        // if(Auth::user()->isFriendsWith($user)){

        // }
        // Auth::user()->addFriend($user);
    }
    public function getAccept(User $user)
    {
        
        if(!$user){
            return ;
        }
        if(!Auth::user()->hasFriendRequestReceived($user)){

        }
        Auth::user()->acceptFriendRequest($user);
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
        //
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
