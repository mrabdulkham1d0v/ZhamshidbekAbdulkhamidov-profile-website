window.addEventListener('scroll', (e) =>{
    var header = document.querySelector("header");
    //header.classList.toggle('sticky', window.scrollY > 0);
    if(window.scrollY == 0){
        // header.removeAttribute('display');
        header.style.display = "flex";
    }else if(window.scrollY >= 50){
        // header.removeAttribute('display');
        header.style.display = "none";
    }
});


function toggleMenu(){
    const menuToggle = document.querySelector('.toggle');
    const menu = document.querySelector('.menu');
    menuToggle.classList.toggle('active');
    menu.classList.toggle('active');
}
