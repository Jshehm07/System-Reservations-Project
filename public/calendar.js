const modalOne = document.getElementById("modal-one");
const modalTwo = document.getElementById("modal-two");
const buttonOne = document.getElementById("button-1");
const buttonTwo = document.getElementById("button-2");
const days = document.querySelectorAll(".day"); 
const hours = document.querySelectorAll(".hour"); 

function selectDate(date) {
  window.parent.postMessage({ type: "dateSelected", date: date }, "*");
}

modalOne.classList.add("show");

buttonOne.addEventListener("click", () => {
  modalOne.classList.remove("show");
  modalTwo.classList.add("show");
});

buttonTwo.addEventListener("click", () => {
  modalTwo.classList.remove("show");
});

modalTwo.addEventListener("click", (event) => {
  if (event.target === modalTwo) {
    modalTwo.classList.remove("show");
  }
});

days.forEach((day) => {
  day.addEventListener("click", () => {
    days.forEach((d) => d.classList.remove("active"));
    day.classList.add("active");
  });
});

hours.forEach((hour) => {
  hour.addEventListener("click", () => {
    hours.forEach((d) => d.classList.remove("active"));
    hour.classList.add("active");
  });
});