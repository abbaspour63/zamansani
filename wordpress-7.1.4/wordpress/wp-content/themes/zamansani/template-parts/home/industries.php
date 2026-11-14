
<?php
$industries = [
    [
        'title' => 'مواد غذایی و نوشیدنی',
        'en' => 'FOOD & BEVERAGE',
        'image' => 'food',
        'description' => 'معرفی محصولات غذایی و نوشیدنی به بازار عراق.',
    ],
    [
        'title' => 'مصالح ساختمانی',
        'en' => 'BUILDING MATERIALS',
        'image' => 'building',
        'description' => 'نمایش و معرفی مصالح و محصولات ساختمانی.',
    ],
    [
        'title' => 'پزشکی',
        'en' => 'Medicine',
        'image' => 'MedicalSupplies',
        'description' => 'معرفی محصولات و تجهیزات پزشکی ',
    ]
   
];
?>

<section id="industries" class="zs-industries relative overflow-hidden bg-white py-24">

    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <!-- Header -->
        <div class="mb-16 flex flex-col gap-6 md:flex-row md:items-end md:justify-between">

            <div>
                <span class="mb-4 inline-block text-sm font-bold tracking-widest text-[#468432]">
                    
                </span>

                <h2 class="text-3xl font-extrabold leading-relaxed text-[#3D3D3D] md:text-5xl">
                    صنایع و
                    <span class="text-[#468432]">حوزه‌های فعالیت</span>
                </h2>
            </div>

            <p class="max-w-xl text-sm leading-8 text-gray-500 md:text-base">
                بستری برای معرفی، نمایش و توسعه بازار محصولات
               در کشور عراق در حوزه‌های مختلف صنعتی و تجاری.
            </p>

        </div>

        <!-- Industries Grid -->
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

            <?php foreach ($industries as $industry) : ?>

                <article class="zs-industry-card group relative">

                    <div class="zs-industry-card__image">

                        <?php
                        $image_path = get_template_directory_uri()
                            . '/assets/images/industries/'
                            . $industry['image']
                            . '.jpg';
                        ?>

                        <img
                            src="<?php echo esc_url($image_path); ?>"
                            alt="<?php echo esc_attr($industry['title']); ?>"
                            loading="lazy"
                            class="h-full w-full object-cover"
                        >

                        <div class="zs-industry-card__overlay"></div>

                    </div>

                    <div class="zs-industry-card__content">

                        <span class="zs-industry-card__en">
                            <?php echo esc_html($industry['en']); ?>
                        </span>

                        <h3>
                            <?php echo esc_html($industry['title']); ?>
                        </h3>

                        <p>
                            <?php echo esc_html($industry['description']); ?>
                        </p>

                    </div>

                    <div class="zs-industry-card__arrow" aria-hidden="true">
                        ←
                    </div>

                </article>

            <?php endforeach; ?>

        </div>

    </div>

</section>
