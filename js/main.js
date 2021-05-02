const principlesSlider = new Swiper('.slider', {
    slidesPerView: 3,
    spaceBetween: 24,
    navigation: {
        nextEl: '.sec-5 .slider-nav .next',
        prevEl: '.sec-5 .slider-nav .prev',
        disabledClass: 'swiper-button-disabled',
    },
     breakpoints: {
         // when window width is >= 320px
         320: {
             slidesPerView: 1,
             spaceBetween: 12
         },
         // when window width is >= 480px
         600: {
             slidesPerView: 2,
             spaceBetween: 24
         },
         // when window width is >= 768px
         768: {
             slidesPerView: 2,
             spaceBetween: 24
         },
         1024: {
             slidesPerView: 3,
             spaceBetween: 24
         }
     }
});

const blogSlider = new Swiper('.posts', {
    slidesPerView: 3,
    spaceBetween: 24,
    navigation: {
        nextEl: '.sec-9 .posts-nav .next',
        prevEl: '.sec-9 .posts-nav .prev',
    },
    scrollbar: {
        el: '.posts-nav .progress',
        draggable: true,
    },
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 1,
            spaceBetween: 12
        },
        // when window width is >= 480px
        600: {
            slidesPerView: 2,
            spaceBetween: 24
        },
        // when window width is >= 768px
        768: {
            slidesPerView: 2,
            spaceBetween: 24
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 24
        }
    }
});


// Chart 
var ctx = document.getElementById('chart1').getContext("2d");;

var gradient = ctx.createLinearGradient(0, 0, 0, 400);
gradient.addColorStop(0, 'rgba(231, 25, 35, 0.1)');
gradient.addColorStop(1, 'rgba(231, 25, 35, 0)');

var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        datasets: [{
            data: [2, 5, 8, 12, 15],
            borderColor: '#E71923',
            color: '#E71923',
            pointBackgroundColor: '#fff',
            pointBorderColor: '#E71923',
            borderWidth: 2,
            pointBorderWidth: 2,
            fill: true,
            backgroundColor: gradient
        }],
        labels: ['2001', '2005', '2010', '2015', '2020'],
    },
    options: {
        responsive: true,
        elements: {
            line: {
                tension: 0.5,
            },
        },
        plugins: {
            legend: {
                display: false,
            },
            tooltip: {
                yAlign: 'bottom',
                intersect: false,
                enabled: true,
                displayColors: false,
                position: "nearest",
                backgroundColor: "transparent",
                titleColor: "#E71923",
                bodyColor: "#E71923",
                footerColor: "#E71923",
                titleAlign: "center",
                bodyAlign: "center",
                footerAlign: "center",
                callbacks: {
                    title: function (context) {
                            var title =  '';
                            return title;
                        },
                    label: function (context) {
                        var item = context.dataset.data.active || '';
                        if (context.parsed.y !== null) {
                            item = context.parsed.y;
                        }
                        return item + "%";
                    }
                    
                }
            }
        },
        scales: {
            x: {
                //display: false,
                title: {
                    display: false,
                },
                ticks: {
                    color: "#BDBDBD"
                },
                grid: {
                    //borderDash: [5, 5],
                    color: "transparent"
                }
            },
            y: {
                title: {
                    display: false,
                },
                min: 0,
                max: 20,
                ticks: {
                    stepSize: 10,
                    color: "#BDBDBD"
                },
                grid: {
                    borderColor: "transparent",
                    borderDash: [5, 5],
                    color: "#BDBDBD",
                    tickColor: "transparent"
                }
            }
        }
    },
});


function chartOne() {
    myChart.data.datasets[0].data = [2, 5, 8, 12, 15];
    myChart.options.scales.y.max = 20;
    myChart.options.scales.y.ticks.stepSize = 10;
    myChart.update();
}

function chartTwo() {
    myChart.data.datasets[0].data = [10, 16, 37, 44, 65];
    myChart.options.scales.y.max = 75;
    myChart.options.scales.y.ticks.stepSize = 15;
    myChart.update();
}

function scrollToBlog() {

    gsap.to(window, {
        duration: 2,
        scrollTo: {
            y: "#blog",
            offsetY: 128
        },
        ease: "power3.out"
    });

}

function scrollToSostav() {
    gsap.to(window, {
        duration: 2,
        scrollTo: {
            y: "#sostav",
            offsetY: 128
        },
        ease: "power3.out"
    });
}

let schema = document.querySelector('.schema-col');
//let width = schemaHeight.clientWidth;
//let height = schemaHeight.offsetHeight;

// height += parseInt(window.getComputedStyle(schemaHeight).getPropertyValue('margin-top'));
// height += parseInt(window.getComputedStyle(schemaHeight).getPropertyValue('margin-bottom'));
// height = window.innerHeight / 2 + 50;
//height = 224 + (window.innerWidth / 2);
var schemaHeight = schema.clientHeight + 128 + 96 + 80;
//var width = schemaHeight.width;

//console.log('/  height ' + height);

pcHeight = 250;