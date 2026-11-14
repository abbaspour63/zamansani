<?php
$process_steps = [
    [
        'number' => '۰۱',
        'icon' => '💬',
        'title' => 'مشاوره رایگان ',
        'description' => 'آشنایی با خدمات شوروم، شرایط همکاری و فرصت‌های معرفی محصولات.',
    ],
    [
        'number' => '۰۲',
        'icon' => '📋',
        'title' => 'تکمیل و ارسال فرم پذیرش',
        'description' => 'تکمیل فرم درخواست پذیرش و بررسی اولیه توسط هیئت داوری جهت استقرار در شوروم.',
    ],
    [
        'number' => '۰۳',
        'icon' => '📦',
        'title' => 'ارسال نمونه کالا و بررسی',
        'description' => 'ارسال نمونه محصولات و ارزیابی کیفیت و شرایط پذیرش توسط هیئت داوری.',
    ],
    [
        'number' => '۰۴',
        'icon' => '📍',
        'title' => 'انتخاب مکان موردنظر',
        'description' => 'انتخاب مکان مناسب برای معرفی و نمایش محصولات در شوروم.',
    ],
    [
        'number' => '۰۵',
        'icon' => '🏬',
        'title' => 'استقرار محصولات در شوروم',
        'description' => 'استقرار نمونه کالاها در شوروم زمان ثانی و آغاز معرفی محصولات به بازار هدف.',
    ],
];
?>

<section id="our-process"
    class="zs-process relative overflow-hidden bg-white py-24">

    <div class="mx-auto max-w-6xl px-6 lg:px-8">

        <!-- Header -->
        <div class="mb-20 text-center">

            <span class="mb-4 inline-block text-sm font-bold tracking-widest text-[#468432]">
                
            </span>

            <h2 class="mb-6 text-3xl font-extrabold leading-relaxed text-[#3D3D3D] md:text-5xl">
                مراحل همکاری با
                <span class="text-[#468432]">شوروم زمان ثانی</span>
            </h2>

            <p class="mx-auto max-w-2xl text-base leading-9 text-gray-500">
                از مشاوره رایگان تا استقرار محصولات؛
                مسیر همکاری شما در پنج مرحله مشخص.
            </p>

        </div>

        <!-- Timeline -->
        <div class="zs-timeline relative">

            <?php foreach ($process_steps as $index => $step) : ?>

                <div class="zs-timeline__item">

                    <!-- Timeline Marker -->
                    <div class="zs-timeline__marker">
                        <span>
                            <?php echo esc_html($step['number']); ?>
                        </span>
                    </div>

                    <!-- Content -->
                    <div class="zs-timeline__content">

                        <div class="zs-timeline__icon">
                            <?php echo esc_html($step['icon']); ?>
                        </div>

                        <span class="zs-timeline__step">
                            STEP <?php echo esc_html($step['number']); ?>
                        </span>

                        <h3>
                            <?php echo esc_html($step['title']); ?>
                        </h3>

                        <p>
                            <?php echo esc_html($step['description']); ?>
                        </p>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

        <!-- CTA -->
        <div class="mt-16 text-center">

            <a href="<?php echo esc_url(home_url('/recruitment/')); ?>"
               class="inline-flex items-center gap-3 rounded-xl bg-[#468432] px-8 py-4 font-bold text-white transition hover:bg-[#356726]">

                شروع فرآیند پذیرش

                <span aria-hidden="true">←</span>

            </a>

        </div>

    </div>

</section>
