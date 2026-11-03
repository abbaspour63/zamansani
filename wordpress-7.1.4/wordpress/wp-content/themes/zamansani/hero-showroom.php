
<section dir="rtl"
    class="relative overflow-hidden bg-[#F8F7F0] py-16 lg:py-24">

    <!-- Background decoration -->
    <div class="absolute -top-40 -left-40 w-96 h-96 bg-green-200/40 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-lime-100/50 rounded-full blur-3xl"></div>

    <div class="relative max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-2 gap-14 items-center">

            <!-- Right: Text -->
            <div class="relative z-10">

                <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full
                    bg-green-100 text-[#468432] text-sm font-semibold">

                    <span class="w-2 h-2 rounded-full bg-[#468432]"></span>
                    ZAMAN SANI SHOWROOM

                </div>

                <h1 class="mt-7 text-4xl md:text-5xl xl:text-6xl
                    font-black leading-[1.7] text-[#3D3D3D]">

                    تجربه حضور در بازار عراق،
                    <span class="text-[#468432]">
                        از قلب بصره
                    </span>

                </h1>

                <p class="mt-6 text-lg leading-9 text-gray-600 max-w-xl">

                    شوروم گروه بازاریابی زمان ثانی در شهر بصره؛
                    فضایی برای معرفی محصولات، توسعه ارتباطات تجاری
                    و ایجاد فرصت‌های جدید برای کسب‌وکارها.

                </p>

                <!-- Buttons -->
                <div class="flex flex-wrap gap-4 mt-9">

                    <a href="<?php echo esc_url(home_url('/contact/')); ?>"
                        class="px-8 py-4 bg-[#468432] text-white rounded-xl
                        font-bold shadow-lg shadow-green-900/20
                        hover:bg-green-800 hover:-translate-y-1
                        transition duration-300">

                        درخواست بازدید از شوروم

                    </a>

                    <a href="<?php echo esc_url(home_url('/services/')); ?>"
                        class="px-8 py-4 bg-white border border-gray-200
                        text-[#3D3D3D] rounded-xl font-bold
                        hover:border-[#468432] hover:text-[#468432]
                        transition duration-300">

                        آشنایی با خدمات

                    </a>

                </div>

                <!-- Location -->
                <div class="flex items-center gap-3 mt-10">

                    <div class="w-12 h-12 rounded-xl bg-green-100
                        flex items-center justify-center text-[#468432]">

                        <svg class="w-6 h-6" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">

                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="M12 21s7-5.5 7-12a7 7 0 10-14 0c0 6.5 7 12 7 12z"/>

                            <circle cx="12" cy="9" r="2.5"
                                stroke-width="1.8"/>

                        </svg>

                    </div>

                    <div>
                        <div class="text-sm text-gray-500">
                            موقعیت شوروم
                        </div>

                        <div class="font-bold text-[#3D3D3D] mt-1">
                            بصره، عراق
                        </div>
                    </div>

                </div>

            </div>


            <!-- Left: Showroom Visual -->
            <div class="relative showroom-scene">

                <!-- Main Image -->
                <div id="showroom-visual"
                    class="relative rounded-[30px] overflow-hidden
                    shadow-2xl shadow-green-950/20
                    border-[7px] border-white
                    aspect-[4/3]">

                    <img
                        src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/basrashowroom.webp'); ?>"
                        alt="شوروم گروه بازاریابی زمان ثانی در بصره عراق"
                        class="w-full h-full object-cover"
                        fetchpriority="high"
                        loading="eager">

                    <div class="absolute inset-0 bg-gradient-to-t
                        from-black/60 via-transparent to-transparent">
                    </div>

                    <!-- Image Caption -->
                    <div class="absolute bottom-6 right-6 left-6 text-white">

                        <div class="text-sm text-white/80">
                            ZAMAN SANI
                        </div>

                        <div class="text-2xl font-bold mt-2">
                            شوروم بصره
                        </div>

                    </div>

                </div>


                <!-- Floating Location Card -->
                <div class="absolute -top-7 right-5 md:-right-7
                    bg-white/90 backdrop-blur-xl border border-white
                    rounded-2xl shadow-xl p-5 showroom-float">

                    <div class="text-xs text-gray-500">
                        OUR LOCATION
                    </div>

                    <div class="flex items-center gap-2 mt-2">

                        <span class="text-2xl">📍</span>

                        <span class="font-bold text-[#468432]">
                            Basra, Iraq
                        </span>

                    </div>

                </div>


                <!-- Floating Showroom Card -->
                <div class="absolute -bottom-7 left-5 md:-left-7
                    bg-white/95 backdrop-blur-xl border border-white
                    rounded-2xl shadow-xl p-5 showroom-float-delay">

                    <div class="text-xs text-gray-500">
                        BUSINESS SHOWROOM
                    </div>

                    <div class="font-bold text-[#3D3D3D] mt-2">
                        ارتباط مستقیم با بازار عراق
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
