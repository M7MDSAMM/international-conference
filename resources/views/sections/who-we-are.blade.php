<!-- ========== WHO WE ARE SECTION ========== -->
<section id="who-we-are" class="py-24 bg-gradient-to-br from-gray-50 to-gray-100">
    <div class="container mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Content - Left Side -->
            <div class="fade-in-on-scroll">
                <div class="inline-block px-6 py-2 bg-gradient-to-r from-[#cccc48] to-[#61ce5b] rounded-full mb-6">
                    <span class="text-[#1a1a1a] font-bold">{{ __('site.who_we_are.badge') }}</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-[#1a1a1a] mb-6 leading-tight">
                    {{ __('site.who_we_are.title') }}
                </h2>
                <div class="space-y-6 text-lg text-gray-700 leading-relaxed">
                    <p>{{ __('site.who_we_are.paragraph_1') }}</p>
                    <p>
                        {{ __('site.who_we_are.paragraph_2') }}
                        <span class="font-bold text-[#1a1a1a]">"{{ __('site.who_we_are.goal') }}"</span>
                        {{ __('site.who_we_are.paragraph_2_cont') }}
                    </p>
                    <p>
                        {{ __('site.who_we_are.paragraph_3') }}
                        <span class="font-bold text-[#1a1a1a]">"{{ __('site.who_we_are.alliance_name') }}"</span>
                        {{ __('site.who_we_are.paragraph_3_cont') }}
                    </p>
                    <p class="font-semibold text-[#1a1a1a]">
                        {{ __('site.who_we_are.paragraph_4') }}
                    </p>
                </div>
            </div>

            <!-- Image - Right Side -->
            <div class="fade-in-on-scroll">
                <div class="rounded-3xl overflow-hidden shadow-2xl hover-lift">
                    <img src="{{ asset('images/alliance.png') }}" alt="{{ __('site.who_we_are.title') }}" class="w-full h-full object-cover rounded-3xl" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>
