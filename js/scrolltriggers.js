
ScrollTrigger.matchMedia({

    // desktop
    "(min-width: 1024px)": function () {

        var sec1 = gsap.timeline({
            scrollTrigger: {
                trigger: ".sec-1",
                scrub: 2,
                start: "top top",
                end: "+=100%"
            }
        });

        sec1.to(".sec-1 button", {
            y: -64,
            ease: "power3.out"
        }, 0);

        sec1.to(".sec-1 .bg img", {
            y: 64,
            scale: 1.2,
            ease: "power3.out"
        }, 0);

        // gsap
        //     .fromTo(".sec-3 .schema-col", {
        //         yPercent: 10
        //     }, {
        //         scrollTrigger: {
        //             trigger: ".sec-3",
        //             scrub: 1,
        //             start: "top top",
        //             end: "+=100% +=100%",
        //             pin: ".sec-3 .schema-col",
        //             pinSpacing: false,
        //             //markers: true
        //         },
        //         yPercent: 15,
        //         ease: "power3.out"
        //     }, 0);

        var sec7 = gsap.timeline({
            scrollTrigger: {
                trigger: ".sec-7",
                scrub: 2,
                start: "+=65% bottom",
                end: "+=100%"
            }
        });

        sec7
            .from(".sec-7 .alfeco", {
                y: 32,
                ease: "power3.out"
            }, 0)
            .to(".sec-7 .alfeco", {
                y: -16,
                ease: "power3.out"
            }, 0);

        sec7
            .from(".sec-7 .save96", {
                y: -8,
                ease: "power3.out"
            }, 0)
            .to(".sec-7 .save96", {
                y: 32,
                ease: "power3.out"
            }, 0);

        sec7
            .from(".sec-7 .allest", {
                y: -32,
                ease: "power3.out"
            }, 0)
            .to(".sec-7 .allest", {
                y: 64,
                ease: "power3.out"
            }, 0);
    },

    // mobile
    "(max-width: 480px)": function () {
    //     gsap
    //         .fromTo(".sec-3 .schema-col", {
    //             yPercent: 10
    //         }, {
    //             scrollTrigger: {
    //                 trigger: ".sec-3",
    //                 scrub: 1,
    //                 start: "top top",
    //                 end: "+=100% +=50%",
    //                 pin: ".sec-3 .schema-col",
    //                 pinSpacing: false,
    //                 //markers: true
    //             },
    //             yPercent: 15,
    //             ease: "power3.out"
    //         }, 0);
    },

    // all 
    "all": function () {
        
    }
});