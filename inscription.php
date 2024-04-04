<?php
$errors = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérification du nom
    if (empty($_POST['nom']) || strlen($_POST['nom']) < 3) {
        $errors[] = "Le nom doit comporter au moins 3 caractères.";
    } else {
        $nom = $_POST['nom'];
    }

    // Vérification du prénom
    if (empty($_POST['prenom']) || strlen($_POST['prenom']) < 4) {
        $errors[] = "Le prénom doit comporter au moins 4 caractères.";
    } else {
        $prenom = $_POST['prenom'];
    }

    // Vérification de l'email
    if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Veuillez entrer une adresse email valide.";
    } else {
        $email = $_POST['email'];
    }

    // Vérification du mot de passe
    if (empty($_POST['mot_de_passe']) || strlen($_POST['mot_de_passe']) < 5) {
        $errors[] = "Le mot de passe doit comporter au moins 5 caractères.";
    } elseif ($_POST['mot_de_passe'] != $_POST['conf_mot_de_passe']) {
        $errors[] = "Les mots de passe ne correspondent pas.";
    } else {
        $mot_de_passe = $_POST['mot_de_passe'];
    }

    // Si aucune erreur, créer les cookies et rediriger
    if (empty($errors)) {
        // Création des cookies
        setcookie('nom', $nom, time() + (86400 * 30), "/");
        setcookie('prenom', $prenom, time() + (86400 * 30), "/");
        setcookie('email', $email, time() + (86400 * 30), "/");
        
        // Création de la session
        session_start();
        $_SESSION['nom'] = $nom;
        $_SESSION['prenom'] = $prenom;
        $_SESSION['email'] = $email;

        // Redirection vers la page de profil
        header("Location: profil.php");
        exit;
    }
}
?>
