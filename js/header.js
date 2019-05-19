

let menu_button = document.getElementsByClassName('hitem')[0];
let elem = document.getElementById("opensing");
let elem1 = document.getElementsByClassName("modal")[0];
let hitemnews = document.getElementsByClassName('itemnews');
function open_left_menu() {

    if (document.getElementsByClassName('leftbar')[0].classList.contains('clouseleftbar')) {

        document.getElementsByClassName('leftbar')[0].classList.remove("clouseleftbar");


        document.getElementsByClassName('content')[0].style = "margin: 0 auto;";
    }
    else {

        document.getElementsByClassName('leftbar')[0].classList.add("clouseleftbar");
        document.getElementsByClassName('content')[0].style = "margin: 0 auto;";
    }


}
function openmodal() {
    document.getElementsByClassName("modal-content")[0].style = ("display:block");
    document.getElementsByClassName("modal")[0].style = ("display:block");

}

function closemodal() {
    document.getElementsByClassName("modal-content")[0].style = ("display:none");
    document.getElementsByClassName("modal")[0].style = ("display:none;");

}
elem.onclick = openmodal;
elem1.onclick = closemodal;
menu_button.onclick = open_left_menu;
var input = document.getElementById("search-field");
input.oninput = function() {
    if(input.value==1)
    {
        document.getElementsByClassName('main-news')[0].style=("grid-column:4/13");
        document.getElementsByClassName('in-news ')[0].style=("grid-column:1/4");
    }
    else if(input.value==2)
    {
        document.getElementsByTagName('header')[0].style=("grid-row:3");

    }
    else
    {

        document.getElementsByClassName('main-news')[0].style=("grid-column:1/9");
        document.getElementsByClassName('in-news ')[0].style=("grid-column:9/13");
        document.getElementsByTagName('header')[0].style=("grid-row:1");
    }
};

