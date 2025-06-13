<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);


$host = 'sql101.infinityfree.com';
$db   = 'if0_38998203_varas3240';
$user = 'if0_38998203';
$pass = 'Seckene93240'; // <-- Mets ici ton vrai mot de passe
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, 
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    
}
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = $_POST['nom'];
    $cin = $_POST['cin'];
    $date_naissance = $_POST['date_naissance'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'] ?? null; 
    $ville = $_POST['ville'];
    $sexe = $_POST['sexe'];

    $sql = "INSERT INTO user (nomcomplet, Numéro_de_CIN, Date_de_naissance, Téléphone, Email, Ville, Sexe)
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nom, $cin, $date_naissance, $telephone, $email, $ville, $sexe]);

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Ballet:opsz@16..72&family=Boldonse&family=Bungee+Tint&family=DM+Serif+Text:ital@0;1&family=Dancing+Script:wght@400..700&family=Danfo&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lobster&family=M+PLUS+Rounded+1c&family=Matemasie&family=Oswald:wght@200..700&family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&family=Playwrite+CO+Guides&family=Playwrite+IN:wght@100..400&family=Playwrite+NL+Guides&family=Playwrite+VN:wght@100..400&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sevillana&display=swap"
        rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Ballet:opsz@16..72&family=Boldonse&family=Bungee+Tint&family=DM+Serif+Text:ital@0;1&family=Dancing+Script:wght@400..700&family=Danfo&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lobster&family=M+PLUS+Rounded+1c&family=Matemasie&family=Oswald:wght@200..700&family=Permanent+Marker&family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&family=Playwrite+CO+Guides&family=Playwrite+IN:wght@100..400&family=Playwrite+NL+Guides&family=Playwrite+VN:wght@100..400&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sevillana&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ancizar+Serif:ital,wght@0,300..900;1,300..900&family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Roboto+Slab:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>

<body>
        <nav class="navb">
            <ul class="logetnom">
                <img src="android-icon-96x96.png">
                <li class="titre44">Dar as'salam</li>
            </ul>

            <ul class="reste">
                <div class="fab">
                    <button class="croix">X</button>
                    <li id="ays"><a href="index.php"class="lienA"> Accueil</a></li>
                    <li id="ays"><a href="omra.php"class="lienA">Omra 2025</a></li>
                    <li id="ays"><a href="inscription.php"class="lienA">Inscription Hadj 2025</a></li>
                    <li id="ays"><a href="administratif.php"class="lienA">Administratif</a></li>
                   
                    <li id="ays"><a href="contact.php"class="lienA"> Contact</a></li>

                </div>
            </ul>
            <svg xmlns="http://www.w3.org/2000/svg" height="32" width="28" viewBox="0 0 448 512"
                class="boss"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                <path fill="#030303"
                    d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z" />
            </svg>
        </nav>
<body>
<h1 class="inter">Inscriptions Hadj 2025</h1>

<div class="ligne-cartes23">
        <div class="goos5">
            
            <span>
                <p class="Omra20256">Hadj 2025</p>
               
            </span>
            <p class="deuxx">PACKAGE LUXURY</p>
            <div class="rondj3">
                <p class="quatre">A partir de 8500€</p>
                <p class="cinque">Du<bR> 20 janvier au 31 février</p>

                
            </div>
            
        </div>
        <div class="goos5">
            <span>
                <p class="Omra20256">Hadj 2025</p>
             
            </span>
            <p class="deuxx">PACKAGE PREMIUM</p>
            <div class="rondj3">
                <p class="quatre">A partir de 6500€</p>
                <p class="cinque">Du<bR> 20 janvier au 31 février</p>

                
            </div>
            
        </div>
    </div>
   
    <h1 class="inter">Programe hajj </h1>
    

<div class="folome">
    <div class="premierjan">
    <h2>Premier jours</h2>
   </div>
    <div class="janajan">
   <p31> -Départ / Arrivée : Paris CDG / Médine </p31><br>
   <p31>-Transfert : Bus climatisés – de l’aéroport de Médine à l’hôtel.</p31><br>
   <p31>-Hébergement : Séjour à Médine dans un hôtel situé à 450m de l’Esplanade</p31><br>
    <p31>-Durée : 4 nuits</p31>
