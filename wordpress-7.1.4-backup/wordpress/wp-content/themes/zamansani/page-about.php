<?php
get_header();
?>
<main id="about-us" class="about-us">

    <!-- About Hero -->

<section class="about-hero" dir="rtl">

    <div class="about-hero__container">

        <div class="about-hero__content">

            <span class="about-hero__label">
                ZAMANSANI INTERNATIONAL MARKETING GROUP
            </span>

            <h1>
                همراه شما در مسیر
                <span>رشد و توسعه کسب‌وکار</span>
            </h1>

            <p class="py-4">
                ماموریت بنیادین ما، شناسایی، بازطراحی و اجرای راهکارهای علمی و استانداردی است که بتواند حلقه گمشده در فرآیندهای فروش و بازاریابی کسب‌وکارهای ایرانی را تکمیل نماید. ما باور داریم که بازار هدف، چه در مقیاس بازارهای داخلی (B2B) و چه در پهنه صادرات منطقه‌ای، ظرفیت‌های کشف‌نشده فراوانی دارد؛ تنها به شرط آن‌که با تکیه بر استراتژی‌های مدون، تیم‌های ارتباطی حرفه‌ای و رصد دقیق نیاز بازار به سراغ آن برویم. ما این مسیر روشن و آزموده را پیش پای شرکای تجاری خود قرار می‌دهیم تا دستیابی به رشدی مستمر و سودآور محقق شود.
            </p>

            <div class="about-hero__actions">

                <a href="<?php echo esc_url(home_url('/index.php/contact/')); ?>"
                   class="about-hero__button">
                    ارتباط با ما
                    <span aria-hidden="true">←</span>
                </a>

                <a href="#about-location"
                   class="about-hero__link">
                    موقعیت و دفاتر ما
                </a>

            </div>

        </div>

        <div class="about-hero__badge">
            <span>Basra</span>
            <strong>IRAQ</strong>
        </div>

    </div>

</section>


  
<section class="about-location" dir="rtl">
    <div class="about-location__container">

        <div class="about-location__content">
            <span class="about-location__label"</span>

            <h2>
                حضور ما در
                <span>عراق و بصره</span>
            </h2>

            <p class="py-4">
                اعتبار، مجوزها و پشتوانه حقوقی
اعتماد پایدار شرکای تجاری، ثمره تعهد به قانون‌مداری، شفافیت حقوقی و پایبندی به اصول اخلاق حرفه‌ای است. گروه بازاریابی زمان ثانی با اتکا به پشتوانه صنفی و تجارب اجرایی چندساله شکل گرفته است:

سابقه صنفی و تعهد حرفه‌ای:جناب آقای امیرحسین زمان ثانی از سال ۱۳۹۶ تاکنون، عضو رسمی و فعال انجمن صنفی کارفرمایی کانون‌های آگهی و تبلیغات استان فارس بوده و در طول این سال‌ها همواره در تدوین و اجرای استراتژی‌های رشد کسب‌وکارها حضوری اثرگذار داشته است.
مجوز رسمی ملی:این مجموعه دارای مجوز رسمی از وزارت فرهنگ و ارشاد اسلامی  است؛ پشتوانه‌ای حقوقی که متضمن اجرای استاندارد، تعهدات دقیق قراردادی و امنیت همکاری برای تولیدکنندگان و صاحبان صنایع است.
مشاور امین برندها در مقیاس کشوری:افتخار ما این است که در تمامی این سال‌ها فراتر از یک مجری تبلیغاتی، در جایگاه «مشاور امین و راهنمای عملیاتی» کنار کسب‌وکارهای متعددی در سراسر کشور ایستاده‌ایم و آن‌ها را از گلوگاه‌های رکود و چالش‌های فروش به سوی بازارهای پایدار هدایت کرده‌ایم.
گسترش قانونی در بازارهای بین‌المللی (کشور عراق):امروز با اتکا به همین پیشینه معتبر، گام در بازارهای بین‌المللی نهاده‌ایم. گروه بازاریابی زمان ثانی با ثبت رسمی، اخذ مجوزهای لازم و سپری کردن تمامی مراحل اداری و چارچوب‌های حقوقی و تجاری در کشور عراق، بستری رسمی، امن و یکپارچه (از تأسیس دفاتر عملیاتی تا استقرار شوروم‌های تخصصی در بصره) برای صادرات مطمئن کالا و خدمات ایرانی فراهم آورده است.
            </p>
        </div>

        <div class="about-location__map">
            <img
                src="<?php echo esc_url(
                    get_theme_file_uri('/assets/images/basre-map (4).png')
                ); ?>"
                alt="نقشه عراق و موقعیت استان بصره"
                loading="lazy"
            >
        </div>

    </div>
</section>

<?php
$zs_documents_query = new WP_Query([
    'post_type'      => 'zs_document',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'orderby'        => 'date',
    'order'          => 'DESC',
]);
?>

