<?php


class Update
{
    private $id_ad;
    private $title;
    private $description;
    private $price;
    private $location;
    private $category;


    function __construct($id_ad, $title, $description, $price, $location, $category)
    {
        $this->id_ad = $id_ad;
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->location = $location;
        $this->category = $category;
    }

    public function insert_data()
    {
        require('./models/Connect.php');

        $sql = "UPDATE ad SET title= :title, description= :description, price= :price ,location= :location, category= :category WHERE id_ad= :id_ad";
        $sth = $db->prepare($sql);
        $sth->bindValue(':id_ad', $this->id_ad);
        $sth->bindValue(':title', $this->title);
        $sth->bindValue(':description', $this->description);
        $sth->bindValue(':price', $this->price);
        $sth->bindValue(':location', $this->location);
        $sth->bindValue(':category', $this->category);
        $sth->execute();
        header("Location: http://localhost/home.php/ ");
    }
}

if (isset($_POST['update'])) {
    $sth = new Update($_GET['id_ad'], $_POST['titre'], $_POST['description'], $_POST['prix'], $_POST['categorie']);
    $sth->insert_data();
}
