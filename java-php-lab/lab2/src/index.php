<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
</head>
<body>
    <form action="formHandler.php" method="post">
        <label for="name">Name: </label>
        <input type="text" name="name" id="name"><br>
        <label for="sch_no">Scholar Number: </label>
        <input type="text" name="sch_no" id="sch_no"><br>
        <label for="email">Email: </label>
        <input type="email" name="email" id="email" placeholder="dummy@example.com">
        <input type="submit" value="Submit">
    </form>
</body>
</html>