<?php include 'layout/header.php';?>
<?php
include "config/database.php";
include "model/product.php";

$connection_database = new Connection();
$connection = $connection_database->db_connection();

$get_products = new Product($connection);
$products=$get_products->read();

?>
<div class="container-fluid">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Display Products</h2>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Created</th>
                    <th>Modified</th>
                    <th>Action
                        <a  class='badge badge-success' >Edit</a>
                        <a  class='badge badge-danger'>Delete</a>
                    </th>
                </tr>.
                <?php
                foreach($products as $pro)
                {
                    echo"
                    <tr>
                        <td>$pro[id]</td>
                        <td>$pro[name]</td>
                        <td>$pro[description]</td>
                        <td>$pro[category_name]</td>
                        <td>$pro[price]</td>
                        <td>$pro[created]</td>
                        <td>$pro[modified]</td>
                        
                        <td>
                        <a href='update.php?update_id=$pro[id]' class='badge badge-success disabled' >Edit</a>
                        <a href='delete.php' name ='delete' class='badge badge-danger'>Delete</a>
                         </td>
                    </tr>";
                }
                    ?>

            </table>
        </div>
    </div>
</div>
<?php include 'layout/footer.php';?>
