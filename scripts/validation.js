window.onload = function () {
  const form = document.getElementById("feedback");

  form.onsubmit = function () {
    let errors = document.querySelectorAll(".form-error");
    for (let i = 0; i < errors.length; i++) {
      errors[i].remove();
    }

    let firstError = null;

    function showError(input, message) {
      input.placeholder = message;
      if (!firstError) firstError = input;
    }

    let email = document.getElementById("user-email");
    let emailVal = email.value.trim();
    if (
      emailVal === "" ||
      emailVal.indexOf("@") === -1 ||
      emailVal.indexOf(".") === -1
    ) {
      email.value = "";
      showError(email, "Email field is empty or invalid");
    }

    let fname = document.getElementById("user-firstname");
    if (fname.value.trim() === "") showError(fname, "First name is required.");

    let lname = document.getElementById("user-lastname");
    if (lname.value.trim() === "") showError(lname, "Last name is required.");

    let age = document.getElementById("user-age");
    let ageVal = age.value.trim();
    if (ageVal !== "" && isNaN(ageVal)) {
      age.value = "";
      showError(age, "Age must be a number.");
    }

    let feedback = document.getElementById("text-area");
    if (feedback.value.trim() === "")
      showError(feedback, "Feedback is required.");

    if (firstError) {
      firstError.focus();
      return false;
    }
    return true;
  };
};

function neitherCheck() {
  if (
    document.getElementById("check-frontend").checked ||
    document.getElementById("check-backend").checked
  ) {
    document.getElementById("check-neither").checked = false;
  } else {
    document.getElementById("check-neither").checked = true;
  }
}
