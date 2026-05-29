<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Foodie</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/inscription.css') }}">
</head>
<body>

<section class="main">
    <div class="form-container">
        <div class="logo">
            <div class="logo-box"><i class="fas fa-utensils"></i></div>
            <span>Foodie</span>
        </div>

        <h1>Créer un compte</h1>
        <p class="subtitle">Rejoignez la meilleure marketplace de restauration</p>

        <form id="registerForm" action="{{ route('register') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Nom complet</label>
                @error('name')
                    <p style="color: red; font-size: 14px;">{{ $message }}</p>
                @enderror
                <input type="text" name="name" class="input" placeholder="Entrez un nom" value="{{ old('name') }}" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                @error('email')
                    <p style="color: red; font-size: 14px;">{{ $message }}</p>
                @enderror
                <input type="email" name="email" class="input" placeholder="Ex: yann@gmail.com" value="{{ old('email') }}" required>
            </div>

            <div class="form-group">
                <label>Mot de passe</label>
                @error('password')
                    <p style="color: red; font-size: 14px;">{{ $message }}</p>
                @enderror
                <input type="password" name="password" class="input" placeholder="Entrez un mot de passe" required>
            </div>

            <div class="form-group">
                <label>Vous êtes :</label>
                @error('role')
                    <p style="color: red; font-size: 14px;">{{ $message }}</p>
                @enderror
                <select class="input select" name="role" required>
                    <option value="">Choisir un rôle</option>
                    <option value="client" {{ old('role') == 'client' ? 'selected' : '' }}>Client</option>
                    <option value="restaurant" {{ old('role') == 'restaurant' ? 'selected' : '' }}>Restaurant</option>
                </select>
            </div>

            <button class="register-btn" type="submit">Créer un compte</button>
        </form>

        <p class="bottom-text">
            Déjà un compte ?
            <a href="/connexion">Se connecter</a>
        </p>
    </div>
</section>

<footer>
    <div class="container">
        <div class="footer-content">
            <div>
                <div class="footer-logo">
                    <div class="footer-logo-box"><i class="fas fa-utensils"></i></div>
                    <span>Foodie</span>
                </div>
                <p class="footer-text">Découvrez les meilleurs restaurants et commandez facilement.</p>
            </div>
            <div class="footer-column">
                <h3>Navigation</h3>
                <div class="footer-links">
                    <a href="/">Accueil</a>
                </div>
            </div>
            <div class="footer-column">
                <h3>Support</h3>
                <div class="footer-links">
                    <a href="#">FAQ</a>
                    <a href="#">Aide</a>
                    <a href="#">Contact</a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">© 2026 Foodie - Tous droits réservés</div>
</footer>

<script>
    // Le traitement se fait désormais côté serveur via le contrôleur Laravel pour plus de sécurité.
</script>
</body>
</html>
