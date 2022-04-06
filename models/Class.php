<?
class Formulaire {
    
    public function insert()
    {
       
        $formulaire = new Formulaire();

        //1. On vérifie que les données ont bien été envoyées en POST
        // On commence par le title
        $title = null;
        if (!empty($_POST['title'])) {
            //Protection contre les balises non désirer dans le champ type text du commentaire
            $title = htmlspecialchars($_POST['title']);
        }

        // Ensuite description
        $description = null;
        if (!empty($_POST['description'])) {
            //Protection contre les balises non désirer dans le champ type text du commentaire
            $description = htmlspecialchars($_POST['description']);
        }

        //  Le price
        $price = null;
        if (!empty($_POST['price'])) {
            //Protection contre les balises non désirer dans le champ type text du commentaire
            $price = htmlspecialchars($_POST['price']);
        }

        $location = null;
        if (!empty($_POST['location'])){
            //Protection contre les balises non désirer dans le champ type text du commentaire
            $location = htmlspecialchars($_POST['location']);
        }

        // Vérification des infos envoyées dans le formulaire (dans le POST)
        // Si il n'y a pas de title OU qu'il n'y a pas de description ... etc 
        if (!$title || !$description || $price || $location) {
            die("Votre formulaire a été mal rempli !");
        }

        /*
        // 2. Vérification que l'id pointe bien vers une annonce qui existe
        $annonce = $formulaire->find($id_ad);

        // Si rien n'est revenu, on fait une erreur
        if (!$annonce) {
            die(" L'annonce $id_ad n'existe pas");
        }

        // 3. Insertion du commentaire
        $this->model->insert($title, $description, $price,  $location, $id_ad);

        // 4. Redirection vers l'article en question :
        */
    }
}

?>