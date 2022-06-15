let menuBtn = document.querySelector('.menu-open');
let menu = document.querySelector('.menu-span');
menuBtn.addEventListener('click', function(){
    menuBtn.classList.toggle('act');
    menu.classList.toggle('act');
})
document.querySelector('study2').onclick=function(){
    alert ('Привет говно');
}
