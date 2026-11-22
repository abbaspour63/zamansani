<?php
/**
 * Template: Careers
 */
get_header();
?>

<main class="careers-page" dir="rtl">

    <!-- HERO -->
    <!-- <section class="careers-hero">
        <div class="careers-container">

            <div class="careers-hero__content">
                <span class="careers-label">فرص همکاری با زمان ثانی</span>

                <h1>
                    استعداد شما،
                    <span>آینده ما</span>
                </h1>

                <p>
                    اگر به رشد، خلاقیت و تجربه‌های جدید علاقه دارید،
                    به تیم زمان ثانی بپیوندید.
                    ما مشتاق آشنایی با شما هستیم.
                </p>

                <a href="#careers-positions" class="careers-btn">
                    مشاهده فرصت‌های شغلی
                </a>
            </div>

            <div class="careers-hero__visual">
                <div class="careers-hero__circle">
                    <span>ZAMANSANI INTERNATIONAL MARKETING GROUP</span>
                    <div></div>
                </div>
            </div>

        </div>
    </section> -->


    <!-- JOB POSITIONS -->
    <section class="careers-positions" id="careers-positions">

        <div class="careers-container">

            <div class="careers-heading">
                <span>فرصت‌های شغلی</span>
                <h2>به تیم ما بپیوندید</h2>
                <p>موقعیت مورد علاقه خود را انتخاب کنید.</p>
            </div>

            <div class="careers-jobs">

                <!-- SALES -->
                <article class="careers-job">

                    

                    <span class="careers-job__tag">Sales</span>

                    <h3>کارشناس فروش</h3>

                    <p>
                        مسئول توسعه ارتباط با مشتریان، معرفی خدمات شرکت،
                        پیگیری فرصت‌های فروش و کمک به رشد کسب‌وکار.
                    </p>

                    <ul>
                        <li>مهارت ارتباطی و مذاکره</li>
                        <li>توانایی جذب و پیگیری مشتری</li>
                        <li>علاقه به فروش و توسعه کسب‌وکار</li>
                    </ul>

                    <a href="#careers-application"
                       class="careers-job__link"
                       data-position="کارشناس فروش">
                        درخواست همکاری
                        <span>←</span>
                    </a>

                </article>


                <!-- SOCIAL MEDIA -->
                <article class="careers-job">

                    

                    <span class="careers-job__tag">Social Media</span>

                    <h3>کارشناس شبکه‌های اجتماعی</h3>

                    <p>
                        مدیریت شبکه‌های اجتماعی، برنامه‌ریزی محتوا،
                        تعامل با مخاطبان و کمک به توسعه حضور دیجیتال برند.
                    </p>

                    <ul>
                        <li>آشنایی با Instagram و شبکه‌های اجتماعی</li>
                        <li>توانایی تولید و برنامه‌ریزی محتوا</li>
                        <li>خلاقیت و شناخت مخاطب</li>
                    </ul>

                    <a href="#careers-application"
                       class="careers-job__link"
                       data-position="کارشناس شبکه‌های اجتماعی">
                        درخواست همکاری
                        <span>←</span>
                    </a>

                </article>

            </div>

        </div>

    </section>


    <!-- APPLICATION FORM -->
    <section class="careers-application" id="careers-application">

        <div class="careers-container">

            <div class="careers-form-wrapper">

                <div class="careers-form-heading">
                    <span>ارسال درخواست</span>
                    <h2>فرم همکاری با زمان ثانی</h2>
                    <p>
                        اطلاعات خود را وارد کنید و رزومه‌تان را ارسال نمایید.
                    </p>
                </div>

                <form class="careers-form"
                      action="<?php echo esc_url(admin_url('admin-post.php')); ?>"
                      method="POST"
                      enctype="multipart/form-data">

                    <input type="hidden" name="action" value="zamansani_career_application">

                    <?php wp_nonce_field('zamansani_career_application', 'career_nonce'); ?>

                    <div class="careers-form__grid">

                        <div class="careers-field">
                            <label for="career-name">نام و نام خانوادگی *</label>
                            <input type="text"
                                   id="career-name"
                                   name="candidate_name"
                                   required>
                        </div>

                        <div class="careers-field">
                            <label for="career-email">ایمیل *</label>
                            <input type="email"
                                   id="career-email"
                                   name="candidate_email"
                                   required>
                        </div>

                        <div class="careers-field">
                            <label for="career-phone">شماره تماس *</label>
                            <input type="tel"
                                   id="career-phone"
                                   name="candidate_phone"
                                   required>
                        </div>

                        <div class="careers-field">
                            <label for="career-position">موقعیت شغلی *</label>

                            <select id="career-position"
                                    name="career_position"
                                    required>

                                <option value="">انتخاب موقعیت</option>

                                <option value="sales">
                                    کارشناس فروش
                                </option>

                                <option value="social-media">
                                    کارشناس شبکه‌های اجتماعی
                                </option>

                            </select>
                        </div>

                        <div class="careers-field careers-field--full">
                            <label for="career-experience">توضیح کوتاه درباره تجربه کاری</label>
                            <textarea id="career-experience"
                                      name="candidate_experience"
                                      rows="5"
                                      placeholder="درباره تجربه، مهارت‌ها و توانایی‌های خود بنویسید..."></textarea>
                        </div>

                        <div class="careers-field careers-field--full">
                            <label for="career-cv">فایل رزومه (CV) *</label>

                            <input type="file"
                                   id="career-cv"
                                   name="candidate_cv"
                                   accept=".pdf,.doc,.docx"
                                   required>

                            <small>
                                فرمت PDF یا Word، حداکثر حجم 5 مگابایت
                            </small>
                        </div>

                    </div>

                    <button type="submit" class="careers-btn careers-btn--submit">
                        ارسال درخواست همکاری
                    </button>

                </form>

            </div>

        </div>

    </section>

</main>

<?php get_footer(); ?>
