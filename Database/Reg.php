<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>

<body>
<header>
    <h1>EXPERZIO'24 Registration</h1>
</header>
    <div id="countdown"></div>
    
    <form id="registrationForm"onsubmit="return confirmSubmit()">
    <div class="form-container">
        <form action="Data.php" method="post>
       
        <label for="schoolName">School Name:</label>
        <input type="text" id="schoolName" name="schoolName" required><br>

        <label for="teamName">Team Name:</label>
        <input type="text" id="teamName" name="teamName"  required><br>

        <label for="category">Category:</label>
        <select id="category" name="category" required>
            <option value="">Select Category</option>
            <option value="socialScience">Social Science</option>
            <option value="appliedScience">Applied Science</option>
            <option value="naturalScience">Natural Science</option>
        </select><br>

        <label for="researchStatus">Research Status:</label>
        <select id="researchStatus" name="researchStatus"  required>
            <option value="">Select Research Status</option>
            <option value="ongoing">Ongoing Research</option>
            <option value="completed">Completed Research</option>
        </select><br>
        <button type="submit" id="submitButton" onclick="toggleFunction()">Submit</button>
        <br>
    </div>

    <style>
    body {
    background-image:url('bg.jpg');
      background-size: cover; /* Adjust this as needed */
      background-position: center;
      background-repeat: no-repeat;
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      
     
  }
  #countdown {
            font-size: 36px;
            text-align: center;
            margin-top: 50px;
            font-family: 'TaHoma';
            padding-bottom: 20px;
            margin-top: 60px;
            border: 0px solid #ccc;
            width: 22%;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(158, 69, 69, 0.5);
            text-align: center;
            height: 50%;
            padding-top: 20px;
            color: rgb(0, 0, 0);
            background-color: black;
            background-color: rgba(255, 255, 255, 0.3);
            font-weight: Bold;
            
  }

  header {
      font-family:Aquire, sans-serrif;
      background-color: #333;
      color: #fff;
      padding: 10px;
      width: 100%;
      box-sizing: border-box;
      font-size: 45px;
      background-color: rgba(5, 5, 5, 0.3)
        
  }

  form {
      background-color: #8f3232;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-top: 20px;
      width: 450px;
      box-sizing: border-box;
      height: 450px;
      background-color: rgba(253, 157, 157, 0.5);
      
  }
  .form-container {
      text-align: center;
    }

  label {
      text-align: left;
      display: block;
      margin-bottom: 10px;
      margin-left: 10px;
      font-size: 20px;
      color: whitesmoke;
      
  }

  input, select {
      width: calc(100% - 16px);
      padding: 8px;
      margin-bottom: 16px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 7px;
      color: black;
  }

  button {
      background-color: #4caf50;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin-top: 10px;
      margin-bottom: 5px;
      height: 50px;
      width: 200px;
  }

  button:hover {
      background-color: #45a049;
  }

  /* Optional: Add some styling to make the button visually disabled */
  .disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }
  </style>

    <script>
            function confirmSubmit() {
            // Display a confirmation dialog
            var isConfirmed = confirm("Are you sure you want to submit the form?");

            // If the user clicks OK, the form will be submitted; otherwise, it won't
            return isConfirmed;
        }

                    function toggleFunction() {
            // Disable the button
            document.getElementById('toggleButton').disabled = true;

            // Generate and display code
            generateCode();
        }

        function generateCode() {
            // Replace the following lines with your code generation logic
            var generatedCode = "Your generated code here.";

            // Display or use the generated code
            alert('Generated Code: ' + generatedCode);

            // Re-enable the button (if needed) after displaying the code
            document.getElementById('toggleButton').disabled = false;
        }
        function confirmSubmit() {
            // Display a confirmation dialog
            var isConfirmed = confirm("Are you sure you want to submit the form?");

            // If the user clicks OK, show a success message
            if (isConfirmed) {
                // You can perform additional actions here, such as AJAX form submission

                // Show success message
                alert('Form submitted successfully!');
            }

            // Return true if the user confirmed (form will be submitted), false otherwise
            return isConfirmed;
        }
        const countDownDate = new Date("March 01, 2024 00:00:00").getTime();

        // Update the countdown every 1 second
        const x = setInterval(function() {

        // Get the current date and time
        const now = new Date().getTime();

        // Calculate the remaining time
        const distance = countDownDate - now;

        // Calculate days, hours, minutes, and seconds
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the countdown
        document.getElementById("countdown").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

        // If the countdown is over, display a message
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("countdown").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
    <script src="scripts.js"></script>

</body>
</html>
