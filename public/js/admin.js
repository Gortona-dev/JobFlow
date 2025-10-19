document.addEventListener("DOMContentLoaded", () => {
  setTimeout(() => {
    const flash = document.getElementById("flash-msg");
    if (flash) {
      flash.style.opacity = "0";
    }
  }, 3000);
});
