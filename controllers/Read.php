<?php
require './models/Connect.php';// à vérifier


$sql = ("SELECT * AS id_ad FROM ad");
$query = $db->prepare($sql);
$query->execute();
$result = $query->fetch();



                    foreach ($produit as $key => $value) { ?>
                    <tr>
                        <td><?= $produit[$key]['title'] ?></td>
                        <td><?= $produit[$key]['description'] ?></td>
                        <td><?= $produit[$key]['price'] ?>€</td>
                        <td><?= $produit[$key]['location'] ?></td>
                        <td><?= $produit[$key]['category'] ?></td>
                        <td><a href="controllers\Update.php?Id=<?= $produit[$key]['id_ad'] ?>">Modifier</a></td>
                        <td><a href="controllers\Delete.php?Id=<?= $produit[$key]['id_ad'] ?>" onclick="return confirm('Vous voulez vraiment supprimer cet donnée')">Supprimer</a></td>
                    </tr>

                <?php } 
/*
$sql = ("SELECT * FROM ad ORDER BY `Date` DESC LIMIT :premier, :parpage");
$query = $db->prepare($sql);
$query->bindValue(':premier', $premier, PDO::PARAM_INT);
$query->bindValue(':parpage', $parPage, PDO::PARAM_INT);
$query->execute();
$produit = $query->fetchAll(PDO::FETCH_ASSOC);
*/