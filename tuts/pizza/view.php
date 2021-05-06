<?php
include "config/db_connect.php";
if (isset($_POST['delete'])){
    $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);

    $sql = "DELETE FROM pizzas WHERE id = $id_to_delete";

    if (mysqli_query($conn,$sql)){
        header('Location: index.php');
    } else {
        echo 'Query Error' .mysqli_error($conn);
    }


}

if (isset($_GET['id'])){
    $id = mysqli_real_escape_string($conn,$_GET['id']);

    $sql = "SELECT * FROM pizzas WHERE id = $id";

    $result = mysqli_query($conn,$sql);

    $pizza = mysqli_fetch_assoc($result);

    mysqli_free_result($result);

    mysqli_close($conn);


}

?>
<!doctype html>
<html lang="en">

<?php include('template/header.php') ?>

<section style="text-align: center">
    <?php if ($pizza):?>
    <div><?php echo $pizza['name']?></div>
    <div>Created By: <?php echo htmlspecialchars($pizza['email'])?></div>
    <div>Created On: <?php echo $pizza['created_at']?></div>
    <div>Toppings</div>
    <div><?php echo $pizza['topping']?></div>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" METHOD="POST">
            <input type="hidden" name="id_to_delete" value="<?php echo $_GET['id']?>">
            <button style="outline: none;border: none" type="submit" value="Delete" name="delete" class="btn">Delete</button>
        </form>
    <?php else:?>
    NO DETAILS HERE!!
    <?php endif;?>

</section>

<?php include('template/footer.php') ?>

</body>
</html>
