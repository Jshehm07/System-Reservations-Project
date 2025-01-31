const submit = document.getElementById("confirm");
const modal = document.getElementById("modal");
const closeBtn = document.getElementById("close");
const emailInput = document.getElementById("email");
const errorMessage = document.getElementById("error-message");

submit.disabled = true;

emailInput.addEventListener("input", function () {
  if (emailInput.value.trim() === "") {
    submit.disabled = true;
    errorMessage.style.display = "block";
  } else {
    submit.disabled = false;
    errorMessage.style.display = "none";
  }
});

submit.addEventListener("click", () => {
  if (!submit.disabled) {
    modal.classList.add("show");
  }
});

closeBtn.addEventListener("click", () => {
  modal.classList.remove("show");
});
