<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;
use App\TweetCounter;
use App\LatestTweet;

use Carbon\Carbon;
use Carbon\CarbonPeriod;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
        // dd(Tweet::where('name', 'roobche')->get()->toArray());
        // $chart_end = Carbon::now();
        // $chart_start = $chart_end->copy()->subDays(10);
        // $period = CarbonPeriod::create($chart_start,$chart_end);
        // $key_array = $tweet_number = array();
        // foreach ($period as $date) {
        //     $key = $date->format('Y-m-d');
        //     $key_display = $date->format('d M Y');
        //     array_push($key_array, $key_display);
        //     $tweet = Tweet::where('date',$key)->count();
        //     array_push($tweet_number,$tweet);
        // }

        // $now = date('Y-m-d');
        // $today_count = Tweet::where('date', $now)->get()->count();
        // $user_count = Tweet::get()->pluck('name')->unique()->count();
        // $tweet_counter = TweetCounter::get()->first();
        $active = 'home';
        $api_token = Auth::user()->api_token;
        return view('home', compact('active', 'api_token'));
    }

    public function setting()
    {
        $active = 'set';
        $api_token = Auth::user()->api_token;
        return view('setting', compact('active', 'api_token'));
    }

    public function set_status(Request $request)
    {

        TweetCounter::first()->update([
            'status' => $request['flag']
        ]);
        // return $request['flag'];
    }

    public function change_password(Request $request)
    {
        $cur_password = $request['old_password'];
        $new_password = $request['new_password'];
        if(!Hash::check($cur_password, Auth::user()->password)){
            $errors = ['error' => 'The old password is incorrect.'];
            return $errors;
        }else{
            DB::table('users')
                ->where('id', Auth::user()->id)
                ->update([
                    'password' => Hash::make($new_password),
            ]);
            return [
                'success' => 'The password was changed successfully.'
            ];
        }
    }

    public function change_profile(Request $request)
    {
        $user = Auth::user();
        if($request->get('username') != ''){
            $user->username = $request->get('username');
        }
        if($request->get('email') != ''){
            $user->email = $request->get('email');
        }
        if($request->hasfile('photo')){
            $fileName = time() . '.' . request()->photo->getClientOriginalExtension();
            request()->photo->move(public_path('img'),$fileName);
            // $request->photo->storeAs('public/profile',$fileName);
            $user->photo = 'img/' . $fileName;
        }
        $user->update();
        return [
            'success' => 'success'
        ];
    }
}
