let days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

let months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

const today = new Date();

let date = {
   day:days[today.getDay], 
   month: months[today.getMonth],
   year: today.getFullYear 
};

const menuBtn = document.querySelector(".hamburger-menu");
const closeBtn = document.querySelector(".close");

const sidebar = document.querySelector(".sidebar");

menuBtn.addEventListener("click", () => {
    sidebar.classList.add("open");
});

closeBtn.addEventListener("click", () => {
    sidebar.classList.remove("open");
})
