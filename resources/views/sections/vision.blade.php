<!-- ========== VISION SECTION ========== -->
<section id="vision" class="py-24 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Image - Left Side -->
            <div class="order-2 lg:order-1 fade-in-on-scroll">
                <div class="rounded-3xl overflow-hidden shadow-2xl hover-lift">
                    <img src="{{ asset('images/vision.png') }}" alt="{{ __('site.vision.title') }}" class="w-full h-full object-cover rounded-3xl" loading="lazy">
                </div>
            </div>

            <!-- Content - Right Side -->
            <div class="order-1 lg:order-2 fade-in-on-scroll">
                <div class="inline-block px-6 py-2 bg-gradient-to-r from-[#61ce5b] to-[#cccc48] rounded-full mb-6">
                    <span class="text-[#1a1a1a] font-bold">{{ __('site.vision.badge') }}</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-[#1a1a1a] mb-6 leading-tight">
                    {{ __('site.vision.title') }}
                </h2>
                <div class="space-y-6 text-lg text-gray-700 leading-relaxed">
                    <p class="text-xl font-semibold text-[#1a1a1a] leading-relaxed">
                        {{ __('site.vision.description') }}
                    </p>
                </div>

                <!-- Vision highlights -->
                <div class="mt-10 grid grid-cols-2 gap-6">
                    <div class="bg-gradient-to-br from-[#61ce5b]/20 to-[#cccc48]/20 p-6 rounded-2xl">
                        <div class="text-4xl mb-3">🌱</div>
                        <h3 class="font-bold text-[#1a1a1a] mb-2">{{ __('site.vision.highlights.recovery.title') }}</h3>
                        <p class="text-sm text-gray-600">{{ __('site.vision.highlights.recovery.description') }}</p>
                    </div>
                    <div class="bg-gradient-to-br from-[#cccc48]/20 to-[#61ce5b]/20 p-6 rounded-2xl">
                        <div class="text-4xl mb-3">💪</div>
                        <h3 class="font-bold text-[#1a1a1a] mb-2">{{ __('site.vision.highlights.empowerment.title') }}</h3>
                        <p class="text-sm text-gray-600">{{ __('site.vision.highlights.empowerment.description') }}</p>
                    </div>
                    <div class="bg-gradient-to-br from-[#61ce5b]/20 to-[#cccc48]/20 p-6 rounded-2xl">
                        <div class="text-4xl mb-3">🕊️</div>
                        <h3 class="font-bold text-[#1a1a1a] mb-2">{{ __('site.vision.highlights.peace.title') }}</h3>
                        <p class="text-sm text-gray-600">{{ __('site.vision.highlights.peace.description') }}</p>
                    </div>
                    <div class="bg-gradient-to-br from-[#cccc48]/20 to-[#61ce5b]/20 p-6 rounded-2xl">
                        <div class="text-4xl mb-3">🏗️</div>
                        <h3 class="font-bold text-[#1a1a1a] mb-2">{{ __('site.vision.highlights.future.title') }}</h3>
                        <p class="text-sm text-gray-600">{{ __('site.vision.highlights.future.description') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
