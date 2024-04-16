<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        'system/blogs/*/*/remove_image',
        'system/events/*/*/remove_image',
        'system/page/*/about-nepal/remove_image',
        'system/page/*/study-in-japan/remove_image',
        'system/page/*/about/remove_image',
    ];
}
