<?php include "database.php" ?>

<?php include "includes/header.php" ?>
<div class="row flex-row-reverse mr-3 pt-2">
    <a href="add_car.php"><button class="btn btn-primary">Add New Car</button></a>
</div>
<div class="container pt-4">
<div class="row">
<?php 
$cars_query=$conn->prepare("SELECT * FROM cars");
$cars_query->execute();
$rows=$cars_query->fetchAll(PDO::FETCH_ASSOC);
// print_r($rows);
foreach ($rows as $row) {
    echo '<div class="card ml-4 mb-4" style="width: 18rem;">
    <img class="card-img-top" src="assets/img/'.$row['image'].'" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">'.$row["name"].'</h5>
        <p class="card-text">'.$row["description"].'</p>
        <div class="row justify-content-between px-2">
            <a href="edit_car.php?car_id='.$row["id"].'"><button class="btn btn-warning">Edit</button></a>
            <a href="delete_car.php?car_id='.$row["id"].'"><button class="btn btn-danger">Delete</button></a>
        </div>
    </div>
    </div>';
}

?>

<?php include "includes/footer.php" ?>