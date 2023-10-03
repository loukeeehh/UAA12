<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>



<body>
    <h1>Un super formulaire</h1>
    <form action="" method="">

        <div> <!-- parent 1-->
            <fieldset>
                <h2>Données personnelles</h2>

                <div>
                    <label for="prénom">Votre prénom</label>
                    <input type="text" id="prénom" name="prénom" required>
                </div>

                <div>
                    <label for="nom">Votre nom</label>
                    <input type="text" id="nom" name="nom" required>
                </div>

                <div>
                    <label for="date">Votre date de naissance</label>
                    <input type="date" id="date" name="date">
                </div>
            </fieldset>
        </div> <!-- parent 1-->

        <div> <!-- parent  2-->
            <fieldset>
                <h2>Les nouveaux input</h2>

                <div>
                    <label for="url">Votre URL</label>
                    <input type="url" id="url" name="url">
                </div>

                <div>
                    <label for="tel">Votre numéro de téléphone</label>
                    <input type="text" id="tel" name="tel">
                </div>

                <div>
                    <label for="appre">Votre appréciation (entre 10 et 20)</label>
                    <input type="range" id="appre" name="appre">
                </div>

                <div>
                    <label for="couleur">Votre couleur préferée</label>
                    <input type="color" id="couleur" name="couleur">
                </div>

                <div>
                    <label for="fichier">Choisir un fichier</label>
                    <input type="file" id="fichier" name="fichier">
                </div>

                <div>
                    <label for="heure">Choisis une heure</label>
                    <input type="time" id="heure" name="heure">
                </div>

                <div>
                    <label for="mois">Choisis un mois</label>
                    <input type="month" id="mois" name="mois">
                </div>

                <div>
                    <label for="semaine">Choisis une semaine</label>
                    <input type="week" id="semaine" name="semaine">
                </div>

                <div>
                    <label for="explication">Vos explications</label>
                    <textarea name="explication" id="explication" cols="30" rows="10"></textarea>
                </div>

                <div>
                    <label for="recherche">Votre recherche</label>
                    <input type="reset">
                </div>
            </fieldset>
        </div> <!-- fin parent 2 -->
        <fieldset>
            <div>
                <h2>Bouton envoi</h2>

                <label for="envoyer"></label>
                <input type="submit">
            </div>
        </fieldset>



</body>

</html>