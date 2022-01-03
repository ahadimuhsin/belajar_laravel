<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LatestPosts extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $latestPosts;
    public function __construct($latestPosts)
    {
        //
        $this->latestPosts = $latestPosts;
    }

    public function toUpper($content)
    {
        return strtoupper($content);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.latest-posts');
    }
}
