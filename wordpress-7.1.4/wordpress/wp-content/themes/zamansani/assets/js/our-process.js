document.addEventListener("DOMContentLoaded", () => {

    if (!window.gsap || !window.ScrollTrigger) {
        console.error("GSAP or ScrollTrigger not loaded");
        return;
    }
    gsap.registerPlugin(ScrollTrigger);
    const section = document.querySelector(".our-process");
    const car = document.querySelector(".process-car");
    const steps = gsap.utils.toArray(".process-step");
    const line = document.querySelector(".process-line");
    const track = document.querySelector(".process-track"); 
    
    if (!section || !car || !steps.length || !line) return;
    gsap.set(car, { x:0 });
    gsap.set(steps, { opacity: 0, y: 35 });
    gsap.set(line, { scaleX: 1, transformOrigin: "right right" });
    const timeline = gsap.timeline({
        scrollTrigger: {
            trigger: section,
            start: "top 75%",
            end: "bottom 65%",
            scrub: 1
        }
    });

    timeline
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                .to(line, {
            scaleX: 1,
            duration: 2
        })
        .to(car, {
            x: () => section.querySelector(".process-track").offsetWidth - car.offsetWidth,
            duration: 5,
            ease: "none"
        }, 0)
        .to(steps, {
            opacity: 1,
            y: 0,
            stagger: 0.6,
            duration: 1
        }, 0.5);

});

function getPositions() {
    const trackRect = track.getBoundingClientRect();
    const carWidth = car.offsetWidth;
    
    return steps.map(step => {
        const rect = step.getBoundingClientRect();

        return (
            rect.right -
            trackRect.left -
            rect.width / 2 -
            carWidth / 2
        );
    });
}
let positions = getPositions();

gsap.set(car, {
    x: positions[0]
});


