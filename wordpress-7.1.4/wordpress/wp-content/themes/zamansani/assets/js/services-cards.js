
document.addEventListener("DOMContentLoaded", () => {

    if (!window.gsap || !window.ScrollTrigger) {
        console.error("GSAP or ScrollTrigger not loaded");
        return;
    }

    gsap.registerPlugin(ScrollTrigger);

    const section = document.querySelector(".zs-services-cards");

    if (!section) return;

    const cards = gsap.utils.toArray(
        section.querySelectorAll(".zs-service-card")
    );

    if (!cards.length) return;

    const reducedMotion = window.matchMedia(
        "(prefers-reduced-motion: reduce)"
    ).matches;

    if (reducedMotion) return;

    // ورود سه‌بعدی کارت‌ها
    gsap.set(cards, {
        opacity: 0,
        y: 70,
        scale: 0.88,
        rotateX: 12,
        transformPerspective: 1000,
        transformOrigin: "center bottom"
    });

    gsap.to(cards, {
        opacity: 1,
        y: 0,
        scale: 1,
        rotateX: 0,
        duration: 1.1,
        stagger: {
            each: 0.18,
            from: "end"
        },
        ease: "power3.out",
        clearProps: "transform,opacity",

        scrollTrigger: {
            trigger: section,
            start: "top 80%",
            once: true
        }
    });

    // افکت نور و حرکت سه‌بعدی
    const desktop = window.matchMedia(
        "(hover: hover) and (pointer: fine)"
    ).matches;

    if (desktop) {

        cards.forEach((card) => {

            // card.addEventListener("pointermove", (event) => {

            //     const rect = card.getBoundingClientRect();

            //     const x = event.clientX - rect.left;
            //     const y = event.clientY - rect.top;

            //     card.style.setProperty("--mouse-x", `${x}px`);
            //     card.style.setProperty("--mouse-y", `${y}px`);

            //     const rotateY = ((x - rect.width / 2) / (rect.width / 2)) * 5;
            //     const rotateX = ((rect.height / 2 - y) / (rect.height / 2)) * 5;

            //     gsap.to(card, {
            //         rotateX,
            //         rotateY,
            //         duration: 0.4,
            //         ease: "power2.out",
            //         overwrite: "auto"
            //     });

            // });


            card.addEventListener("pointermove", (event) => {

                const rect = card.getBoundingClientRect();

                const x = event.clientX - rect.left;
                const y = event.clientY - rect.top;

                const percentX = (x / rect.width) * 2 - 1;
                const percentY = (y / rect.height) * 2 - 1;

                // نور دنبال‌کننده
                card.style.setProperty("--mouse-x", `${x}px`);
                card.style.setProperty("--mouse-y", `${y}px`);

                // چرخش سه‌بعدی قوی‌تر
                gsap.to(card, {
                    rotateY: percentX * 16,
                    rotateX: percentY * -12,
                    scale: 1.04,
                    duration: 0.35,
                    ease: "power2.out",
                    overwrite: "auto"
                });

            });

            // card.addEventListener("pointerleave", () => {

            //     gsap.to(card, {
            //         rotateX: 0,
            //         rotateY: 0,
            //         duration: 0.6,
            //         ease: "power2.out",
            //         overwrite: "auto"
            //     });

            // });

            card.addEventListener("pointerleave", () => {

                gsap.to(card, {
                    rotateX: 0,
                    rotateY: 0,
                    scale: 1,
                    duration: 0.8,
                    ease: "elastic.out(1, 0.5)",
                    overwrite: "auto"
                });

            });

        });
    }

    console.log("ZamanSani Services Motion Ready:", cards.length);

});
