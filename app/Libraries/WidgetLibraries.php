<?php namespace App\Libraries;

class WidgetLibraries
{

        public function recentPost(array $params)
    {
        return view('widget/recent_post', $params);
    }
}