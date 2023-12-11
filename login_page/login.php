<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginn.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kalnia:wght@300;400&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <title>login</title>
</head>
<body>
    <h1> Login page</h1>
    <div>
        <?php 
        
        if(isset($_POST['username']) && !empty($_POST['username'])
        && isset($_POST['password'])&& !empty($_POST['password']))
            {
            echo 'code will be here';
            } else {
            ?>
        <form action='' method="POST" id='loginform' name='loginform'>
            <lable for='username'>username </lable>
            <input type='text' id='username' name ='username'>
            <br><br>
            <lable for='password'>password </lable>
            <input type='password' id='password' name ='password'>
            <br><br>
            <input type ='hidden' id='dologin' name='dologin' value='1'>
            <button type='submit' name='submit' value='Submit'>log in</button>
        </form>
        <?php }?>
    </div>
</body>
</html>