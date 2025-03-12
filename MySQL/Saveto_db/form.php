<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form in php</title>
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $name = $_POST['name'];
        $pass = $_POST['pass'];
        $dob = $_POST['dob'];
        // echo "Data Post successfully<br/>";

        // submit these to database
        // MySQL credentials
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "contact"; // first create this database

        // connection object 
        $conn = mysqli_connect($servername, $username, $password, $database);
        // Die if connection was not successfull
        if (!$conn) { // if it fails then die() quit programm
            die("Sorry we unable to connect " . mysqli_connect_error());
        }else{
            // submit these to database;
            $insert = "INSERT INTO `data` (`name`,`email`,`pasword`,`dob`) VALUES ('$name','$email','$pass','$dob')";
            $result = mysqli_query($conn,$insert);

            if($result){
                echo "Data saved to the database successfully<br/>";
            }else{
                echo "Something went wrong in the query execution --> ". mysqli_errno();
            }
        }
    }
    ?>
    <div style="background-color: #1a1a1a; width: auto; color: white;">

        <h2 style="display: flex; justify-content: center;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Please fill the form and send data to the MySQL database</h2>
        <form action="/basic-php/MySQL/Saveto_db/form.php" method="post">

            <div style="display: flex; flex-direction: column; width: 20%; margin: auto; padding: 10px; gap: 10px;">
                <label for="email">Your email</label>
                <input type="email" name="email" id="email" placeholder="email">
                <label for="name">Your name</label>
                <input type="text" name="name" id="name" placeholder="name">
                <label for="pass">Password</label>
                <input type="password" name="pass" id="pass" placeholder="password">
                <label for="dob">DOB</label>
                <input type="date" name="dob" id="dob" placeholder="Date of Birth">
                <button type="submit">submit</button>
            </div>

        </form>
    </div>
</body>

</html>