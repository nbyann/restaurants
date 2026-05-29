<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Foodie Marketplace</title>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.css" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('css/pw.css') }}">
</head>

<body>

  <!--HEADER -->

  <header>

    <div class="container">

      <nav>

        <div class="logo">
          <div class="logo-box"><i class="fas fa-utensils"></i></div>
          <span>Foodie</span>
        </div>

        <div class="nav-links">

          <button class="nav-btn" id="accueil">
            Acceuil
          </button>

          <button class="nav-btn" id="restaurantsBtn">
            Restaurants
          </button>

          <button class="nav-btn" id="categoriesBtn">
            Catégories
          </button>

          <button class="nav-btn" id="Off">
            Offres
          </button>

          <button class="nav-btn">
            À propos
          </button>

        </div>
        
        <div class="cart-box">
          <i class="fas fa-user"></i>
        </div>
        

      </nav>

    </div>

    <!--RESTAURANTS DROPDOWN -->

    <div class="dropdown" id="restaurantsDropdown">

      <div class="container">

        <div class="dropdown-content">

          <div class="dropdown-item restaurant-link" data-target="afrique">
            
            <h4>Le Goût d'Afrique</h4>
            <p>Cuisine africaine authentique</p>

          </div>

          <div class="dropdown-item restaurant-link" data-target="cap deli">

            <h4>Cap Deli</h4>
            <p>Cuisine africaine</p>

          </div>

          <div class="dropdown-item restaurant-link" data-target="brasa country">

            <h4>Brasa Country</h4>
            <p>Cuisine africaine</p>

          </div>

          <div class="dropdown-item restaurant-link" data-target="fogo">

            <h4>Fogo</h4>
            <p>Cuisine africaine</p>

          </div>

          <div class="dropdown-item restaurant-link" data-target="tagidor">

            <h4>Tagidor</h4>
            <p>Cuisine africaine</p>

          </div>

        </div>

      </div>

    </div>

    <!--CATEGORIES DROPDOWN-->

    <div class="dropdown" id="categoriesDropdown">

      <div class="container">

        <div class="dropdown-content">

          <div class="dropdown-item cat">
            <h4><i class="fas fa-spoon"></i> Pizza</h4>
            <p>Les meilleures pizzas</p>
          </div>

          <div class="dropdown-item cat">
            <h4><i class="fas fa-spoon"></i> Burgers</h4>
            <p>Burgers premium</p>
          </div>

          <div class="dropdown-item cat">
            <h4><i class="fas fa-spoon"></i> Sushi</h4>
            <p>Saveurs japonaises</p>
          </div>

          <div class="dropdown-item cat">
            <h4><i class="fas fa-spoon"></i> Africain</h4>
            <p>Cuisine africaine</p>
          </div>

          <div class="dropdown-item cat">
            <h4><i class="fas fa-spoon"></i> Desserts</h4>
            <p>Pâtisseries & douceurs</p>
          </div>

        </div>

      </div>

    </div>

  </header>

  <!-- HERO -->

  <section class="hero">

    <div class="container">

      <div class="hero-content">

        <h1>

          Vos plats préférés,
          <span>livrés chez vous</span>

        </h1>

        <p>

          Découvrez les meilleurs restaurants
          autour de vous et commandez rapidement.

        </p>

        <!-- SEARCH -->

        <div class="search-wrapper">

          <div class="search-bar">

            <div class="location">
              <i class="fas fa-city" style="font-size: 30px;"></i> 
              <select name="" id="villes" style="border: none; background: none;color: white; cursor: pointer;">
                <option value="Douala" style="color: black;"> Douala, Cameroun</option>
                <option value="Yaounde" style="color: black;">Yaounde, Cameroun</option>
                <option value="Buea" style="color: black;">Buea, Cameroun</option>
                <option value="Nkongsamba" style="color: black;">Nkongsamba, Cameroun</option>
                <option value="Bafoussam" style="color: black;">Bafoussam, Cameroun</option>
                <option value="Dschang" style="color: black;">Dschang, Cameroun</option>
              </select>
             
            </div>

            <input
              type="text"
              placeholder="Rechercher un restaurant..."
              class="search-input"
              id="searchInput"
            >

            <button class="search-btn">
              <i class="fas fa-search"></i>
            </button>

          </div>

          <button class="filter-btn">
             Filtres
          </button>

        </div>

        <!-- TAGS -->

        <div class="category-tags">

          <div class="tag active" data-category="tout">Tout</div>
          <div class="tag" data-category="africain">Africain</div>
          <div class="tag" data-category="pizza">Pizza</div>
          <div class="tag" data-category="burger">Burger</div>
          <div class="tag" data-category="sushi">Sushi</div>
          <div class="tag" data-category="desserts">Desserts</div>

        </div>

      </div>

      <!-- RESTAURANTS -->

      <div class="restaurants-section">

        <div class="section-header">

          <h2>Restaurants populaires</h2>

          <button class="view-all-btn" id="viewAllBtn">
            Voir tout
          </button>

        </div>

        <div class="restaurants-grid" id="restaurantsGrid">

          <!-- CARD 1 -->

          <div class="restaurant-card" id="afrique" data-name="Le Goût d'Afrique" data-category="africain">

            <div class="restaurant-image">
              <img src="{{asset('vendor/afrique.jpg')}}" alt="image">
              <button class="favorite-btn">
                ❤
              </button>

            </div>

            <div class="restaurant-content">

              <div class="restaurant-top">

                <div class="restaurant-name">
                  Le Goût d'Afrique
                </div>

                <div class="restaurant-badge">
                  Populaire
                </div>

              </div>

              <p class="restaurant-type">
                Cuisine africaine
              </p>

              <div class="restaurant-infos">

                <span><i class="fas fa-star"></i> 4.8</span>
                <span>30-45 min</span>
                <span><i class="fas fa-bell-concierge"></i> Livraison rapide</span>

              </div>

              <div class="card-buttons">

                <button class="speciality-btn afrique">
                  Voir les spécialités
                </button>

              </div>

            </div>

          </div>
          <!--CARD 2-->
          <div class="restaurant-card" id="brasa country" data-name="brasa country" data-category="africain">

            <div class="restaurant-image">
              <img src="{{asset('vendor/brasa.jpg')}}" alt="image">
              <button class="favorite-btn">
                ❤
              </button>

            </div>

            <div class="restaurant-content">

              <div class="restaurant-top">

                <div class="restaurant-name">
                  Brasa Country
                </div>

                <div class="restaurant-badge">
                  Premium
                </div>

              </div>

              <p class="restaurant-type">
                Cuisine ivoirienne
              </p>

              <div class="restaurant-infos">

                <span><i class="fas fa-star"></i> 4.3</span>
                <span>20-35 min</span>
                <span><i class="fas fa-bell-concierge"></i> Recommande</span>

              </div>

              <div class="card-buttons">

                <button class="speciality-btn brasa">
                  Voir les spécialités
                </button>

              </div>

            </div>

          </div>
          <!--CARD 3-->
          <div class="restaurant-card" id="cap deli" data-name="cap deli" data-category="africain burger">

            <div class="restaurant-image">
              <img src="{{asset('vendor/CAP DELI.jpg')}}" alt="image">
              <button class="favorite-btn">
                ❤
              </button>

            </div>

            <div class="restaurant-content">

              <div class="restaurant-top">

                <div class="restaurant-name">
                  Cap Deli
                </div>

                <div class="restaurant-badge">
                  Populaire
                </div>

              </div>

              <p class="restaurant-type">
                Cuisine africaine
              </p>

              <div class="restaurant-infos">

                <span><i class="fas fa-star"></i> 4.8</span>
                <span>30-45 min</span>
                <span><i class="fas fa-bell-concierge"></i> Livraison rapide</span>

              </div>

              <div class="card-buttons">

                <button class="speciality-btn cap">
                  Voir les spécialités
                </button>
              </div>

            </div>

          </div>
