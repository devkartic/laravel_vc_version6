<?php


namespace App\Http\View\Composer;

use App\Channel;
use Illuminate\View\View;

class ChannelComposer
{
    public function compose(View $view){
        $view->with('channels', Channel::orderBy('name')->get());
    }

}
