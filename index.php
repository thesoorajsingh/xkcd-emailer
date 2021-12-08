<?php
if (empty($_POST["email"])) {
    $emailErr = "Email is required";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-index.css">
    <title>Welcome!</title>
</head>

<body>

    <div class="primary-container">
        <form action="verify.php" method="POST">
            <h2>Enter your Name:</h2>
            <input type="text" name="name" required>
            <h2>Enter your email address:</h2>
            <input type="email" name="email" id="email" required><br><button type="submit">Submit</button>
        </form>
    </div>
</body>

<script>

</script>

</html>