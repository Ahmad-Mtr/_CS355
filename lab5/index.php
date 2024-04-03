<!DOCTYPE html>

<html>
   
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Input Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="app.php" method="post">
        
    <fieldset>
        <legend>
            <h3 id="title">User Input Form</h3>
        </legend>
        

        

        <label for="FirstName">FirstName</label>
        <br>
        <input value="" type="text" name="FirstName" id="FirstName">
        <br>
        
        <label for="LastName">LastName</label>
        <br>
        <input value="" type="text" name="LastName" id="LastName">
        <br>
        
        <label for="dateOfBirth">dateOfBirth</label>
        <br>
        <input value="" type="number" name="dateOfBirth" id="dateOfBirth">
        <br>
        <br>
        <input type="submit">
    </fieldset>
    </form>



</body>
</html>
