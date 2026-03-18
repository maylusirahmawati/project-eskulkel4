const galleryList = document.getElementById("galleryList");
const items = document.querySelectorAll(".gallery_item");

const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");

let index = 0;

function updateSlide() {
    const itemWidth = items[0].offsetWidth + 20;
    galleryList.scrollTo({
        left: index * itemWidth,
        behavior: "smooth"
    });
}

nextBtn.addEventListener("click", () => {
    index++;
    if (index >= items.length) index = items.length - 1;
    updateSlide();
});

prevBtn.addEventListener("click", () => {
    index--;
    if (index < 0) index = 0;
    updateSlide();
});
