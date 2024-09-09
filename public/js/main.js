//Dom selections
const typedTextSpan = document.querySelector(".typed-text");
const cursorSpan = document.querySelector(".cursor");

//Array of text that is changeable
const textArray = ["Pitch...", "Refine...", "Scale..."];
//Text speed settings
const typingDelay = 200;
const erasingDelay = 100;
const newTextDelay = 2000; // Delay between current and next text
let textArrayIndex = 0;
let charIndex = 0;

//function for text change
function type() {
  if (charIndex < textArray[textArrayIndex].length) {
    if (!cursorSpan.classList.contains("typing"))
      cursorSpan.classList.add("typing");
    typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
    charIndex++;
    setTimeout(type, typingDelay);
  } else {
    cursorSpan.classList.remove("typing");
    setTimeout(erase, newTextDelay);
  }
}

//function for erasing texts
function erase() {
  if (charIndex > 0) {
    if (!cursorSpan.classList.contains("typing"))
      cursorSpan.classList.add("typing");
    typedTextSpan.textContent = textArray[textArrayIndex].substring(
      0,
      charIndex - 1
    );
    charIndex--;
    setTimeout(erase, erasingDelay);
  } else {
    cursorSpan.classList.remove("typing");
    textArrayIndex++;
    if (textArrayIndex >= textArray.length) textArrayIndex = 0;
    setTimeout(type, typingDelay + 1100);
  }
}

//event for calling the text change function
document.addEventListener("DOMContentLoaded", function () {
  // On DOM Load initiate the effect
  if (textArray.length) setTimeout(type, newTextDelay + 250);
});

// Countdown Functionality
// const domCountDownDate = document.getElementById("countDownDate").getAttribute('data-countdown');

// var deadline = new Date(domCountDownDate).getTime();
// var x = setInterval(function () {
//   var now = new Date().getTime();
//   var timeDiff = deadline - now;
//   var days = Math.floor(timeDiff / (1000 * 60 * 60 * 24));
//   var hours = Math.floor((timeDiff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
//   var minutes = Math.floor((timeDiff % (1000 * 60 * 60)) / (1000 * 60));
//   var seconds = Math.floor((timeDiff % (1000 * 60)) / 1000);
//   document.getElementById("day").innerHTML = days;
//   document.getElementById("hour").innerHTML = hours;
//   document.getElementById("min").innerHTML = minutes;
//   document.getElementById("sec").innerHTML = seconds;

//   if (timeDiff < 0) {
//     clearInterval(x);
//     document.getElementById("expired").innerHTML = "EXPIRED";
//     document.getElementById("day").innerHTML = "00";
//     document.getElementById("hour").innerHTML = "00";
//     document.getElementById("min").innerHTML = "00";
//     document.getElementById("sec").innerHTML = "00";
//     const applyBtns = document.querySelectorAll("#applyBtn");
//     applyBtns.forEach((applyBtn) => (applyBtn.style.display = "none"));
//   }
// }, 1000);



// Retrieve the deadline from localStorage if it exists
var storedDeadline = localStorage.getItem("countdownDeadline");
var deadline;

if (storedDeadline) {
    deadline = new Date(parseInt(storedDeadline, 10)).getTime();
} else {
    // Calculate the initial deadline (100 days from today)
    var initialDeadline = new Date();
    initialDeadline.setDate(initialDeadline.getDate() + 100);
    deadline = initialDeadline.getTime();
    // Save the initial deadline to localStorage
    localStorage.setItem("countdownDeadline", deadline);
}

