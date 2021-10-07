<?php include "database.php" ?>
<?php if(isset($_GET["car_id"])){
    $car_id=$_GET["car_id"];
    $ci_query=$conn->prepare("DELETE FROM `cars` WHERE `id` = :id");
    $ci_execution=$ci_query->execute([
        'id' => $car_id
    ]);
    if($ci_execution){
        header("Location: index.php");
        die();
    }
}
?>
<?php include "includes/header.php" ?>

<div class="container">

</div>
<?php include "includes/footer.php" ?>