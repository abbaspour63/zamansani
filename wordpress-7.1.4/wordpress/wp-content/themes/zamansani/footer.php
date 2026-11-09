<?php $home = home_url('/'); ?>
<footer dir="rtl" class="bg-[#F4F5F0] px-3 md:px-6 pt-4 pb-3">


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

                        زمان<span class="text-[#83B96A]"> ثانی </span>

                    </a>

                    <p class="mt-5 text-sm text-white/50 leading-8">

                        گروه بازاریابی زمان ثانی<br>
                        پل ارتباطی ایران و عراق

                    </p>

                    <!-- Social -->
                    <!-- <div class="flex gap-3 mt-7">

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

                    </div> -->

                    <div class="flex gap-3 mt-7">

                        <!-- Instagram -->
                        <a href="https://instagram.com/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Instagram"
                            class="w-10 h-10 rounded-full border
              border-white/20 flex items-center
              justify-center text-white
              hover:bg-[#468432] transition">

                            <i class="fa-brands fa-instagram text-lg"></i>
                        </a>

                        <!-- LinkedIn -->
                        <a href="https://linkedin.com/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="LinkedIn"
                            class="w-10 h-10 rounded-full border
              border-white/20 flex items-center
              justify-center text-white
              hover:bg-[#468432] transition">

                            <i class="fa-brands fa-linkedin-in text-lg"></i>
                        </a>

                        <!-- Telegram -->
                        <a href="https://t.me/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Telegram"
                            class="w-10 h-10 rounded-full border
              border-white/20 flex items-center
              justify-center text-white
              hover:bg-[#468432] transition">

                            <i class="fa-brands fa-telegram text-lg"></i>
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