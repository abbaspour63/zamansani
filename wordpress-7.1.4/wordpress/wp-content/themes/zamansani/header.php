<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="rtl">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- Top Bar -->
    <div class="bg-[#3D3D3D] text-white text-sm">

        <div class="max-w-7xl mx-auto px-6 py-3 flex justify-between items-center">
            <div class="flex items-center gap-4">

                <div class="ticker-wrapper">
                    <span class="ticker-text">
                        گروه بازاریابی زمان ثانی | همراه رشد کسب‌وکار شما
                    </span>
                </div>

                <!-- <span class="text-gray-400">|</span>
                <span>با ما در ارتباط باشید</span> -->
            </div>

            <a href="tel:09177242498"
                class="flex items-center gap-6 hover:text-[#468432] transition">
                <span></span>
                <span>09177242498</span>
            </a>

            <!-- Social Media -->
            <div class="flex items-center gap-3">

                <!-- Instagram -->
                <a href="https://instagram.com/"
                    target="_blank"
                    rel="noopener noreferrer"
                    aria-label="Instagram"
                    class="hover:text-[#468432] transition">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M7 2C4.24 2 2 4.24 2 7v10c0 2.76 2.24 5 5 5h10c2.76 0 5-2.24 5-5V7c0-2.76-2.24-5-5-5H7zm0 2h10c1.66 0 3 1.34 3 3v10c0 1.66-1.34 3-3 3H7c-1.66 0-3-1.34-3-3V7c0-1.66 1.34-3 3-3zm10.5 1a1.5 1.5 0 100 3 1.5 1.5 0 000-3zM12 7a5 5 0 100 10 5 5 0 000-10zm0 2a3 3 0 110 6 3 3 0 010-6z" />
                    </svg>
                </a>

                <!-- Telegram -->
                <a href="https://t.me/"
                    target="_blank"
                    rel="noopener noreferrer"
                    aria-label="Telegram"
                    class="hover:text-[#468432] transition">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M21.94 4.34a1.5 1.5 0 00-1.56-.22L2.78 11.3a1.5 1.5 0 00.13 2.8l4.37 1.45 1.72 4.2a1.5 1.5 0 002.57.24l2.4-3.1 4.2 3.1a1.5 1.5 0 002.35-.92l2.15-13.2a1.5 1.5 0 00-.73-1.53zM9.4 14.85l8.3-7.1-6.8 8.4-.22 2.05-1.28-3.35z" />
                    </svg>
                </a>

                <!-- WhatsApp -->
                <a href="https://wa.me/"
                    target="_blank"
                    rel="noopener noreferrer"
                    aria-label="WhatsApp"
                    class="hover:text-[#468432] transition">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2a10 10 0 00-8.67 15L2 22l5.18-1.36A10 10 0 1012 2zm0 2a8 8 0 016.93 12 8 8 0 01-10.7 2.12l-.3-.18-3.08.81.82-3-.2-.31A8 8 0 0112 4zm-3.1 4c-.22 0-.58.08-.88.4-.3.32-1.15 1.12-1.15 2.73s1.18 3.17 1.35 3.4c.17.23 2.3 3.68 5.68 5.02 2.8 1.1 3.37.88 3.98.82.61-.06 1.97-.8 2.25-1.57.28-.77.28-1.43.2-1.57-.08-.14-.3-.22-.63-.39-.33-.17-1.97-.97-2.27-1.08-.3-.11-.52-.17-.74.17-.22.34-.85 1.08-1.04 1.3-.19.22-.38.25-.71.08-.33-.17-1.4-.52-2.67-1.66-.99-.88-1.66-1.97-1.85-2.3-.19-.33-.02-.51.14-.67.15-.15.33-.39.5-.58.17-.2.22-.33.33-.55.11-.22.05-.42-.03-.58-.08-.17-.74-1.78-1.02-2.44-.27-.63-.54-.55-.74-.56z" />
                    </svg>
                </a>

            </div>

        </div>
    </div>

    <!-- Main Header -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 py-4">

            <div dir="rtl" class="flex items-center justify-between gap-8">

                <!-- Logo -->
                <a href="<?php echo esc_url(home_url('/')); ?>"
                    class="shrink-0 flex items-center">
                    <?php if (has_custom_logo()) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <span class="text-2xl font-bold text-[#3D3D3D]">
                            زمان <span class="text-[#468432]">ثانی</span>
                        </span>
                    <?php endif; ?>
                </a>


                <!-- Main Navigation -->
                <nav class="hidden md:flex items-center gap-7 text-[#3D3D3D] font-medium">

                    <a href="<?php echo esc_url(home_url('/')); ?>"
                        class="hover:text-[#468432] transition">
                        خانه
                    </a>

                    <!-- Services Dropdown -->
                    <div class="relative group">

                        <button type="button"
                            class="flex items-center gap-1 hover:text-[#468432] transition">
                            خدمات
                            <svg class="w-4 h-4 group-hover:rotate-180 transition-transform"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m6 9 6 6 6-6" />
                            </svg>
                        </button>

                        <div class="absolute right-0 top-full pt-3 w-60
                    opacity-0 invisible translate-y-2
                    group-hover:opacity-100 group-hover:visible
                    group-hover:translate-y-0 transition-all duration-200">

                            <div class="bg-white rounded-xl shadow-xl border border-gray-100 p-2">

                                <a href="<?php echo esc_url(home_url('/services/')); ?>"
                                    class="block px-4 py-3 rounded-lg hover:bg-green-50 hover:text-[#227208]">
                                    توسعه بازار در کشور عراق
                                </a>

                                <a href="<?php echo esc_url(home_url('/services/branding/')); ?>"
                                    class="block px-4 py-3 rounded-lg hover:bg-green-50 hover:text-[#468432]">
                                    شوروم بصره
                                </a>

                                <a href="<?php echo esc_url(home_url('/services/digital-marketing/')); ?>"
                                    class="block px-4 py-3 rounded-lg hover:bg-green-50 hover:text-[#468432]">
                                    بازاریابی تلفنی در عراق
                                </a>

                                <a href="<?php echo esc_url(home_url('/services/seo/')); ?>"
                                    class="block px-4 py-3 rounded-lg hover:bg-green-50 hover:text-[#468432]">
                                    دیجیتال مارکتینگ در عراق
                                </a>

                                <a href="<?php echo esc_url(home_url('/services/seo/')); ?>"
                                    class="block px-4 py-3 rounded-lg hover:bg-green-50 hover:text-[#468432]">
                                    تحقیقات بازار در عراق
                                </a>


                            </div>
                        </div>
                    </div>

                    <!-- Portfolio Dropdown -->
                    <div class="relative group">

                        <button type="button"
                            class="flex items-center gap-1 hover:text-[#468432] transition">
                            ارتباط با ما
                            <svg class="w-4 h-4 group-hover:rotate-180 transition-transform"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m6 9 6 6 6-6" />
                            </svg>
                        </button>

                        <div class="absolute right-0 top-full pt-3 w-56
                    opacity-0 invisible translate-y-2
                    group-hover:opacity-100 group-hover:visible
                    group-hover:translate-y-0 transition-all duration-200">

                            <div class="bg-white rounded-xl shadow-xl border border-gray-100 p-2">

                                <a href="<?php echo esc_url(home_url('/portfolio/')); ?>"
                                    class="block px-4 py-3 rounded-lg hover:bg-green-50 hover:text-[#27790c]">
                                    درباره ما
                                </a>

                                <a href="<?php echo esc_url(home_url('/portfolio/branding/')); ?>"
                                    class="block px-4 py-3 rounded-lg hover:bg-green-50 hover:text-[#468432]">
                                    تماس با ما
                                </a>

                                <a href="<?php echo esc_url(home_url('/portfolio/web-design/')); ?>"
                                    class="block px-4 py-3 rounded-lg hover:bg-green-50 hover:text-[#468432]">
                                    استخدام
                                </a>

                            </div>
                        </div>
                    </div>

                    <!-- <a href="<?php echo esc_url(home_url('/about/')); ?>"
                        class="hover:text-[#468432] transition">
                        درباره ما
                    </a>

                    <a href="<?php echo esc_url(home_url('/blog/')); ?>"
                        class="hover:text-[#468432] transition">
                       تماس با ما
                    </a>

                    <a href="<?php echo esc_url(home_url('/contact/')); ?>"
                        class="hover:text-[#468432] transition">
                     استخدام
                    </a> -->



                </nav>




                <button
                    id="mobile-menu-button"
                    type="button"
                    aria-expanded="false"
                    aria-controls="mobile-menu"
                    class="md:hidden p-2">
                    ☰
                </button>

                <!-- CTA -->
                <a href="<?php echo esc_url(home_url('/login/')); ?>"
                    class="bg-[#468432] text-white px-5 py-3 rounded-xl
                      hover:bg-green-800 transition text-sm font-semibold
                      whitespace-nowrap">
                    ورود / ثبت‌نام
                </a>

            </div>
        </div>
    </header>
    <div id="mobile-menu" class="hidden md:hidden bg-white border-t">
    <nav class="flex flex-col p-5 gap-4">

        <a href="<?php echo esc_url(home_url('/')); ?>">
            خانه
        </a>

        <a href="<?php echo esc_url(home_url('/services/')); ?>">
            خدمات
        </a>

        <a href="<?php echo esc_url(home_url('/portfolio/')); ?>">
           
        </a>

        <a href="<?php echo esc_url(home_url('/about/')); ?>">
            درباره ما
        </a>

        <a href="<?php echo esc_url(home_url('/contact/')); ?>">
            تماس با ما
        </a>

    </nav>
</div>