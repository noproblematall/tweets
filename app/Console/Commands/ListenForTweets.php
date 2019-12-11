<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;


use App\Tweet;
use App\TweetCounter;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\DB;
use App\Helper\CustomHelper;
use TwitterStreamingApi;

class ListenForTweets extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'twitter:listen {tagId}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Store tweets to database';

    private $hashtag;
    private $front;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->hashtag = new TweetCounter();
        $this->front = new FrontendController();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        echo "Starting process:";
        $tag =  $this->hashtag
            ->where('id', $this->argument('tagId'))
            ->first();

        //well no tag so let's abort
        if(!$tag) {
            $this->abort('This hashtag was not found!');
        }

        $this->startListeningTo($tag);
    }

    /**
     * @param $hashTag
     */
    public function startListeningTo($hashTag)
    {
        TwitterStreamingApi::publicStream()
            ->whenFrom([], function() {})
            ->whenTweets(null, function() {})
            ->whenHears("#".$hashTag->name, function (array $tweet) use ($hashTag) {
                $this->onTweetHeard($tweet, $hashTag);
            })->startListening();
    }

    /**
     * $event
     * @param $tweet
     * @param $tag
     */
    private function onTweetHeard($tweet, $hashTag)
    {
        // CustomHelper::datalog(json_encode($tweet));
        // if(TweetCounter::first()->status){
            $this->front->setTweet($tweet['user']['screen_name'], $tweet['text'], $hashTag);
            // DB::table('tweet_counters')->where('name', $hashTag->name)->increment('total');
            
        // }
        // CustomHelper::datalog($tweet['user']['screen_name'].'=>'.$tweet['text']);
    }

    /**
     * @param $message
     * @throws \Exception
     */
    private function abort($message)
    {
        throw new \Exception($message);
    }
}
