<!-- ========== FOOTER ========== -->
<footer class="py-6 gradient-dark text-white" role="contentinfo">
    <div class="container mx-auto px-6">
        <div class="text-center">
            <h3 class="text-lg font-bold mb-2 gradient-yellow-green bg-clip-text text-transparent">
                {{ __('site.footer.alliance_name') }}
            </h3>
            <p class="text-gray-400 mb-3 {{ app()->getLocale() === 'en' ? 'en-text' : '' }} text-sm">
                {{ app()->getLocale() === 'ar' ? 'Human First Alliance' : __('site.footer.alliance_name') }}
            </p>
            <p class="text-gray-400 mb-4 text-xs">
                {{ __('site.footer.tagline') }}
            </p>
            <p class="text-gray-500 text-xs">
                © {{ date('Y') }} Human First Alliance. {{ __('site.footer.copyright') }}.
            </p>
        </div>
    </div>
</footer>
