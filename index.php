<!DOCTYPE html>
<html lang="Fr">
<head>
    <meta charset="UTF-8">
    <meta name="title" content="Garage.V.parrot">
    <meta name="description" content=" Le Garage.V.parrot vous propose à large choix de service pour votre véhicule: de la réparation mécanique et carrosserie à la vente de voiture d'occasion">
    <meta name="keywords" content="Garage.V.parrot, voiture d'occasion, réparation véhicule, mécanique, carrosserie, entretien">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/CSS/override-bootstrap.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <title>Garage.V.parrot</title>
</head>
<body>
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                <img width="120" src="assets/images/logo.png" alt="Logo Garage.V.parrot">
            </a>
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="index.php" class="nav-link px-2 link-secondary">Accueil</a></li>
                <li><a href="services.php" class="nav-link px-2">Services</a></li>
                <li><a href="occasion.php" class="nav-link px-2">Occasion</a></li>
                <li><a href="avis.php" class="nav-link px-2">Avis</a></li>
                <li><a href="contact.php" class="nav-link px-2">Contact</a></li>
            </ul>
            <div class="col-md-3 text-end">
                <button type="button" class="btn btn-outline-primary me-2">Se connecter</button>
                <button type="button" class="btn btn-primary">S'inscrire</button>
            </div>
        </header>
        <main>
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="./assets/images/logo.png" alt="logo" wright="450" height="250">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-6 fw-bold lh-1 mb-3">NOTRE EXPERTISE A VOTRE SERVICE DEPUIS 15 ANS !</></h1>
                    <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus accusantium numquam iste praesentium voluptatem ipsam illum suscipit. Repellat, nam molestias neque nulla sapiente rerum asperiores excepturi pariatur recusandae obcaecati praesentium?</p>
                </div>
            </div>

            <div class="row test-center">
                <div class="col-md-4 my-2 d-flex">
                    <div class="card">
                        <img src="./uploads/services/carrosserie.jpg" class="card-img-top" alt="carrosserie">
                        <div class="card-body">
                            <h5 class="card-title">Carrosserie</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 my-2 d-flex">
                    <div class="card">
                        <img src="./uploads/services/mecanique.jpg" class="card-img-top" alt="mecanique et électronique">
                        <div class="card-body">
                            <h5 class="card-title">Mécanique et Electronique</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 my-2 d-flex">
                    <div class="card">
                        <img src="./uploads/services/occasion.jpg" class="card-img-top" alt="voiture occasion">
                        <div class="card-body">
                            <h5 class="card-title">Voiture Occasion</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="index.php" class="nav-link px-2 text-body-secondary">Accueil</a></li>
                <li class="nav-item"><a href="services.php" class="nav-link px-2 text-body-secondary">Services</a></li>
                <li class="nav-item"><a href="occasion.php" class="nav-link px-2 text-body-secondary">Occasion</a></li>
                <li class="nav-item"><a href="avis.php" class="nav-link px-2 text-body-secondary">Avis</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link px-2 text-body-secondary">Contact</a></li>
            </ul>
            <p class="text-center text-body-secondary">© 2023 Société, Inc.</p>
        </footer>
    </div>
</body>
</html>