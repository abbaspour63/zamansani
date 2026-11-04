
<?php get_header(); ?>
<?php include get_template_directory() . '/hero-alternative.php'; ?>
 <?php include get_template_directory() . '/hero-third.php'; ?>
<?php include get_template_directory() . '/hero-showroom.php'; ?> 
<?php include get_template_directory() . '/hero-cultural.php'; ?>
<?php include get_template_directory() . '/hero-3d.php'; ?>
<main>

    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-gradient-to-bl from-white via-green-50 to-white">

        <div class="max-w-7xl mx-auto px-6 py-20 lg:py-28">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                <!-- Right: Content -->
                <div class="text-right relative z-10">

                    <span class="inline-block text-[#468432] bg-green-100 px-5 py-2 rounded-full text-sm font-semibold mb-6">
                        ZAMAN SANI | BUSINESS GROWTH
                    </span>

                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[#3D3D3D] leading-[1.7]">
                        توسعه کسب‌وکار شما،
                        <span class="text-[#468432]">
                            فراتر از مرزها
                        </span>
                    </h1>

                    <p class="text-gray-600 text-lg leading-9 mt-6 max-w-xl">
                        همراه شما در توسعه بازار، برندسازی و ایجاد فرصت‌های تجاری
                        در عراق و بازارهای بین‌المللی.
                    </p>

                    <div class="flex flex-wrap gap-4 mt-9">

                        <a href="<?php echo esc_url(home_url('/services/')); ?>"
                           class="bg-[#468432] text-white px-8 py-4 rounded-xl font-semibold hover:bg-green-800 hover:-translate-y-1 transition duration-300">
                            مشاهده خدمات
                        </a>

                        <a href="<?php echo esc_url(home_url('/contact/')); ?>"
                           class="border border-[#468432] text-[#468432] px-8 py-4 rounded-xl font-semibold hover:bg-green-50 transition duration-300">
                            درخواست مشاوره
                        </a>

                    </div>

                </div>

                <!-- Left: 3D Visual -->
                <div class="relative flex items-center justify-center min-h-[400px]">

                    <div class="globe-3d relative w-64 h-64 md:w-80 md:h-80 rounded-full
                        bg-gradient-to-br from-green-300 via-[#468432] to-green-950
                        shadow-2xl shadow-green-900/30">

                        <div class="absolute inset-5 rounded-full border border-white/30"></div>

                        <div class="absolute inset-0 rounded-full globe-lines"></div>

                        <div class="absolute inset-0 flex items-center justify-center text-white">
                            <svg viewBox="0 0 200 200" class="w-40 h-40 opacity-80" fill="none">
                                <circle cx="100" cy="100" r="75" stroke="white" stroke-width="2"/>
                                <ellipse cx="100" cy="100" rx="35" ry="75" stroke="white" stroke-width="2"/>
                                <path d="M25 100H175 M38 65H162 M38 135H162"
                                      stroke="white" stroke-width="2"/>
                            </svg>
                        </div>

                    </div>

                    <!-- Floating Card -->
                    <div class="absolute top-5 right-0 md:right-5 bg-white/90 backdrop-blur-lg
                        shadow-xl rounded-2xl p-5 animate-float">

                        <div class="text-sm text-gray-500">توسعه بازار</div>
                        <div class="text-xl font-bold text-[#468432] mt-2">
                            عراق و منطقه
                        </div>

                    </div>

                    <!-- Floating Card -->
                    <div class="absolute bottom-5 left-0 md:left-5 bg-white/90 backdrop-blur-lg
                        shadow-xl rounded-2xl p-5 animate-float-delay">

                        <div class="text-sm text-gray-500">رشد کسب‌وکار</div>
                        <div class="text-xl font-bold text-[#3D3D3D] mt-2">
                            فرصت‌های جدید
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


<!-- SERVICES SECTION -->
<section id="services" dir="rtl"
    class="bg-[#F4F5F0] px-5 md:px-8 py-20 md:py-28">

    <div class="max-w-7xl mx-auto">

        <!-- Heading -->
        <div class="mb-14">
            <span class="text-sm font-bold text-[#468432]">
                
            </span>

            <h2 class="mt-4 text-3xl md:text-5xl font-black text-[#30382E]">
                خدمات تخصصی
                <span class="text-[#468432]">زمان ثانی</span>
            </h2>

            <p class="mt-5 max-w-xl text-gray-500 leading-8">
                راهکارهای تجاری و بازاریابی برای توسعه کسب‌وکار
                و ایجاد فرصت‌های جدید در بازار ایران و عراق.
            </p>
        </div>

        <?php
        $services = [
            [
                'number' => '01',
                'title' => 'توسعه بازار عراق',
                'description' => 'بررسی بازار، شناسایی فرصت‌ها و کمک به ورود کسب‌وکارها به بازار عراق.',
                'icon' => 'building'
            ],
            [
                'number' => '02',
                'title' => 'بازاریابی و تبلیغات',
                'description' => 'معرفی برند، طراحی استراتژی بازاریابی و جذب مشتریان در بازار هدف.',
                'icon' => 'marketing'
            ],
            [
                'number' => '03',
                'title' => 'مشاوره تجاری',
                'description' => 'مشاوره برای توسعه کسب‌وکار، بررسی فرصت‌ها و همکاری‌های اقتصادی.',
                'icon' => 'business'
            ],
            [
                'number' => '04',
                'title' => 'شبکه‌سازی تجاری',
                'description' => 'ایجاد ارتباط میان شرکت‌ها، تولیدکنندگان و فعالان اقتصادی ایران و عراق.',
                'icon' => 'network'
            ],
        ];
        ?>

        <!-- Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-7">

            <?php foreach ($services as $service) : ?>

                <a href="<?php echo esc_url(home_url('/contact/')); ?>"
                   class="service-card group">

                    <div class="service-card-inner">

                        <div class="flex justify-between items-center">
                            <span class="text-xs font-bold tracking-widest text-gray-400">
                                SERVICE / <?php echo esc_html($service['number']); ?>
                            </span>

                            <span class="service-arrow">↗</span>
                        </div>

                        <div class="service-icon">

                            <?php if ($service['icon'] === 'building') : ?>
                                <svg viewBox="0 0 24 24" fill="none"
                                     stroke="currentColor" stroke-width="1.6">
                                    <path d="M3 21h18M5 21V7l7-4 7 4v14"/>
                                    <path d="M9 21v-5h6v5M9 9h.01M15 9h.01"/>
                                </svg>

                            <?php elseif ($service['icon'] === 'marketing') : ?>
                                <svg viewBox="0 0 24 24" fill="none"
                                     stroke="currentColor" stroke-width="1.6">
                                    <path d="M3 11l18-5-5 18-4-8-9-5z"/>
                                    <path d="M12 16l4-5"/>
                                </svg>

                            <?php elseif ($service['icon'] === 'business') : ?>
                                <svg viewBox="0 0 24 24" fill="none"
                                     stroke="currentColor" stroke-width="1.6">
                                    <path d="M12 3v18M3 7h18M5 7l-3 7h6L5 7z"/>
                                    <path d="M19 7l-3 7h6l-3-7zM7 21h10"/>
                                </svg>

                            <?php else : ?>
                                <svg viewBox="0 0 24 24" fill="none"
                                     stroke="currentColor" stroke-width="1.6">
                                    <circle cx="6" cy="6" r="3"/>
                                    <circle cx="18" cy="7" r="3"/>
                                    <circle cx="12" cy="18" r="3"/>
                                    <path d="M8.5 7.5l7-.5M7.5 8.5l3 7M16.5 9.5l-3 6"/>
                                </svg>
                            <?php endif; ?>

                        </div>

                        <div class="mt-7">
                            <h3 class="text-xl font-black text-[#30382E]">
                                <?php echo esc_html($service['title']); ?>
                            </h3>

                            <p class="mt-4 text-sm text-gray-500 leading-8">
                                <?php echo esc_html($service['description']); ?>
                            </p>
                        </div>

                        <div class="service-card-bottom">
                            <span>بیشتر بدانید</span>
                            <span class="service-line"></span>
                        </div>

                        <div class="service-decoration"></div>

                    </div>

                </a>

            <?php endforeach; ?>

        </div>

    </div>

</section>



</main>

<?php get_footer(); ?>
