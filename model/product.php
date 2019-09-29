<?php
class Product{
    private $connection;
    private $table_name="products";
    public $id;
    public $name;
    public $price;
    public $description;
    public $category_id;
    public $timestamp;

    public function __construct($connection_db)
    {$this->connection=$connection_db;}

    public function create()
    {
        $this->timestamp=date("Y-m-d H:i:s");
       // $query="INSERT INTO ".$this->table_name.(name,description,price,category_id,created)"VALUES".('$this->name','$this->description',$this->price,$this->category_id,'$this->timestamp');
       $query="INSERT INTO products(name,description,price,category_id,created) 
  VALUES('$this->name','$this->description',$this->price,$this->category_id,'$this->timestamp')";
        var_dump($query);
        $statement=$this->connection->prepare($query);
        return $statement->execute();
        //return $state;
    }

    public function read()
    {

        $query ="SELECT products.* ,categories.name as'category_name' FROM products,categories WHERE products.category_id=categories.id";
        $statment = $this->connection->prepare($query);
        $statment->execute();
        $getdata = $statment->fetchall(PDO::FETCH_ASSOC);
        return $getdata;

    }

    public function edit()
    {
        $this->timestamp=date("Y-m-d H:i:s");
        $query ="UPDATE products set name='$this->name',description='$this->description',price=$this->price , modified = '$this->timestamp' WHERE id=$this->id";
        $statement = $this->connection->prepare($query);
         $check = $statement->execute();
        return $check;

    }



}
?>