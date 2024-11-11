<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Http;
use Illuminate\View\Component;

class LatestBlogPosts extends Component
{

    /** @var string */
    public string $link;

    /** @var bool */
    public bool $error = false;
    public array $posts = [];
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        try {
            $response = Http::baseUrl(env('BLOG_SERVER'))
                ->throw()
                ->get('/posts', ['perPage' => 3, 'page' => 1]);

            if ($response->successful()) {
                $results = $response->json();
                ['posts' => $this->posts, 'posts_link' => $this->link] = $results;
            }
        } catch (\Throwable $e) {
            logger('error occurred! {throwable}', ['throwable' => $e]);
            $this->error = true;
            $this->posts = array();
            $this->link = env('APP_BLOG');
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.latest-blog-posts');
    }
}
