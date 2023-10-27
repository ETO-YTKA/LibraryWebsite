const openPopUp = document.getElementById("openPopUp");
const closePopUp = document.getElementById("closePopUp");
const popUp = document.getElementById('popUp');

openPopUp.addEventListener('click', function (e){
    e.preventDefault()
    popUp.style.visibility = "visible";
})

closePopUp.addEventListener('click', function (e){
    e.preventDefault()
    popUp.style.visibility = "hidden";
})