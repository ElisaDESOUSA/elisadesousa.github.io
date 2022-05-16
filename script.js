var myText = "développeuse web";

var myArray = myText.split(""); 

var timeLooper;

function loop(){
    if(myArray.length > 0) {
        document.getElementById('typewriter').innerHTML += myArray.shift();
    } else {
        clearTimeout(timeLooper);
    }
    timeLooper = setTimeout('loop()', 70);
}

loop()

