<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $statuses=Status::notReply()->where(function($query){
        //     return $query->where('user_id',Auth::user()->id)->orWhereIn('user_id',User::all());
        // })
        // ->orderBy('created_at','Desc')
        // ->paginate(10);
        $statuses=Status::orderBy('created_at','Desc')
        ->paginate(10);
        $nusers=User::count();
        $members=User::all();
        return view('home',['nusers'=>$nusers ,'statuses'=>$statuses,'members'=>$members]);
    }
}
