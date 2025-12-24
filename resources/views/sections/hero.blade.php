<!-- ========== HERO SECTION ========== -->
<section class="min-h-screen relative overflow-hidden flex items-center justify-center" aria-label="{{ __('site.nav.home') }}">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0" aria-hidden="true">
        <img src="{{ asset('images/header.png') }}" alt="" class="w-full h-full object-cover">
    </div>
    <!-- Dark overlay for better text readability -->
    <div class="absolute inset-0 z-1 bg-black/30"></div>
    <!-- Gradient overlay -->
    <div class="absolute inset-0 z-2 bg-gradient-to-b from-[#61ce5b]/50 via-[#cccc48]/40 to-[#61ce5b]/50"></div>

    <!-- Decorative circles -->
    <div class="absolute top-20 {{ app()->getLocale() === 'ar' ? 'left' : 'right' }}-20 w-64 h-64 bg-white opacity-10 rounded-full blur-3xl float z-3"></div>
    <div class="absolute bottom-20 {{ app()->getLocale() === 'ar' ? 'right' : 'left' }}-20 w-96 h-96 bg-[#cccc48] opacity-10 rounded-full blur-3xl float z-3" style="animation-delay: 2s;"></div>

    <div class="container mx-auto px-6 py-20 relative z-10">
        <div class="max-w-5xl mx-auto text-center">
            <!-- Logo -->
            <div class="mb-12 fade-in">
                <div class="w-48 h-48 mx-auto bg-white rounded-full shadow-2xl flex items-center justify-center p-4">
                    <img src="{{ asset('logo.png') }}" alt="{{ __('site.hero.alliance_name') }}" class="w-full h-full object-contain">
                </div>
            </div>

            <!-- Title -->
            <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 fade-in delay-100" style="text-shadow: 0 4px 20px rgba(0,0,0,0.5), 0 2px 10px rgba(0,0,0,0.4);">
                {{ __('site.hero.alliance_name') }}
            </h1>

            <!-- Conference Title Arabic -->
            <h2 class="text-3xl md:text-5xl font-semibold text-white mb-4 fade-in delay-200" style="text-shadow: 0 4px 20px rgba(0,0,0,0.5), 0 2px 10px rgba(0,0,0,0.4);">
                {{ __('site.hero.conference_title_ar') }}
            </h2>

            <!-- English Title -->
            <h3 class="text-2xl md:text-4xl font-bold text-white en-text mb-4 fade-in delay-300" style="text-shadow: 0 4px 20px rgba(0,0,0,0.5), 0 2px 10px rgba(0,0,0,0.4);">
                {{ __('site.hero.conference_title_en') }}
            </h3>

            <!-- Subtitle -->
            <p class="text-xl md:text-3xl font-medium text-white en-text mb-12 fade-in delay-400" style="text-shadow: 0 3px 15px rgba(0,0,0,0.5), 0 2px 8px rgba(0,0,0,0.4);">
                {{ __('site.hero.subtitle') }}
            </p>

            <!-- CTA Button -->
            <div class="fade-in delay-500">
                <a href="#introduction" class="inline-block bg-[#1a1a1a] text-white px-12 py-4 rounded-full text-lg font-semibold btn-glow hover:bg-[#2d2d2d] transition-all">
                    {{ __('site.hero.discover_more') }}
                </a>
            </div>
        </div>
    </div>

    <!-- Scroll indicator -->
    <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce z-10">
        <svg class="w-8 h-8 text-white drop-shadow-lg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </div>
</section>
