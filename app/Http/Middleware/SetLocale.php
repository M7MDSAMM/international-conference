<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Available languages
        $availableLocales = ['en', 'ar'];
        $defaultLocale = 'en';

        // Check if language is in session
        if (session()->has('locale')) {
            $locale = session('locale');
        }
        // Check if language is in URL query parameter
        elseif ($request->has('lang')) {
            $locale = $request->get('lang');
            session(['locale' => $locale]);
        }
        // Detect from browser
        else {
            $browserLang = $request->getPreferredLanguage($availableLocales);
            $locale = $browserLang ?: $defaultLocale;
            session(['locale' => $locale]);
        }

        // Validate locale
        if (!in_array($locale, $availableLocales)) {
            $locale = $defaultLocale;
        }

        // Set application locale
        app()->setLocale($locale);

        return $next($request);
    }
}
