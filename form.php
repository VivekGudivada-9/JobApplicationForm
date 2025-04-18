<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Application Form</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <form action="submit.php" method="POST" enctype="multipart/form-data">
        <h1>Register Now</h1><br>
        <h4>Enter First Name*</h4>
        <input type="text" name="Name" required>

        <h4>Enter Middle Name*</h4>
        <input type="text" name="middle_name"  required>

        <h4>Enter Last Name*</h4>
        <input type="text" name="last_name" required>

        <h4>Date of Birth*</h4>
        <input type="date" name="date" required>

        <h4>Gender*</h4>
        <input type="radio" name="gender" value="Male" required> Male
        <input type="radio" name="gender" value="Female" required> Female
        <input type="radio" name="gender" value="Other" required> Other

        <h4>Nationality*</h4>
        <select name="Nationality" required>
            <option value="America">America</option>
            <option value="British">British</option>
            <option value="Canadian">Canada</option>
            <option value="Denmark">Denmark</option>
            <option value="Australian">Australian</option>
            <option value="Indian">India</option>
        </select>

        <h2>Contact Information</h2>
        <h4>Email*</h4>
        <input type="email" name="email" required>

        <h4>Phone Number*</h4>
        <select name="Countrycode" required>
            <option value="+91">+91 (Ind)</option>
            <option value="+1">+1 (USA)</option>
            <option value="+44">+44 (UK)</option>
            <option value="+61">+61 (Aus)</option>
            <option value="+81">+81 (Jap)</option>
        </select>
        <input type="number" name="number" required>

        <h4>Address*</h4>
        <input type="text" name="address" size="100%" required>

        <h4>Upload Resume (PDF/JPEG)*</h4>
        <input type="file" name="file" accept="application/pdf,image/*" required>

        <br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
