function generateCode() {
    // Your existing code for generating the registration code here
}

function validateForm() {
    const registrationCodeInput = document.getElementById('registrationCode');
    
    if (registrationCodeInput.value.trim() === '') {
        alert('Please generate the Registration Code before submitting.');
        return false; // Prevent form submission
    }

    return true; // Allow form submission
}
function validateContactNumber() {
const contactNumberInput = document.getElementById('contactNumber');
const contactNumberError = document.getElementById('contactNumberError');

const isValid = /^\d{10}$/.test(contactNumberInput.value);

if (isValid) {
contactNumberError.textContent = ''; // Clear error message
} else {
contactNumberError.textContent = 'Please enter a valid 10-digit contact number.';
}
}

const countDownDate = new Date("February 10, 2024 00:00:00").getTime();
const registrationForm = document.getElementById('registrationForm');

const x = setInterval(function() {
const now = new Date().getTime();
const distance = countDownDate - now;

if (distance < 0) {
clearInterval(x);
document.getElementById("countdown").innerHTML = "TIME EXCEEDED";
disableForm();
}
else {
const days = Math.floor(distance / (1000 * 60 * 60 * 24));
const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
const seconds = Math.floor((distance % (1000 * 60)) / 1000);

document.getElementById("countdown").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
}
}, 1000);

function disableForm() {
const formElements = registrationForm.elements;

for (let i = 0; i < formElements.length; i++) {
formElements[i].disabled = true;
}

// Optionally, you can also disable the button
const generateCodeBtn = document.getElementById('generateCodeBtn');
generateCodeBtn.disabled = true;
}

// Initialize the sequence counter outside the function
let sequenceCounter = 1;

function generateCode() {
const teamNameInput = document.getElementById('teamName');
const registrationCodeInput = document.getElementById('registrationCode');
const categorySelect = document.getElementById('category');
const researchStatusSelect = document.getElementById('researchStatus');

const updateCode = () => {
const teamName = teamNameInput.value.trim();
const category = categorySelect.value;
const researchStatus = researchStatusSelect.value;

if (teamName.length > 0 && category.length > 0) {
    const firstLettersCategory = category.split(' ').map(word => word[0]).join('').toUpperCase();
    const firstLettersResearchStatus = researchStatus.split(' ').map(word => word[0]).join('').toUpperCase();

    const randomNumber = Math.floor(Math.random() * 99) + 1; // Generates a random number between 1 and 99
    const paddedNumber = randomNumber.toString().padStart(2, '0'); 
    const code = teamName.toUpperCase() + firstLettersCategory + firstLettersResearchStatus + paddedNumber;

    registrationCodeInput.value = code;
    generateCodeBtn.disabled = true;
} else {
    registrationCodeInput.value = ''; // Clear the code if inputs are incomplete
    generateCodeBtn.disabled = false;
}
};

// Attach event listeners to input fields
teamNameInput.addEventListener('input', updateCode);
categorySelect.addEventListener('input', updateCode);
researchStatusSelect.addEventListener('input', updateCode);

// Call updateCode initially to set the initial code
updateCode();
}