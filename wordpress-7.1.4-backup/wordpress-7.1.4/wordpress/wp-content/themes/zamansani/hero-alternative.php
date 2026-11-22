
<section class="relative overflow-hidden bg-[#F7FAF5] py-20 lg:py-28" dir="rtl">

    <!-- Background decoration -->
    <div class="absolute -top-32 -left-32 w-96 h-96 bg-green-200/40 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-80 h-80 bg-lime-100/50 rounded-full blur-3xl"></div>

    <div class="relative max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-2 gap-16 items-center">

            <!-- Content -->
            <div class="relative z-10">

                <span class="inline-flex items-center gap-2 bg-green-100 text-[#468432] px-5 py-2 rounded-full text-sm font-semibold">
                    <span class="w-2 h-2 rounded-full bg-[#468432]"></span>
                    گروه بازاریابی زمان ثانی
                </span>

                <h1 class="mt-7 text-4xl md:text-5xl xl:text-6xl font-black leading-[1.6] text-[#3D3D3D]">
                    آینده کسب‌وکار خود را
                    <span class="text-[#468432]">هوشمندانه</span>
                    بسازید
                </h1>

                <p class="mt-6 text-lg leading-9 text-gray-600 max-w-xl">
                    با راهکارهای تخصصی توسعه بازار، بازاریابی و برندسازی،
                    مسیر ورود و رشد کسب‌وکار خود را در بازار عراق هموار کنید.
                </p>

                <div class="flex flex-wrap gap-4 mt-9">

                    <a href="<?php echo esc_url(home_url('/services/')); ?>"
                       class="bg-[#468432] text-white px-8 py-4 rounded-xl shadow-lg shadow-green-800/20 hover:-translate-y-1 hover:bg-green-800 transition">
                        مشاهده خدمات
                    </a>

                    <a href="<?php echo esc_url(home_url('/contact/')); ?>"
                       class="bg-white border border-gray-200 text-[#3D3D3D] px-8 py-4 rounded-xl hover:border-[#468432] hover:text-[#468432] transition">
                        مشاوره با کارشناسان
                    </a>

                </div>

            </div>

            <!-- 3D Business Scene -->
            <div class="relative min-h-[450px] flex items-center justify-center">

                <!-- Main 3D platform -->
                <div class="relative w-full max-w-lg h-[370px]">

                    <div class="absolute bottom-12 left-1/2 -translate-x-1/2
                        w-72 h-36 bg-gradient-to-br from-green-500 to-green-900
                        rounded-[35px] shadow-2xl rotate-[-12deg]">
                    </div>

                    <!-- 3D Buildings -->
                    <div class="absolute bottom-28 left-[24%] w-20 h-44
                        bg-gradient-to-br from-white to-green-100
                        rounded-xl shadow-xl border border-white rotate-[-8deg]">

                        <div class="grid grid-cols-2 gap-2 p-3">
                            <?php for ($i = 0; $i < 8; $i++) : ?>
                                <span class="h-5 bg-green-300/70 rounded-sm"></span>
                            <?php endfor; ?>
                        </div>
                    </div>

                    <div class="absolute bottom-28 right-[22%] w-24 h-56
                        bg-gradient-to-br from-green-300 to-green-700
                        rounded-xl shadow-2xl rotate-[8deg]">

                        <div class="grid grid-cols-2 gap-2 p-3">
                            <?php for ($i = 0; $i < 10; $i++) : ?>
                                <span class="h-5 bg-white/50 rounded-sm"></span>
                            <?php endfor; ?>
                        </div>
                    </div>

                    <!-- Growth chart -->
                    <div class="absolute top-3 right-4 bg-white/90 backdrop-blur-xl
                        border border-white p-5 rounded-2xl shadow-xl animate-float">

                        <div class="text-xs text-gray-500">مسیر توسعه بازار</div>

                        <div class="text-2xl font-black text-[#468432] mt-2">
                            Growth
                        </div>

                        <svg viewBox="0 0 180 65" class="w-40 mt-2">
                            <path d="M5 55 L40 42 L75 48 L110 20 L145 25 L175 5"
                                stroke="#468432" stroke-width="4"
                                fill="none" stroke-linecap="round"
                                stroke-linejoin="round"/>
                        </svg>

                    </div>

                    <!-- Floating globe -->
                    <div class="absolute top-16 left-8 w-24 h-24 rounded-full
                        bg-gradient-to-br from-green-300 via-[#468432] to-green-950
                        shadow-xl flex items-center justify-center
                        text-white text-3xl animate-float-delay">
                        <span>🌐</span>
                    </div>

                    <!-- Bottom card -->
                    <div class="absolute bottom-0 right-4 bg-white shadow-xl
                        rounded-2xl px-5 py-4 animate-float">

                        <div class="text-xs text-gray-500">بازار هدف</div>
                        <div class="font-bold text-[#3D3D3D] mt-1">
                            عراق و خاورمیانه
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
