<?php

include_once './includes/header.php';
include_once './includes/functions.php';
if(isset($_GET['id'])){
    $property= getPropertyByID($_GET['id']);
    $checkAction = $_GET['id'];


}

?>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <main>
        <section class="section">
            <div class="container">

                <h1><?php echo (isNewProperty()) ? "Ajouter une nouvelle propriété" : "Modifié la propriété" ?></h1>


                <form class="form-group" action="validationProperty.php" method="post"
                      enctype="multipart/form-data">
                    <label for="title">Numéro ID de l'agent</label>
                    <input type="number" class="form-control" name="idAgent" id="idAgent"
                           placeholder="Entrez le numéro ID de l'agent" required
                        value="<?php echo (isset($_GET['id']) ? htmlentities($property['seller_id']) : '')?>">
                    <label for="type">Type de propriété :</label>
                    <select id="type" class="form-control" name="type">
                        <option value="">-- Veuillez choisir un type --</option>
                        <?php foreach (getPropertyTypes() as $type) : ?>
                            <option value="<?= $type['id_property_type'] ?>"
                                <?php  if ( isset($_GET['id']) && $type['id_property_type'] == $property['property_type_id']){echo "selected";} ?> >
                            <?= $type['name'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <label for="title">Nom de la propriété :</label>
                    <input type="text" class="form-control" name="name" id="name" required
                           value="<?php echo (isset($_GET['id']) ? htmlentities($property['name']) : '')?> ">

                    <label for="street">Rue :</label>
                    <input type="text" class="form-control" name="street" id="street" required
                           value="<?php echo (isset($_GET['id']) ? htmlentities($property['street']) : '')?> " >
                    <br>
                    <label for="city">Ville :</label>
                    <input type="text" class="form-control" name="city" id="city" required
                           value="<?php echo (isset($_GET['id']) ? htmlentities($property['city']) : '')?> ">

                    <label for="zip">Code postal :</label>
                    <input type="text" class="form-control" name="zip" id="zip" required
                           value="<?php echo (isset($_GET['id']) ? htmlentities($property['postal_code']) : '')?> ">
                    <br>
                    <label for="state">State :</label>
                    <input type="text" class="form-control" name="state" id="state" required
                           value="<?php echo (isset($_GET['id']) ? htmlentities($property['state']) : '')?> ">

                    <label for="country">Pays :</label>
                    <input type="text" class="form-control" name="country" id="country" required
                           value="<?php echo (isset($_GET['id']) ? htmlentities($property['country']) : '')?> ">
                    <br>
                    <label for="price">Prix :</label>
                    <input type="number" class="form-control" name="price" id="price" placeholder="€" required
                           value="<?php if(isset($_GET['id'])){echo htmlentities($property['price']);} ?>">
                    <br>
                    <br>
                    <div>
                        Statut du bien :
                        <input type="radio" id="forRent" name="status" value="For Rent"
                        <?php if(isset($_GET['id']) && $property['status'] === "For Rent") {echo "checked";} ?> >
                        <label for="forRent">For Rent</label>
                        <input type="radio" id="forSale" name="status" value="For Sale"
                        <?php if(isset($_GET['id']) && $property['status'] === "For Sale") {echo "checked";} ?> >
                        <label for="forSale">For Sale</label>
                    <?php if(isset($_GET['id'])) : ?>
                        <input type="radio" id="sold" name="status" value="Sold"
                        <?php if(isset($_GET['id']) && $property['status'] === "Sold") {echo "checked";} ?> >
                        <label for="sold">Sold</label>
                        <input type="radio" id="rent" name="status" value="Rent"
                        <?php if(isset($_GET['id']) && $property['status'] === "Rent") {echo "checked";} ?> >
                        <label for="rent">Rent</label>

                    <?php endif; ?>
                    </div>
                    <input type="file" class="form-control-file" name="image" id="image" accept="image/*"
                           value="<?php if(isset($_GET['id'])){echo htmlentities($property['image']);} ?>">
                    <br>
                    <input type="hidden" name="check" value="<?php if (isset($_GET['id'])) {echo $_GET['id'];} ?>">
                    <input type="submit" class="btn btn-primary" value="Envoyer">
                </form>
            </div>
        </section>
    </main>
    <div class=""></div>
<?php

include_once './includes/footer.php';