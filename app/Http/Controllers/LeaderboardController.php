<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use Auth;
use DB;
use Cache;

class LeaderboardController extends Controller
{
    public function index(User $user)
    {
//        dd($user->getUsers());

        $users = $user->has('orders')->paginate(30);
//        $orders = Order::with('user')->get();
//        foreach ($orders as $order) {
//            echo $order->user->name;
//        }
//        $users = $user->with('orders')->get();
//        foreach ($users as $user) {
//            dd($user->orders);
//        }
//        dd($orders);
        return view('leaderboard.index',compact('users'));
    }
}
