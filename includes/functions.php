<?php

function connectDatabase() {
    try {
        $db = new PDO('mysql:host=localhost;dbname=rentup;charset=utf8', 'root', 'root');

        return $db;


    } catch (Exception $e) {
        die ('Erreur : ' . $e->getMessage());


    }
}

function getAgentsAndPropertiesNb()
{
    $db = connectDatabase();
    $query = 'SELECT seller.*, property.*, COUNT(id_property) FROM seller, property
WHERE seller.id_seller = property.seller_id
GROUP BY seller_id';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement->fetchAll();
}


function getPropertyTypes() {
    $db = connectDatabase();
    $query = 'SELECT * FROM propertyType';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement->fetchAll();
}

function getPropertiesNumber() {
    $db = connectDatabase();
    $query = 'SELECT COUNT(id_property_type) FROM property,propertytype
    WHERE property.property_type_id = propertytype.id_property_type
    GROUP BY property_type_id';

    $statement = $db->prepare($query);
    $statement->execute();
    return $statement->fetchColumn();
}



function getProperties() {
    $db = connectDatabase();
    $query = 'SELECT property.*,propertytype.name AS propname FROM property
    INNER JOIN propertytype ON property.property_type_id = propertytype.id_property_type
    ORDER BY id_property DESC';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement->fetchAll();
}

function checKValidationForm(array $data) {
    $errors = [];
    if (empty($data['idAgent'] && is_int($data['idAgent']) != true)) {
        $errors['idAgent'] = 'Le numéro matricule du vendeur est obligatoire';
    }
    if (empty($data['type'])) {
        $errors['type'] = 'Le type de bien est obligatoire';
    }
    if (empty($data['name'])) {
        $errors['name'] = 'Le nom est obligatoire';
    }

    if (empty($data['street'])) {
        $errors['street'] = 'Le nom de la rue est obligatoire';
    }
    if (empty($data['city'])) {
        $errors['city'] = 'Le nom de la ville est obligatoire';
    }
    if (empty($data['zip'])) {
        $errors['zip'] = 'Le code postal est obligatoire';
    }
    if (empty($data['state'])) {
        $errors['state'] = 'L\'Etat est obligatoire';
    }
    if (empty($data['country'])) {
        $errors['country'] = 'Le pays est obligatoire';
    }
    if (empty($data['price'])) {
        $errors['price'] = 'Le prix est obligatoire';
    }
    if (empty($data['status'])) {
        $errors['status'] = 'Le statut du bien est obligatoire';
    }
    return $errors;
}
//function create a new property from a array to sql
function createProperty($image)
{
    $db = connectDatabase();
    $query = 'INSERT INTO property (name, street, city, postal_code, state, country, price, status, image, property_type_id, seller_id)
    VALUES (:name, :street, :city, :postal_code, :state, :country, :price, :status, :image, :property_type_id, :seller_id)';
    $statement = $db->prepare($query);
    return $statement->execute(
        [
            'name' => $_POST['name'],
            'street' => $_POST['street'],
            'city' => $_POST['city'],
            'postal_code' => $_POST['zip'],
            'state' => $_POST['state'],
            'country' => $_POST['country'],
            'price' => $_POST['price'],
            'status' => $_POST['status'],
            'image' => $image,
            'property_type_id' => $_POST['type'],
            'seller_id' => $_POST['idAgent']
        ]
    );
}