<!--CARD 4-->
<div class="restaurant-card" id="fogo" data-name="fogo" data-category="pizza">

  <div class="restaurant-image">
    <img src="{{asset('vendor/fogo.jpg')}}" alt="image">
    <button class="favorite-btn">
      ❤
    </button>

  </div>

  <div class="restaurant-content">

    <div class="restaurant-top">

      <div class="restaurant-name">
        Fogo
      </div>

      <div class="restaurant-badge">
        New
      </div>

    </div>

    <p class="restaurant-type">
      Cuisine africaine
    </p>

    <div class="restaurant-infos">

      <span><i class="fas fa-star"></i> 2.8</span>
      <span>39-55 min</span>
      <span><i class="fas fa-bell-concierge"></i> Livraison partout</span>

    </div>

    <div class="card-buttons">

      <button class="speciality-btn fogo">
        Voir les spécialités
      </button>
    </div>

  </div>

</div>
<!--CARD 5-->
<div class="restaurant-card" id="tagidor" data-name="tagidor" data-category="burger">

  <div class="restaurant-image">
    <img src="{{asset('vendor/tagidor.png')}}" alt="image">
    <button class="favorite-btn">
      ❤
    </button>

  </div>

  <div class="restaurant-content">

    <div class="restaurant-top">

      <div class="restaurant-name">
        Tagidor
      </div>

      <div class="restaurant-badge">
        Tres Populaire
      </div>

    </div>

    <p class="restaurant-type">
      Cuisine africaine
    </p>

    <div class="restaurant-infos">

      <span><i class="fas fa-star"></i> 4.9</span>
      <span>20-45 min</span>
      <span><i class="fas fa-bell-concierge"></i> Livraison rapide</span>

    </div>

    <div class="card-buttons">

      <button class="speciality-btn tagidor">
        Voir les spécialités
      </button>

    </div>

  </div>

  </div>
