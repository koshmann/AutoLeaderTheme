
var postEntryHeader = gsap.timeline({
    scrollTrigger: {
        trigger: ".entry-header",
        scrub: 2,
        start: "top top",
        end: "+=100%"
    }
});


postEntryHeader.to(".entry-header .bg img", {
    y: 64,
    scale: 1.2,
    ease: "power3.out"
}, 0);

