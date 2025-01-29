document.addEventListener("DOMContentLoaded", function () {
  const calendarModal = document.getElementById("calendarModal");
  const dateTimeBtn = document.getElementById("dateTime");
  const closeBtn = document.querySelector(".close");

  dateTimeBtn.addEventListener("click", function (event) {
    event.preventDefault();
    calendarModal.style.display = "flex";
  });

  closeBtn.addEventListener("click", function () {
    calendarModal.style.display = "none";
  });

  window.addEventListener("click", function (event) {
    if (event.target === calendarModal) {
      calendarModal.style.display = "none";
    }
  });

  window.addEventListener("message", function (event) {
    if (event.data.type === "dateSelected") {
      dateTimeBtn.textContent = event.data.date;
      calendarModal.style.display = "none";
    }
  });
});
