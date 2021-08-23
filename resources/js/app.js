const navbar = document.getElementById("navbar");
const back = document.getElementById("back");
const filter = document.querySelectorAll(".filter");
const filterItem = document.querySelectorAll(".filter_item");
let offset = navbar.offsetTop + 100;

for (let i = 0; i < filter.length; i++) {
    filter[i].addEventListener("click", function() {
        for (let j = 0; j < filter.length; j++) {
            filter[j].classList.remove("active");
        }

        this.classList.add("active");

        let dataFilter = this.getAttribute("data-filter");

        for (let k = 0; k < filterItem.length; k++) {
            filterItem[k].classList.add("d-none");

            if (
                filterItem[k].getAttribute("data-item") == dataFilter ||
                dataFilter == "all"
            ) {
                filterItem[k].classList.remove("d-none");
                filterItem[k].classList.remove("d-block");
            }
        }
    });
}

window.onscroll = function() {
    // Sticky
    sticky();

    // Back to Top
    let y = this.pageYOffset;

    y >= 50 ? back.classList.add("show") : back.classList.remove("show");
};

const sticky = () => {
    if (window.pageYOffset >= offset) {
        navbar.classList.add("fixed-top");
        navbar.style.opacity = "0.95";
    } else {
        navbar.classList.remove("fixed-top");
        navbar.style.opacity = "1";
    }
};

window.onresize = function() {
    if (this.matchMedia("(max-width: 575.98px)").matches) {
        navbar.classList.add("fixed-top");
        navbar.style.opacity = "0.95";
    } else {
        navbar.classList.remove("fixed-top");
        navbar.style.opacity = "1";
    }
};

back.onclick = () => {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
};