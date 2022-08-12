

let days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

let months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

const today = new Date();

let date = {
   day: days[today.getDay()], 
   calendarDay: today.getDate() ,
   month: months[today.getMonth()],
   year: today.getFullYear() 
};

let dayDiv = document.querySelector(".day");
let calendarDayDiv = document.querySelector(".calendarDiv");
let monthDiv = document.querySelector(".month");
let yearDiv = document.querySelector(".year");

dayDiv.innerHTML = `${date.day}, `;
calendarDayDiv.innerText = date.calendarDay;
monthDiv.innerText = date.month;
yearDiv.innerText = date.year;

console.log(date)

const menuBtn = document.querySelector(".hamburger-menu");
const closeBtn = document.querySelector(".close");

const sidebar = document.querySelector(".sidebar");

menuBtn.addEventListener("click", () => {
    sidebar.classList.toggle("open");
});

closeBtn.addEventListener("click", () => {
    sidebar.classList.remove("open");
});
