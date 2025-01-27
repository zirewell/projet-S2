<?php
declare(strict_types=1);
require_once 'autoload.php';

$envoiePostal1 = new WebPage();

$envoiePostal1->setTitle("Envoie postal");

$envoiePostal1->appendToHead(<<<HTML
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="../assets/img/logo.png" />
    <link href="../assets/style.css" rel="stylesheet">

    <header class="d-flex justify-content-end bg-light">
        <p id="gillus" class="bg-white px-5 py-1 rounded-3 fw-bold shadow-sm ">Gillus</p>

        <div class="mx-5 my-3 d-flex flex-row">

            <nav class="navbar navbar-expand-lg navbar-light py-0 bg-white rounded text-end shadow-sm px-2 mx-3 rounded-3">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link text-dark py-0 " aria-current="page" href="../index.html">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark py-0" href="startCusom.html">Sur mesure</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark py-0" href="#">Réparation</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-danger border-bottom border-dangerpy-0 p-0"
                                    href="giloumatic.html">Créer config</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark py-0" href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <svg xmlns="http://www.w3.org/2000/svg" style="width : 40px;" class="bg-white rounded shadow-sm p-2 rounded-3"
                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <a href="Authentification.html"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></a>
            </svg>
        </div>
    </header>
</head>
HTML
);

$envoiePostal1->appendContent(<<<HTML
    <div class="d-flex flex-column">
        <h1>Envoi Postal</h1>
        <div class="d-inline-flex p-2 bd-highlight justify-content-center m-3 d-flex column">  
            <div class="btn bg-white rounded-3 fw-bold p-0 shadow nav-link text-dark text-center w-100 d-flex flex-row justify-content-around my-1 py-2">
                        <img src="fichier image../assets/img.png">
                        <p class="my-auto flex-grow">nomProcesseur</p>
                        <p></p>
                        <p class="my-auto flex-grow"></p>
                        <p class="my-auto flex-grow">Prix processeur en €</p>
                        <p></p>
                        
            </div>
            </div>
            <div class="d-inline-flex p-2 bd-highlight justify-content-center m-3 d-flex column">  

            <label class="d-inline-flex flex-column bg-white text-center text-dark fw-bold justify-content-around m-4 p-auto rounded-1"> 
            <p>Utiliser les informations de mon compte
            <input name="html" type="checkbox" value="html">
            </p>
        </label>
        </div> 
HTML
);

$envoiePostal1->appendContent(<<<HTML
        <p></p>

        <div class="d-inline-flex p-2 bd-highlight flex-column justify-content-center">
            <div class="d-flex flex-sm-row flex-column justify-content-center">
                <input class = "my-3 py-2 " name="lastname" type="text" placeholder="Nom" required>
                <input class = "my-3 py-2 " name="firstname" type="text" placeholder="Prénom" required>
                <input class = "my-3 py-2 " name="telephone" type="text" placeholder="N°Tel" required>
            </div>

            <p></p>

            <div class="d-flex flex-sm-row flex-column justify-content-center my-1 py-2">

                <input class = "my-3 py-2 " name="ville" type="text" placeholder="Ville" required>
                <input class = "my-3 py-2 " name="CP" type="text" placeholder="Code Postal" required>
                <input class = "my-3 py-2 " name="adress" type="text" placeholder="Adresse" required>

            </div>

        </div>

    </div>
HTML
);

// Affichage de la page
echo $envoiePostal1->toHTML();

