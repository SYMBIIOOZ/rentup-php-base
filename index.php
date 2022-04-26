<?php

include './includes/header.php';
include './includes/functions.php';


?>

    <main>

        <section class="section-home">
            <div class="container section-home-content">
                <h1>Search Your Next Home</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis porro doloremque consequuntur,
                    error incidunt, sed natus qui temporibus eius alias nemo beatae explicabo sint ratione consequatur.
                    Deleniti minus vero quas.</p>
            </div>
        </section>

        <section class="section section-bg-grey">
            <div class="container">

                <header class="section-header">
                    <h2>Featured Property Types</h2>
                    <p>Find All Type of Property.</p>
                </header>

                <div class="property-type-list">
                    <?php foreach(getPropertyTypes() as $propertyType) : ?>
                        <article class="card">
                            <div class="icon">
                                <i class="<?= $propertyType['picto'] ?>"></i>
                            </div>
                            <h3><?= $propertyType['name'] ?></h3>
                            <p><?= getPropertiesNumber() ?> Properties</p>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">

                <header class="section-header">
                    <h2>Recent Property Listed</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae excepturi animi amet incidunt ad,
                        ut et quisquam eveniet tenetur asperiores ipsum obcaecati doloremque cupiditate totam deserunt
                        officia quia atque nam.</p>
                </header>

                <div class="property-list">
                    <?php foreach(getPropertiesAndSeller() as $index => $property) : ?>
                        <?php if($index < 3) : ?>
                            <article class="card">
                                <div class="card-img-container">
                                    <img src="<?= $property['image'] ?>" alt="<?= $property['name'] ?>">
                                </div>
                                <div class="card-content">
                                    <header class="card-content-header">
                                            <div class="<?php echo ($property['status'] === 'For Sale') ? 'badge badge-warning' : 'badge badge-success'?>">
                                                <?= $property['status'] ?>
                                            </div>
                                            <i class="fa fa-heart-o"></i>
                                    </header>

                                    <h3><?= $property['name'] ?></h3>
                                    <p>
                                        <i class="fa fa-map-marker"></i>
                                        <?= $property['street'] ?>
                                    </p>
                                    <p> <?= $property['city'] . ' ' . $property['state']?></p>
                                    <p><?= $property['country'] ?></p>
                                </div>
                                <footer class="card-footer">
                                    <div>
                                        <button class="btn btn-primary">
                                            <?= $property['price']  . ' €' ?>
                                        </button>

                                    </div>
                                    <p><?=$property['propname']?></p>
                                    <div></div>


                                </footer>
                            </article>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>

        <section class="section">
            <div class="container">
                <header class="section-header">
                    <h2>Explore By Location</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae excepturi animi amet incidunt ad,
                        ut et quisquam eveniet tenetur asperiores ipsum obcaecati doloremque cupiditate totam deserunt
                        officia quia atque nam.</p>
                </header>
                <div class="city-list">
                    <div class="city-list-item">
                        <div class="city-bg-grey"></div>
                        <h3 class="city-list-title">New Orleans, Louisiana</h3>
                        <div class="city-list-infos">
                            <span>12 Villas</span>
                            <span>10 Apartments</span>
                            <span>07 Offices</span>
                        </div>
                    </div>
                    <div class="city-list-item">
                        <div class="city-bg-grey"></div>
                        <h3 class="city-list-title">Jerrsy, United State</h3>
                        <div class="city-list-infos">
                            <span>12 Villas</span>
                            <span>10 Apartments</span>
                            <span>07 Offices</span>
                        </div>
                    </div>
                    <div class="city-list-item">
                        <div class="city-bg-grey"></div>
                        <h3 class="city-list-title">Liverpool, London</h3>
                        <div class="city-list-infos">
                            <span>12 Villas</span>
                            <span>10 Apartments</span>
                            <span>07 Offices</span>
                        </div>
                    </div>
                    <div class="city-list-item">
                        <div class="city-bg-grey"></div>
                        <h3 class="city-list-title">New York, United States</h3>
                        <div class="city-list-infos">
                            <span>12 Villas</span>
                            <span>10 Apartments</span>
                            <span>07 Offices</span>
                        </div>
                    </div>
                    <div class="city-list-item">
                        <div class="city-bg-grey"></div>
                        <h3 class="city-list-title">Montreal, Canada</h3>
                        <div class="city-list-infos">
                            <span>12 Villas</span>
                            <span>10 Apartments</span>
                            <span>07 Offices</span>
                        </div>
                    </div>
                    <div class="city-list-item">
                        <div class="city-bg-grey"></div>
                        <h3 class="city-list-title">California, USA</h3>
                        <div class="city-list-infos">
                            <span>12 Villas</span>
                            <span>10 Apartments</span>
                            <span>07 Offices</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <header class="section-header">
                    <h2>Our Featured Agents</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae excepturi animi amet incidunt ad,
                        ut et quisquam eveniet tenetur asperiores ipsum obcaecati doloremque cupiditate totam deserunt
                        officia quia atque nam.</p>
                </header>
                <div class="agents-list">
                    <?php foreach (getAgentsAndPropertiesNb() as $agent) : ?>
                        <article class="card">
                            <div class="card-img-container">
                                <div class="badge">
                                    <?= $agent['COUNT(id_property)']?>
                                </div>
                                <div class="agent-img">
                                    <span>
                                        <img class="check" src="./images/verified.svg" alt="">
                                    </span>
                                    <img class="agent-photo" src="<?= $agent['profile_picture']?>" alt="portrait-agent-2">
                                </div>
                                <div class="agent-localisation">
                                    <i class="fa fa-map-marker"></i> <?= $agent['location']?>
                                </div>
                                <div class="agent-name">
                                    <h3><?= $agent['first_name'] . $agent['last_name'] ?></h3>
                                </div>
                                <div class="agent-contact">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i id="facebook" class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i id="linkedin" class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i id="instagram" class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i id="twitter" class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <footer class="card-footer">
                                    <div class="btn btn-primary">
                                        <i class="fa fa-envelope-o"></i>
                                        Message
                                    </div>
                                    <div class="btn btn-secondary">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                </footer>
                            </div>
                        </article>
                    <?php endforeach;?>
                </div>
            </div>
        </section>

        <section class="section section-pre-footer section-bg-green">
            <div class="container">
                <article class="pre-footer-text">
                    <h2>Do You Have Questions ?</h2>
                    <p>We help you to grow your career and growth.</p>
                </article>
                <div class="btn btn-pre-footer">
                    <a href="contact.html">
                        Contact Us Today
                    </a>
                </div>
            </div>
        </section>

    </main>

 <?php include './includes/footer.php'; ?>