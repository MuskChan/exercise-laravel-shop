<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LeaderboardController extends Controller
{
    public function index(User $user)
    {
//        $users = $user->first();
        $users = $user->withCount('orders')->get();
        foreach ($users as $user){
            echo $user->orders_count.'<br/>';
            //dd($users);
        }
        exit;
        foreach ($user->orders as $order){
            dd($order);
        }
        dd($user->orders());
        dd($user->orders()->where('refund_status','pending')->get());
        return view('leaderboard.index',compact('user'));
    }
}
