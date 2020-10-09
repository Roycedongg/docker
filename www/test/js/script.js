var slideIndex = 0;
showSlide(slideIndex);
var totalSlides = 0;

function showSlide(slideIndex) {
    var slides = document.getElementsByClassName("home-slides");
    totalSlides = slides.length;
    slides[slideIndex].style.display = "block";
}

function hideSlide(slideIndex) {
    var slides = document.getElementsByClassName("home-slides");
    totalSlides = slides.length;
    slides[slideIndex].style.display = "none";
}

$('#pre-slide').click(function(event){
    hideSlide(slideIndex);
    if (slideIndex - 1 < 0 ) {
        slideIndex = totalSlides - 1;

    } else {
        slideIndex -= 1;
    }
    showSlide(slideIndex);
});    


$('#next-slide').click(function(event){
    hideSlide(slideIndex);
    if (slideIndex + 1 >= totalSlides ) {
        slideIndex = 0;

    } else {
        slideIndex += 1;
    }
    showSlide(slideIndex);
});    








/****************dropdown menu********************/
$('#motor-drop').mouseover(function(event){
    var content = document.getElementsByClassName("drop-content");
    content[0].style.display = "block";
    var contentBtn = document.getElementsByClassName("dropbtn");
    contentBtn[0].style.backgroundColor = "#f2f2f2";
    contentBtn[0].style.color = "#ff4604";
    contentBtn[0].style.borderRight = "1px solid #ff7504";
    contentBtn[0].style.borderLeft = "1px solid #ff7504";
});

$('#motor-drop').mouseout(function(event){
    var content = document.getElementsByClassName("drop-content");
    content[0].style.display = "none";
    var contentBtn = document.getElementsByClassName("dropbtn");
    contentBtn[0].style.backgroundColor = "#ff7504";
    contentBtn[0].style.color = "#f2f2f2";
    contentBtn[0].style.borderRight = "none";
    contentBtn[0].style.borderLeft = "none";
});

$('#furn-drop').mouseover(function(event){
    var content = document.getElementsByClassName("drop-content");
    content[1].style.display = "block";
    var contentBtn = document.getElementsByClassName("dropbtn");
    contentBtn[1].style.backgroundColor = "#f2f2f2";
    contentBtn[1].style.color = "#ff4604";
    contentBtn[1].style.borderRight = "1px solid #ff7504";
    contentBtn[1].style.borderLeft = "1px solid #ff7504";
});

$('#furn-drop').mouseout(function(event){
    var content = document.getElementsByClassName("drop-content");
    content[1].style.display = "none";
    var contentBtn = document.getElementsByClassName("dropbtn");
    contentBtn[1].style.backgroundColor = "#ff7504";
    contentBtn[1].style.color = "#f2f2f2";
    contentBtn[1].style.borderRight = "none";
    contentBtn[1].style.borderLeft = "none";
});

$('#electronic-drop').mouseover(function(event){
    var content = document.getElementsByClassName("drop-content");
    content[2].style.display = "block";
    var contentBtn = document.getElementsByClassName("dropbtn");
    contentBtn[2].style.backgroundColor = "#f2f2f2";
    contentBtn[2].style.color = "#ff4604";
    contentBtn[2].style.borderRight = "1px solid #ff7504";
    contentBtn[2].style.borderLeft = "1px solid #ff7504";
});

$('#electronic-drop').mouseout(function(event){
    var content = document.getElementsByClassName("drop-content");
    content[2].style.display = "none";
    var contentBtn = document.getElementsByClassName("dropbtn");
    contentBtn[2].style.backgroundColor = "#ff7504";
    contentBtn[2].style.color = "#f2f2f2";
    contentBtn[2].style.borderRight = "none";
    contentBtn[2].style.borderLeft = "none";
});

  