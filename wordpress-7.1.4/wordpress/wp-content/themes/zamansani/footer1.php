
<?php

?>

<footer style="background-color: #252D27; color: white;"
        class="relative overflow-hidden">
    <!-- Basra decorative background -->
    <div class="pointer-events-none absolute inset-0 opacity-[0.08]">

        <svg viewBox="0 0 1200 450"
             class="absolute bottom-0 h-auto w-full"
             fill="none"
             xmlns="http://www.w3.org/2000/svg">

            <!-- River -->
            <path d="M0 340 C180 280 300 390 500 330 S850 280 1200 350"
                  stroke="#FFFFFF" stroke-width="4"/>

            <path d="M0 370 C180 310 300 420 500 360 S850 310 1200 380"
                  stroke="#FFFFFF" stroke-width="3"/>

            <!-- Basra skyline -->
            <path d="M100 320 V220 H145 V320
                     M160 320 V180 H205 V320
                     M220 320 V240 H270 V320
                     M300 320 V200 H350 V320
                     M380 320 V250 H430 V320"
                  stroke="#FFFFFF" stroke-width="3"/>

            <!-- Palm trees -->
            <g stroke="#FFFFFF" stroke-width="4" stroke-linecap="round">
                <path d="M900 330 Q910 230 900 130"/>
                <path d="M900 150 Q840 90 800 120"/>
                <path d="M900 150 Q950 80 1000 110"/>
                <path d="M900 150 Q870 60 850 45"/>
                <path d="M900 150 Q940 50 960 40"/>
                <path d="M900 150 Q820 130 790 170"/>
                <path d="M900 150 Q980 130 1020 170"/>
            </g>

            <!-- Traditional boat -->
            <path d="M520 300 Q620 350 720 300 L690 330 H550 Z"
                  stroke="#FFFFFF" stroke-width="3"/>
            <path d="M620 300 V210 L680 290 H620"
                  stroke="#FFFFFF" stroke-width="3"/>

        </svg>
    </div>

    <div class="relative mx-auto max-w-7xl px-6">

        <!-- Top section -->
        <div class="grid gap-12 border-b border-white/10 py-16 md:grid-cols-2 lg:grid-cols-4">

            <!-- Brand -->
            <div class="lg:col-span-1">

                <a href="<?php echo esc_url(home_url('/')); ?>"
                   class="mb-5 inline-block text-3xl font-black tracking-tight">

                    زمان <span class="text-[#72B65B]">ثانی</span>

                </a>

                <p class="mb-6 max-w-sm text-sm leading-8 text-gray-300">
                    گروه بازاریابی زمان ثانی؛ همراه کسب‌وکارها برای
                    حضور مؤثر، رشد و توسعه در بازار عراق و شهر بصره.
                </p>

                <div class="flex items-center gap-3 text-sm text-[#A8D394]">

                    <span class="flex h-9 w-9 items-center justify-center rounded-full bg-[#468432]/20">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="1.7">
                            <path d="M12 21s7-5.5 7-12a7 7 0 1 0-14 0c0 6.5 7 12 7 12Z"/>
                            <circle cx="12" cy="9" r="2.5"/>
                        </svg>
                    </span>

                    <span>بصره، عراق</span>

                </div>

            </div>

            <!-- Quick links -->
            <div>
                <h3 class="mb-6 text-lg font-bold">
                    دسترسی سریع
                </h3>

                <ul class="space-y-4 text-sm text-gray-300">

                    <li>
                        <a href="<?php echo esc_url(home_url('/')); ?>"
                           class="transition hover:text-[#A8D394]">
                            صفحه اصلی
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo esc_url(home_url('/about/')); ?>"
                           class="transition hover:text-[#A8D394]">
                            درباره ما
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo esc_url(home_url('/services/')); ?>"
                           class="transition hover:text-[#A8D394]">
                            خدمات ما
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo esc_url(home_url('/portfolio/')); ?>"
                           class="transition hover:text-[#A8D394]">
                            نمونه‌کارها
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>"
                           class="transition hover:text-[#A8D394]">
                            تماس با ما
                        </a>
                    </li>

                </ul>
            </div>

            <!-- Services -->
            <div>
                <h3 class="mb-6 text-lg font-bold">
                    خدمات ما
                </h3>

                <ul class="space-y-4 text-sm text-gray-300">

                    <li>
                        <a href="<?php echo esc_url(home_url('/services/branding/')); ?>"
                           class="transition hover:text-[#A8D394]">
                            برندینگ و هویت بصری
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo esc_url(home_url('/services/digital-marketing/')); ?>"
                           class="transition hover:text-[#A8D394]">
                           
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo esc_url(home_url('/services/seo/')); ?>"
                           class="transition hover:text-[#A8D394]">
                         
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo esc_url(home_url('/services/')); ?>"
                           class="transition hover:text-[#A8D394]">
                            مشاوره کسب‌وکار
                        </a>
                    </li>

                </ul>
            </div>

            <!-- Basra identity -->
            <div>
                <h3 class="mb-6 text-lg font-bold">
                    همراه شما در بصره
                </h3>

                <div class="mb-5 rounded-2xl border border-white/10 bg-white/5 p-5">

                    <div class="mb-3 flex items-center gap-3">
                        <span class="text-3xl">🌴</span>
                        <span class="font-bold text-[#A8D394]">
                            از قلب جنوب عراق
                        </span>
                    </div>

                    <p class="text-sm leading-7 text-gray-300">
                        شناخت بازار محلی، ارتباطات تجاری و
                        فرصت‌های رشد در بصره.
                    </p>

                </div>

                <!-- <a href="<?php echo esc_url(home_url('/contact/')); ?>"
                   class="inline-flex items-center gap-2 rounded-xl bg-[#468432] px-5 py-3 text-sm font-bold transition hover:bg-[#579C40]">

                    ارتباط با ما

                    <span aria-hidden="true">←</span>

                </a> -->
            </div>

        </div>

        <!-- Basra visual strip -->
        <div class="relative flex flex-col items-center justify-between gap-4 border-b border-white/10 py-7 sm:flex-row">

            

            <div class="flex items-center gap-4 text-2xl opacity-80">
                <!-- <span title="نخل‌های بصره">🌴</span>
                <span title="رودخانه">🌊</span>
                <span title="قایق سنتی">⛵</span>
                <span title="معماری">🏙️</span> -->
            </div>

        </div>

        <!-- Bottom -->
        <div class="flex flex-col items-center justify-between gap-4 py-6 text-center sm:flex-row">

            <p class="text-xs text-gray-400">
                © <?php echo esc_html(wp_date('Y')); ?>
                تمامی حقوق برای گروه بازاریابی زمان ثانی محفوظ است.
            </p>

            <p class="text-xs text-gray-500">
                <!-- طراحی و توسعه با ❤️ -->
            </p>

        </div>

    </div>

</footer>

<?php wp_footer(); ?>

</body>
</html>
