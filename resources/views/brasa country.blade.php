<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Restaurant - Foodie</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="{{asset('css/brasa country.css')}}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.css" rel="stylesheet">
  

</head>

<body>

  <!-- ================= HEADER ================= -->

  <header>

    <div class="container">

      <nav>

        <div class="logo">
          <div class="logo-box"><i class="fas fa-utensils"></i></div>
          <span>Foodie</span>
        </div>

        <div class="nav-links">
          <a href="#">Accueil</a>
          <a href="pw.html#restaurantsGrid">Restaurants</a>
          <a href="#">Menus</a>
          <a href="#">Offres</a>
          <a href="#">Contact</a>
        </div>

        <div class="cart-box">
          <i class="fas fa-user"></i>
        </div>

      </nav>

    </div>

  </header>

  <!-- ================= HERO ================= -->

  <section class="container">

    <div class="restaurant-hero">

      <div class="restaurant-info">

        <div class="restaurant-logo"><img src="{{asset('vendor/brasa.jpg')}}" alt=""></i></div>

        <h1>BRASA COUNTRY</h1>

        <p>
            Brasa country est un Restaurant chaleureux de yaounde, connu
          pour ses grillades ,son ambiance conviviale ses plats locaux apprecies.
        </p>

        <div class="restaurant-stats">

          <span><i class="fas fa-star"></i> 4.8 (200avis)</span>
          <span><i class="fas fa-clock"></i> 30-45 min</span>
          <span><i class="fas fa-bell-concierge"></i> Livraison rapide</span>

        </div>

      </div>

    </div>

  </section>

  <!-- ================= MAIN CONTENT ================= -->

  <section class="container">

    <div class="main-content">

      <!-- SIDEBAR -->

      <aside class="sidebar">

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

      <!-- MENU -->

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

        <!-- DISHES -->

        <div class="dishes" id="dishesContainer">

          <!-- DISH 1 -->

          <div class="dish-card" data-name="STEAK GRILLE AVEC FRITES">

            <div class="dish-image"><img src="{{asset('vendor/brasa1.jpg')}}" alt=""></div>

            <div class="dish-info">

              <div class="dish-top">

                <div class="dish-name">
                  STEAK GRILLE AVEC FRITES
                </div>

                <div class="dish-price">
                  4 000 FCFA
                </div>
                Steak de boeuf grille au feu nappe d'une sauce savoureuses
               servies avec des frites croustillant.
              </div>

              <div class="dish-description">
               
              </div>

              <div class="dish-bottom">

                <div class="dish-rating">
                  <i class="fas fa-star"></i> 4.2
                </div>

                <button class="add-cart-btn">
                  Ajouter au panier
                </button>

              </div>

            </div>

          </div>

          <!-- DISH 2 -->

          <div class="dish-card" data-name=" POISSON GRILLES AUX LEGUMES">

            <div class="dish-image"><img src="{{asset('vendor/brasa2.jpg')}}" alt=""></div>

            <div class="dish-info">

              <div class="dish-top">

                <div class="dish-name">
                   POISSON GRILLES AUX LEGUMES
                </div>

                <div class="dish-price">
                  4 500 FCFA
                </div>

              </div>

              <div class="dish-description">
                Poisson entre grilles avec des legumes sautes (carottes , haricot, tomates )
                gout legerement fumes avec citron et epice.
              </div>

              <div class="dish-bottom">

                <div class="dish-rating">
                  <i class="fas fa-star"></i> 4.9
                </div>

                <button class="add-cart-btn">
                  Ajouter au panier
                </button>

              </div>

            </div>

          </div>

          <!-- DISH 3 -->

          <div class="dish-card" data-name="POULET FRITS + FRITES">

            <div class="dish-image"><img src="{{asset('vendor/brasa4.jpg')}}" alt=""></div>

            <div class="dish-info">

              <div class="dish-top">

                <div class="dish-name">
                  POULET FRITS + FRITES
                </div>

                <div class="dish-price">
                  3 000 FCFA
                </div>

              </div>

              <div class="dish-description">
                 Poulet frit croustillant a l'exterieur et tendre a l'interieur,servies
                avec des frites dorees accompagnées d'une sauce et de crudites fraiches
                pour une touche legere. 
              </div>

              <div class="dish-bottom">

                <div class="dish-rating">
                  <i class="fas fa-star"></i> 4.1
                </div>

                <button class="add-cart-btn">
                  Ajouter au panier
                </button>

              </div>

            </div>

          </div>

          <!-- DISH 4 -->

          <div class="dish-card" data-name="POULET ROTI + FRITES">

            <div class="dish-image"><img src="{{asset('vendor/brasa3.jpg')}}" alt=""></div>

            <div class="dish-info">

              <div class="dish-top">

                <div class="dish-name">
                  POULET ROTI + FRITES
                </div>

                <div class="dish-price">
                  6 500 FCFA
                </div>

              </div>

              <div class="dish-description">
                 Poulet juteux a la peau doree servies avec des frites croustillant 
                et une ganiture de crudites fraiches pour equilibre le plats .
              </div>

              <div class="dish-bottom">

                <div class="dish-rating">
                  <i class="fas fa-star"></i> 4.9
                </div>

                <button class="add-cart-btn">
                  Ajouter au panier
                </button>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>

  <!-- ================= FOOTER ================= -->

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

            <a href="#">Accueil</a>
            <a href="#">Restaurants</a>
            <a href="#">Menus</a>
            <a href="#">Offres</a>

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

  <!-- ================= POPUP ================= -->

  <div class="popup" id="popup">
    Produit ajouté au panier 🛒
  </div>

  <!-- ================= JAVASCRIPT ================= -->

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

    // ================= CART =================

    const addButtons =
      document.querySelectorAll('.add-cart-btn');

    const cartCount =
      document.getElementById('cartCount');

    const popup =
      document.getElementById('popup');

    let count = 0;

    addButtons.forEach(button => {

      button.addEventListener('click', () => {

        count++;

        cartCount.textContent = count;

        popup.classList.add('show');

        setTimeout(() => {

          popup.classList.remove('show');

        },2000);

      });

    });

  </script>

</body>
</html>
