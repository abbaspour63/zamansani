<?php

/**
 * Template Name: Recruitment
 */
get_header();
?>

<?php
$career_status = sanitize_key(
    wp_unslash($_GET['career_status'] ?? '')
);
?>

<?php if ($career_status === 'success') : ?>

    <div class="mb-6 rounded-xl border border-green-200 bg-green-50 p-5 text-green-800">
        درخواست شما با موفقیت ارسال شد.
        از علاقه شما به همکاری با زمان ثانی سپاسگزاریم.
    </div>

<?php elseif ($career_status === 'saved') : ?>

    <div class="mb-6 rounded-xl border border-yellow-200 bg-yellow-50 p-5 text-yellow-800">
        رزومه شما ثبت شد، اما ارسال ایمیل با مشکل مواجه شد.
        درخواست شما در سیستم ذخیره شده است.
    </div>

<?php endif; ?>


<main class="careers-page overflow-hidden bg-white text-[#3D3D3D]" dir="rtl">
    <!-- JOB POSITIONS -->
    <section id="careers-positions" class="py-20 lg:py-28">

        <div class="mx-auto max-w-7xl px-5 lg:px-8">

            <div class="mx-auto mb-14 max-w-2xl text-center">

                <span class="text-sm font-bold text-[#468432]">
                    فرصت‌های همکاری
                </span>

                <h2 class="mt-4 text-3xl font-extrabold sm:text-4xl">
                    به تیم ما بپیوندید
                </h2>

                <p class="mt-5 leading-8 text-gray-500">
                    موقعیت مورد علاقه خود را انتخاب کنید.
                </p>

            </div>

            <div class="grid gap-7 md:grid-cols-2">

                <!-- SALES -->
                <article class="group relative rounded-2xl border border-green-600  p-8 transition duration-300 hover:-translate-y-2 hover:border-[#468432]/30 hover:shadow-xl hover:shadow-black/5 sm:p-10">

                    <span class="absolute left-8 top-8 text-3xl font-extrabold text-gray-100">

                    </span>

                    <span class="inline-flex rounded-full bg-[#468432]/10 px-4 py-2 text-xs font-bold text-[#468432]">
                        Sales
                    </span>

                    <h3 class="mt-7 text-2xl font-extrabold">
                        کارشناس فروش
                    </h3>

                    <p class="mt-4 leading-8 text-gray-500">
                        مسئول توسعه ارتباط با مشتریان، معرفی خدمات شرکت،
                        پیگیری فرصت‌های فروش و کمک به رشد کسب‌وکار.
                    </p>

                    <ul class="mt-6 space-y-3 text-sm text-gray-600">
                        <li class="flex items-center gap-3">
                            <span class="h-2 w-2 rounded-full bg-[#468432]"></span>
                            مهارت ارتباطی و مذاکره
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="h-2 w-2 rounded-full bg-[#468432]"></span>
                            توانایی جذب و پیگیری مشتری
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="h-2 w-2 rounded-full bg-[#468432]"></span>
                            علاقه به فروش و توسعه کسب‌وکار
                        </li>
                    </ul>

                    <a href="#careers-application"
                        data-position="sales"
                        class="careers-select-job mt-8 flex items-center justify-between border-t border-gray-100 pt-6 text-sm font-bold text-[#468432]">
                        درخواست همکاری
                        <span class="transition group-hover:-translate-x-1">←</span>
                    </a>

                </article>


                <!-- SOCIAL MEDIA -->
                <article class="group relative rounded-2xl border  border-green-600 bg-white p-8 transition duration-300 hover:-translate-y-2 hover:border-[#468432]/30 hover:shadow-xl hover:shadow-black/5 sm:p-10">

                    <span class="absolute left-8 top-8 text-3xl font-extrabold text-gray-100">

                    </span>

                    <span class="inline-flex rounded-full bg-[#468432]/10 px-4 py-2 text-xs font-bold text-[#468432]">
                        Social Media
                    </span>

                    <h3 class="mt-7 text-2xl font-extrabold">
                        کارشناس شبکه‌های اجتماعی
                    </h3>

                    <p class="mt-4 leading-8 text-gray-500">
                        مدیریت شبکه‌های اجتماعی، برنامه‌ریزی محتوا،
                        تعامل با مخاطبان و توسعه حضور دیجیتال برند.
                    </p>

                    <ul class="mt-6 space-y-3 text-sm text-gray-600">
                        <li class="flex items-center gap-3">
                            <span class="h-2 w-2 rounded-full bg-[#468432]"></span>
                            آشنایی با Instagram و شبکه‌های اجتماعی
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="h-2 w-2 rounded-full bg-[#468432]"></span>
                            توانایی تولید و برنامه‌ریزی محتوا
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="h-2 w-2 rounded-full bg-[#468432]"></span>
                            خلاقیت و شناخت مخاطب
                        </li>
                    </ul>

                    <a href="#careers-application"
                        data-position="social-media"
                        class="careers-select-job mt-8 flex items-center justify-between border-t border-gray-100 pt-6 text-sm font-bold text-[#468432]">
                        درخواست همکاری
                        <span class="transition group-hover:-translate-x-1">←</span>
                    </a>

                </article>

            </div>

        </div>

    </section>


    <!-- APPLICATION FORM -->
    <section id="careers-application" class="bg-[#f5f7f3] py-20 lg:py-28">

        <div class="mx-auto max-w-4xl px-5 lg:px-8">

            <div class="rounded-2xl border border-green-500 bg-white p-6 shadow-sm sm:p-10 lg:p-14">

                <div class="mb-10 text-center">

                    <span class="text-sm font-bold text-[#468432]">
                        ارسال درخواست
                    </span>

                    <h2 class="mt-4 text-3xl font-extrabold">
                        فرم همکاری با زمان ثانی
                    </h2>

                    <p class="mt-4 text-sm leading-8 text-gray-500">
                        اطلاعات خود را وارد کنید و رزومه‌تان را ارسال نمایید.
                    </p>

                </div>

                <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>"
                    method="POST"
                    enctype="multipart/form-data"
                    class="careers-form space-y-6">

                    <input type="hidden" name="action" value="zamansani_career_application">

                    <?php wp_nonce_field('zamansani_career_application', 'career_nonce'); ?>

                    <div class="grid gap-6 sm:grid-cols-2">

                        <div>
                            <label for="career-name" class="mb-2 block text-sm font-bold">
                                نام و نام خانوادگی *
                            </label>

                            <input type="text"
                                id="career-name"
                                name="candidate_name"
                                required
                                class="w-full rounded-lg border border-gray-200 px-4 py-4 text-sm outline-none transition focus:border-[#468432] focus:ring-4 focus:ring-[#468432]/10">
                        </div>

                        <div>
                            <label for="career-email" class="mb-2 block text-sm font-bold">
                                ایمیل *
                            </label>

                            <input type="email"
                                id="career-email"
                                name="candidate_email"
                                required
                                class="w-full rounded-lg border border-gray-200 px-4 py-4 text-sm outline-none transition focus:border-[#468432] focus:ring-4 focus:ring-[#468432]/10">
                        </div>

                        <div>
                            <label for="career-phone" class="mb-2 block text-sm font-bold">
                                شماره تماس *
                            </label>

                            <input type="tel"
                                id="career-phone"
                                name="candidate_phone"
                                required
                                class="w-full rounded-lg border border-gray-200 px-4 py-4 text-sm outline-none transition focus:border-[#468432] focus:ring-4 focus:ring-[#468432]/10">
                        </div>

                        <div>
                            <label for="career-position" class="mb-2 block text-sm font-bold">
                                موقعیت شغلی *
                            </label>

                            <select id="career-position"
                                name="career_position"
                                required
                                class="w-full rounded-lg border border-gray-200 bg-white px-4 py-4 text-sm outline-none transition focus:border-[#468432] focus:ring-4 focus:ring-[#468432]/10">

                                <option value="">انتخاب موقعیت</option>
                                <option value="sales">کارشناس فروش</option>
                                <option value="social-media">کارشناس شبکه‌های اجتماعی</option>

                            </select>
                        </div>

                    </div>

                    <div>
                        <label for="career-experience" class="mb-2 block text-sm font-bold">
                            تجربه کاری و مهارت‌ها
                        </label>

                        <textarea id="career-experience"
                            name="candidate_experience"
                            rows="5"
                            placeholder="درباره تجربه، مهارت‌ها و توانایی‌های خود بنویسید..."
                            class="w-full rounded-lg border border-gray-200 px-4 py-4 text-sm outline-none transition focus:border-[#468432] focus:ring-4 focus:ring-[#468432]/10"></textarea>
                    </div>

                    <div>
                        <label for="career-cv" class="mb-2 block text-sm font-bold">
                            فایل رزومه (CV) *
                        </label>

                        <input type="file"
                            id="career-cv"
                            name="candidate_cv"
                            accept=".pdf,.doc,.docx"
                            required
                            class="block w-full cursor-pointer rounded-lg border border-gray-200 bg-gray-50 p-4 text-sm">

                        <p class="mt-2 text-xs leading-6 text-gray-400">
                            فرمت PDF یا Word، حداکثر حجم 2 مگابایت
                        </p>
                    </div>

                  
                    <div class="hidden" aria-hidden="true">
                        <label for="career-website">Website</label>
                        <input type="text"
                            id="career-website"
                            name="website"
                            tabindex="-1"
                            autocomplete="off">
                    </div>
               
                    <button type="submit"
                        class="w-full rounded-lg bg-[#468432] px-6 py-4 text-sm font-bold text-white transition hover:-translate-y-1 hover:bg-[#356827]">
                        ارسال درخواست همکاری
                    </button>

                </form>

            </div>

        </div>

    </section>

</main>

<?php get_footer(); ?>