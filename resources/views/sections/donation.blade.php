<!-- ========== DONATION SECTION ========== -->
<section id="donate" class="py-20 bg-white" aria-labelledby="donation-heading">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-12 fade-in-on-scroll">
                <div class="inline-block px-6 py-2 bg-gradient-to-r from-[#61ce5b] to-[#cccc48] rounded-full mb-4">
                    <span class="text-[#1a1a1a] font-bold">{{ __('site.donation.badge') }}</span>
                </div>
                <h2 id="donation-heading" class="text-3xl md:text-5xl font-bold mb-4 text-[#1a1a1a]">
                    {{ __('site.donation.title') }}
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    {{ __('site.donation.description') }}
                </p>
            </div>

            <!-- Donation Content - Centered -->
            <div class="max-w-3xl mx-auto">
                <!-- Bank Details -->
                <div class="fade-in-on-scroll">
                    <div class="bg-gradient-to-br from-gray-50 to-white p-10 rounded-3xl border-2 border-gray-200 shadow-2xl">
                        <h3 class="text-2xl font-bold text-[#1a1a1a] mb-6 flex items-center gap-3">
                            <span class="text-3xl">🏦</span>
                            {{ __('site.donation.bank_details') }}
                        </h3>

                        <!-- Bank Details Cards -->
                        <div class="space-y-4">
                            <!-- Bank Name -->
                            <div class="bg-white p-4 rounded-xl border border-gray-200 hover:border-[#61ce5b] transition-all group">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <p class="text-sm text-gray-500 mb-1">{{ __('site.donation.bank_name') }}</p>
                                        <p class="text-lg font-bold text-[#1a1a1a] en-text">QUDS BANK</p>
                                    </div>
                                    <button onclick="copyToClipboard('QUDS BANK', this)" class="px-3 py-2 bg-gray-100 hover:bg-[#61ce5b] hover:text-white rounded-lg transition-all text-sm font-medium" aria-label="{{ __('site.donation.copy') }}">
                                        {{ __('site.donation.copy') }}
                                    </button>
                                </div>
                            </div>

                            <!-- IBAN -->
                            <div class="bg-white p-4 rounded-xl border border-gray-200 hover:border-[#61ce5b] transition-all group">
                                <div class="flex justify-between items-center">
                                    <div class="flex-1">
                                        <p class="text-sm text-gray-500 mb-1">{{ __('site.donation.iban') }}</p>
                                        <p class="text-lg font-bold text-[#1a1a1a] en-text break-all">PS18ALDN0474030093800200100000</p>
                                    </div>
                                    <button onclick="copyToClipboard('PS18ALDN0474030093800200100000', this)" class="px-3 py-2 bg-gray-100 hover:bg-[#61ce5b] hover:text-white rounded-lg transition-all text-sm font-medium {{ app()->getLocale() === 'ar' ? 'mr-3' : 'ml-3' }}" aria-label="{{ __('site.donation.copy') }}">
                                        {{ __('site.donation.copy') }}
                                    </button>
                                </div>
                            </div>

                            <!-- Swift Code -->
                            <div class="grid grid-cols-2 gap-4">
                                <div class="bg-white p-4 rounded-xl border border-gray-200 hover:border-[#61ce5b] transition-all">
                                    <p class="text-sm text-gray-500 mb-1">{{ __('site.donation.swift') }}</p>
                                    <p class="text-lg font-bold text-[#1a1a1a] en-text">ALDNPS22</p>
                                </div>
                                <div class="bg-white p-4 rounded-xl border border-gray-200 hover:border-[#61ce5b] transition-all">
                                    <p class="text-sm text-gray-500 mb-1">{{ __('site.donation.branch') }}</p>
                                    <p class="text-lg font-bold text-[#1a1a1a] en-text">474</p>
                                </div>
                            </div>

                            <!-- Address -->
                            <div class="bg-white p-4 rounded-xl border border-gray-200 hover:border-[#61ce5b] transition-all">
                                <p class="text-sm text-gray-500 mb-1">{{ __('site.donation.address') }}</p>
                                <p class="text-lg font-bold text-[#1a1a1a]">{{ __('site.donation.address_value') }}</p>
                            </div>
                        </div>

                        <!-- Trust Badge -->
                        <div class="mt-6 p-4 bg-gradient-to-r from-[#61ce5b]/10 to-[#cccc48]/10 rounded-xl border border-[#61ce5b]/30">
                            <p class="text-sm text-gray-700 flex items-center gap-2">
                                <span class="text-xl">✓</span>
                                <span>{{ __('site.donation.trust_message') }}</span>
                            </p>
                        </div>

                        <!-- License Certificate Badge -->
                        <div class="mt-6 bg-white p-6 rounded-xl border-2 border-[#cccc48] shadow-lg">
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0">
                                    <div class="w-16 h-16 bg-gradient-to-br from-[#61ce5b] to-[#cccc48] rounded-full flex items-center justify-center">
                                        <span class="text-3xl">📜</span>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-lg font-bold text-[#1a1a1a] mb-3 flex items-center gap-2">
                                        {{ __('site.donation.certificate') }}
                                        <span class="inline-block px-2 py-1 bg-green-100 text-green-700 text-xs rounded-full">{{ __('site.donation.verified') }}</span>
                                    </h4>

                                    <!-- Bank Certificate Statement -->
                                    <div class="mb-4 p-4 bg-gray-50 rounded-lg border-{{ app()->getLocale() === 'ar' ? 'r' : 'l' }}-4 border-[#cccc48]">
                                        <p class="text-sm text-gray-700 leading-relaxed">
                                            {{ __('site.donation.certificate_text') }} <span class="font-bold text-[#1a1a1a]">NAFS EMPOWERMENT</span>
                                            {{ __('site.donation.registration_number') }} <span class="font-bold en-text">RA-22692-C</span>
                                            {{ __('site.donation.account_number') }} <span class="font-bold en-text">300938</span> {{ __('site.donation.details_follow') }}
                                        </p>
                                    </div>

                                    <div class="space-y-2 text-sm">
                                        <div class="flex items-center gap-2">
                                            <span class="font-semibold text-gray-700">{{ __('site.donation.entity') }}</span>
                                            <span class="text-gray-600 en-text">NAFS EMPOWERMENT</span>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <span class="font-semibold text-gray-700">{{ __('site.donation.registration') }}</span>
                                            <span class="text-gray-600 en-text font-mono">RA-22692-C</span>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <span class="font-semibold text-gray-700">{{ __('site.donation.account') }}</span>
                                            <span class="text-gray-600 en-text font-mono">300938</span>
                                        </div>
                                    </div>

                                    <div class="mt-4 pt-3 border-t border-gray-200">
                                        <p class="text-xs text-gray-500 flex items-center gap-1">
                                            <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                            </svg>
                                            <span>{{ __('site.donation.licensed') }}</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
