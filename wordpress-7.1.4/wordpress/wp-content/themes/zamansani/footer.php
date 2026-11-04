
<?php $home = home_url('/'); ?>

<footer dir="rtl" class="bg-[#F4F5F0] px-3 md:px-6 pt-4 pb-3">

    <!-- HERO FOOTER -->
    <section class="relative overflow-hidden rounded-[28px] md:rounded-[48px]
                    bg-[#468432] text-white">

        <!-- Background Decoration -->
        <div class="absolute -top-40 -left-40 w-[500px] h-[500px]
                    rounded-full border border-white/10"></div>

        <div class="absolute top-0 right-0 w-1/2 h-full
                    bg-gradient-to-l from-[#244D20]/70 to-transparent"></div>

        <div class="relative z-10 px-6 py-12 md:px-16 md:py-20">

            <div class="flex items-center gap-3 text-xs md:text-sm
                        text-white/70 tracking-widest">

                <span class="w-2 h-2 rounded-full bg-[#D8E9B5]"></span>

                ZAMAN SANI · IRAN / BASRA

            </div>

            <!-- Main Heading -->
            <h2 class="mt-12 md:mt-16
                       text-4xl sm:text-6xl md:text-8xl
                       lg:text-[110px]
                       font-black leading-tight tracking-tight">

                ارتباطی

                <span class="block text-[#D8E9B5]">
                    فراتر از مرزها.
                </span>

            </h2>

            <div class="mt-10 md:mt-14 flex flex-col md:flex-row
                        justify-between items-start md:items-end gap-8">

                <p class="max-w-lg text-sm md:text-lg
                          text-white/75 leading-8">

                    از ایران تا بصره، همراه کسب‌وکارها
                    برای ساخت فرصت‌های تازه،
                    توسعه بازار و همکاری‌های پایدار.

                </p>

                <a href="<?php echo esc_url(home_url('/contact/')); ?>"
                   class="group flex items-center gap-4
                          bg-[#D8E9B5] text-[#253D20]
                          rounded-full px-6 py-3
                          font-bold whitespace-nowrap
                          hover:bg-white transition duration-300">

                    شروع یک همکاری

                    <span class="w-11 h-11 rounded-full
                                 bg-[#468432] text-white
                                 flex items-center justify-center
                                 text-xl
                                 group-hover:-rotate-45
                                 transition duration-300">

                        ↗

                    </span>

                </a>

            </div>

            <!-- Iran / Basra Connection -->
            <div class="mt-16 md:mt-24
                        flex items-center justify-between">

                <span class="font-bold text-sm md:text-lg">
                    🇮🇷 ایران
                </span>

                <div class="flex-1 mx-4 relative">

                    <div class="border-t border-dashed
                                border-white/40"></div>

                    <span class="absolute left-1/2 -translate-x-1/2
                                 -top-5 w-10 h-10 rounded-full
                                 bg-[#D8E9B5] text-[#468432]
                                 flex items-center justify-center
                                 text-xl">

                        ✦

                    </span>

                </div>

                <span class="font-bold text-sm md:text-lg">
                    🇮🇶 بصره
                </span>

            </div>

        </div>

    </section>


    <!-- MAIN FOOTER -->
    <section class="mt-4 overflow-hidden
                    rounded-[28px] md:rounded-[48px]
                    bg-[#172019] text-white">

        <div class="px-6 py-12 md:px-16 md:py-16">

            <!-- Columns -->
            <div class="grid grid-cols-1 md:grid-cols-3
                        gap-12 md:gap-8">

                <!-- BRAND -->
                <div>

                    <a href="<?php echo esc_url($home); ?>"
                       class="inline-block text-4xl md:text-5xl
                              font-black tracking-tight">

                        زمان<span class="text-[#83B96A]">  ثانی  </span>

                    </a>

                    <p class="mt-5 text-sm text-white/50 leading-8">

                        گروه بازاریابی زمان ثانی<br>
                        پل ارتباطی ایران و عراق

                    </p>

                    <!-- Social -->
                    <div class="flex gap-3 mt-7">

                        <a href="#"
                           aria-label="Instagram"
                           class="w-10 h-10 rounded-full border
                                  border-white/20 flex items-center
                                  justify-center text-sm
                                  hover:bg-[#468432] transition">

                            
                        </a>

                        <a href="#"
                           aria-label="LinkedIn"
                           class="w-10 h-10 rounded-full border
                                  border-white/20 flex items-center
                                  justify-center text-sm
                                  hover:bg-[#468432] transition">

                            

                        </a>

                        <a href="#"
                           aria-label="Telegram"
                           class="w-10 h-10 rounded-full border
                                  border-white/20 flex items-center
                                  justify-center text-sm
                                  hover:bg-[#468432] transition">

                            

                        </a>

                    </div>

                </div>


                <!-- LINKS -->
                <div>

                    <p class="text-white/40 text-sm mb-7">
                        دسترسی سریع
                    </p>

                    <div class="grid grid-cols-2 gap-y-6 text-sm">

                        <a href="<?php echo esc_url($home); ?>"
                           class="hover:text-[#83B96A] transition">
                            صفحه اصلی
                        </a>

                        <a href="<?php echo esc_url(home_url('/about/')); ?>"
                           class="hover:text-[#83B96A] transition">
                            درباره ما
                        </a>

                        <a href="<?php echo esc_url(home_url('/services/')); ?>"
                           class="hover:text-[#83B96A] transition">
                            خدمات
                        </a>

                        <a href="<?php echo esc_url(home_url('/contact/')); ?>"
                           class="hover:text-[#83B96A] transition">
                            تماس
                        </a>

                    </div>

                </div>


                <!-- CONTACT -->
                <div>

                    <p class="text-white/40 text-sm mb-7">
                        با ما در ارتباط باشید
                    </p>

                    <a href="mailto:info@zamansani.com"
                       class="block text-lg md:text-xl
                              hover:text-[#83B96A] transition">

                        info@zamansani.com

                    </a>

                    <a href="tel:+9647701234567"
                       dir="ltr"
                       class="inline-block mt-5
                                  text-white/60
                                  hover:text-[#83B96A] transition">

                        +98917123456

                    </a>

                </div>

            </div>


            <!-- HUGE BRAND -->
            <div class="mt-16 md:mt-24
                        border-t border-white/10 pt-8">

                <div class="text-center font-black
                            text-[17vw] md:text-[14vw]
                            leading-none tracking-tighter
                            text-white/[0.035] select-none">

                    ZAMAN SANI

                </div>

            </div>


            <!-- COPYRIGHT -->
            <div class="flex flex-col md:flex-row
                        justify-between gap-4 mt-8
                        text-xs text-white/40">

                <span>
                    © <?php echo esc_html(date('Y')); ?> Zaman Sani
                </span>

                <span>
                    ایران × عراق — فرصت‌های بی‌مرز
                </span>

            </div>

        </div>

    </section>

</footer>

<?php wp_footer(); ?>
</body>
</html>