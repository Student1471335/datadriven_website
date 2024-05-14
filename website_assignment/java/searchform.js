function process(){
    var quizForm=document.getElementById("search");
    chosenOption=quizForm.colour.selectedIndex;
    alert(chosenOption);
    location=quizForm.colour[chosenOption].value
}

var btn = document.getElementById("finsearch");

btn.addEventListener("click", process, false)