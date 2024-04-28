const tabs = document.querySelectorAll(".tab");
const contents = document.querySelectorAll(".content");

tabs.forEach((tab, index) => {
    tab.addEventListener("click", () => {
    tabs.forEach((tab) => tab.classList.remove("tabs-aktif"));
        tab.classList.add("tabs-aktif");

        contents.forEach((content) => {
            content.classList.add("hidden");
        });
        contents[index].classList.remove("hidden");
    });
});