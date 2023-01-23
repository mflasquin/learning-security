<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ma super app sécurisée - Inscription</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css"
          integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu"
          crossorigin="anonymous">
</head>
<body>
<form action="/signup" method="post" class="needs-validation" novalidate>
    <div class="form-group">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" class="form-control" id="username" name="username" required>
        <div class="invalid-feedback">
            S'il vous plaît entrez un nom d'utilisateur.
        </div>
    </div>
    <div class="form-group">
        <label for="email">Adresse email :</label>
        <input type="email" class="form-control" id="email" name="email" required>
        <div class="invalid-feedback">
            S'il vous plaît entrez une adresse email valide.
        </div>
    </div>
    <div class="form-group">
        <label for="password">Mot de passe :</label>
        <input type="password" class="form-control" id="password" name="password" required>
        <div class="invalid-feedback">
            S'il vous plaît entrez un mot de passe.
        </div>
    </div>
    <div class="form-group">
        <label for="password-confirm">Confirmez le mot de passe :</label>
        <input type="password" class="form-control" id="password-confirm" name="password-confirm" required>
        <div class="invalid-feedback">
            S'il vous plaît confirmez votre mot de passe.
        </div>
    </div>
    <button type="submit" class="btn btn-primary">S'inscrire</button>
</form>
</body>
</html>