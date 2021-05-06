<?php

    //conn database
include ('config/db_connect.php');

$sql = "SELECT id,name,topping FROM pizzas";
global $conn;
$result = mysqli_query($conn,$sql);

$pizzaList = mysqli_fetch_all($result,MYSQLI_ASSOC);

mysqli_free_result($result);

mysqli_close($conn);

?>
<!doctype html>
<html lang="en">

<?php include('template/header.php') ?>

<section>
    <div style="text-align: center;">
        <p style="font-size: 52px; color: #a1a1a1"> YOUR PIZZA RECIPES FOR ALL TO SEE</p>
    </div>
    <div style="display: flex;
                justify-content: space-around;">
        <?php foreach ($pizzaList as $pizza):?>
        <div style="width: 20%;
                    padding: 20px;
                    text-align: center;
                    background-color: white">
            <div>Pizza Name: <?php echo $pizza['name']?></div>
            <br><br>
            <div>Toppings:
                <ul style="list-style: none;">
                   <?php foreach (explode(',',$pizza['topping']) as $top):?>
                    <li><?php echo $top?></li>
                   <?php endforeach;?>
                </ul>
            </div>
            <br><br>
            <hr>
            <br>
            <div style="text-align: right">
                <a href="view.php?id=<?php echo $pizza['id']?>" style="cursor: pointer">More Info</a>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</section>

<?php include('template/footer.php') ?>

</body>
</html>
