let images, currentIndex;

function showSlide(index) {
    images.forEach((image) => {
        image.classList.remove("active");
    });
    images[index].classList.add("active");
    currentIndex = index;
}

function prevPicture() {
    if (currentIndex <= 0) {
        showSlide(0);
    } else {
        showSlide(currentIndex - 1);
    }
}

function nextPicture() {
    if (currentIndex >= images.length - 1) {
        showSlide(images.length - 1);
    } else {
        showSlide(currentIndex + 1);
    }
}

document.addEventListener("DOMContentLoaded", () => {
    images = document.querySelectorAll("#picture-gallery img");
    currentIndex = 0;
    showSlide(0);
});
