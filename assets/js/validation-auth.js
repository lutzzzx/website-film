const email = document.querySelector("#email");
const password = document.querySelector("#password");
const submit = document.querySelector("#submit");
const emailValidasi = document.querySelector("#email-validasi");
const passwordValidasi = document.querySelector("#password-validasi");

email.addEventListener("input", () => {
  if (!email.checkValidity()) {
    emailValidasi.textContent = "Email tidak valid.";
  } else {
    emailValidasi.textContent = "";
    checkSubmitStatus();
  }
});

password.addEventListener("input", () => {
  if (password.value.length < 8) {
    passwordValidasi.textContent = "Password minimal 8 karakter.";
  } else {
    passwordValidasi.textContent = "";
    checkSubmitStatus();
  }
});

function checkSubmitStatus() {
  if (email.checkValidity() && password.value.length >= 8) {
    submit.disabled = false;
  } else {
    submit.disabled = true;
  }
}
