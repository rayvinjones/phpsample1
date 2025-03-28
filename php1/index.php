<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information Form</title>
    <title>PHP Output 1</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            font-family: "Arial";
        }
        form {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            background-color: #f9f9f9;
        fieldset {
            margin-bottom: 20px;
            padding: 15px;
        }
        label {
            display: block;
            margin: 8px 0 5px;
        }
        input[type="text"], input[type="email"], input[type="number"], select {
        table {
            width: 100%;
            padding: 8px;
            margin: 5px 0 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .error {
            color: red;
            font-size: 0.9em;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        input {
            width: 100%;
        }
        button:hover {
            background-color: #45a049;
            padding: 8px;
        }
    </style>
</head>
<body>

<h2>Personal Information Form</h2>
<form id="personalForm">
    <label for="age">Age:</label>
    <input type="number" name="age" id="age" min="1" max="120">
    <span class="error" id="ageError"></span>

    <label for="gender">Gender:</label>
    <select name="gender" id="gender">
        <option value="">Select Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
    </select>
    <span class="error" id="genderError"></span>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email">
    <span class="error" id="emailError"></span>

    <label for="address">Address:</label>
    <input type="text" name="address" id="address">
    <span class="error" id="addressError"></span>

    <label for="contact_number">Contact Number:</label>
    <input type="text" name="contact_number" id="contact_number" maxlength="10">
    <span class="error" id="contactNumberError"></span>

    <button type="submit">Submit</button>
</form>

<script>
    // Handle form validation
    document.getElementById('personalForm').addEventListener('submit', function(event) {
        event.preventDefault();
        let valid = true;

        // Clear previous errors
        document.getElementById('ageError').textContent = '';
        document.getElementById('genderError').textContent = '';
        document.getElementById('emailError').textContent = '';
        document.getElementById('addressError').textContent = '';
        document.getElementById('contactNumberError').textContent = '';

        // Age validation
        const age = document.getElementById('age').value;
        if (!age || isNaN(age) || age < 1 || age > 120) {
            document.getElementById('ageError').textContent = 'Please enter a valid age between 1 and 120.';
            valid = false;
        }

        // Gender validation
        const gender = document.getElementById('gender').value;
        if (!gender) {
            document.getElementById('genderError').textContent = 'Please select your gender.';
            valid = false;
        }

        // Email validation
        const email = document.getElementById('email').value;
        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        if (!email || !emailPattern.test(email)) {
            document.getElementById('emailError').textContent = 'Please enter a valid email address.';
            valid = false;
        }

        // Address validation
        const address = document.getElementById('address').value;
        if (!address) {
            document.getElementById('addressError').textContent = 'Please enter your address.';
            valid = false;
        }

        // Contact Number validation
        const contactNumber = document.getElementById('contact_number').value;
        const contactNumberPattern = /^[0-9]{10}$/;
        if (!contactNumber || !contactNumberPattern.test(contactNumber)) {
            document.getElementById('contactNumberError').textContent = 'Please enter a valid 10-digit contact number.';
            valid = false;
        }

        // If all validations pass, submit the form
        if (valid) {
            alert('Form Submitted Successfully');
        }
    });
</script>
    <h1>PHP Output No. 1</h1>
    
    <fieldset>
        <legend>This form uses GET request</legend>
        <form action="redirect.php" method="GET">
        <table>
            <tr>
                <td>First Name</td>
                <td>
                    <input type="text" name="fname" placeholder="Enter First Name" required />
                </td>
            </tr>
            <tr>
                <td>Middle Name</td>
                <td>
                    <input type="text" name="mname" placeholder="Enter Middle Name" required />
                </td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td>
                    <input type="text" name="lname" placeholder="Enter Last Name" required />
                </td>
            </tr>
            <tr>
                <td>Age</td>
                <td>
                    <input type="number" name="age" placeholder="Enter Age" min="1" required />
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <select name="gender" required>
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="email" name="email" placeholder="Enter Email" required />
                </td>
            </tr>
            <tr>
                <td>Address</td>
                <td>
                    <textarea name="address" placeholder="Enter Address" required></textarea>
                </td>
            </tr>
            <tr>
                <td>Contact Number</td>
                <td>
                    <input type="tel" name="contact" placeholder="Enter Contact Number" pattern="[\+]?[0-9]{10,15}" required />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Submit Data">
                    <input type="reset" value="Cancel">
                </td>
            </tr>
        </table>
        </form>
    </fieldset>
    
    <fieldset style="margin-top: 20px">
        <legend>This form uses POST request</legend>
        <form action="redirect.php" method="POST">
        <table>
            <tr>
                <td>First Name</td>
                <td>
                    <input type="text" name="fname" placeholder="Enter First Name" required />
                </td>
            </tr>
            <tr>
                <td>Middle Name</td>
                <td>
                    <input type="text" name="mname" placeholder="Enter Middle Name" required />
                </td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td>
                    <input type="text" name="lname" placeholder="Enter Last Name" required />
                </td>
            </tr>
            <tr>
                <td>Age</td>
                <td>
                    <input type="number" name="age" placeholder="Enter Age" min="1" required />
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <select name="gender" required>
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="email" name="email" placeholder="Enter Email" required />
                </td>
            </tr>
            <tr>
                <td>Address</td>
                <td>
                    <textarea name="address" placeholder="Enter Address" required></textarea>
                </td>
            </tr>
            <tr>
                <td>Contact Number</td>
                <td>
                    <input type="tel" name="contact" placeholder="Enter Contact Number" pattern="[\+]?[0-9]{10,15}" required />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Submit Data">
                    <input type="reset" value="Cancel">
                </td>
            </tr>
        </table>
        </form>
    </fieldset>

</body>
</html>