<?php
/**
 * ZamanSani New Hero
 */
?>

<script>
    window.zsHeroImages = "<?php echo esc_url(
            get_theme_file_uri('/assets/images/')
    ); ?>";
</script>

<section id="zs-hero-new"
         class="relative overflow-hidden zs-hero-new--basra  bg-[#062b32] text-white">

    <!-- Background -->
    <div class="pointer-events-none absolute inset-0">

        <div class="absolute -right-40 -top-40 h-96 w-96 rounded-full bg-[#468432]/20 blur-3xl"></div>

        <div class="absolute -bottom-40 -left-40 h-96 w-96 rounded-full bg-cyan-500/10 blur-3xl"></div>

    </div>

    <!-- Main Container -->
    <div class="relative z-10 mx-auto grid max-w-7xl items-center gap-10 px-6 py-16 lg:grid-cols-2 lg:py-24">

        <!-- Content -->
        <div class="text-right">

            <!-- Logo -->
            <div class="mb-8 flex items-center justify-start gap-4">

                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php endif; ?>

                <div>
                    <h2 class="text-3xl font-bold">
                        Zaman<span class="text-[#468432]">Sani</span>
                    </h2>

                    <p class="text-sm tracking-widest text-gray-300">
                        MARKETING GROUP
                    </p>
                </div>

            </div>

            <!-- Heading -->
            <h1 class="mb-6 text-4xl font-black leading-relaxed md:text-5xl">

                گروه بازاریابی

                <span class="block text-[#55c747]">
                    زمان ثانی
                </span>

            </h1>

            <!-- Description -->
            <p class="mb-8 max-w-xl text-xl leading-9 text-gray-300">
                پل ارتباطی کسب‌وکارها بین ایران و عراق؛
                همراه شما در توسعه بازار، رشد برند و ایجاد فرصت‌های تجاری جدید.
            </p>

            <!-- Features -->
            <div class="mb-10 grid grid-cols-2 gap-3 md:grid-cols-4">

                <div class="rounded-xl border border-white/10 bg-white/5 p-4 text-center transition hover:bg-white/10">
                    <div class="text-2xl">📈</div>
                    <p class="mt-2 text-sm">رشد کسب‌وکار</p>
                </div>

                <div class="rounded-xl border border-white/10 bg-white/5 p-4 text-center transition hover:bg-white/10">
                    <div class="text-2xl">🤝</div>
                    <p class="mt-2 text-sm">همکاری پایدار</p>
                </div>

                <div class="rounded-xl border border-white/10 bg-white/5 p-4 text-center transition hover:bg-white/10">
                    <div class="text-2xl">💡</div>
                    <p class="mt-2 text-sm">راهکارهای نوین</p>
                </div>

                <div class="rounded-xl border border-white/10 bg-white/5 p-4 text-center transition hover:bg-white/10">
                    <div class="text-2xl">🌐</div>
                    <p class="mt-2 text-sm">بازارهای جهانی</p>
                </div>

            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4">

                <a href="#contact"
                   class="rounded-full bg-[#468432] px-8 py-4 font-bold text-white transition hover:bg-green-600">

                    با ما در ارتباط باشید

                </a>

                <a href="#about"
                   class="rounded-full border border-white/30 px-8 py-4 transition hover:bg-white/10">

                    معرفی گروه

                </a>

            </div>

            <!-- Social -->
            <div class="mt-10 flex items-center justify-start gap-4 text-sm text-gray-400">

                <span>ایران</span>

                <span class="h-px w-10 bg-[#468432]"></span>

                <span>عراق</span>

                <span class="h-px w-10 bg-[#468432]"></span>

                <span>بازارهای بین‌المللی</span>

            </div>

        </div>

        <!-- Three.js Globe -->
        <div class="relative h-[420px] lg:min-h-[600px]">

            <!-- Canvas -->
            <div id="zs-hero-new-canvas"
                 class="absolute inset-0 h-full w-full">
            </div>

            <!-- Globe Labels -->
            <div class="pointer-events-none absolute bottom-5 left-0 right-0 flex justify-center gap-4">

                <span class="rounded-full border border-green-400/30 bg-black/30 px-5 py-2 text-sm text-green-300 backdrop-blur-md">
                    تهران
                </span>

                <span class="rounded-full border border-green-400/30 bg-black/30 px-5 py-2 text-sm text-green-300 backdrop-blur-md">
                    بصره
                </span>

            </div>

        </div>

    </div>

</section>
