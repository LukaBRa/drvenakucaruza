const pocetnaDiv = document.querySelector("#pocetna");
const apartmaniDiv = document.querySelector("#apartmani");
const spaDiv = document.querySelector("#spa");
const togglePocetnaBtn = document.querySelector("#togglePocetna");
const toggleApartmaniBtn = document.querySelector("#toggleApartmani");
const toggleSpaBtn = document.querySelector("#toggleSpa");

togglePocetnaBtn.addEventListener("click", () => {
    togglePocetnaBtn.classList.add("active");
    toggleApartmaniBtn.classList.remove("active");
    toggleSpaBtn.classList.remove("active");
    pocetnaDiv.style.display = "block";
    apartmaniDiv.style.display = "none";
    spaDiv.style.display = "none";
});

toggleApartmaniBtn.addEventListener("click", () => {
    togglePocetnaBtn.classList.remove("active");
    toggleApartmaniBtn.classList.add("active");
    toggleSpaBtn.classList.remove("active");
    pocetnaDiv.style.display = "none";
    apartmaniDiv.style.display = "block";
    spaDiv.style.display = "none";
});

toggleSpaBtn.addEventListener("click", () => {
    togglePocetnaBtn.classList.remove("active");
    toggleApartmaniBtn.classList.remove("active");
    toggleSpaBtn.classList.add("active");
    pocetnaDiv.style.display = "none";
    apartmaniDiv.style.display = "none";
    spaDiv.style.display = "block";
});