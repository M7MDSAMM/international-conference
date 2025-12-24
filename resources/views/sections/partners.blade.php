<!-- ========== PARTNERS SECTION ========== -->
<section id="partners" class="py-16 relative overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0" aria-hidden="true">
        <img src="{{ asset('images/partner.png') }}" alt="" class="w-full h-full object-cover">
    </div>
    <!-- Light overlay for readability -->
    <div class="absolute inset-0 z-1 bg-white/90"></div>

    <div class="container mx-auto px-6 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-12 fade-in-on-scroll">
            <div class="inline-block px-6 py-2 bg-gradient-to-r from-[#61ce5b] to-[#cccc48] rounded-full mb-4">
                <span class="text-[#1a1a1a] font-bold">{{ __('site.partners.badge') }}</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold mb-3 text-[#1a1a1a]">
                {{ __('site.partners.title') }}
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                {{ __('site.partners.description') }}
            </p>
        </div>

        <!-- International Partners -->
        <div class="mb-12">
            <div class="flex items-center justify-center mb-6">
                <div class="h-px bg-gradient-to-r from-transparent via-[#cccc48] to-transparent flex-grow max-w-xs"></div>
                <h3 class="px-6 text-lg font-bold text-gray-700 en-text">{{ __('site.partners.international_title') }}</h3>
                <div class="h-px bg-gradient-to-r from-transparent via-[#cccc48] to-transparent flex-grow max-w-xs"></div>
            </div>

            <div class="flex flex-wrap justify-center items-center gap-3 max-w-5xl mx-auto">
                @foreach(__('site.partners.international_list') as $partner)
                <span class="px-4 py-2 bg-white border border-gray-200 rounded-lg text-gray-700 text-xs font-medium hover:border-[#61ce5b] hover:shadow-md transition-all @if(preg_match('/[a-zA-Z]/', $partner)) en-text @endif">{{ $partner }}</span>
                @endforeach
            </div>
        </div>

        <!-- Local Partners -->
        <div>
            <div class="flex items-center justify-center mb-6">
                <div class="h-px bg-gradient-to-r from-transparent via-[#61ce5b] to-transparent flex-grow max-w-xs"></div>
                <h3 class="px-6 text-lg font-bold text-gray-700">{{ __('site.partners.local_title') }}</h3>
                <div class="h-px bg-gradient-to-r from-transparent via-[#61ce5b] to-transparent flex-grow max-w-xs"></div>
            </div>

            <div class="flex flex-wrap justify-center items-center gap-3 max-w-4xl mx-auto">
                @foreach(__('site.partners.local_list') as $partner)
                <span class="px-4 py-2 bg-white border border-gray-200 rounded-lg text-gray-700 text-xs font-medium hover:border-[#cccc48] hover:shadow-md transition-all">{{ $partner }}</span>
                @endforeach
            </div>
        </div>
    </div>
</section>
