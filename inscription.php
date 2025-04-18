<?php 
var_dump($_POST)

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Ballet:opsz@16..72&family=Boldonse&family=Bungee+Tint&family=DM+Serif+Text:ital@0;1&family=Dancing+Script:wght@400..700&family=Danfo&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lobster&family=M+PLUS+Rounded+1c&family=Matemasie&family=Oswald:wght@200..700&family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&family=Playwrite+CO+Guides&family=Playwrite+IN:wght@100..400&family=Playwrite+NL+Guides&family=Playwrite+VN:wght@100..400&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sevillana&display=swap"
        rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Ballet:opsz@16..72&family=Boldonse&family=Bungee+Tint&family=DM+Serif+Text:ital@0;1&family=Dancing+Script:wght@400..700&family=Danfo&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lobster&family=M+PLUS+Rounded+1c&family=Matemasie&family=Oswald:wght@200..700&family=Permanent+Marker&family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&family=Playwrite+CO+Guides&family=Playwrite+IN:wght@100..400&family=Playwrite+NL+Guides&family=Playwrite+VN:wght@100..400&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sevillana&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navb">
            <ul class="logetnom">
                <img src="android-icon-96x96.png">
                <li class="titre">dar as'salam</li>
            </ul>

            <ul class="reste">
                <div class="fab">
                    <button class="croix">X</button>
                    <li id="ays"><a href="index.php"> Accueil</a></li>
                    <li id="ays"><a href="">Omra 2025</a></li>
                    <li id="ays"><a href="inscription.php">Inscription Hadj 2025</a></li>
                    <li id="ays"><a href=""> Contact</a></li>

                </div>
            </ul>
            <svg xmlns="http://www.w3.org/2000/svg" height="32" width="28" viewBox="0 0 448 512"
                class="boss"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                <path fill="#030303"
                    d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z" />
            </svg>
        </nav>
    </header>
<body>
  <div class="salif">
    <form method="post">

    <label for="nom">Nom complet</label>
      <input type="text" id="nom" name="nom" required>

      <label for="cin">Numéro de CIN / Passeport</label>
      <input type="text" id="cin" name="cin" required>

      <label for="date_naissance">Date de naissance</label>
      <input type="date" id="date_naissance" name="date_naissance" required>

      <label for="telephone">Téléphone</label>
      <input type="tel" id="telephone" name="telephone" required>

      <label for="email">Email (facultatif)</label>
      <input type="email" id="email" name="email">

      <label for="ville">Ville de résidence</label>
      <input type="text" id="ville" name="ville" required>

      <label for="sexe">Sexe</label>
      <select id="sexe" name="sexe" required>
        <option value="">-- Sélectionnez --</option>
        <option value="Homme">Homme</option>
        <option value="Femme">Femme</option>
      </select>

      <button type="submit">S'inscrire</button>


    </form>
  </div>
</body>
</html>

