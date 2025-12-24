<!-- ========== NAVIGATION BAR ========== -->
<nav class="navbar" role="navigation" aria-label="{{ __('site.nav.home') }}">
    <div class="container mx-auto px-6">
        <div class="flex items-center justify-between h-16 md:h-18">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="flex items-center gap-3">
                    <div class="w-12 h-12 md:w-14 md:h-14 rounded-full flex items-center justify-center shadow-lg overflow-hidden bg-white">
                        <img src="{{ asset('logo.png') }}" alt="{{ __('site.hero.alliance_name') }}" class="w-full h-full object-contain p-1">
                    </div>
                    <span class="hidden md:block font-bold text-lg text-[#1a1a1a]">{{ __('site.hero.alliance_name') }}</span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center gap-4">
                <ul class="flex items-center gap-2">
                    <li><a href="#main-content" class="nav-link" data-section="hero">{{ __('site.nav.home') }}</a></li>
                    <li><a href="#introduction" class="nav-link" data-section="introduction">{{ __('site.nav.introduction') }}</a></li>
                    <li><a href="#who-we-are" class="nav-link" data-section="who-we-are">{{ __('site.nav.who_we_are') }}</a></li>
                    <li><a href="#vision" class="nav-link" data-section="vision">{{ __('site.nav.vision') }}</a></li>
                    <li><a href="#mission" class="nav-link" data-section="mission">{{ __('site.nav.mission') }}</a></li>
                    <li><a href="#values" class="nav-link" data-section="values">{{ __('site.nav.values') }}</a></li>
                    <li><a href="#partners" class="nav-link" data-section="partners">{{ __('site.nav.partners') }}</a></li>
                    <li><a href="#donate" class="nav-link nav-donate-btn" data-section="donate">{{ __('site.nav.donate') }}</a></li>
                </ul>

                <!-- Language Switcher -->
                <div class="flex items-center gap-2 border-{{ app()->getLocale() === 'ar' ? 'r' : 'l' }} border-gray-300 {{ app()->getLocale() === 'ar' ? 'pr' : 'pl' }}-4">
                    <a href="{{ route('lang.switch', 'en') }}"
                       class="px-3 py-1 rounded-lg {{ app()->getLocale() === 'en' ? 'bg-[#61ce5b] text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }} transition-all font-medium text-sm">
                        EN
                    </a>
                    <a href="{{ route('lang.switch', 'ar') }}"
                       class="px-3 py-1 rounded-lg {{ app()->getLocale() === 'ar' ? 'bg-[#61ce5b] text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }} transition-all font-medium text-sm">
                        ع
                    </a>
                </div>
            </div>

            <!-- Mobile Menu Button -->
            <button class="mobile-menu-button" aria-label="{{ __('site.nav.home') }}" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <div class="nav-menu md:hidden">
        <ul class="flex flex-col gap-2">
            <li><a href="#main-content" class="nav-link" data-section="hero">{{ __('site.nav.home') }}</a></li>
            <li><a href="#introduction" class="nav-link" data-section="introduction">{{ __('site.nav.introduction') }}</a></li>
            <li><a href="#who-we-are" class="nav-link" data-section="who-we-are">{{ __('site.nav.who_we_are') }}</a></li>
            <li><a href="#vision" class="nav-link" data-section="vision">{{ __('site.nav.vision') }}</a></li>
            <li><a href="#mission" class="nav-link" data-section="mission">{{ __('site.nav.mission') }}</a></li>
            <li><a href="#values" class="nav-link" data-section="values">{{ __('site.nav.values') }}</a></li>
            <li><a href="#partners" class="nav-link" data-section="partners">{{ __('site.nav.partners') }}</a></li>
            <li><a href="#donate" class="nav-link nav-donate-btn" data-section="donate">{{ __('site.nav.donate') }}</a></li>

            <!-- Language Switcher Mobile -->
            <li class="flex gap-2 pt-4 border-t border-gray-200">
                <a href="{{ route('lang.switch', 'en') }}"
                   class="flex-1 text-center px-3 py-2 rounded-lg {{ app()->getLocale() === 'en' ? 'bg-[#61ce5b] text-white' : 'bg-gray-100 text-gray-700' }} transition-all font-medium">
                    English
                </a>
                <a href="{{ route('lang.switch', 'ar') }}"
                   class="flex-1 text-center px-3 py-2 rounded-lg {{ app()->getLocale() === 'ar' ? 'bg-[#61ce5b] text-white' : 'bg-gray-100 text-gray-700' }} transition-all font-medium">
                    عربي
                </a>
            </li>
        </ul>
    </div>
</nav>
