var msg = '  ____投稿写真ページ____     ';
let msg2 = msg;
var speed = 500;
var move = 1;
var i=0;
let finish_time;
a = document.getElementById("text");

function disp() {

    msg = msg.substring(move, msg.length) + msg.substring(0, move);
    a.innerText = msg.substring(0, 12);
    i = i+1;
    if(i==15){
        a.innerText = msg2;
        return;
    }
    finish_time = setTimeout("disp()", speed);
}

window.onload = function() {
    disp();
};