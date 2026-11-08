<?php get_header(); ?>
<!-- --><?php //include get_template_directory() . '/hero-alternative.php'; ?><!-- -->
<!-- --><?php //include get_template_directory() . '/hero-third.php'; ?><!-- -->
<!-- --><?php //include get_template_directory() . '/hero-showroom.php'; ?><!--  -->
<!-- --><?php //include get_template_directory() . '/hero-cultural.php'; ?><!-- -->
<?php //include get_template_directory() . '/hero-3d.php'; ?>
<?php include get_template_directory() . '/hero-new.php'; ?>
<main>

 
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

<?php  get_footer(); ?>
