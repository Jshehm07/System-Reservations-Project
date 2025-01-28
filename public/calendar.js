document.addEventListener("DOMContentLoaded", () => {
  const weekButtons = document.querySelectorAll(".days");
  weekButtons.forEach((button) => {
    button.addEventListener("click", () => {
      weekButtons.forEach((btn) => btn.classList.remove("active"));
      button.classList.add("active");
    });
  });

  const hourButtons = document.querySelectorAll(".hours button");
  hourButtons.forEach((button) => {
    button.addEventListener("click", () => {
      hourButtons.forEach((btn) => btn.classList.remove("active"));
      button.classList.add("active");
    });
  });

  document.getElementById("submit-btn").addEventListener("click", function () {
    window.close();
  });
});
