const apartmaniBtns = document.querySelectorAll(".apartman-btn");
const apartman1Btn = document.querySelector(".button-1");
const apartman2Btn = document.querySelector(".button-2");
const apartman3Btn = document.querySelector(".button-3");
const apartman4Btn = document.querySelector(".button-4");
const apartman1 = document.querySelector(".apartman-1");
const apartman2 = document.querySelector(".apartman-2");
const apartman3 = document.querySelector(".apartman-3");
const apartman4 = document.querySelector(".apartman-4");

apartman1Btn.addEventListener("click", () => {
    apartman1.style.display = "block";
    apartman2.style.display = "none";
    apartman3.style.display = "none";
    apartman4.style.display = "none";
    apartmaniBtns.forEach((btn) => {
        if(btn.classList.contains("button-1")){
            btn.classList.add("active");
        }else{
            btn.classList.remove("active");
        }
    });
});

apartman2Btn.addEventListener("click", () => {
    apartman1.style.display = "none";
    apartman2.style.display = "block";
    apartman3.style.display = "none";
    apartman4.style.display = "none";
    apartmaniBtns.forEach((btn) => {
        if(btn.classList.contains("button-2")){
            btn.classList.add("active");
        }else{
            btn.classList.remove("active");
        }
    });
});

apartman3Btn.addEventListener("click", () => {
    apartman1.style.display = "none";
    apartman2.style.display = "none";
    apartman3.style.display = "block";
    apartman4.style.display = "none";
    apartmaniBtns.forEach((btn) => {
        if(btn.classList.contains("button-3")){
            btn.classList.add("active");
        }else{
            btn.classList.remove("active");
        }
    });
});

apartman4Btn.addEventListener("click", () => {
    apartman1.style.display = "none";
    apartman2.style.display = "none";
    apartman3.style.display = "none";
    apartman4.style.display = "block";
    apartmaniBtns.forEach((btn) => {
        if(btn.classList.contains("button-4")){
            btn.classList.add("active");
        }else{
            btn.classList.remove("active");
        }
    });
});
