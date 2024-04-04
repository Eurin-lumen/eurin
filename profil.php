<?php
session_start();
if (!isset($_SESSION['nom']) || !isset($_SESSION['prenom']) || !isset($_SESSION['email'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Profil</h2>
        <table>
            <tr>
                <th>Nom</th>
                <td><?php echo $_SESSION['nom']; ?></td>
            </tr>
            <tr>
                <th>Prénom</th>
                <td><?php echo $_SESSION['prenom']; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $_SESSION['email']; ?></td>
            </tr>
        </table>
    </div>
</body>
</html>
