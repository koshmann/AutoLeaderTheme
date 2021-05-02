window.onscroll = function () {
    stickHeader()
};

var header = document.getElementById("header");
var sticky = header.offsetTop;

function stickHeader() {
    if (window.pageYOffset > sticky) {
        header.classList.add("stuck");
    } else {
        header.classList.remove("stuck");
    }
};


window.onload = function() {

    document.getElementById('contact-phone').onclick = function() {
        var cleave1 = new Cleave('#contact-phone', {
            prefix: '+7',
            numericOnly: true,
            delimiters: [ ' (' , ') ' , ' ', '-', '-' ],
            blocks: [2, 3, 3, 2, 2],
        });
    };

    document.getElementById('tender-phone').onclick = function() {
        var cleave1 = new Cleave('#tender-phone', {
            prefix: '+7',
            numericOnly: true,
            delimiters: [ ' (' , ') ' , ' ', '-', '-' ],
            blocks: [2, 3, 3, 2, 2],
        });
    };

    document.getElementById('price-phone').onclick = function() {
        var cleave1 = new Cleave('#price-phone', {
            prefix: '+7',
            numericOnly: true,
            delimiters: [ ' (' , ') ' , ' ', '-', '-' ],
            blocks: [2, 3, 3, 2, 2],
        });
    };

}

