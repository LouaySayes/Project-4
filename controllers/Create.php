<?php
    
    require './models/Connect.php';// à vérifier



class Create  {
    private $title;
    private $description;
    private $price;
    private $location;
    private $category;
   


    function __construct($title, $description, $price, $location, $category, $image)
    {
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->location = $location;
        $this->category = $category;
        $this->image = $image;
    }

    public function insert()
    {
        require('./models/Connect.php');
        // insert image ici

        $db = "INSERT INTO 'ad'(  'title', 'description', 'price', 'location', 'category')VALUES (:title,:description,:price,:location,:category)";
        $sth = $db->prepare($sql);
        $sth->bindValue(':titre',$this->titre);
        $sth->bindValue(':description',$this->description);
        $sth->bindValue(':prix',$this->prix);
        $sth->bindValue(':categorie',$this->categorie);
        $db->execute();
        header("Location: http://localhost/home.php/ ");
    }

    
}

if(isset($_POST['create']))
{
    $sth = new Create($_POST['title'],$_POST['description'], $_POST['price'], $_POST['location'],  $_POST['category']);
    $sth->insert_data();
}

?>
