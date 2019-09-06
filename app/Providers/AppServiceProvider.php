<?php

namespace App\Providers;

use App\Channel;
use App\Http\View\Composer\ChannelComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use function foo\func;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        Option 1 : Every Single Views
//        View::share('channels', Channel::orderBy('name')->get());

//        Option 1 : Granular Views with Wild Card ('post.*' means all file in view post directory)
//        View::composer(['post.*', 'channel.index'], function($view){
//            $view->with('channels', Channel::orderBy('name')->get());
//        });

//        Option 3 : Dedicated Class
//        View::composer(['post.*', 'channel.index'], ChannelComposer::class);

//        Option 3 : extract with View
        View::composer(['partials.channel.*'], ChannelComposer::class);

    }
}
