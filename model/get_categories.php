<?php


class Categories
{


    public function get_category($connection)
    {
        $query ="SELECT id,name FROM categories ORDER BY name";
        $statment = $connection->prepare($query);
        $statment->execute();
        $getdata = $statment->fetchall(PDO::FETCH_ASSOC);



        return $getdata;

    }


}

?>