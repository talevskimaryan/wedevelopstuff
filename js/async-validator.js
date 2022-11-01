function validateLetters(checkedValue, checkedElement, errorField) {
  var letters = /^[A-Za-z- -]+$/;
  var lettersError = "";
  if (checkedValue.match(letters)) {
    lettersError = "";
    checkedElement.style.border = "3px solid var(--accent-color)";
    errorField.innerHTML = lettersError;
  } else {
    lettersError = "Only letters allowed.";
    checkedElement.style.border = "3px solid rgb(187, 63, 63)";
    errorField.innerHTML = lettersError;
  }
  return lettersError;
}

function validateBlank(checkedValue, checkedElement, errorField) {
  var blankError = "";
  if (checkedValue.length == 0) {
    blankError = "Field cannot be left blank.";
    checkedElement.style.border = "3px solid rgb(187, 63, 63)";
    errorField.innerHTML = blankError;
  }
  return blankError;
}

function validateEmail(checkedValue, checkedElement, errorField) {
  var emailRegex =
    /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
  var validEmailError = "";
  const emailString = checkedValue.toLowerCase();
  if (emailString.match(emailRegex)) {
    validEmailError = "";
    checkedElement.style.border = "3px solid var(--accent-color)";
    errorField.innerHTML = validEmailError;
  } else {
    validEmailError = "Entry is not a valid email.";
    checkedElement.style.border = "3px solid rgb(187, 63, 63)";
    errorField.innerHTML = validEmailError;
  }
  return validEmailError;
}

function validateLength(checkedValue, checkedElement, errorField) {
  var lengthError = "";
  const characterCountField = document.getElementById("character-count");
  characterCountField.innerHTML = checkedValue.length + " / 1000";
  if (checkedValue.length <= 1000) {
    lengthError = "";
    checkedElement.style.border = "3px solid var(--accent-color)";
    errorField.innerHTML = lengthError;
  } else {
    lengthError = "Message length exceeds 1000 characters.";
    checkedElement.style.border = "3px solid red";
    errorField.innerHTML = lengthError;
  }
  return lengthError;
}

function nameValidator() {
  const nameInput = document.getElementById("name-input");
  const nameValue = nameInput.value;
  const nameError = document.getElementById("name-error");
  var lettersError = validateLetters(nameValue, nameInput, nameError);
  var blankError = validateBlank(nameValue, nameInput, nameError);
  if (lettersError == "" && blankError == "") { 
    return 0;
  } else { 
    return 1;
  }
}

function emailValidator() {
  const emailInput = document.getElementById("email-input");
  const emailValue = emailInput.value;
  const emailError = document.getElementById("email-error");
  var validEmailError = validateEmail(emailValue, emailInput, emailError);
  var blankError = validateBlank(emailValue, emailInput, emailError);
  if (validEmailError == "" && blankError == "") { 
    return 0;
  } else { 
    return 1;
  }
}

function messageValidator() {
  const messageInput = document.getElementById("message-input");
  const messageValue = messageInput.value;
  const messageError = document.getElementById("message-error");
  var lengthError = validateLength(messageValue, messageInput, messageError);
  var blankError = validateBlank(messageValue, messageInput, messageError);
  if (lengthError == "" && blankError == "") { 
    return 0;
  } else { 
    return 1;
  }
}

function submitValidator() { 
  const validationOne = nameValidator();
  const validationTwo = emailValidator();
  const validationThree = messageValidator();
  if (validationOne == 1 || validationTwo == 1 || validationThree == 1) { 
    return 1;
  } else {
    return 0;
  }
}

const form = document.getElementById("contact-form");

form.addEventListener(
  "submit",
  function (event) {
    const nameInput = document.getElementById("name-input");
    const nameValue = nameInput.value;
    const nameError = document.getElementById("name-error");
    const emailInput = document.getElementById("email-input");
    const emailValue = emailInput.value;
    const emailError = document.getElementById("email-error");
    const messageInput = document.getElementById("message-input");
    const messageValue = messageInput.value;
    const messageError = document.getElementById("message-error");

    validateLetters(nameValue, nameInput, nameError);
    validateBlank(nameValue, nameInput, nameError);
    validateEmail(emailValue, emailInput, emailError);
    validateBlank(emailValue, emailInput, emailError);
    validateLength(messageValue, messageInput, messageError);
    validateBlank(messageValue, messageInput, messageError);
    
    const errors = submitValidator();

    if (errors) {
      event.preventDefault();
    }
  },
  false
);


function onRecaptchaSuccess () {
  document.getElementById('contact-form').submit()
}