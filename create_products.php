<?php include 'layout/header.php';?>

<?php

include "config/database.php";
include "model/get_categories.php";
include "model/product.php";

$connection_database = new Connection();

$connection = $connection_database->db_connection();

$getcategory = new Categories();

$categories = $getcategory->get_category($connection);

//var_dump($categories);








?>

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
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

<?php
if (isset($_POST['submit']))
{
    $create_product =new Product($connection);
    $create_product->name=$_POST['product_name'];
    $create_product->price=$_POST['product_price'];
    $create_product->description=$_POST['description'];
    $create_product->category_id=$_POST['category_id'];


    if($create_product->create())
    {
        echo "<div class='alert alert-success'> Product was created </div>";

    }
    else{

        echo "<div class='alert alert-danger'> Unable to create product </div>";
    }
}
?>
<?php include 'layout/footer.php';?>
