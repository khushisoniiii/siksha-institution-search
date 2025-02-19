const inputs = document.querySelectorAll(".input");

function focusFunc() {
  let parent = this.parentNode;
  parent.classList.add("focus");
}

function blurFunc() {
  let parent = this.parentNode;
  if (this.value == "") {
    parent.classList.remove("focus");
  }
}

inputs.forEach((input) => {
  input.addEventListener("focus", focusFunc);
  input.addEventListener("blur", blurFunc);
});


 // Display a popup if there's a success message
 window.onload = function () {
  const successMessage = "<?php echo $successMessage; ?>";
  if (successMessage) {
      alert(successMessage);
}
};