<?php

    require './check.php';

if (isset($_POST['name'])) {
    $validate = new User($_POST['name']);
    $errors = $validate->checkName();
    $name = $validate->getName();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Form</title>
</head>

<body>
    <center>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label>Username : <?php echo $name ?? ''; ?></label>
            <input type="text" name="name" 
                    value="<?php if (isset($_POST['name'])) {
                                        echo htmlspecialchars($_POST['name']);
                                    } ?>">
            <div><?php echo $errors['name'] ?? '' ?></div>
            <br>
            <br>
            <button type="submit" name="submit">Submit</button>
        </form>
    </center>
</body>

</html>