<section id="company-documents"
    class="relative overflow-hidden bg-gray-50 py-20 sm:py-24"
    dir="rtl">

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <!-- Section Header -->
        <div class="mx-auto mb-14 max-w-3xl text-center">

            <span class="inline-flex rounded-full bg-[#468432]/10 px-4 py-2 text-sm font-semibold text-[#468432]">
                مدارک و اسناد  زمان ثانی 
            </span>

            <h2 class="mt-5 text-3xl font-extrabold text-[#3D3D3D] sm:text-4xl">
                اسناد و مدارک رسمی
                <span class="text-[#468432]">زمان ثانی</span>
            </h2>

            <p class="mt-5 text-base leading-8 text-gray-600">
                شفافیت، اعتبار و تعهد حرفه‌ای؛ مجموعه‌ای از مجوزها،
                گواهینامه‌ها و مستندات رسمی گروه بازاریابی زمان ثانی.
            </p>

            <div class="mx-auto mt-7 h-1 w-20 rounded-full bg-[#468432]"></div>
        </div>


        <?php if ($zs_documents_query->have_posts()) : ?>

            <div class="grid grid-cols-1 gap-7 sm:grid-cols-2 lg:grid-cols-3">

                <?php while ($zs_documents_query->have_posts()) :
                    $zs_documents_query->the_post();

                    $document_id = get_the_ID();

                    $document_file = get_post_meta(
                        $document_id,
                        '_zs_document_file_url',
                        true
                    );

                    $document_terms = get_the_terms(
                        $document_id,
                        'zs_document_category'
                    );

                    $excerpt = get_the_excerpt();
                ?>

                    <article class="group overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-[#468432]/40 hover:shadow-xl">

                        <!-- Document Image -->
                        <div class="relative flex aspect-[16/10] items-center justify-center overflow-hidden bg-gray-100">

                            <?php if (has_post_thumbnail()) : ?>

                                <?php
                                the_post_thumbnail('large', [
                                    'class' => 'h-full w-full object-cover transition duration-500 group-hover:scale-105',
                                ]);
                                ?>

                            <?php else : ?>

                                <div class="flex flex-col items-center text-[#468432]">

                                    <svg class="h-20 w-20"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="1.3"
                                        aria-hidden="true">

                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                                        <path d="M14 2v6h6"/>
                                        <path d="M8 13h8M8 17h8"/>

                                    </svg>

                                    <span class="mt-3 text-xs font-bold tracking-wider">
                                        OFFICIAL DOCUMENT
                                    </span>

                                </div>

                            <?php endif; ?>

                            <span class="absolute right-4 top-4 rounded-full bg-white/90 px-3 py-1 text-xs font-bold text-[#468432] shadow-sm">
                                DOCUMENT
                            </span>

                        </div>


                        <!-- Document Details -->
                        <div class="p-6">

                            <?php if ($document_terms && !is_wp_error($document_terms)) : ?>

                                <div class="mb-4 flex flex-wrap gap-2">

                                    <?php foreach (array_slice($document_terms, 0, 2) as $term) : ?>

                                        <span class="rounded-md bg-[#468432]/10 px-3 py-1 text-xs font-medium text-[#468432]">
                                            <?php echo esc_html($term->name); ?>
                                        </span>

                                    <?php endforeach; ?>

                                </div>

                            <?php endif; ?>


                            <h3 class="text-xl font-bold text-[#3D3D3D] transition-colors group-hover:text-[#468432]">
                                <?php the_title(); ?>
                            </h3>

                            <p class="mt-3 min-h-14 text-sm leading-7 text-gray-500">
                                <?php
                                echo esc_html(
                                    wp_trim_words(
                                        wp_strip_all_tags($excerpt),
                                        22
                                    )
                                );
                                ?>
                            </p>


                            <!-- Document Actions -->
                            <div class="mt-6 flex flex-wrap gap-3 border-t border-gray-100 pt-5">

                                <?php if ($document_file) : ?>

                                    <a href="<?php echo esc_url($document_file); ?>"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="inline-flex flex-1 items-center justify-center gap-2 rounded-lg bg-[#468432] px-4 py-3 text-sm font-semibold text-white transition hover:bg-[#376b27]">

                                        مشاهده سند

                                        <span aria-hidden="true">←</span>
                                    </a>

                                    <a href="<?php echo esc_url($document_file); ?>"
                                        download
                                        class="inline-flex items-center justify-center rounded-lg border border-gray-200 px-4 py-3 text-sm font-semibold text-[#3D3D3D] transition hover:border-[#468432] hover:text-[#468432]"
                                        aria-label="<?php echo esc_attr('دانلود ' . get_the_title()); ?>">

                                        <svg class="h-5 w-5"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            aria-hidden="true">

                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                                            <path d="m7 10 5 5 5-5M12 15V3"/>

                                        </svg>
                                    </a>

                                <?php else : ?>

                                    <span class="text-xs text-gray-400">
                                        فایل سند هنوز بارگذاری نشده است.
                                    </span>

                                <?php endif; ?>

                            </div>

                        </div>

                    </article>

                <?php endwhile; ?>

            </div>

        <?php else : ?>

            <div class="rounded-2xl border border-dashed border-gray-300 bg-white px-6 py-14 text-center">

                <h3 class="text-xl font-bold text-[#3D3D3D]">
                    مدارک و مستندات شرکت
                </h3>

                <p class="mt-3 text-sm leading-7 text-gray-500">
                    مدارک رسمی گروه بازاریابی زمان ثانی به‌زودی در این بخش قرار خواهند گرفت.
                </p>

            </div>

        <?php endif; ?>

        <?php wp_reset_postdata(); ?>

    </div>
</section>

</main>

<?php
get_footer();
?>

