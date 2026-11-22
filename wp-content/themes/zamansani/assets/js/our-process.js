document.addEventListener("DOMContentLoaded", () => {

    if (!window.gsap || !window.ScrollTrigger) {
        console.error("GSAP or ScrollTrigger not loaded");
        return;
    }

    gsap.registerPlugin(ScrollTrigger);
    const section = document.querySelector(".our-process");
    const track = document.querySelector(".process-track");
    const truck = document.querySelector(".process-truck");
    const line = document.querySelector(".process-track__line");
    const progressLine = document.querySelector(".process-track__progress");
    const steps = gsap.utils.toArray(".process-step");

    if (!section || !track || !truck || !line || !progressLine || steps.length !== 5) {
        console.error("Our Process: elements missing");
        return;
    }

    let animation = null;
    let resizeTimer = null;

    function createAnimation() {

        // حذف انیمیشن قبلی
        if (animation) {
            animation.scrollTrigger?.kill();
            animation.kill();
            animation = null;
        }

        const trackRect = track.getBoundingClientRect();
        const lineRect = line.getBoundingClientRect();

        const trackWidth = track.clientWidth;
        const truckWidth = truck.offsetWidth;

        // محدوده مجاز حرکت کامیون
        const leftLimit =
            lineRect.left - trackRect.left + truckWidth / 2;

        const rightLimit =
            lineRect.right - trackRect.left - truckWidth / 2;

        let startCenter;
        let endCenter;


        const isMobile = window.innerWidth <= 768;
        startCenter = rightLimit;

        // پایان دقیقاً در انتهای خط در سمت چپ
        endCenter = leftLimit;

        // if (!isMobile) {

        //     // مرکز مرحله اول
        //     const firstRect = steps[0].getBoundingClientRect();

        //     // مرکز مرحله پنجم
        //     const lastRect = steps[4].getBoundingClientRect();

        //     startCenter =
        //         firstRect.left + firstRect.width / 2 - trackRect.left;

        //     endCenter =
        //         lastRect.left + lastRect.width / 2 - trackRect.left;

        //     // محدود کردن موقعیت کامیون
        //     startCenter = gsap.utils.clamp(
        //         leftLimit,
        //         rightLimit,
        //         startCenter
        //     );

        //     endCenter = gsap.utils.clamp(
        //         leftLimit,
        //         rightLimit,
        //         endCenter
        //     );

        // } else {

        //     // موبایل: حرکت افقی از راست به چپ
        //     startCenter = rightLimit;
        //     endCenter = leftLimit;

        // }
        // شروع و پایان دقیقاً روی ابتدا و انتهای خط
        startCenter = rightLimit;
        endCenter = leftLimit;
        
        // فاصله حرکت
        const distance = endCenter - startCenter;

        // محاسبه موقعیت کامیون
        gsap.set(truck, {
            position: "absolute",
            left: startCenter - truckWidth / 2,
            right: "auto",
            x: 0,
            autoAlpha: 1
        });

        // تنظیم خط پیشرفت دقیقاً بین نقطه شروع و پایان
        gsap.set(progressLine, {
            right: trackWidth - startCenter,
            left: endCenter,
            scaleX: 0,
            transformOrigin: "right center"
        });

        // حذف وضعیت قبلی مراحل
        steps.forEach(step => {
            step.classList.remove("is-active");
        });

        // تعیین زمان فعال شدن هر مرحله
        let thresholds;

        if (isMobile) {

            thresholds = [0, 0.25, 0.5, 0.75, 1];

        } else {

            thresholds = steps.map(step => {

                const rect = step.getBoundingClientRect();

                const center =
                    rect.left + rect.width / 2 - trackRect.left;

                return gsap.utils.clamp(
                    0,
                    1,
                    (startCenter - center) / (startCenter - endCenter)
                );

            });

        }

        // ساخت انیمیشن
        animation = gsap.timeline({

            scrollTrigger: {
                trigger: section,
                start: "top top",
                end: "bottom bottom",
                scrub: 1,
                invalidateOnRefresh: true,
                markers:false
            }

        });

        // حرکت کامیون
        animation.to(truck, {
            x: distance,
            ease: "none"
        }, 0);

        // حرکت خط سبز
        animation.to(progressLine, {
            scaleX: 1,
            ease: "none"
        }, 0);

        // هماهنگی مراحل با حرکت کامیون
        animation.eventCallback("onUpdate", () => {

            const progress = animation.progress();

            steps.forEach((step, index) => {

                step.classList.toggle(
                    "is-active",
                    progress >= thresholds[index] - 0.001
                );

            });

        });

        // تنظیم وضعیت اولیه
        animation.progress(0);
        ScrollTrigger.refresh();
    }

    // اجرای اولیه
    createAnimation();

    // تنظیم مجدد در تغییر اندازه صفحه
    window.addEventListener("resize", () => {

        clearTimeout(resizeTimer);

        resizeTimer = setTimeout(() => {
            createAnimation();
        }, 300);

    });

});
