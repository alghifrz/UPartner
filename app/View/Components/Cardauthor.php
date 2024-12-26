<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Cardauthor extends Component
{
    public $link;
    public $author;
    public $email;
    public $image;

    public function __construct($link, $author = 'Alghifari Rasyid Zola', $email = 'alghifari.zola@example.com', $image = 'img/alghif.png')
    {
        $this->link = $link;
        $this->author = $author;
        $this->email = $email;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cardauthor');
    }
}
