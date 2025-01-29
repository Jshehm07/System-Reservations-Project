function createPopup(id) {
  let popupNode = document.querySelector(id);

  function openPopup() {
    popupNode.classList.add("active");
  }
  function closePopup() {
    popupNode.classList.remove("active");
  }
  return openPopup;
}

let popup = createPopup("#popup");
document.querySelector("#open-popup").addEventListener("click", popup);
