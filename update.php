<?php include 'layout/header.php';?>

<?php

include "config/database.php";
include "model/product.php";
include "model/get_categories.php";

$connection_database = new Connection();
$connection = $connection_database->db_connection();

$getcategory = new Categories();

$categories = $getcategory->get_category($connection);



?>

<?php

//if(isset($_REQUEST['update']))
//{
//    extract($_REQUEST);
//    if($update_products->create())
//    {}
//    var_dump($_GET['update']);
//    $query="SELECT * FROM products WHERE id=$edit->id";
//    $_POST['product_name']=$edit->name;
//    $_POST['product_price']=$edit->price;
//    $_POST['description']=$edit->description;
//    $_POST['category_id']=$edit->category_id;
//}
//?>

<form method="post" action="<?php $_SERVER["PHP_SELF"];?>" class="container md-12">

    <div class="form-group ">
        <label for="product_name">Product Name</label>
        <input type="text" class="form-control" id="product_name" name="product_name" aria-describedby="emailHelp" placeholder="Enter Product Name">
        <!--        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
    </div>
    <div class="form-group ">
        <label for="product_price">Price</label>
        <input type="number" class="form-control" id="product_price" name="product_price" aria-describedby="emailHelp" placeholder="Enter price">
        <!--        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="textarea" class="form-control" id="description" name="description" placeholder="description">
        <!--        <textarea rows="4" cols="50" id="description" form="usrform" placeholder="description"></textarea>-->

    </div>

    <select name="category_id">

        <?php

        foreach ($categories as $category)
        {
            echo "<option value='$category[id]'>$category[name]</option>";
        }


        ?>


    </select>

    <br>
    <button type="submit" name="update" class="btn btn-primary">Update</button>
</form>

<?php
if (isset($_POST['update']))
{

    $update_products = new Product($connection);
    $update_products->id = $_GET["update_id"];
    $update_products->name=$_POST['product_name'];
    $update_products->price=$_POST['product_price'];
    $update_products->description=$_POST['description'];
    $update_products->category_id=$_POST['category_id'];



    if($update_products->edit())
    {
        echo "<div class='alert alert-success'> Product was edited </div>";

    }
    else{

        echo "<div class='alert alert-danger'> Unable to edit product </div>";
    }
}
?>
<?php include 'layout/footer.php';?>