</div>

<div class="panier">
  <button class="monPanier"> <i class="fas fa-cart-shopping"></i> Mon Panier</button>
</div>
         
  <!-- FOOTER 1 -->

<div class="footer">

  <div class="footer-container" id="offres">

    <!-- LEFT -->

    <div class="footer-card offer-card">

      <h2>
        Offre spéciale <i class="fas fa-burn"></i>
      </h2>

      <p class="offer-text">
        -20% sur votre première commande
      </p>

      <p class="offer-subtext">
        avec le code
        <span>WELCOME20</span>
      </p>

      <button class="footer-btn">
        Commander maintenant
      </button>

    </div>

    <!-- CENTER IMAGE -->

    <div class="footer-image">

     <img src="{{asset('vendor/koki.jpg')}}" alt="image">
    </div>

    <!-- RIGHT -->

    <div class="footer-card infos-card">

      <div class="info-box">

        <div class="info-icon">
          <i class="fas fa-bell-concierge"></i>
        </div>

        <div>

          <h3>
            Livraison rapide
          </h3>

          <p>
            Chez vous en moins de 45 min
          </p>

        </div>

      </div>

      <div class="info-box">

        <div class="info-icon">
          <i class="fas fa-bank"></i>
        </div>

        <div>

          <h3>
            Paiement sécurisé
          </h3>

          <p>
            Payez en toute sécurité en ligne
          </p>

        </div>

      </div>

      <div class="info-box">

        <div class="info-icon">
          <i class="fas fa-phone"></i>
        </div>

        <div>

          <h3>
            Service client 24/7
          </h3>

          <p>
            Nous sommes là pour vous
          </p>

        </div>

      </div>

    </div>

  </div>

