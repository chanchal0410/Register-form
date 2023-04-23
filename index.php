<?php include("connect.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>REGISTRATION FORM</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <div class="heading">
                <h1>REGISTRATION FORM</h1>
                <p>Enter your details and submit this form to confirm  your registration</p>
            </div>
            <div class="form">
                <form action="index.php" method="post">
                    <div class="field"><label>NAME</label><input type="text" name="name" placeholder="Enter your name" ></div>
                    <div class="field"><label>AGE</label><input type="text"  name="age"  placeholder="Enter you age"  ></div>
                    <div class="field"><label>GENDER</label>
                        <select  name="gender" >
                            <option>Select</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    <div class="field"><label>EMAIL</label><input type="email"  name="email" placeholder="Enter you email address"></div>
                    <div class="field"><label>CONTACT NO.</label><input type="phone"  name="phone" placeholder="Enter you contact no."></div>
                    <div class="field"><label>COLLEGE NAME</label><input type="text"  name="clgname"  placeholder="Enter you college name"></div>
                    <div class="field" id="bt"><button class="btn"  name="submit">Submit</button></div>
                    <div class="field" id="bt"><button class="btn"  name="reset">Reset</button></div>
                </form>
            </div>
        </div>
        <script src="index.js"></script>
    </body>
</html>