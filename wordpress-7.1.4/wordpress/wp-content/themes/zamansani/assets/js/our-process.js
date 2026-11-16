// document.addEventListener("DOMContentLoaded", () => {

//     if (!window.gsap || !window.ScrollTrigger) {
//         console.error("GSAP or ScrollTrigger is not loaded.");
//         return;
//     }
//     gsap.registerPlugin(ScrollTrigger);
//     const section = document.querySelector(".our-process");
//     const truck = document.querySelector(".process-truck");
//     const progressLine = document.querySelector(".process-track__progress");
//     const track = document.querySelector(".process-track");
//     const steps = gsap.utils.toArray(".process-step");

//     if (!section || !truck || !track || !steps.length) {
//         return;
//     }

//     let animation;

//     function createAnimation() {

//         if (animation) {
//             animation.scrollTrigger?.kill();
//             animation.kill();
//         }

//         const trackWidth = track.clientWidth;
//         const truckWidth = truck.offsetWidth;

//         // فاصله حرکت کامیون از راست به چپ
//         const distance = trackWidth - truckWidth;

//         animation = gsap.timeline({
//             scrollTrigger: {
//                 trigger: section,
//                 start: "top 80%",
//                 end: "bottom 30%",
//                 scrub: 2 ,
//                 invalidateOnRefresh: true
//             }
//         });

//         animation.to(truck, {
//             x: -distance,
//             ease: "none"
//         }, 0);

//         animation.to(progressLine, {
//             scaleX: 1,
//             ease: "none"
//         }, 0);

//         animation.eventCallback("onUpdate", () => {

//             const progress = animation.progress();

//             steps.forEach((step, index) => {

//                 const threshold = index / (steps.length - 1);

//                 step.classList.toggle(
//                     "is-active",
//                     progress >= threshold
//                 );

//             });

//         });

//     }

//     createAnimation();

//     window.addEventListener("resize", () => {
//         createAnimation();
//         ScrollTrigger.refresh();
//     });

// });



// document.addEventListener("DOMContentLoaded", () => {

//     if (!window.gsap || !window.ScrollTrigger) {
//         console.error("GSAP or ScrollTrigger is not loaded.");
//         return;
//     }

//     gsap.registerPlugin(ScrollTrigger);

//     const section = document.querySelector(".our-process");
//     const truck = document.querySelector(".process-truck");
//     const progressLine = document.querySelector(".process-track__progress");
//     const track = document.querySelector(".process-track");
//     const steps = gsap.utils.toArray(".process-step");

//     if (!section || !truck || !track || !progressLine || !steps.length) {
//         console.error("Our Process elements not found.");
//         return;
//     }

//     let animation;

//     function createAnimation() {

//         // حذف انیمیشن قبلی
//         if (animation) {
//             animation.scrollTrigger?.kill();
//             animation.kill();
//         }

//         // پاک کردن وضعیت قبلی
//         steps.forEach(step => {
//             step.classList.remove("is-active");
//         });

//         // تنظیم اولیه کامیون
//         gsap.set(truck, {
//             x: 0,
//             opacity: 1,
//             visibility: "visible"
//         });

//         gsap.set(progressLine, {
//             scaleX: 0,
//             transformOrigin: "right center"
//         });

//         // اندازه مسیر و کامیون
//         const trackWidth = track.clientWidth;
//         const truckWidth = truck.offsetWidth;

//         // فاصله واقعی حرکت از ابتدا تا انتهای خط
//         // const distance = Math.max(
//         //     0,
//         //     trackWidth * 0.90 - truckWidth
//         // );
//         const distance = trackWidth * 0.25;

//         animation = gsap.timeline({
//             scrollTrigger: {
//                 trigger: section,
//                 start: "top 80%",
//                 end: "bottom 30%",
//                 scrub: 3,
//                 invalidateOnRefresh: true
//             }
//         });

//         // حرکت کامیون
//         // animation.to(truck, {
//         //     x: -distance,
//         //     ease: "none"
//         // }, 0);
//         animation.to(truck, {
//             x: -distance,
//             ease: "none"
//         }, 0);

