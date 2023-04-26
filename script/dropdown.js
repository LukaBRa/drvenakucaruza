const dropdownBtn = document.querySelector(".drop-button");
const dropdownMenu = document.querySelector(".drop-menu");

dropdownBtn.addEventListener("click", () => {
    if(dropdownMenu.style.display == "flex"){
        dropdownMenu.style.display = "none";
    }else{
        dropdownMenu.style.display = "flex";
    }
});

const dropdownBtnSm = document.querySelector(".drop-button-sm");
const dropdownMenuSm = document.querySelector(".drop-menu-sm");

dropdownBtnSm.addEventListener("click", () => {
    if(dropdownMenuSm.style.display == "flex"){
        dropdownMenuSm.style.display = "none";
    }else{
        dropdownMenuSm.style.display = "flex";
    }
});

const toggler = document.querySelector(".toggle");
const navMenuSm = document.querySelector(".nav-menu-sm");

toggler.addEventListener("click", () => {
    if(navMenuSm.classList.contains("visible")){
        navMenuSm.classList.remove("visible");
    }else{
        navMenuSm.classList.add("visible");
    }
})