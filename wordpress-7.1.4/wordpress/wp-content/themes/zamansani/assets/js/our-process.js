document.addEventListener("DOMContentLoaded", () => {

    if (!window.gsap || !window.ScrollTrigger) return;

    gsap.registerPlugin(ScrollTrigger);

    const section = document.querySelector(".our-process");
    const track = document.querySelector(".process-track");
    const truck = document.querySelector(".process-truck");
    const progressLine = document.querySelector(".process-track__progress");
    const line = document.querySelector(".process-track__line");
    const steps = gsap.utils.toArray(".process-step");

    if (!section || !track || !truck || !line || !progressLine || steps.length !== 5) {
        console.error("Our Process: elements missing");
        return;
    }

    let animation;
    let resizeTimer;

    function createAnimation() {

        if (animation) {
            animation.scrollTrigger?.kill();
            animation.kill();
        }

        const trackRect = track.getBoundingClientRect();
        const lineStyle = getComputedStyle(line);

        const rightInset = parseFloat(lineStyle.right);
        const leftInset = parseFloat(lineStyle.left);
        const truckWidth = truck.offsetWidth;

        const minCenter = leftInset + truckWidth / 2;
        const maxCenter = track.clientWidth - rightInset - truckWidth / 2;

        let startCenter;
        let endCenter;

        if (window.innerWidth > 768) {

            // مرکز کارت اول و پنجم
            const firstRect = steps[0].getBoundingClientRect();
            const lastRect = steps[4].getBoundingClientRect();

            startCenter = firstRect.left + firstRect.width / 2 - trackRect.left;
            endCenter = lastRect.left + lastRect.width / 2 - trackRect.left;

            // جلوگیری از خروج کامیون از مسیر
            startCenter = Math.max(minCenter, Math.min(maxCenter, startCenter));
            endCenter = Math.max(minCenter, Math.min(maxCenter, endCenter));

        } else {

            // موبایل: حرکت روی مسیر افقی
            startCenter = maxCenter;
            endCenter = minCenter;

        }

        const startLeft = startCenter - truckWidth / 2;
        const distance = endCenter - startCenter;

        gsap.set(truck, {
            left: startLeft,
            right: "auto",
            x: 0,
            autoAlpha: 1
        });

        gsap.set(progressLine, {
            scaleX: 0,
            transformOrigin: "right center"
        });

        steps.forEach(step => step.classList.remove("is-active"));

        animation = gsap.timeline({
            scrollTrigger: {
                trigger: section,
                start: "top 80%",
                end: "bottom 30%",
                scrub: 1,
                invalidateOnRefresh: true
            }
        });

        animation.to(truck, {
            x: distance,
            ease: "none"
        }, 0);

        animation.to(progressLine, {
            scaleX: 1,
            ease: "none"
        }, 0);

        animation.eventCallback("onUpdate", () => {

            const progress = animation.progress();

            steps.forEach((step, index) => {

                const threshold = index / 4;

                step.classList.toggle(
                    "is-active",
                    progress >= threshold
                );

            });

        });

    }

    createAnimation();

    window.addEventListener("resize", () => {

        clearTimeout(resizeTimer);

        resizeTimer = setTimeout(() => {
            createAnimation();
            ScrollTrigger.refresh();
        }, 300);

    });

});
