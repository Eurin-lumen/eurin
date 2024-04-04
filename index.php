<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Inscription</h2>
        <?php include('inscription.php'); ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <input type="text" name="nom" placeholder="Nom" value="<?php echo isset($nom) ? $nom : ''; ?>">
                <input type="text" name="prenom" placeholder="Prénom" value="<?php echo isset($prenom) ? $prenom : ''; ?>">
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" value="<?php echo isset($email) ? $email : ''; ?>">
            </div>
            <div class="form-group">
                <input type="password" name="mot_de_passe" placeholder="Mot de passe">
                <input type="password" name="conf_mot_de_passe" placeholder="Confirmation mot de passe">
            </div>
            <button type="submit" name="submit">S'inscrire</button>
        </form>
        <br>
        <br>
        <?php if (!empty($errors)) : ?>
            <div class="errors">
                <?php foreach ($errors as $error) : ?>
                    <p><?php echo $error; ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
