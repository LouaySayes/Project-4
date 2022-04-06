<?php

class Delete
{

    private $id_ad;

    public function __construct($id_ad)
    {
        $this->id_ad = $id_ad;
    }

    public function delete()
    {
        require('./models/Connect.php');

        $sql = "DELETE FROM ad WHERE id_ad=:id_ad";
        $doular = $db->prepare($sql);
        $doular->bindValue(':id_ad', $this->id_ad);
        $doular->execute();
        header("Location: http://localhost/home.php/ ");
    }
}

    if (isset($_POST['delete'])) 
    {
        $dl = new Delete($_GET['id_ad']);
        $dl->delete();
    }