</div>

</div>
<div class="folome">
    <div class="premierjan">
    <h2>Deuxième jour</h2>
   </div>
    <div class="janajan">
<p31> -Programme libre : Profitez pleinement de la Mosquée du Prophète ﷺ
</p31>
<br>
<p31>-Visite de lieux historiques de la ville de Médine (Mosquée de Quba, visite du cimetière des martyrs d’Ouhoud,…)
</p31>
<br>

<p31>-Cours de préparation à la Omra </p31>
</div>

</div>
<div class="folome">
    <div class="premierjan">
    <h2>Troisième jour</h2>
   </div>
    <div class="janajan">
<p31> -Transfert : Bus climatisés – Après la prière de Dhor<br>
</p31>
<p31>-Arrivée : Prévue en début de soirée<br>
</p31>
<p31>-Hébergement : Séjour à La Mecque dans un hôtel situé à 800m de l’Esplanade Durée : 5 nuits<br>
</p31>
<p31>-Cours de préparation au Hajj : Explication des rites du Hajj et réponses aux questions. </p31><br>
</div>

</div>
<div class="folome">
    <div class="premierjan">
    <h2>Quatrième sixième jour </h2>
   </div>
    <div class="janajan">
   <p31>- Programme libre :
   Profitez pleinement de la Mosquée Sacrée où une prière en à la récompense de cent milles </p31>
   <br>
   <p31>
-Cours : Derniers rappels et consignes pratiques pour le Hajj (logistique, sécurité, spiritualité).</p31>
  
</div>


</div>
<div class="folome">
    <div class="premierjan">
    <h2>Septième jour </h2>
   </div>
    <div class="janajan">
   <p31>- Départ pour Mina : En bus climatisés.

</p31>
<br>

   <p31>-Hébergement : Camp sous tentes à Mina.</p31>
   <br>

   <p31>
   -Rites : Prières à Mina (Dhor, Asr, Maghrib, Isha et Fajr) selon les rites du Hajj.</p31>

</div>


</div>


<div class="folome">
    <div class="premierjan">
    <h2> Huitième jour</h2>
   </div>
    <div class="janajan">
   <p31>-Départ pour Arafat : Après le lever du soleil.</p31>
   <br>

   <p31>
  -Station à Arafat : Invocation et recueillement jusqu’au coucher du soleil..</p31>
   <br>

   <p31>
   -Départ pour Mouzdalifah : Prière de Maghrib et Isha combinées, collecte des cailloux.
   </p31>

   <br>
   
   <p31>
   -Nuitée : À la belle étoile à Mouzdalifah.
   </p31>
   <br>

   <p31>
   Neuvième jour (10 Dhoul-Hijja – Jour de l’Aïd)
</p31>
</div>


</div>




<div class="folome">
    <div class="premierjan">
    <h2> 
    Dixième et onzième jours </h2>
   </div>
    <div class="janajan">
   <p31>- Rites : Lapidation des trois stèles (Jamrât).</p31>
   <br>

   <p31>-Hébergement : Dernière(s) nuit(s) à Mina.</p31>
   <br>

   <p31>

-Fin du Hajj : Retour à La Mecque en fin de journée du 12 ou 13 selon le groupe.
   </p31>

</div>


</div>



<div class="folome">
    <div class="premierjan">
    <h2>
    Derniers jours </h2>
</div>
<div class="janajan">
<p31>
-Tawaf d’adieu (Tawaf al-Wada)
</p31>
   <br>
    
   <p31>
-Transfert retour : Vers l’aéroport de Jeddah ou Médine selon le vol.
</p31>
   <br>
    
   <p31>
-Retour : Vol retour vers Paris CDG.

</p31>

</div>
</div>

 

  
</body>

<footer class="footer">
    <p>© 2025 Dar as'salam - Tous droits réservés</p>
    <p>
        <a href="mailto:contact@darassalam.com" class="footer-link">Contactez-nous</a> |
        <a href="/mentions-legales" class="footer-link">Mentions légales</a>
    </p>
</footer>


    <script src="ex.js"></script>
</html>

