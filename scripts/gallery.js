let images, thumbnails, currentIndex;

function showPicture(index) {

    images[currentIndex].classList.remove("active");
    thumbnails[currentIndex].classList.remove("active");

    images[index].classList.add("active");
    thumbnails[index].classList.add("active");
    currentIndex = index;
}

function prevPicture() {
    if (currentIndex <= 0) {
        showPicture(0);
    } else {
        showPicture(currentIndex - 1);
    }
}

function nextPicture() {
    if (currentIndex >= images.length - 1) {
        showPicture(images.length - 1);
    } else {
        showPicture(currentIndex + 1);
    }
}

document.addEventListener("DOMContentLoaded", () => {
    images = document.querySelectorAll("#picture-gallery figure");
    thumbnails = document.querySelectorAll("#thumbnail-display img");
    currentIndex = 0;
    showPicture(0);
});
