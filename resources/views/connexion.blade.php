<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Foodie</title>
    <link rel="stylesheet" href="{{ asset('css/connexion.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.css" rel="stylesheet">
</head>
<body>

<section class="main">
    <div class="login-box">
        <div class="logo">
            <div class="logo-box"><i class="fas fa-utensils"></i></div>
            <span>Foodie</span>
        </div>

        <h1>Connexion</h1>
        <p class="subtitle">Connectez-vous à votre compte</p>

        <form id="loginForm" action="{{ route('login') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Email</label>
                @error('email')
                    <p style="color: red; font-size: 14px; margin-bottom: 5px;">{{ $message }}</p>
                @enderror
                <input type="email" name="email" class="input" value="{{ old('email') }}" required>
            </div>

            <div class="form-group">
                <label>Mot de passe</label>
                @error('password')
                    <p style="color: red; font-size: 14px; margin-bottom: 5px;">{{ $message }}</p>
                @enderror
                <input type="password" name="password" class="input" required>
            </div>

            <button class="login-btn" type="submit">Se connecter</button>
        </form>

        <p class="bottom-text">
            Pas encore de compte ?
            <a href="/inscription">Créer un compte</a>
        </p>
    </div>
</section>

<footer>
    <div class="container">
        <div class="footer-content">
            <div>
                <h2>Foodie</h2>
                <p style="color:#b5b5b5;margin-top:15px;line-height:1.8;">Votre plateforme favorite de livraison.</p>
            </div>
            <div>
                <h3>Navigation</h3>
                <button style="margin-top:15px;color:#b5b5b5; background: none; border: none; cursor: pointer;" id="acceuil">Accueil</button>
            </div>
            <div>
                <h3>Contact</h3>
                <p style="margin-top:15px;color:#b5b5b5;">foodie@gmail.com</p>
            </div>
        </div>
    </div>
    <div class="footer-bottom">© 2026 Foodie</div>
</footer>

<script>
    document.getElementById('acceuil').addEventListener('click', () => {
        window.location.href = "/";
    });
</script>
</body>
</html>
