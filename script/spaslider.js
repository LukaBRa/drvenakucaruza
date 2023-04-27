
const spaSlike = [
    /* "../images/spa/1.JPG",
    "../images/spa/2.jpg",
    "../images/spa/3.jpg",
    "../images/spa/4.jpg",
    "../images/spa/5.jpg",
    "../images/spa/6.jpg",
    "../images/spa/7.jpg",
    "../images/spa/8.jpg",
    "../images/spa/9.jpg",
    "../images/spa/10.jpg", */
];

$(document).ready(() => {
    $.ajax({
        url: "php/controllers/getAlbumImages.php",
        type: "GET",
        data: {apartmanNum: "5"},
        success: (response) => {
            let data = JSON.parse(response);
            for(let i=0; i < data.length; i++){
                spaSlike.push(`images/spa/${data[i].filename}`);
            }
            const spaSlider = document.querySelector(".spa-slider");
            const spaIndicatorLeft = document.querySelector(".indicator-left");
            const spaIndicatorRight = document.querySelector(".indicator-right");
            var counter = 0;

            spaSlider.style.backgroundImage = `url(${spaSlike[0]})`;

            spaIndicatorLeft.addEventListener("click", () => {
                counter--;
                if(counter < 0){
                    counter = spaSlike.length - 1;
                }
                spaSlider.style.backgroundImage = `url(${spaSlike[counter]})`;
            });

            spaIndicatorRight.addEventListener("click", () => {
                counter++;
                if(counter > spaSlike.length - 1){
                    counter = 0;
                }
                spaSlider.style.backgroundImage = `url(${spaSlike[counter]})`;
            });
        }
    })
})