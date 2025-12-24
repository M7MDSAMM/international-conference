<!-- ========== MISSION SECTION ========== -->
<section id="mission" class="py-24 bg-gradient-to-br from-gray-50 to-gray-100">
    <div class="container mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Content - Left Side -->
            <div class="fade-in-on-scroll">
                <div class="inline-block px-6 py-2 bg-gradient-to-r from-[#cccc48] to-[#61ce5b] rounded-full mb-6">
                    <span class="text-[#1a1a1a] font-bold">{{ __('site.mission.badge') }}</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-[#1a1a1a] mb-6 leading-tight">
                    {{ __('site.mission.title') }}
                </h2>
                <div class="space-y-6 text-lg text-gray-700 leading-relaxed">
                    <p class="text-xl font-semibold text-[#1a1a1a] leading-relaxed">
                        {{ __('site.mission.description') }}
                    </p>
                    <div class="space-y-4">
                        @foreach(__('site.mission.goals') as $index => $goal)
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-8 h-8 bg-[{{ $index % 2 === 0 ? '#61ce5b' : '#cccc48' }}] rounded-full flex items-center justify-center">
                                <span class="text-[#1a1a1a] font-bold">✓</span>
                            </div>
                            <p>{{ $goal }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Image - Right Side -->
            <div class="fade-in-on-scroll">
                <div class="rounded-3xl overflow-hidden shadow-2xl hover-lift">
                    <img src="{{ asset('images/message.png') }}" alt="{{ __('site.mission.title') }}" class="w-full h-full object-cover rounded-3xl" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>
