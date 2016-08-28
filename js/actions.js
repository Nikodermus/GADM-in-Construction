// SudoSlider
$(document).ready(function () {
    var sudoSlider = $("#slider").sudoSlider({
        effect: "fade",
        auto: false,
        prevNext: false,
        customLink: '.customLink',
        useCSS: false,
        controlsFadeSpeed: '0',
    });
});

//Timing ends, must be the last code

var end = new Date();
var endTime = end.getTime();
var timeTaken = end - start;
console.log('Execution time is : ' + timeTaken);