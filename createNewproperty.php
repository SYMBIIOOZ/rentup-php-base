<?php

include_once './includes/header.php';
include_once './includes/functions.php';

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

                <h1>Ajouter une nouvelle propriété :</h1>


                <form class="form-group" action="validationProperty.php" method="post"
                      enctype="multipart/form-data">
                    <label for="title">Numéro ID de l'agent</label>
                    <input type="number" class="form-control" name="idAgent" id="idAgent" placeholder="Entrez le numéro ID de l'agent"
                           required>
                    <label for="type">Type de propriété :</label>
                    <select id="type" class="form-control" name="type">
                        <option value="">-- Veuillez choisir un type --</option>
                        <?php foreach (getPropertyTypes() as $type) : ?>
                            <option value="<?= $type['id_property_type'] ?>"><?= $type['name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label for="title">Nom de la propriété :</label>
                    <input type="text" class="form-control" name="name" id="name" required>

                    <label for="street">Rue :</label>
                    <input type="text" class="form-control" name="street" id="street" required>
                    <br>
                    <label for="city">Ville :</label>
                    <input type="text" class="form-control" name="city" id="city" required>

                    <label for="zip">Code postal :</label>
                    <input type="text" class="form-control" name="zip" id="zip" required>
                    <br>
                    <label for="state">State :</label>
                    <input type="text" class="form-control" name="state" id="state" required>

                    <label for="country">Pays :</label>
                    <input type="text" class="form-control" name="country" id="country" required>
                    <br>
                    <label for="price">Prix :</label>
                    <input type="number" class="form-control" name="price" id="type" placeholder="" required>
                    <br>
                    <div>
                        Statut du bien :
                        <input type="radio" id="forRent" name="status" value="For Rent">
                        <label for="forRent">For Rent</label>
                        <input type="radio" id="forSale" name="status" value="For Sale">
                        <label for="forSale">For Sale</label>
                    </div>
                    <input type="file" class="form-control-file" name="image" id="image" accept="image/*" required>
                    <br>
                    <input type="submit" class="btn btn-primary" value="Envoyer">
                </form>
            </div>
        </section>
    </main>
    <div class=""></div>
<?php

include_once './includes/footer.php';