
<section dir="rtl" class="relative overflow-hidden bg-[#F8F7F0] py-20 lg:py-28">

    <div class="absolute -top-40 -right-40 w-[500px] h-[500px] rounded-full bg-green-200/30 blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 rounded-full bg-yellow-100/50 blur-3xl"></div>

    <div class="relative max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-2 gap-12 items-center">

            <!-- Text -->
            <div class="relative z-10">

                <span class="inline-flex items-center gap-3 text-[#468432] font-semibold text-sm">
                    <span class="w-10 h-[2px] bg-[#468432]"></span>
                    ZAMAN SANI INTERNATIONAL BUSINESS
                </span>

                <h1 class="mt-8 text-4xl md:text-5xl xl:text-6xl font-black leading-[1.7] text-[#3D3D3D]">
                    فرصت‌های تجاری
                    <span class="text-[#468432]">بدون مرز</span>
                    برای آینده‌ای بزرگ‌تر
                </h1>

                <p class="mt-6 text-gray-600 text-lg leading-9 max-w-xl">
                    از شناخت بازار عراق تا توسعه برند و ایجاد ارتباطات تجاری،
                    در تمام مراحل رشد کسب‌وکار در کنار شما هستیم.
                </p>

                <div class="flex flex-wrap gap-4 mt-9">

                    <a href="<?php echo esc_url(home_url('/services/')); ?>"
                       class="px-8 py-4 rounded-xl bg-[#468432] text-white font-bold shadow-xl shadow-green-900/20 hover:bg-green-800 hover:-translate-y-1 transition">
                        شروع همکاری
                    </a>

                    <a href="<?php echo esc_url(home_url('/contact/')); ?>"
                       class="px-8 py-4 rounded-xl border border-gray-300 text-[#3D3D3D] font-bold hover:border-[#468432] hover:text-[#468432] transition">
                        تماس با ما
                    </a>

                </div>

                <div class="flex gap-8 mt-12 border-t border-gray-200 pt-7">

                    <div>
                        <div class="text-2xl font-black text-[#468432]">B2B</div>
                        <div class="text-sm text-gray-500 mt-1">توسعه تجارت</div>
                    </div>

                    <div>
                        <div class="text-2xl font-black text-[#468432]">Market</div>
                        <div class="text-sm text-gray-500 mt-1">تحقیقات بازار</div>
                    </div>

                    <div>
                        <div class="text-2xl font-black text-[#468432]">Brand</div>
                        <div class="text-sm text-gray-500 mt-1">توسعه برند</div>
                    </div>

                </div>

            </div>

            <!-- 3D Visual -->
            <div class="relative min-h-[470px] flex items-center justify-center">

                <!-- Orbital rings -->
                <div class="absolute w-[390px] h-[390px] rounded-full border border-green-700/20 rotate-45"></div>
                <div class="absolute w-[320px] h-[420px] rounded-full border border-[#468432]/20 -rotate-45"></div>

                <!-- Main globe -->
                <div class="relative w-64 h-64 md:w-80 md:h-80 rounded-full
                    bg-gradient-to-br from-green-300 via-[#468432] to-green-950
                    shadow-[0_35px_80px_rgba(35,90,40,0.3)]
                    flex items-center justify-center animate-globe">

                    <div class="absolute inset-5 rounded-full border border-white/30"></div>

                    <svg viewBox="0 0 200 200" class="w-48 h-48 text-white/70" fill="none">
                        <circle cx="100" cy="100" r="75" stroke="currentColor" stroke-width="2"/>
                        <ellipse cx="100" cy="100" rx="35" ry="75" stroke="currentColor" stroke-width="2"/>
                        <path d="M25 100H175 M35 65H165 M35 135H165"
                            stroke="currentColor" stroke-width="2"/>
                        <path d="M50 45L150 155 M150 45L50 155"
                            stroke="currentColor" stroke-width="1" opacity=".4"/>
                    </svg>

                    <div class="absolute -top-3 right-10 w-5 h-5 rounded-full bg-yellow-400 shadow-lg shadow-yellow-400/50"></div>

                </div>

                <!-- Floating business card -->
                <div class="absolute top-8 right-0 md:right-4 bg-white/80 backdrop-blur-xl border border-white shadow-2xl rounded-2xl p-5 animate-float">

                    <div class="text-xs text-gray-500">International Business</div>

                    <div class="font-bold text-[#468432] text-xl mt-2">
                        Global Network
                    </div>

                    <div class="flex gap-1 mt-3">
                        <span class="w-8 h-1 rounded bg-green-700"></span>
                        <span class="w-5 h-1 rounded bg-green-400"></span>
                        <span class="w-3 h-1 rounded bg-green-200"></span>
                    </div>

                </div>

                <!-- Floating market card -->
                <div class="absolute bottom-10 left-0 md:left-2 bg-white/90 backdrop-blur-xl border border-white shadow-2xl rounded-2xl p-5 animate-float-delay">

                    <div class="text-xs text-gray-500">Target Market</div>

                    <div class="flex items-center gap-3 mt-2">
                        <span class="text-3xl">📍</span>
                        <div class="font-bold text-[#3D3D3D]">
                            Basra · Iraq
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
