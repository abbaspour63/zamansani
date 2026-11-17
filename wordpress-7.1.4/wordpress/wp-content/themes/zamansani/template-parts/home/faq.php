<?php
$faqs = [
     [
        'question' => 'آیا مشاوره اولیه رایگان است؟',
        'answer' => 'بله، مشاوره اولیه رایگان است و می‌توانید برای آشنایی با خدمات شوروم، شرایط همکاری و نحوه پذیرش محصولات از این مشاوره استفاده کنید.'
    ],
    [
        'question' => 'گروه بازاریابی زمان ثانی چه خدماتی ارائه می‌دهد؟',
        'answer' => 'زمان ثانی در زمینه توسعه بازار عراق، بازاریابی و تبلیغات، مشاوره تجاری و ایجاد ارتباطات تجاری میان کسب‌وکارها فعالیت می‌کند.'
    ],
    [
        'question' => 'چگونه می‌توان محصولات خود را در شوروم زمان ثانی عرضه کرد؟',
        'answer' => 'فرآیند همکاری با دریافت مشاوره رایگان آغاز می‌شود. سپس فرم پذیرش تکمیل و ارسال شده و درخواست شما توسط هیئت داوری بررسی می‌شود.'
    ],
   
    [
        'question' => 'پذیرش محصولات در شوروم چگونه انجام می‌شود؟',
        'answer' => 'پس از ارسال فرم پذیرش، درخواست شما بررسی اولیه می‌شود. در صورت تأیید، نمونه کالاها ارسال شده و توسط هیئت داوری ارزیابی می‌شوند.'
    ],
    [
        'question' => 'چه محصولاتی امکان پذیرش در شوروم را دارند؟',
        'answer' => 'پذیرش محصولات بر اساس نوع کالا، کیفیت، قابلیت عرضه در بازار هدف و ارزیابی هیئت داوری انجام می‌شود.'
    ],
    [
        'question' => 'آیا ارسال نمونه کالا الزامی است؟',
        'answer' => 'برای ارزیابی محصولات، ارسال نمونه کالا مطابق شرایط اعلام‌شده در فرآیند پذیرش انجام می‌شود.'
    ],
    [
        'question' => 'آیا می‌توان مکان نمایش محصولات را انتخاب کرد؟',
        'answer' => 'پس از تأیید محصولات، امکان انتخاب مکان موردنظر برای نمایش و استقرار نمونه کالاها در شوروم فراهم می‌شود.'
    ],
    [
        'question' => 'پس از استقرار محصولات در شوروم چه اتفاقی می‌افتد؟',
        'answer' => 'با استقرار نمونه کالاها، محصولات شما در شوروم معرفی و نمایش داده می‌شوند و زمینه ارتباط با بازار هدف و فرصت‌های تجاری فراهم می‌شود.'
    ],
];
?>

<section id="faq" class="zs-faq relative overflow-hidden bg-gray-50 py-24">

    <div class="mx-auto max-w-5xl px-6 lg:px-8">

        <!-- Header -->
        <div class="mb-16 text-center">

            <span class="mb-4 inline-block rounded-full bg-[#468432]/10 px-5 py-2 text-sm font-bold text-[#468432]">
                سوالات متداول
            </span>

            <h2 class="mb-6 text-3xl font-extrabold leading-relaxed text-[#3D3D3D] md:text-5xl">
                پرسش های
                <span class="text-[#468432]">پرتکرار</span>
            </h2>
و
            <p class="mx-auto max-w-2xl text-base leading-9 text-gray-500">
                پاسخ پرسش‌های رایج درباره خدمات زمان ثانی،
                پذیرش محصولات و همکاری با شوروم.
            </p>

        </div>

        <!-- FAQ Accordion -->
        <div class="zs-faq__list">

            <?php foreach ($faqs as $index => $faq) : ?>

                <details class="zs-faq__item group">

                    <summary class="zs-faq__question">

                        <!-- <span class="zs-faq__number">
                            <?php echo esc_html(
                                sprintf('%02d', $index + 1)
                            ); ?>
                        </span> -->

                        <span class="flex-1">
                            <?php echo esc_html($faq['question']); ?>
                        </span>

                        <span class="zs-faq__icon" aria-hidden="true">
                            +
                        </span>

                    </summary>

                    <div class="zs-faq__answer">
                        <p>
                            <?php echo esc_html($faq['answer']); ?>
                        </p>
                    </div>

                </details>

            <?php endforeach; ?>

        </div>

       
    </div>

</section>
