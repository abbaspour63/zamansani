<?php
get_header();
?>
<main id="about-us" class="about-us">

    <!-- About Hero -->
    <section class="about-hero">
        <div class="about-hero__container">

            <div class="about-hero__content">
                <span class="about-hero__label">
                    ABOUT ZAMAN SANI
                </span>

                <h1>
                    درباره گروه بازاریابی
                    <span>زمان ثانی</span>
                </h1>

                <p>
                    همراه کسب‌وکارها در مسیر رشد،
                    توسعه و خلق فرصت‌های جدید.
                </p>

                <a href="<?php echo esc_url(home_url('/index.php/contact/')); ?>"
                   class="about-hero__button">
                    ارتباط با ما
                </a>
            </div>

        </div>
    </section>

  
<section class="about-location" dir="rtl">
    <div class="about-location__container">

        <div class="about-location__content">
            <span class="about-location__label">OUR LOCATION</span>

            <h2>
                حضور ما در
                <span>عراق و بصره</span>
            </h2>

            <p>
                گروه بازاریابی زمان ثانی در بصره عراق فعالیت می‌کند
                و در مسیر رشد و توسعه کسب‌وکارها همراه مشتریان خود است.
            </p>
        </div>

        <div class="about-location__map">
            <img
                src="<?php echo esc_url(
                    get_theme_file_uri('/assets/images/basre-map (1).png')
                ); ?>"
                alt="نقشه عراق و موقعیت استان بصره"
                loading="lazy"
            >
        </div>

    </div>
</section>

<section class="about-location" dir="rtl">

    <div class="about-location__container">

        <div class="about-location__content">
            <span class="about-location__label">OUR LOCATION</span>

            <h2>
                از عراق تا بصره
                <span>همراه رشد کسب‌وکارها</span>
            </h2>

            <p>
                گروه بازاریابی زمان ثانی در بصره عراق فعالیت می‌کند
                و در مسیر توسعه و رشد کسب‌وکارها همراه مشتریان خود است.
            </p>
        </div>

        <div class="about-location__images">

            <!-- <div class="about-location__map">
                <img
                    src="<?php echo esc_url(get_theme_file_uri('/assets/images/basre-map(.png')); ?>"
                    alt="نقشه عراق و استان بصره"
                    loading="lazy"
                >
            </div> -->

            <div class="about-location__basra">
                <img
                    src="<?php echo esc_url(get_theme_file_uri('/assets/images/waterfront.png')); ?>"
                    alt="بصره و شط العرب"
                    loading="lazy"
                >
            </div>

        </div>

    </div>

</section>



</main>

<?php
get_footer();
?>

