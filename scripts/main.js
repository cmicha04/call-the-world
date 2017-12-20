

$('.timepicker').timepicker({
    timeFormat: 'h:mm p',
    interval: 60,
    minTime: '10',
    maxTime: '6:00pm',
    defaultTime: '11',
    startTime: '10:00',
    dynamic: false,
    dropdown: true,
    scrollbar: true
});

$(document).ready({
    $('input.timepicker').timepicker({
        change: function(time) {
            // the input field
            var element = $(this), text;
            // get access to this Timepicker instance
            var timepicker = element.timepicker();
            text = 'Selected time is: ' + timepicker.format(time);
            element.siblings('span.help-line').text(text);
        }
    });
});

/*function printTime(){
	var d = new Date();
	var hours = d.getHours();
	var mins = d.getMinutes();
	var secs = d. getSeconds();
	document.body.innerHTML = hours+":"+mins+":"+secs;
}

setInterval(printTime,1000);

*/

(function() {
	"use strict";




})();