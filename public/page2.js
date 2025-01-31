function formatDate(date) {
  let year = date.getFullYear();
  let month = date.getMonth() + 1;
  let day = date.getDate();
  return `${year}-${month < 10 ? "0" + month : month}-${
    day < 10 ? "0" + day : day
  }`;
}

const today = new Date();
const firstDayOfWeek = new Date(today);
firstDayOfWeek.setDate(today.getDate() - today.getDay());

const lastDayOfWeek = new Date(firstDayOfWeek);
lastDayOfWeek.setDate(firstDayOfWeek.getDate() + 6);

const dateInput = document.getElementById("dateTime");
dateInput.min = formatDate(firstDayOfWeek);
dateInput.max = formatDate(lastDayOfWeek);

const form = document.querySelector(".entries");
const submitButton = document.querySelector(".submit-btn");

form.addEventListener("submit", function (event) {
  const fullName = document.getElementById("fullName").value.trim();
  const contactNumber = document.getElementById("contactNumber").value.trim();
  const numPeople = document.getElementById("no").value.trim();
  const guestType = document.getElementById("guest").value.trim();
  const date = document.getElementById("dateTime").value.trim();
  const time = document.querySelector('[name="time"]').value.trim();

  if (
    !fullName ||
    !contactNumber ||
    !numPeople ||
    !guestType ||
    !date ||
    !time
  ) {
    alert("Please fill in all fields before submitting!");
    event.preventDefault();
  }
});
