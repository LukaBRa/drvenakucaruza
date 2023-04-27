const carousel = document.querySelector(".ccarousel");

var images = [
    /* "images/album/1.JPG",
    "images/album/2.JPG",
    "images/album/3.jpg",
    "images/album/4.jpg",
    "images/album/5.jpg",
    "images/album/6.jpg",
    "images/album/7.jpg",
    "images/album/8.jpg", */
];

$(document).ready(() => {
    $.ajax({
        url: "php/controllers/getAlbumImages.php",
        type: "GET",
        data: {},
        success: (response) => {
            let data = JSON.parse(response);
            for(let i=0; i < data.length; i++){
                images.push(`images/album/${data[i].filename}`);
            }
            var counter = 0;

            carousel.style.backgroundImage = `url('${images[counter]}')`;

            const leftIndicator = document.querySelector("#left-indicator");
            const rightIndicator = document.querySelector("#right-indicator");

            leftIndicator.addEventListener("click", () => {
                counter--;
                if(counter < 0){
                    counter = images.length - 1;
                }
                carousel.style.backgroundImage = `url(${images[counter]})`;
            });

            rightIndicator.addEventListener("click", () => {
                counter++;
                if(counter > images.length - 1){
                    counter = 0;
                }
                carousel.style.backgroundImage = `url(${images[counter]})`;
            });
        }
    })
})


/* var counter = 0;

carousel.style.backgroundImage = `url(${images[counter]})`;

const leftIndicator = document.querySelector("#left-indicator");
const rightIndicator = document.querySelector("#right-indicator");

leftIndicator.addEventListener("click", () => {
    counter--;
    if(counter < 0){
        counter = images.length - 1;
    }
    carousel.style.backgroundImage = `url(${images[counter]})`;
});

rightIndicator.addEventListener("click", () => {
    counter++;
    if(counter > images.length - 1){
        counter = 0;
    }
    carousel.style.backgroundImage = `url(${images[counter]})`;
}); */

