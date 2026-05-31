<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>{{ $restaurant->name_R }} - Foodie</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/pw2.css') }}">
</head>

<body>

  <header>

    <div class="container">

      <nav>

        <div class="logo">
          <div class="logo-box"><i class="fas fa-utensils"></i></div>
          <span>Foodie</span>
        </div>

        <div class="nav-links">
          <a href="/pw-connected">Accueil</a>
          <a href="/pw-connected#restaurantsGrid">Restaurants</a>
          <a href="#Sidebar">Menus</a>
          <a href="/pw-connected#offres">Offres</a>
          <a href="#">Contact</a>
        </div>

        <div class="cart-box" style="cursor: pointer;" onclick="window.location.href='/profile'">
          <i class="fas fa-user"></i>
        </div>

      </nav>

    </div>

  </header>

  <section class="container">

    <div class="restaurant-hero">

      <div class="restaurant-info">

        <div class="restaurant-logo">
          <img src="{{ $restaurant->logo_R ? asset($restaurant->logo_R) : asset('vendor/afrique.jpg') }}" alt="{{ $restaurant->name_R }}">
        </div>

        <h1 style="text-transform: capitalize;">{{ $restaurant->name_R }}</h1>

        <p style="text-transform: capitalize;">
          {{ $restaurant->description_R }}
        </p>

        <div class="restaurant-stats">

          <span><i class="fas fa-star"></i> 4.8 (450 avis)</span>
          <span><i class="fas fa-clock"></i> 30-45 min</span>
          <span><i class="fas fa-bell-concierge"></i> Livraison rapide</span>

        </div>

      </div>

    </div>

  </section>

  <section class="container">

    @if(session('success'))
        <div style="background: #1f9d57; color: white; padding: 15px; margin: 20px 0; border-radius: 6px; font-weight: bold; text-align: center;">
            {{ session('success') }}
        </div>
    @endif

    <div class="main-content">

      <aside class="sidebar" id="Sidebar">

        <h3>Menu</h3>

        <div class="menu-category active">
          <i class="fas fa-star"></i> Recommandés
        </div>

        <div class="menu-category">
          <i class="fas fa-pizza-slice"></i> Plats principaux
        </div>

        <div class="menu-category">
          <i class="fas fa-plate-wheat"></i> Entrées
        </div>

        <div class="menu-category">
          <i class="fas fa-hotdog"></i> Accompagnements
        </div>

        <div class="menu-category">
          <i class="fas fa-plate-wheat"></i> Desserts
        </div>

        <div class="menu-category">
          <i class="fas fa-beer"></i> Boissons
        </div>

      </aside>

      <div class="menu-content">

        <div class="top-menu">

          <h2>Nos spécialités</h2>

          <div class="search-box">

            <input
              type="text"
              placeholder="Rechercher un plat..."
              id="dishSearch"
            >

            <i class="fas fa-search"></i>

          </div>

        </div>

        <div class="dishes" id="dishesContainer">

          @foreach($plats as $plat)
            <div class="dish-card" data-name="{{ $plat->name_P }}">

              <div class="dish-image">
                <img src="{{ $plat->image ? asset($plat->image) : asset('vendor/taro.jpg') }}" alt="{{ $plat->name_P }}">
              </div>

              <div class="dish-info">

                <div class="dish-top">
                  <div class="dish-name" style="text-transform: capitalize;">
                    {{ $plat->name_P }}
                  </div>

                  <div class="dish-price">
                    {{ number_format($plat->prix_P, 0, ',', ' ') }} FCFA
                  </div>

                </div>

                <div class="dish-description" style="text-transform: capitalize;">
                  {{ $plat->description_P }}
                </div>

                <div class="dish-bottom">

                  <div class="dish-rating">
                    <i class="fas fa-star"></i> 4.9
                  </div>

                  <form action="{{ route('cart.add') }}" method="POST">
                      @csrf
                      <input type="hidden" name="plats_id" value="{{ $plat->id }}">
                      <input type="hidden" name="quantite" value="1">
                      <button type="submit" class="add-cart-btn">
                          <i class="fas fa-shopping-basket"></i> Ajouter au panier
                      </button>
                  </form>

                </div>

              </div>

            </div>
          @endforeach

        </div>

      </div>

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

          <p class="footer-text">

            La meilleure marketplace de restauration
            pour découvrir les meilleurs plats autour de vous.

          </p>

        </div>

        <div class="footer-column">

          <h3>Navigation</h3>

          <div class="footer-links">

            <a href="/pw-connected">Accueil</a>
            <a href="/pw-connected#restaurantsGrid">Restaurants</a>
            <a href="#Sidebar">Menus</a>
            <a href="/pw-connected#offres">Offres</a>

          </div>

        </div>

        <div class="footer-column">

          <h3>Support</h3>

          <div class="footer-links">

            <a href="#">Aide</a>
            <a href="#">Contact</a>
            <a href="#">FAQ</a>
            <a href="#">Conditions</a>

          </div>

        </div>

        <div class="footer-column">

          <h3>Contact</h3>

          <div class="footer-links">

            <a href="#">Douala, Cameroun</a>
            <a href="#">foodie@gmail.com</a>
            <a href="#">+237 6XX XX XX XX</a>

          </div>

        </div>

      </div>

    </div>

    <div class="footer-bottom">

      © 2026 Foodie - Tous droits réservés

    </div>

  </footer>

  <div class="popup" id="popup">
    Produit ajouté au panier 🛒
  </div>

  <script>

    // ================= SEARCH =================

    const dishSearch =
      document.getElementById('dishSearch');

    const dishCards =
      document.querySelectorAll('.dish-card');

    dishSearch.addEventListener('keyup', () => {

      const value =
        dishSearch.value.toLowerCase();

      dishCards.forEach(card => {

        const dishName =
          card.dataset.name.toLowerCase();

        if(dishName.includes(value)){

          card.style.display = 'flex';

        }else{

          card.style.display = 'none';

        }

      });

    });

    // ================= CATEGORY ACTIVE =================

    const categories =
      document.querySelectorAll('.menu-category');

    categories.forEach(category => {

      category.addEventListener('click', () => {

        categories.forEach(cat => {
          cat.classList.remove('active');
        });

        category.classList.add('active');

      });

    });

  </script>

</body>
</html>