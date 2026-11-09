<?php
/*
Template Name: About ZamanSani
*/
get_header();
?>

<main dir="rtl" class="bg-white text-[#3D3D3D]">

    <!-- Hero -->
    <section class="relative overflow-hidden bg-[#3D3D3D] text-white py-24">
        <div class="max-w-7xl mx-auto px-6">
            <span class="text-[#8BC34A]">ZAMAN SANI</span>

            <h1 class="text-4xl md:text-6xl font-bold mt-5">
                درباره ما
            </h1>

            <p class="mt-6 text-lg md:text-xl text-white/80">
                پل ارتباطی مطمئن میان ایران و عراق
            </p>
        </div>
    </section>

    <!-- About -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

            <div>
                <h2 class="text-3xl font-bold mb-6">
                    داستان زمان ثانی
                </h2>

                <p class="leading-9 text-gray-600">
                    گروه بازاریابی زمان ثانی با هدف توسعه همکاری‌های
                    اقتصادی و تجاری میان ایران و عراق فعالیت می‌کند.
                    ما با ارائه راهکارهای نوآورانه در حوزه بازاریابی،
                    ارتباطات و توسعه کسب‌وکار، به دنبال ایجاد
                    فرصت‌های پایدار و ارزشمند برای مشتریان و شرکای خود هستیم.
                </p>
            </div>

            <div class="rounded-3xl bg-green-50 p-10 text-center">
                <div class="text-[#468432] text-6xl font-bold">
                    ZS
                </div>
                <p class="mt-4 text-xl font-semibold">
                    
                </p>
            </div>

        </div>
    </section>

    <!-- Mission Vision Values -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-8">

            <div class="bg-white p-8 rounded-2xl shadow-sm">
                <h3 class="text-xl font-bold text-[#468432] mb-4">
                    مأموریت ما
                </h3>
                <p class="leading-8 text-gray-600">
                    ایجاد ارتباطات تجاری مؤثر و توسعه فرصت‌های
                    همکاری میان ایران و عراق.
                </p>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-sm">
                <h3 class="text-xl font-bold text-[#468432] mb-4">
                    چشم‌انداز ما
                </h3>
                <p class="leading-8 text-gray-600">
                    تبدیل شدن به یکی از معتبرترین مجموعه‌های
                    بازاریابی و توسعه کسب‌وکار در منطقه.
                </p>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-sm">
                <h3 class="text-xl font-bold text-[#468432] mb-4">
                    ارزش‌های ما
                </h3>
                <p class="leading-8 text-gray-600">
                    اعتماد، نوآوری، مسئولیت‌پذیری،
                    همکاری و توسعه پایدار.
                </p>
            </div>

        </div>
    </section>

    <!-- Contact CTA -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="bg-[#468432] text-white rounded-3xl p-10 md:p-16 text-center">
                <h2 class="text-3xl font-bold">
                    با هم، به سوی آینده‌ای متصل‌تر
                </h2>

                <p class="mt-5 text-white/80">
                    آماده همکاری با شما هستیم.
                </p>

                <a href="<?php echo esc_url(home_url('/contact/')); ?>"
                   class="inline-block mt-8 bg-white text-[#468432]
                          px-8 py-3 rounded-full font-bold
                          hover:bg-gray-100 transition">
                    تماس با ما
                </a>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
