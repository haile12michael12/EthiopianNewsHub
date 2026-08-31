<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ArticleSubmitted
{
    use Dispatchable, SerializesModels;

    public function __construct()
    {
        //
    }
}
