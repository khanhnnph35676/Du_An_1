let str = document.querySelector('#str');
let store = document.querySelector('.store');

function click(button,content){
    button.addEventListener('click', function() {
        if (content.style.display === 'none') {
            content.style.display = 'block';
        } else {
            content.style.display = 'none';
        }
    });
}

let click_heat =document.querySelector('.click-heat');
let heat = document.querySelector('.heat');


let index = 0;
let autoImg;
function autoSlide(){
    // Truy cập vào vị trí ảnh
    let img = document.querySelectorAll(".slide");
     // điều kiện
    if(index >= img.length){
        index = 0;
    }
    if(index < 0){
        index = img.length - 1;
    }
    // chuyển tất cả ảnh về vị trí ẩn
    for(let i = 0; i < img.length; i++){
        img[i].style.display = "none";
    }
    img[index].style.display = "block";
    index++;
    // sau 2s nó tự gọi lại nó
    autoImg = setTimeout(autoSlide, 5000);
}

autoSlide();

     