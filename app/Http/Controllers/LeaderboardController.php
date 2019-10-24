<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use DB;

class LeaderboardController extends Controller
{
    public function index(User $user)
    {
//        $users = User::first();

        $users = DB::select('select users.name,sum(orders.total_amount) total_amount 
                            from users 
                            left join orders
                            on orders.user_id = users.id
                            group by users.id
                            order by total_amount desc
                            ');
        $users = collect($users);
//        dd($total_amount);
//        $total_amount = $user->orders()->where('refund_status','pending')->sum('total_amount')->all();
//        dd($total_amount);
//        $total_amount = $user->orders()->where('refund_status','pending')->sum('total_amount');
//        dd($total_amount);
//        foreach ($users as $user){
//            $users[$user]['total_amount'] = $user->orders()->where('refund_status','pending')->sum('total_amount');
//        }
//        dd($users);
        return view('leaderboard.index',compact('users'));
    }
}
