<?php

include_once './includes/header.php';
include_once './includes/functions.php';


//function to get name of the property column


?>

    <br>
    <br>
    <br>
    <br>

<table class="table">
        <thead class="thead-dark">
          <tr>
              <th>ID</th>
              <th>Nom</th>
              <th>Adresse</th>
              <th>Ville</th>
              <th>Code Postal</th>
              <th>State</th>
              <th>Pays</th>
              <th>prix</th>
              <th>Status</th>
              <th>Crée le</th>
              <th>Type de propriété</th>
              <th>ID du vendeur | ( + Nom et Prénom)</th>
              <th>Édition/Modification</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach (getPropertiesAndSeller() as $property) : ?>
        <tr>
            <td><?= $property['id_property'] ?></td>
            <td><?= $property['name'] ?></td>
            <td><?= $property['street'] ?></td>
            <td><?= $property['city'] ?></td>
            <td><?= $property['postal_code'] ?></td>
            <td><?= $property['state'] ?></td>
            <td><?= $property['country'] ?></td>
            <td><?= $property['price'] ?></td>
            <td><?= $property['status'] ?></td>
            <td><?= $property['create_time'] ?></td>
            <td><?= $property['propname'] ?></td>
            <td><?= $property['seller_id']. ' ' . $property['last_name'] . $property['first_name'] ?></td>
            <td>
                <a class="btn btn-warning" href="createNewproperty.php?id=<?= $property['id_property']?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wrench-adjustable" viewBox="0 0 16 16">
                        <path d="M16 4.5a4.492 4.492 0 0 1-1.703 3.526L13 5l2.959-1.11c.027.2.041.403.041.61Z"/>
                        <path d="M11.5 9c.653 0 1.273-.139 1.833-.39L12 5.5 11 3l3.826-1.53A4.5 4.5 0 0 0 7.29 6.092l-6.116 5.096a2.583 2.583 0 1 0 3.638 3.638L9.908 8.71A4.49 4.49 0 0 0 11.5 9Zm-1.292-4.361-.596.893.809-.27a.25.25 0 0 1 .287.377l-.596.893.809-.27.158.475-1.5.5a.25.25 0 0 1-.287-.376l.596-.893-.809.27a.25.25 0 0 1-.287-.377l.596-.893-.809.27-.158-.475 1.5-.5a.25.25 0 0 1 .287.376ZM3 14a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
                    </svg>
                    éditer
                </a>
            </td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
<a class="btn btn-primary" href="createNewproperty.php">Ajouter une propriété</a>
<a href="index.php">Retour</a>



<?php

include_once './includes/footer.php';