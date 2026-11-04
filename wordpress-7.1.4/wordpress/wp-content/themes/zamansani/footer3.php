
<?php $home = home_url('/'); ?>

<footer class="bg-[#F4F5F0] pt-5 px-4 md:px-8">

    <!-- Main Footer CTA -->
    <div class="relative overflow-hidden rounded-[30px] md:rounded-[50px]
                bg-[#468432] text-white">

        <!-- Decorative Circle -->
        <div class="absolute -top-40 -left-40 w-[500px] h-[500px]
                    border border-white/10 rounded-full"></div>

        <div class="absolute -top-20 -left-20 w-[350px] h-[350px]
                    border border-white/10 rounded-full"></div>

        <div class="relative z-10 px-7 py-16 md:px-16 md:py-24">

            <div class="flex items-center gap-3 text-sm text-white/70">
                <span class="w-2 h-2 bg-[#D8E9B5] rounded-full"></span>
                ZAMAN SANI · IRAN / BASRA
            </div>

            <!-- Large Typography -->
            <h2 class="mt-12 md:mt-16
                       text-5xl sm:text-7xl md:text-8xl
                       lg:text-[120px]
                       font-black tracking-tight leading-[1.05]">

                ارتباطی<br>

                <span class="text-[#D8E9B5]">فراتر</span>

                <span class="block md:inline"> از مرزها.</span>

            </h2>

            <div class="mt-12 md:mt-16 flex flex-col md:flex-row
                        justify-between items-start md:items-end gap-8">

                <p class="max-w-md text-base md:text-lg
                          text-white/80 leading-8">
                    از ایران تا بصره، همراه کسب‌وکارها
                    برای ساخت فرصت‌های تازه،
                    توسعه بازار و همکاری‌های پایدار.
                </p>

                <a href="<?php echo esc_url(home_url('/contact/')); ?>"
                   class="group flex items-center gap-5
                          bg-[#D8E9B5] text-[#253D20]
                          rounded-full px-7 py-4
                          font-bold hover:bg-white transition">

                    شروع یک همکاری

                    <span class="w-10 h-10 rounded-full bg-[#468432]
                                 text-white flex items-center justify-center
                                 group-hover:rotate-[-45deg] transition">
                        ↗
                    </span>

                </a>

            </div>

            <!-- Connection Graphic -->
            <div class="mt-20 md:mt-28 border-t border-white/20 pt-8
                        flex items-center justify-between">

                <span class="text-sm font-bold">ایران</span>

                <div class="flex-1 mx-5 relative">
                    <div class="border-t border-dashed border-white/50"></div>

                    <span class="absolute left-1/2 -translate-x-1/2
                                 -top-3 bg-[#468432] px-3 text-sm">
                        ✦
                    </span>
                </div>

                <span class="text-sm font-bold">بصره</span>

            </div>

        </div>
    </div>

    <!-- Bottom Footer -->
    <div class="bg-[#202620] text-white rounded-[30px] md:rounded-[50px]
                mt-5 overflow-hidden">

        <div class="px-7 py-12 md:px-16 md:py-16">

            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">

                <!-- Brand -->
                <div>
                    <a href="<?php echo esc_url($home); ?>"
                       class="text-4xl md:text-5xl font-black">
                        <!-- زمان<span class="text-[#83B96A]">ثانی </span> -->
                    </a>

                    <p class="mt-5 text-sm text-white/50 leading-7">
                        گروه بازاریابی زمان ثانی<br>
                        پل ارتباطی ایران و عراق
                    </p>
                </div>

                <!-- Links -->
                <div>
                    <p class="text-white/40 text-sm mb-6">دسترسی سریع</p>

                    <div class="grid grid-cols-2 gap-y-5 text-sm">

                        <a href="<?php echo esc_url($home); ?>"
                           class="hover:text-[#83B96A] transition">صفحه اصلی</a>

                        <a href="<?php echo esc_url(home_url('/about/')); ?>"
                           class="hover:text-[#83B96A] transition">درباره ما</a>

                        <a href="<?php echo esc_url(home_url('/services/')); ?>"
                           class="hover:text-[#83B96A] transition">خدمات</a>

                        <a href="<?php echo esc_url(home_url('/contact/')); ?>"
                           class="hover:text-[#83B96A] transition">تماس</a>

                    </div>
                </div>

                <!-- Contact -->
                <div>
                    <p class="text-white/40 text-sm mb-6">با ما در ارتباط باشید</p>

                    <a href="mailto:info@zamansani.com"
                       class="block text-lg md:text-xl hover:text-[#83B96A] transition">
                        info@zamansani.com
                    </a>

                    <a href="tel:+9647701234567"
                       dir="ltr"
                       class="inline-block mt-4 text-white/60
                                  hover:text-[#83B96A] transition">
                        +964 770 123 4567
                    </a>
                </div>

            </div>

            <!-- Huge Brand Text -->
            <div class="mt-16 md:mt-24 border-t border-white/10 pt-8">

                <div class="text-center font-black
                            text-[16vw] md:text-[14vw]
                            leading-none tracking-tighter
                            text-white/[0.04] select-none">
                    ZAMAN SANI
                </div>

            </div>

            <!-- Copyright -->
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

    </div>

</footer>

<?php wp_footer(); ?>

