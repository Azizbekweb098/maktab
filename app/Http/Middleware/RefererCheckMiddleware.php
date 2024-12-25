<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RefererCheckMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $referer = $request->header('referer'); // Referer manzilni tekshiramiz

        // Saytning bazaviy URL manzilini olamiz
        $siteUrl = config('app.url');

        if (!$referer || !str_starts_with($referer, $siteUrl)) {
            // Agar referer yo'q yoki boshqa manzildan kelgan bo'lsa
            return response('Bu sahifaga to‘g‘ridan-to‘g‘ri kirish taqiqlangan.', 403);
        }

        return $next($request);
    }
}
