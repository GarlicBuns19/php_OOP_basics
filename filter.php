<?php
    if(isset($_POST['submit'])){
        print_r(INPUT_POST);
        if(filter_input(INPUT_POST,'name',FILTER_VALIDATE_EMAIL)){
            echo 'Email is valid';
        }else{
            echo 'Email not valid';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter Form</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <input type="text" name="name">
        <button type="submit" name="submit">Submit</button>
    </form>
</body>

</html>