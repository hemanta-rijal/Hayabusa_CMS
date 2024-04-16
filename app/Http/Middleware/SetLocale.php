<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(Request): (Response|RedirectResponse) $next
     * @return Response|RedirectResponse
     */
    public function handle(Request $request, Closure $next): Response|RedirectResponse
    {
        $language = 'en'; // default

        if (request('language') === 'en' || request('language') === 'jp') {
            $language = request('language');
            session()->put('language', $language);
        } elseif (session('language') === 'en' || session('language') === 'jp') {
            $language = session('language');
        }

        app()->setLocale($language);

        return $next($request);
    }
}
