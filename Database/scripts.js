// Initialize registration counters for each category and research status combination.
const counters = {
    socialScience: {
        ongoing: 1,
        completed: 1
    },
    appliedScience: {
        ongoing: 1,
        completed: 1
    },
    naturalScience: {
        ongoing: 1,
        completed: 1
    },
    
};


const generatedCodes = new Set();

function generateCode() {
    const schoolName = document.getElementById("schoolName").value;
    const category = document.getElementById("category").value;
    const researchStatus = document.getElementById("researchStatus").value;
    const submitButton = document.getElementById("submitButton");

    if (schoolName && category && researchStatus) {
        let code = "";

        if (category === "socialScience") {
            code += "SS";
        } else if (category === "appliedScience") {
            code += "AS";
        } else if (category === "naturalScience") {
            code += "NS";
        }

        if (researchStatus === "ongoing") {
            code += "OR";
        } else if (researchStatus === "completed") {
            code += "CR";
        }

        const counter = counters[category][researchStatus];
        code += String(counter).padStart(2, '0');

        const generatedCode = code;
        if (!generatedCodes.has(generatedCode)) {
            generatedCodes.add(generatedCode);
            counters[category][researchStatus]++;
            document.getElementById("registrationCode").value = generatedCode;
            submitButton.disabled = true; // Disabling the button after code generation
        } else {
            alert("This code has already been generated. Please try again.");
        }
    } else {
        alert("Please fill in all fields and generate a registration code.");
    }
     // Settings For Phone Number
     var phoneNumberInput = document.getElementById('phoneNumber');
     var maxChars = 10;
     phoneNumberInput.addEventListener('input', function() {
        var currentChars = phoneNumberInput.value.length;
        if (currentChars > maxChars) {
         phoneNumberInput.value = phoneNumberInput.value.substring(0, maxChars);
       }
     });
     //Countdown Script
     const countDownDate = new Date("March 01, 2024 00:00:00").getTime();
      const x = setInterval(function() {  
             const now = new Date().getTime();
             const distance = countDownDate - now;  
             const days = Math.floor(distance / (1000 * 60 * 60 * 24));
             const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
             const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
             const seconds = Math.floor((distance % (1000 * 60)) / 1000);       
             document.getElementById("countdown").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
             if (distance < 0) {
                 clearInterval(x);
                 document.getElementById("countdown").innerHTML = "EXPIRED";
             }
         }, 1000);
         function generateCode() {
            // Your code generation logic here
      
            // Disable the button after generating the code
            document.getElementById("generateButton").disabled = true;
          }
}