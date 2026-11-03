
<?php get_header(); ?>
<?php include get_template_directory() . '/hero-alternative.php'; ?>
<?php include get_template_directory() . '/hero-third.php'; ?>
<?php include get_template_directory() . '/hero-showroom.php'; ?>
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

</main>

<?php get_footer(); ?>
