const submit = document.getElementById("confirm");
const modal = document.getElementById("modal");
const closeBtn = document.getElementById("close");

submit.addEventListener("click", function (event) {
  event.preventDefault();

  modal.classList.add("show"); 
});

closeBtn.addEventListener("click", () => {
  modal.classList.remove("show");
});

window.addEventListener("click", function (event) {
  if (event.target === modal) {
    modal.classList.remove("show");
  }
});
