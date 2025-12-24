<!-- ========== INTRODUCTION SECTION ========== -->
<section id="introduction" class="py-24 bg-white" aria-labelledby="intro-heading">
    <div class="container mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Image - Left Side -->
            <div class="order-2 lg:order-1 fade-in-on-scroll">
                <div class="rounded-3xl overflow-hidden shadow-2xl hover-lift">
                    <img src="{{ asset('images/introduction.png') }}" alt="{{ __('site.introduction.title') }}" class="w-full h-full object-cover rounded-3xl" loading="lazy">
                </div>
            </div>

            <!-- Content - Right Side -->
            <div class="order-1 lg:order-2 fade-in-on-scroll">
                <div class="inline-block px-6 py-2 bg-gradient-to-r from-[#61ce5b] to-[#cccc48] rounded-full mb-6">
                    <span class="text-[#1a1a1a] font-bold">{{ __('site.introduction.badge') }}</span>
                </div>
                <h2 id="intro-heading" class="text-4xl md:text-5xl font-bold text-[#1a1a1a] mb-6 leading-tight">
                    {{ __('site.introduction.title') }}
                </h2>
                <div class="space-y-6 text-lg text-gray-700 leading-relaxed">
                    <p>{{ __('site.introduction.paragraph_1') }}</p>
                    <p>{{ __('site.introduction.paragraph_2') }}</p>
                    <p class="font-semibold text-[#1a1a1a]">
                        {{ __('site.introduction.paragraph_3') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
