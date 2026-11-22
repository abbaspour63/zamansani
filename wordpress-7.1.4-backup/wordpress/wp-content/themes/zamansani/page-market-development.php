<?php
/**
 * Template Name: Development-market
 * Template Post Type: page
 */

get_header();
?>

<main id="market-development" dir="rtl">

    <!-- Hero Section -->
    <section class="market-hero relative overflow-hidden bg-[#3D3D3D] text-white py-24">
        <div class="container mx-auto px-6">
            <div class="max-w-3xl">

                <span class="mb-4 block text-[#8BC34A] font-semibold">
                    خدمات توسعه بازار
                </span>

                <h1 class="mb-6 text-4xl md:text-6xl font-bold leading-tight">
                    توسعه بازار در کشور عراق
                </h1>

                <p class="mb-8 text-lg md:text-xl leading-9 text-gray-300">
                    مسیر ورود، معرفی و توسعه محصولات ایرانی در بازار عراق
                    با همراهی گروه بازاریابی زمان ثانی.
                </p>

                <a href="#market-services"
                   class="inline-block rounded-lg bg-[#468432] px-8 py-4 font-semibold text-white transition hover:bg-[#356727]">
                    آشنایی با خدمات
                </a>

            </div>
        </div>
    </section>

    <!-- Introduction -->
    <section class="py-20">
        <div class="container mx-auto px-6">
            <div class="grid items-center gap-12 md:grid-cols-2">

                <div>
                    <span class="mb-3 block text-[#468432] font-semibold">
                        بازار عراق
                    </span>

                    <h2 class="mb-6 text-3xl font-bold text-[#3D3D3D]">
                        فرصت‌های جدید برای کسب‌وکارهای ایرانی
                    </h2>

                    <p class="leading-9 text-gray-600">
                        عراق یکی از بازارهای مهم منطقه برای توسعه صادرات
                        محصولات ایرانی است. گروه بازاریابی زمان ثانی با
                        ارائه خدمات تخصصی بازاریابی، شناخت بازار هدف و
                        ایجاد ارتباطات تجاری، به شرکت‌ها در مسیر توسعه
                        فعالیت‌های اقتصادی در عراق کمک می‌کند.
                    </p>
                </div>

                <div class="rounded-2xl bg-gray-100 p-8">
                    <h3 class="mb-6 text-2xl font-bold text-[#3D3D3D]">
                        چرا بازار عراق؟
                    </h3>

                    <ul class="space-y-4 text-gray-700">
                        <li>✓ ظرفیت بالای بازار مصرف</li>
                        <li>✓ فرصت توسعه صادرات ایران</li>
                        <li>✓ امکان ایجاد ارتباطات تجاری مستقیم</li>
                        <li>✓ دسترسی به بازار جنوب عراق از طریق بصره</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!-- Services -->
    <section id="market-services" class="bg-gray-50 py-20">
        <div class="container mx-auto px-6">

            <div class="mb-12 text-center">
                <h2 class="mb-4 text-3xl font-bold text-[#3D3D3D]">
                    خدمات توسعه بازار
                </h2>
                <p class="text-gray-600">
                    راهکارهای تخصصی برای ورود و حضور مؤثر در بازار عراق
                </p>
            </div>

            <div class="grid gap-6 md:grid-cols-3">

                <?php
                $services = [
                    'تحقیقات بازار' => 'بررسی ظرفیت بازار، رقبا و فرصت‌های تجاری.',
                    'بازاریابی محصولات' => 'معرفی و توسعه محصولات ایرانی در بازار عراق.',
                    'ارتباطات تجاری' => 'ایجاد ارتباط با تجار و شرکت‌های عراقی.',
                    'توسعه شبکه فروش' => 'کمک به شناسایی و توسعه کانال‌های فروش.',
                    'شوروم بصره' => 'معرفی و نمایش نمونه محصولات در شوروم.',
                    'مشاوره تجاری' => 'ارائه راهکارهای ورود و توسعه بازار.'
                ];

                foreach ($services as $title => $description) :
                ?>

                    <div class="rounded-xl bg-white p-8 shadow-sm transition hover:-translate-y-1 hover:shadow-md">
                        <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-lg bg-[#468432]/10 text-[#468432]">
                            <span class="text-xl">◆</span>
                        </div>

                        <h3 class="mb-4 text-xl font-bold text-[#3D3D3D]">
                            <?php echo esc_html($title); ?>
                        </h3>

                        <p class="leading-8 text-gray-600">
                            <?php echo esc_html($description); ?>
                        </p>
                    </div>

                <?php endforeach; ?>

            </div>
        </div>
    </section>

<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-2 gap-12 items-center">

            <div>
                <h2 class="text-3xl font-bold text-[#468432] mb-6">
                    بازار عراق؛ فرصت توسعه صادرات ایران
                </h2>

                <p class="text-gray-600 leading-9">
                    عراق به دلیل موقعیت جغرافیایی، ظرفیت بازار مصرف
                    و ارتباطات تجاری منطقه‌ای، فرصت‌های متعددی
                    برای توسعه صادرات محصولات ایرانی فراهم می‌کند.
                    بصره نیز به‌عنوان یکی از مراکز مهم اقتصادی
                    جنوب عراق، نقش قابل‌توجهی در تجارت منطقه دارد.
                </p>
            </div>

            <div class="rounded-2xl bg-gray-50 p-8">
                <h3 class="text-xl font-bold mb-5">مزایای حضور در بازار عراق</h3>
                <ul class="space-y-4 text-gray-700">
                    <li>✓ توسعه بازار محصولات ایرانی</li>
                    <li>✓ ایجاد ارتباط با فعالان اقتصادی عراق</li>
                    <li>✓ فرصت‌های تجاری در جنوب عراق</li>
                    <li>✓ توسعه شبکه فروش و توزیع</li>
                </ul>
            </div>

        </div>
    </div>
</section>


    <!-- CTA -->
    <section class="bg-[#468432] py-16 text-white">
        <div class="container mx-auto px-6 text-center">

            <h2 class="mb-5 text-3xl font-bold">
                کسب‌وکار خود را در عراق توسعه دهید
            </h2>

            <p class="mb-8 leading-8">
                برای دریافت مشاوره و آشنایی با فرصت‌های بازار عراق
                با گروه بازاریابی زمان ثانی در ارتباط باشید.
            </p>

            <a href="<?php echo esc_url(home_url('/contact-us/')); ?>"
               class="inline-block rounded-lg bg-white px-8 py-4 font-semibold text-[#468432] hover:bg-gray-100">
                درخواست مشاوره
            </a>

        </div>
    </section>

</main>

<?php get_footer(); ?>
