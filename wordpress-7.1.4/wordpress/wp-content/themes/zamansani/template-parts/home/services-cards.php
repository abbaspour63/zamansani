<?php
/**
 * ZamanSani Services Cards
 */

if (!defined('ABSPATH')) {
    exit;
}

$services = [
    [
        'number' => '',
        'title' => 'توسعه بازار در کشور عراق',
        'description' => 'ارائه راهکارهای تخصصی برای توسعه و رشد کسب‌وکار شما در بازارهای منطقه‌ای.',
    ],
    [
        'number' => '',
        'title' => 'شوروم بصره',
        'description' => 'کمک به ورود، معرفی و گسترش محصولات شما در بازار عراق.',
    ],
    [
        'number' => '',
        'title' =>'بازاریابی تلفنی در عراق',
        'description' => 'معرفی و نمایش حرفه‌ای محصولات در فضای نمایشگاهی زمان ثانی.',
    ],
    [
        'number' => '',
        'title' => 'دیجیتال مارکتینگ در عراق',
        'description' => 'طراحی و اجرای راهکارهای بازاریابی برای افزایش شناخت برند شما.',
    ],
    [
        'number' => '',
        'title' => 'تحقیقات بازار در عراق',
        'description' => 'ایجاد ارتباط مؤثر میان تولیدکنندگان، تأمین‌کنندگان و مشتریان.',
    ],
    [
        'number' => '',
        'title' => 'پشتیبانی صادرات',
        'description' => 'همراهی در مسیر معرفی محصولات و توسعه فعالیت‌های صادراتی.',
    ],
];
?>


    
 <section class="zs-services pt-12 md:pt-16">
    <div class="zs-services-grid">

    <?php foreach ($services as $index => $service) : ?>

        <article class="zs-service-card">

            <?php if ($index === 0) : ?>
                <div class="zs-service-card__art">
                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri() .
                            '/assets/images/cards/basra-line-art.webp'
                        ); ?>"
                        alt="<?php echo esc_attr($service['title']); ?>"
                        loading="lazy"
                    >
                </div>
            <?php endif; ?>

            <div class="zs-service-card__content">

                <h3>
                    <?php echo esc_html($service['title']); ?>
                </h3>

                <p>
                    <?php echo esc_html($service['description']); ?>
                </p>

                <a href="#contact"
                   class="zs-service-card__link">
                    اطلاعات بیشتر
                    <span aria-hidden="true">←</span>
                </a>

            </div>

        </article>

    <?php endforeach; ?>

</div>


 </section>
