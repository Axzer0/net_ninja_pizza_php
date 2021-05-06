<?php

include ('config/db_connect.php');

$email = $name = $top = '';
$errors =['email'=>'','name'=>'','top'=>''];
if(isset($_POST['submit'])){
    if (!$_POST['email']){
        $errors['email'] = 'Email is required';
    } else {
        $email = $_POST['email'];
        if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $errors['email'] = 'Enter a valid Email address';
        }
    }
    if (!$_POST['name']){
        $errors['name'] = 'Pizza Name is required';
    } else {
        $name = $_POST['name'];
        //regex
        if (!preg_match('/^[a-zA-Z\s]+$/',$name)){
            $errors['name'] = 'Only Letters and spaces';
        }

    }
    if (empty($_POST['top'])){
        $errors['top'] = 'Enter some toppings is required';
    } else {
        $top = $_POST['top'];
        if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',top)){
            $errors['top'] = 'Only letter ,commas and spaces';
        }
    }

    if (!array_filter($errors)){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $top = mysqli_real_escape_string($conn, $_POST['top']);

        $sql = "INSERT INTO pizzas (name,email,topping) VALUES ('$name','$email','$top')";

        if (mysqli_query($conn, $sql)){
            header('Location:index.php');
        } else{
            echo  'Error' . mysqli_error($conn);
        }

    }
}

?>
<!doctype html>
<html lang="en">

<?php include('template/header.php') ?>

<section>
    <div style="text-align: center;">
        <p style="font-size: 52px; color: #2f2c2c"> Add a Pizza</p>
    </div>
    <div style="background-color: white; padding: 50px;width: 40%;margin: auto">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            <label for="email">Your E-Mail</label>
            <br><br>
            <input type="text" value="<?php echo htmlspecialchars($email)?>" name="email" id="email">
            <br><br><div style="color: red"><?php echo $errors['email']?></div><br><br>
            <label for="name">Pizza Name</label>
            <br><br>
            <input type="text" value="<?php echo htmlspecialchars($name)?>" name="name" id="name">
            <br><br><div style="color: red"><?php echo $errors['name']?></div>
            <br><br>
            <label for="top">Enter Toppings</label>
            <br><br>
            <input type="text" value="<?php echo htmlspecialchars($top)?>" name="top" id="top">
            <br><br><div style="color: red"><?php echo $errors['top']?></div><br><br>
            <input class="btn" style="outline: none; border: none" type="submit" value="Submit" name="submit">
        </form>
    </div>
</section>


<?php include('template/footer.php') ?>

</body>
</html>
