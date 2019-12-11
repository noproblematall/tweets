<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Tweet;
use App\TweetCounter;
use App\LatestTweet;
use App\History;
use Illuminate\Support\Facades\DB;
use App\Helper\CustomHelper;

use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{


    public function __construct(){
        // $this->user_name = '';
        // $this->content = '';
    }

    public function index()
    {
        // $google = User::first()->google;
        return view('soon');
    }

    public function landing()
    {
        $google = User::first()->google;
        return view('welcome', compact('google'));
    }

    public function front_data()
    {
        
        $distance = 5505;
        $total_tweets = 5505;
        $speed = 20;
        $step = (int)($total_tweets/$distance);

        $current_number = TweetCounter::first()->total;
        // $current_distance = (int)($current_number/$step);
        // $current_distance = ((int)($current_number)-3) - 16701;
        $latest_twwet = LatestTweet::first();
        if($latest_twwet){
            $user_name = $latest_twwet->name;
            $content = $latest_twwet->content;
        }else{
            $user_name = '';
            $content = '';
        }

        // $today_count = TweetCounter::first()->today_tweet;
        // $user_count = TweetCounter::first()->users_name;
        
        return [
            'current_distance' => 5505,
            'speed' => $speed,
            'user_name' => $user_name,
            'latest_tweet' => $content,
            // 'total_number' => $current_number,
            // 'today_count' => $today_count,
            // 'user_count' => $user_count
        ];
    }

    public function setTweet($user_name, $content, $hashTag) {

            $now = date('Y-m-d');
            $tweet = Tweet::create([
                'name' => $user_name,
                'content' => $content,
                'date' => $now,
            ]);            
            $content = trim($content);
            // CustomHelper::dataLog($tweet);
            if(strpos($content, 'RT') === false){
                if(strpos($content, '@') != 0 && strpos($content, '@') != 1){
                    $latest_twwet = LatestTweet::first();
                    if($latest_twwet){
                        $latest_twwet->update([
                            'name' => $user_name,
                            'content' => $content,
                        ]);
        
                    }else{
                        LatestTweet::create([
                            'name' => $user_name,
                            'content' => $content,
                        ]);
                    }

                }
            }
            $total = Tweet::get()->count();
            $now = date('Y-m-d');
            $today_count = Tweet::where('date', $now)->get()->count();
            $user_count = Tweet::get()->pluck('name')->unique()->count();
            TweetCounter::first()->update([
                'total' => $total,
                'users_name' => $user_count,
                'today_tweet' => $today_count
            ]);

            // DB::table('tweet_counters')->where('name', $hashTag->name)->increment('total');

        // CustomHelper::dataLog(serialize(Tweet::get()->toArray()));

    }

    public function all_data() {
        $chart_end = Carbon::now();
        $chart_start = $chart_end->copy()->subDays(6);
        $period = CarbonPeriod::create($chart_start,$chart_end);
        $key_array = $tweet_number = array();
        foreach ($period as $date) {
            $key = $date->format('Y-m-d');
            $key_display = $date->format('d M Y');
            array_push($key_array, $key_display);
            $tweet = Tweet::where('date',$key)->get()->count();
            array_push($tweet_number,$tweet);
        }

        // $now = date('Y-m-d');
        // $today_count = Tweet::where('date', $now)->get()->count();
        // $user_count = Tweet::get()->pluck('name')->unique()->count();
        // $tweet_counter = Tweet::get()->count();

        // TweetCounter::first()->update([
        //     'total' => $tweet_counter
        // ]);
        $tweet_counter = TweetCounter::first()->total;
        $today_count = TweetCounter::first()->today_tweet;
        $user_count = TweetCounter::first()->users_name;

        return [
            'tweet_counter' => $tweet_counter,
            'today_count' => $today_count,
            'user_count' => $user_count,
            'key_array' => $key_array,
            'tweet_number' => $tweet_number
        ];
    }

    public function all_data_normal()
    {
        $chart_end = Carbon::now();
        $chart_start = $chart_end->copy()->subDays(6);
        $period = CarbonPeriod::create($chart_start,$chart_end);
        $key_array =  array();
        foreach ($period as $date) {
            $key = $date->format('Y-m-d');
            $key_display = $date->format('d M Y');
            array_push($key_array, $key_display);
        }
        // $now = date('Y-m-d');
        // $today_count = Tweet::where('date', $now)->get()->count();
        // $user_count = Tweet::get()->pluck('name')->unique()->count();
        // $tweet_counter = Tweet::get()->count();

        // TweetCounter::first()->update([
        //     'total' => $tweet_counter
        // ]);
        $tweet_counter = TweetCounter::first()->total;
        $today_count = TweetCounter::first()->today_tweet;
        $user_count = TweetCounter::first()->users_name;

        return [
            'tweet_counter' => $tweet_counter,
            'today_count' => $today_count,
            'user_count' => $user_count,
            'key_array' => $key_array,
        ];
    }

    public function hash_change(Request $request)
    {
        $tweet_counter = TweetCounter::first();
        $tweet_counter->update([
            'name' => $request['hash_tag']
        ]);
        return [
            'success' => 'ok'
        ];
    }

    public function google_init()
    {
        $google = User::first()->google;
        return [
            'google' => $google
        ];
    }

    public function google_save(Request $request)
    {
        $user = User::first();
        $user->update([
            'google' => $request['google']
        ]);
        return [
            'success' => 'ok'
        ];
    }
}
