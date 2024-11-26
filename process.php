<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['nom']) && !empty(trim($_POST['nom']))&&
        isset($_POST['prenom']) && !empty(trim($_POST['prenom'])) &&
        isset($_POST['email']) && !empty(trim($_POST['email'])) &&
        isset($_POST['age']) && !empty(trim($_POST['age']))) {
        
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $age = (int)$_POST['age'];
        
        echo "Bonjour, $prenom $nom. Votre email est $email et vous avez $age ans.";
    } else {
        echo "Veuillez remplir tous les champs.";
    }
}
?>
 