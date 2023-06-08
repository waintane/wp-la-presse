let boutonBurger = document.querySelector('.menu-burger');
let navigation = document.querySelector('.navigation');

boutonBurger.addEventListener('click', () => {
    console.log(navigation);
    if(document.querySelector(".menu-actif")){
        navigation.classList.remove("menu-actif");
        navigation.classList.add("menu-inactif")
    }else{
        navigation.classList.add("menu-actif");
        navigation.classList.remove("menu-inactif");
    }
})