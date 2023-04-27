
const ap1Slike = [
    /* "../images/ap1/1.jpeg",
    "../images/ap1/2.jpeg",
    "../images/ap1/3.jpeg",
    "../images/ap1/4.jpeg",
    "../images/ap1/5.jpeg",
    "../images/ap1/6.jpeg",
    "../images/ap1/7.jpg",
    "../images/ap1/8.jpg",
    "../images/ap1/9.jpg",
    "../images/ap1/10.jpg",
    "../images/ap1/11.jpg",
    "../images/ap1/12.jpg",
    "../images/ap1/13.jpg",
    "../images/ap1/14.jpg", */
];

const ap2Slike = [
    /* "../images/ap2/1.JPG",
    "../images/ap2/2.jpg",
    "../images/ap2/3.jpg",
    "../images/ap2/4.jpg",
    "../images/ap2/5.jpg",
    "../images/ap2/6.jpg",
    "../images/ap2/7.jpg",
    "../images/ap2/8.jpg",
    "../images/ap2/9.jpg",
    "../images/ap2/10.jpg",
    "../images/ap2/11.jpg",
    "../images/ap2/12.jpg",
    "../images/ap2/13.jpg", */
];

const ap3Slike = [
    /* "../images/ap3/1.JPG",
    "../images/ap3/2.JPG",
    "../images/ap3/3.jpg",
    "../images/ap3/4.jpg",
    "../images/ap3/5.jpg",
    "../images/ap3/6.jpg",
    "../images/ap3/7.jpg",
    "../images/ap3/8.jpg", */
];

const ap4Slike = [
    /* "../images/ap4/1.JPG",
    "../images/ap4/2.JPG",
    "../images/ap4/3.jpg",
    "../images/ap4/4.jpg",
    "../images/ap4/5.jpg",
    "../images/ap4/6.jpg",
    "../images/ap4/7.jpg",
    "../images/ap4/8.jpg",
    "../images/ap4/9.jpg",
    "../images/ap4/10.jpg" */
];

$(document).ready(() => {
    $.ajax({
        url: "php/controllers/getApartmanImages.php",
        type: "GET",
        data: {apartmanNum: "1"},
        success: (response) => {
            let data = JSON.parse(response);
            for(let i=0; i < data.length; i++){
                ap1Slike.push(`images/ap1/${data[i].filename}`);
            }
            const slider1 = document.querySelector("#ap1");
            const ap1Left = document.querySelector("#ap1-left");
            const ap1Right = document.querySelector("#ap1-right");
            var counter1 = 0;
            slider1.style.backgroundImage = `url(${ap1Slike[0]})`;
            ap1Left.addEventListener("click", () => {
                counter1--;
                if(counter1 < 0){
                    counter1 = ap1Slike.length - 1;
                }
                slider1.style.backgroundImage = `url(${ap1Slike[counter1]})`;
            });
            ap1Right.addEventListener("click", () => {
                counter1++;
                if(counter1 > ap1Slike.length - 1){
                    counter1 = 0;
                }
                slider1.style.backgroundImage = `url(${ap1Slike[counter1]})`;
            });
        }
    })

    $.ajax({
        url: "php/controllers/getApartmanImages.php",
        type: "GET",
        data: {apartmanNum: "2"},
        success: (response) => {
            let data = JSON.parse(response);
            for(let i=0; i < data.length; i++){
                ap2Slike.push(`images/ap2/${data[i].filename}`);
            }
            const slider2 = document.querySelector("#ap2");
            const ap2Left = document.querySelector("#ap2-left");
            const ap2Right = document.querySelector("#ap2-right");
            var counter2 = 0;
            slider2.style.backgroundImage = `url(${ap2Slike[0]})`;
            ap2Left.addEventListener("click", () => {
                counter2--;
                if(counter2 < 0){
                    counter2 = ap2Slike.length - 1;
                }
                slider2.style.backgroundImage = `url(${ap2Slike[counter2]})`;
            });
            ap2Right.addEventListener("click", () => {
                counter2++;
                if(counter2 > ap2Slike.length - 1){
                    counter2 = 0;
                }
                slider2.style.backgroundImage = `url(${ap2Slike[counter2]})`;
            });
        }
    })

    $.ajax({
        url: "php/controllers/getApartmanImages.php",
        type: "GET",
        data: {apartmanNum: "3"},
        success: (response) => {
            let data = JSON.parse(response);
            for(let i=0; i < data.length; i++){
                ap3Slike.push(`images/ap3/${data[i].filename}`);
            }
            const slider3 = document.querySelector("#ap3");
            const ap3Left = document.querySelector("#ap3-left");
            const ap3Right = document.querySelector("#ap3-right");
            var counter3 = 0;
            slider3.style.backgroundImage = `url(${ap3Slike[0]})`;
            ap3Left.addEventListener("click", () => {
                counter3--;
                if(counter3 < 0){
                    counter3 = ap3Slike.length - 1;
                }
                slider3.style.backgroundImage = `url(${ap3Slike[counter3]})`;
            });
            ap3Right.addEventListener("click", () => {
                counter3++;
                if(counter3 > ap2Slike.length - 1){
                    counter3 = 0;
                }
                slider3.style.backgroundImage = `url(${ap3Slike[counter3]})`;
            });
        }
    })

    $.ajax({
        url: "php/controllers/getApartmanImages.php",
        type: "GET",
        data: {apartmanNum: "4"},
        success: (response) => {
            let data = JSON.parse(response);
            for(let i=0; i < data.length; i++){
                ap4Slike.push(`images/ap4/${data[i].filename}`);
            }
            const slider4 = document.querySelector("#ap4");
            const ap4Left = document.querySelector("#ap4-left");
            const ap4Right = document.querySelector("#ap4-right");
            var counter4 = 0;
            slider4.style.backgroundImage = `url(${ap4Slike[0]})`;
            ap4Left.addEventListener("click", () => {
                counter4--;
                if(counter4 < 0){
                    counter4 = ap4Slike.length - 1;
                }
                slider4.style.backgroundImage = `url(${ap4Slike[counter4]})`;
            });
            ap4Right.addEventListener("click", () => {
                counter4++;
                if(counter4 > ap2Slike.length - 1){
                    counter4 = 0;
                }
                slider4.style.backgroundImage = `url(${ap4Slike[counter4]})`;
            });
        }
    })

})