//         // تکمیل خط مسیر
//         animation.to(progressLine, {
//             scaleX: 1,
//             ease: "none"
//         }, 0);

//         // هماهنگی فعال شدن مراحل با حرکت کامیون
//         animation.eventCallback("onUpdate", () => {

//             const progress = animation.progress();

//             steps.forEach((step, index) => {

//                 const threshold =
//                     index / (steps.length - 1);

//                 step.classList.toggle(
//                     "is-active",
//                     progress >= threshold
//                 );

//             });

//         });

//     }

//     // اجرای اولیه
//     createAnimation();

//     // اصلاح اندازه در تغییر ابعاد صفحه
//     let resizeTimer;

//     window.addEventListener("resize", () => {

//         clearTimeout(resizeTimer);

//         resizeTimer = setTimeout(() => {
//             createAnimation();
//             ScrollTrigger.refresh();
//         }, 200);

//     });

// });



document.addEventListener("DOMContentLoaded", () => {

    if (!window.gsap || !window.ScrollTrigger) {
        console.error("GSAP or ScrollTrigger is not loaded.");
        return;
    }

    gsap.registerPlugin(ScrollTrigger);

    const section = document.querySelector(".our-process");
    const track = document.querySelector(".process-track");
    const truck = document.querySelector(".process-truck");
    const progressLine = document.querySelector(".process-track__progress");
    const steps = gsap.utils.toArray(".process-step");

    if (!section || !track || !truck || !progressLine || !steps.length) {
        console.error("Our Process elements not found.");
        return;
    }

    let animation;
    let resizeTimer;

    function createAnimation() {

        // حذف انیمیشن قبلی
        if (animation) {
            animation.scrollTrigger?.kill();
            animation.kill();
        }

        const trackRect = track.getBoundingClientRect();
        const truckWidth = truck.offsetWidth;

        // مرکز واقعی مراحل نسبت به مسیر
        const stepCenters = steps.map(step => {
            const rect = step.getBoundingClientRect();

            return rect.left + rect.width / 2 - trackRect.left;
        });

        // مرحله اول و پنجم
        const startCenter = stepCenters[0];
        const endCenter = stepCenters[steps.length - 1];

        // موقعیت شروع و پایان کامیون
        const startX = startCenter - truckWidth / 2;
        const endX = endCenter - truckWidth / 2;

        const distance = endX - startX;

        // تعیین محل واقعی کامیون
        gsap.set(truck, {
            left: startX,
            right: "auto",
            x: 0,
            opacity: 1,
            visibility: "visible"
        });

        gsap.set(progressLine, {
            scaleX: 0,
            transformOrigin: "right center"
        });

        steps.forEach(step => {
            step.classList.remove("is-active");
        });

        animation = gsap.timeline({
            scrollTrigger: {
                trigger: section,
                start: "top 80%",
                end: "bottom 30%",
                scrub: 3,
                invalidateOnRefresh: true
            }
        });

        // حرکت واقعی کامیون از مرحله اول تا پنجم
        animation.to(truck, {
            x: distance,
            ease: "none"
        }, 0);

        // حرکت خط مسیر
        animation.to(progressLine, {
            scaleX: 1,
            ease: "none"
        }, 0);

        // هماهنگی مراحل با موقعیت کامیون
        animation.eventCallback("onUpdate", () => {

            const progress = animation.progress();

            steps.forEach((step, index) => {

                const threshold =
                    (startCenter - stepCenters[index]) /
                    (startCenter - endCenter);

                step.classList.toggle(
                    "is-active",
                    progress >= threshold
                );

            });

        });

    }

    // اجرای اولیه
    createAnimation();

    // تنظیم مجدد در تغییر اندازه
    window.addEventListener("resize", () => {

        clearTimeout(resizeTimer);

        resizeTimer = setTimeout(() => {
            createAnimation();
            ScrollTrigger.refresh();
        }, 250);

    });

});