// Countdown Functionality
var x = setInterval(function () {
    var now = new Date().getTime();
    var timeDiff = deadline - now;
    var days = Math.floor(timeDiff / (1000 * 60 * 60 * 24));
    var hours = Math.floor((timeDiff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((timeDiff % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((timeDiff % (1000 * 60)) / 1000);

    document.getElementById("day").innerHTML = days;
    document.getElementById("hour").innerHTML = hours;
    document.getElementById("min").innerHTML = minutes;
    document.getElementById("sec").innerHTML = seconds;

    if (timeDiff < 0) {
        clearInterval(x);
        document.getElementById("expired").innerHTML = "EXPIRED";
        document.getElementById("day").innerHTML = "00";
        document.getElementById("hour").innerHTML = "00";
        document.getElementById("min").innerHTML = "00";
        document.getElementById("sec").innerHTML = "00";
        const applyBtns = document.querySelectorAll("#applyBtn");
        applyBtns.forEach((applyBtn) => (applyBtn.style.display = "none"));
    }
}, 1000);



// javascript specific for login and sign up page  starts here

const togglePassword = document.querySelectorAll(".toggle-password");

togglePassword.forEach((toggle) => {
  toggle.addEventListener("click", () => {
    const passwordInput = toggle.closest(".relative").querySelector("input");

    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      toggle.classList.add("text-gray-500");
    } else {
      passwordInput.type = "password";
      toggle.classList.remove("text-gray-500");
    }
  });
});

//for validation

function validateForm() {
  // Get input fields from the form
  var firstName = document.forms["myForm"]["firstName"].value;
  var lastName = document.forms["myForm"]["lastName"].value;
  var email = document.forms["myForm"]["email"].value;
  var password = document.forms["myForm"]["password"].value;
  var confirmPassword = document.forms["myForm"]["confirmPassword"].value;

  // Validate first name
  if (firstName.length < 3) {
    document.getElementById("firstNameError").innerHTML =
      "First name must be at least 3 characters long.";
  } else {
    document.getElementById("firstNameError").innerHTML = "";
  }

  // Validate last name
  if (lastName.length < 3) {
    document.getElementById("lastNameError").innerHTML =
      "Last name must be at least 3 characters long.";
  } else {
    document.getElementById("lastNameError").innerHTML = "";
  }

  // Validate email
  var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!email.match(emailPattern)) {
    document.getElementById("emailError").innerHTML = "Invalid email address.";
  } else {
    document.getElementById("emailError").innerHTML = "";
  }

  // Validate password
  if (password.length < 8) {
    document.getElementById("passwordError").innerHTML =
      "Password must be at least 8 characters long.";
  } else {
    document.getElementById("passwordError").innerHTML = "";
  }

  // Validate confirm password
  if (confirmPassword != password) {
    document.getElementById("confirmPasswordError").innerHTML =
      "Passwords do not match.";
  } else {
    document.getElementById("confirmPasswordError").innerHTML = "";
  }
}

// javascript specific for login and sign up page  ends here

// /Form validation section start here

// Get form inputs
const fullNameInput = document.getElementById("full-name");
const lastNameInput = document.getElementById("last-name");
const emailInput = document.getElementById("email");
const passwordInput = document.getElementById("password");
const confirmPasswordInput = document.getElementById("confirm-password");

// Add event listeners for form submission
document.getElementById("my-form").addEventListener("submit", function (event) {
  // Prevent form from submitting if there are errors
  if (!validateForm()) {
    event.preventDefault();
  }
});

// Validate form inputs
function validateForm() {
  let isValid = true;

  // Validate full name
  const fullNameValue = fullNameInput.value.trim();
  if (fullNameValue === "") {
    setError(fullNameInput, "Full name is required");
    isValid = false;
  } else if (!/^[a-zA-Z\s]+$/.test(fullNameValue)) {
    setError(fullNameInput, "Full name must contain only letters and spaces");
    isValid = false;
  } else {
    setSuccess(fullNameInput);
  }

  // Validate last name
  const lastNameValue = lastNameInput.value.trim();
  if (lastNameValue === "") {
    setError(lastNameInput, "Last name is required");
    isValid = false;
  } else if (!/^[a-zA-Z\s]+$/.test(lastNameValue)) {
    setError(lastNameInput, "Last name must contain only letters and spaces");
    isValid = false;
  } else {
    setSuccess(lastNameInput);
  }

  // Validate email address
  const emailValue = emailInput.value.trim();
  if (emailValue === "") {
    setError(emailInput, "Email address is required");
    isValid = false;
  } else if (!/^\S+@\S+\.\S+$/.test(emailValue)) {
    setError(emailInput, "Email address is invalid");
    isValid = false;
  } else {
    setSuccess(emailInput);
  }

  // Validate password
  const passwordValue = passwordInput.value.trim();
  if (passwordValue === "") {
    setError(passwordInput, "Password is required");
    isValid = false;
  } else if (passwordValue.length < 8) {
    setError(passwordInput, "Password must be at least 8 characters long");
    isValid = false;
  } else {
    setSuccess(passwordInput);
  }

  // Validate confirm password
  const confirmPasswordValue = confirmPasswordInput.value.trim();
  if (confirmPasswordValue === "") {
    setError(confirmPasswordInput, "Please confirm your password");
    isValid = false;
  } else if (confirmPasswordValue !== passwordValue) {
    setError(confirmPasswordInput, "Passwords do not match");
    isValid = false;
  } else {
    setSuccess(confirmPasswordInput);
  }

  return isValid;
}

// Set error message and class for input
function setError(input, message) {
  const parent = input.parentElement;
  const error = parent.querySelector(".error-message");
  input.classList.add("error");
  error.innerText = message;
  error.style.display = "block";
}

// Set success class for input
function setSuccess(input) {
  const parent = input.parentElement;
  const error = parent.querySelector(".error-message");
  input.classList.remove("error");
  error.style.display = "none";
}

// /Form validation section start here
