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
              <th>ID du vendeur</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach (getProperties() as $property) : ?>
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
            <td><?= $property['created_at'] ?></td>
            <td><?= $property['property_type_id'] ?></td>
            <td><?= $property['seller_id'] ?></td>
          </tr>
        <?php endforeach; ?>

          <tr>
            <td>Durand</td>
            <td>Victor</td>
            <td>26</td>
          </tr>
          <tr>
            <td>Joly</td>
            <td>Julia</td>
            <td>27</td>
          </tr>
        </tbody>
      </table>



<?php

include_once './includes/footer.php';