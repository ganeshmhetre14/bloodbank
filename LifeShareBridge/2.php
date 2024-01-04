<!DOCTYPE html>
<html>
<head>
    <style>

   body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        
        h1 {
            text-align: center;
            margin-top: 30px;
            font-size: 36px;
            font-weight: bold;
            color: #000000;
            margin: 20px 0;
			background-color: #ff1b1b;
        }

        
        form {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        label {
            font-weight: bold;
        }
        
        input[type="text"],
        input[type="email"],
        input[type="date"],
        input[type="file"],
        select {
            width: 30%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ced4da;
            border-radius: 5px;
        }
        
        input[type="radio"] {
            margin-right: 5px;
        }
        
        button[type="submit"] {
            background-color: #dc3545;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        
        button[type="submit"]:hover {
            background-color: #c82333;
        }
</style>
</head>
<body>
<h1>Blood Donation Form</h1>
<form action="" method="post">

                <label for="name">Last Name:</label>
                <input type="text" id="name" name="name" required>
				<label for="name">First Name:</label>
                <input type="text" id="name" name="name" required>
				<label for="name">Middel Name:</label>
                <input type="text" id="name" name="name" required>

                <label>Aadhar No:</label>
                <input type="text" id="aad" name="aad" required>
				
					<label>Upload Image:</label>
					<input type="file" id="img" name="img" required>
					</div></br>
					<label>Gender:</label>
    <input type="radio" name="option" value="option1" > Male
    <input type="radio" name="option" value="option2" > Female
    <input type="radio" name="option" value="option2" > Other
	</br>
				<label>Age:</label>
                <input type="text" id="age" name="age" required Placeholder="Year"></br>
				<label>Weight:</label>
                <input type="text" id="weigth" name="weigth" required Placeholder="kg"></br>
				<label>Mobile:</label>
                <input type="text" id="mobile" name="mobile" required class="form-group"></br>
				<label >DOB:</label>
                <input type="date" id="dob" name="dob" required></br>
				<label>Email:</label>
                <input type="email" id="email" name="email" required></br>
				<label>Address:</label>
                <input type="Text" id="add" name="add" required></br>
				<label>Post Code:</label>
                <input type="text" id="add" name="add" required></br>
				<label>Address:</label>
                <input type="text" id="add" name="add" required></br>
				
				
				<label>Occupation:
    <input type="radio" name="option" value="option1" > Student
    <input type="radio" name="option" value="option2" > Company, Employee
    <input type="radio" name="option" value="option3" > Monk,priest<br>
	<label><input type="radio" name="option" value="option3" > Gov.Official, soilder, police, State Enterprise
	  <input type="radio" name="option" value="option3" > Other
    <br></br>
	
                <label for="blood_type">Blood Group:</label>
                <select id="blood_type" name="blood_type" class="select"required>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select><br/>
           <label for="name">Upload Signature:</label>
                <input type="file" id="img1" name="img1" required></br></br>
				
				
            <button type="submit">Submit</button>
        </form>
   
</body>
</html>
