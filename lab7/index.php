<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Input Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <fieldset>
            <form action="signup.php" method="post">
                <legend>
                    <h3 id="title">Register</h3>
                </legend>





                <label for="FirstName">Enter Student Name</label>
                <input type="text" id="FirstName" name="FirstName" required>
                <label for="_password_">Enter Student Password</label>
                <input type="password" id="_password_" name="_password_" required>
                <button type="submit">Register</button>
            </form>

            <br><br>
            <form action="login.php" method="post">
                <legend>
                    <h3>Log in</h3>
                </legend>
                <label for="username">username</label>
                <input type="text" id="username" name="username" required>
                <br>
                <label for="_password">password</label>
                <input type="password" id="_password" name="_password" required>
                <button type="submit">Log in</button>
            </form>
        </fieldset>
    </div>




</body>

</html>