</div>

  <!-- FOOTER -->

  <footer>

    <div class="container">

      <div class="footer-content">

        <div>

          <div class="footer-logo">

            <div class="footer-logo-box">
              <i class="fas fa-utensils"></i>
            </div>

            <span>Foodie</span>

          </div>

          <p class="footer-text">

            Découvrez les meilleurs restaurants
            et commandez vos plats préférés rapidement.

          </p>

        </div>

        <div class="footer-column">

          <h3>Navigation</h3>

          <div class="footer-links">

            <a href="/pw-connected">Acceuil</a>
            <a href="/pw-connected#restaurantsGrid">Restaurants</a>
            <a href="#">Catégories</a>
            <a href="#">Offres</a>

          </div>

        </div>

        <div class="footer-column">

          <h3>Support</h3>

          <div class="footer-links">

            <a href="#">FAQ</a>
            <a href="#">Aide</a>
            <a href="#">Contact</a>
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

  

  <script>

    // SEARCH 

    const searchInput =
      document.getElementById('searchInput');

    const cards =
      document.querySelectorAll('.restaurant-card');

    searchInput.addEventListener('keyup', () => {

      const value =
        searchInput.value.toLowerCase();

      cards.forEach(card => {

        const name =
          card.dataset.name.toLowerCase();

        if(name.includes(value)){

          card.style.display = 'block';

        }else{

          card.style.display = 'none';

        }

      });

    });

    // FAVORITES 

    const favorites =
      document.querySelectorAll('.favorite-btn');

    favorites.forEach(button => {

      button.addEventListener('click', () => {

        button.classList.toggle('active');

      });

    });

    // DROPDOWNS 

    const restaurantsBtn =
      document.getElementById('restaurantsBtn');

    const categoriesBtn =
      document.getElementById('categoriesBtn');

    const restaurantsDropdown =
      document.getElementById('restaurantsDropdown');

    const categoriesDropdown =
      document.getElementById('categoriesDropdown');

    restaurantsBtn.addEventListener('click', () => {

      restaurantsDropdown.classList.toggle('active');

      categoriesDropdown.classList.remove('active');

    });

    categoriesBtn.addEventListener('click', () => {

      categoriesDropdown.classList.toggle('active');

      restaurantsDropdown.classList.remove('active');

    });

    // RESTAURANT LINKS

    const restaurantLinks =
      document.querySelectorAll('.restaurant-link');

    restaurantLinks.forEach(link => {

      link.addEventListener('click', () => {

        const targetId =
          link.dataset.target;

        const target =
          document.getElementById(targetId);

        target.scrollIntoView({
          behavior:'smooth',
          block:'center'
        });

        target.style.boxShadow =
          '0 0 0 3px #ff7a00';

        setTimeout(() => {

          target.style.boxShadow =
            '';

        },2000);

      });

    });

  
  
  document.getElementById("Off").addEventListener('click', () => {

let target=document.getElementById("offres");

target.scrollIntoView({
  behavior:'smooth',
  block:'center'
});

target.style.boxShadow =
  '0 0 0 3px #ff7a00';

setTimeout(() => {

  target.style.boxShadow =
    '';

},2000);

});
 
    let afrique=document.querySelector(".afrique");
    afrique.addEventListener("click",()=>{
      window.location.href="/pw2";
    });

    let fogo=document.querySelector(".fogo");
    fogo.addEventListener("click",()=>{
      window.location.href="/fogo";
    });

    let brasa=document.querySelector(".brasa");
    brasa.addEventListener("click",()=>{
      window.location.href="/brasa country";
    });

    let tagidor=document.querySelector(".tagidor");
    tagidor.addEventListener("click",()=>{
      window.location.href="/TAGIDOR";
    });

    let cap=document.querySelector(".cap");
    cap.addEventListener("click",()=>{
      window.location.href="/cap deli";
    });

    document.getElementById('accueil').addEventListener('click',()=>{
      window.location.href="/pw-connected";
    });
    // document.querySelector('.login-btn').addEventListener('click',()=>{
    //   window.location.href="/connexion";
    // });
    // document.querySelector('.signup-btn').addEventListener('click',()=>{
    //   window.location.href="/inscription";
    // });
    document.querySelector('.monPanier').addEventListener('click',()=>{
      window.location.href="/panier";
    });
    document.querySelector('.cart-box').addEventListener('click',()=>{
      window.location.href="/profile";
    });
             
             //Categories//
             
    const categoryLinks=document.querySelectorAll('.tag');
    const restaurantCards=document.querySelectorAll('.restaurant-card');
    categoryLinks.forEach(link=>{
      link.addEventListener('click',()=>{
        categoryLinks.forEach(item=>{
          item.classList.remove('active');
        });
        link.classList.add('active');
        const selectedCategory=link.dataset.category;
       
        restaurantCards.forEach(card=>{
          const cardCategories=card.dataset.category;
          if(selectedCategory==='tout'){
            card.style.display='block';
          }
          else if(cardCategories.includes(selectedCategory))
            {
              card.style.display='block';
            }else{
              card.style.display='none';
            }
        });
      });
    });
  </script>

</body>
</html>
