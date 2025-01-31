document.addEventListener("DOMContentLoaded", function () {
  const bookBtn = document.getElementById("book-btn");

  bookBtn.addEventListener("click", function () {
    window.location.href = "./public/page2.php"; 
  });
});
