<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use DB;
use Cache;

class LeaderboardController extends Controller
{
    public function index(User $user)
    {
//          dd(Cache::get('exercise_users'));
//        $users = User::paginate(30);
//        dd($users);
//        $users = DB::select('select users.name,sum(orders.total_amount) total_amount
//                            from users
//                            left join orders
//                            on orders.user_id = users.id
//                            group by users.id
//                            order by total_amount desc
//                            ');
        $users = $user->has('orders')->paginate(30);
//
//        $users = DB::table('orders')
//                    ->sum('total_amount')
//                    ->union($first)
//                    ->groupBy('user_id');
//        dd($users);
//
//        $first = App\Models\Orders::
//                    groupBy('user_id')
//                    ->sum('total_amount');
//        $user = User::get();
//        $users = $user->orders()->get();
//        $users = collect($users);
        return view('leaderboard.index',compact('users'));
    }
}
