var deadline = new Date("April 17, 2023 15:37:25").getTime();
var x = setInterval(function() {
var now = new Date().getTime();
var t = deadline - now;
var days = Math.floor(t / (1000 * 60 * 60 * 24));
var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60));
var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
var seconds = Math.floor((t % (1000 * 60)) / 1000);

document.getElementById("time").innerHTML = days + " dní " 
+ hours + " hodin " + minutes + " minut " + seconds + " sekund ";
    if (t < 0) {
        clearInterval(x);
        document.getElementById("time").innerHTML = "Aplikace je vydaná!";
    }
}, 1000);