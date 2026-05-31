<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Dashboard Restaurant - Foodie</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="{{asset('/css/restaurants.css')}}">
</head>

<body>

<div class="dashboard">

  <!-- Bloc a cote -->

  <aside class="sidebar">

    <div class="logo">

      <div class="logo-box"><i class="fas fa-utensils"></i></div>

      <span>Foodie</span>

    </div>

    <div class="menu">

      <button class="page-link active" data-target="dashboard">
        <i class="fas fa-dashboard"></i> Dashboard
      </button>

      <button class="page-link" data-target="menuList">
        <i class="fas fa-plate-wheat"></i> Menus
      </button>

      <button class="page-link" data-target="plats">
        <i class="fas fa-bowl-food"></i> Plats
      </button>

      <button class="page-link" data-target="commandes">
        <i class="fas fa-bell-concierge"></i> Commandes
      </button>

      <button class="page-link" data-target="avis">
        <i class="fas fa-star"></i> Avis clients
      </button>

      <button class="page-link" data-target="statistiques">
        <i class="fas fa-chart-column"></i> Statistiques
      </button>

      <button class="page-link" data-target="parametres">
        <i class="fas fa-gear"></i> Paramètres
      </button>

      <button class="page-link" data-target="">
        <i class="fas fa-right-from-bracket"></i> Déconnexion
      </button>

    </div>

  </aside>

  <!-- Principal -->

  <main class="main">

    <!-- TOPBAR -->

    <div class="topbar">

      <h1>
        Dashboard Restaurant
      </h1>

      <div class="profile-area">

        <div class="restaurant-profile" id="profilePreview"></div>

        <label class="change-photo-btn">

          Changer la photo

          <input
            type="file"
            id="profileInput"
            hidden
          >

        </label>

      </div>

    </div>

    <!-- STATS -->

    <div class="stats" id="dashboard">

      <div class="stat-card">

        <h3>Commandes du jour</h3>

        <p>24</p>

      </div>

      <div class="stat-card">

        <h3>Revenus</h3>

        <p>125 000 FCFA</p>

      </div>

      <div class="stat-card">

        <h3>Clients</h3>

        <p>310</p>

      </div>

      <div class="stat-card">

        <h3>Menus</h3>

        <p id="menuCount">
          2
        </p>

      </div>

    </div>

    <!-- AJOUT MENU -->

    <section class="section">

      <div class="section-title">

        <h2>
          Ajouter un menu
        </h2>

      </div>

      <div class="form-grid">

        <input
          type="text"
          class="input"
          placeholder="Nom du menu"
          id="menuName"
          autocomplete="off"
        >

        <input
          type="text"
          class="input"
          placeholder="Description"
          id="menuDescription"
          
        >

      </div>

      <button class="add-btn" id="addMenuBtn">
        Ajouter le menu
      </button>

    </section>

    <!-- MENUS -->

    <section class="section">

      <div class="section-title">

        <h2>
          Menus du restaurant
        </h2>

      </div>

      <div class="menu-list" id="menuList">

        <!-- MENU -->

        <div class="menu-card">

          <div class="menu-card-top">

            <div>

              <h3>
                Menu Africain
              </h3>

              <p style="color:#b5b5b5;margin-top:8px;"">
                Cuisine africaine premium
              </p>

            </div>

            <div class="menu-actions">

              <button class="edit-btn">
                Modifier
              </button>

              <button class="delete-btn delete-menu">
                Supprimer
              </button>

            </div>

          </div>

          <div class="plats">

            <div class="plat">

              <div class="plat-image"></div>

              <h4>
                Poulet DG
              </h4>

              <p>
                Plat premium africain
              </p>

              <div class="price">
                6500 FCFA
              </div>

              <button class="remove-plat">
                Supprimer
              </button>

            </div>

            <div class="plat">

              <div class="plat-image"></div>

              <h4>
                Mafé Royal
              </h4>

              <p>
                Sauce arachide maison
              </p>

              <div class="price">
                7000 FCFA
              </div>

              <button class="remove-plat">
                Supprimer
              </button>

            </div>

          </div>

        </div>

      </div>

    </section>

    <!-- AJOUT PLAT -->

    <section class="section">

      <div class="section-title">

        <h2>
          Ajouter un plat
        </h2>

      </div>

      <div class="form-grid" id="plats">

        <input
          type="text"
          class="input"
          placeholder="Nom du plat"
          id="platName"
        >

        <input
          type="number"
          class="input"
          placeholder="Prix"
          id="platPrice"
        >

      </div>

      <textarea
        class="input"
        placeholder="Description du plat"
        id="platDescription"
      ></textarea>

      <button
        class="add-btn"
        style="margin-top:20px;"
        id="addPlatBtn"
      >

        Ajouter le plat

      </button>

    </section>

    <!-- COMMANDES -->

   <section id="commandes-section" style="padding: 20px;">
    <h3>Commandes Reçues</h3>
    
    <table style="width: 100%; border-collapse: collapse; margin-top: 20px; color: white;">
        <thead>
            <tr style="background: #222; text-align: left;">
                <th style="padding: 10px;">ID</th>
                <th style="padding: 10px;">Client</th>
                <th style="padding: 10px;">Plats</th>
                <th style="padding: 10px;">Montant</th>
                <th style="padding: 10px;">Adresse</th>
                <th style="padding: 10px;">Actions / Statut</th>
            </tr>
        </thead>
        <tbody>
            @foreach($commandes as $commande)
                <tr style="border-bottom: 1px solid #333;" id="row-{{ $commande->id }}">
                    <td style="padding: 10px;">#{{ $commande->id }}</td>
                    <td style="padding: 10px;">{{ $commande->user->name }}</td>
                    <td style="padding: 10px;">
                        @foreach($commande->items as $item)
                            {{ $item->plat->name_P }} (x{{ $item->quantite }})<br>
                        @endforeach
                    </td>
                    <td style="padding: 10px;">{{ $commande->montant_C }} FCFA</td>
                    <td style="padding: 10px;">{{ $commande->adresseLivraison_C }}</td>
                    <td style="padding: 10px;">
                        @if($commande->status == 'en_attente')
                            <button class="validate-btn" onclick="updateStatus({{ $commande->id }}, 'validee')" style="background: #1f9d57; color: white; border: none; padding: 5px 10px; cursor: pointer; border-radius:3px; margin-right:5px;">Valider</button>
                            <button class="refuse-btn" onclick="updateStatus({{ $commande->id }}, 'refusee')" style="background: #b91c1c; color: white; border: none; padding: 5px 10px; cursor: pointer; border-radius:3px;">Refuser</button>
                        @else
                            <span style="font-weight: bold; color: {{ $commande->status == 'validee' ? '#1f9d57' : '#b91c1c' }};">
                                {{ ucfirst($commande->status) }}
                            </span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>

    </section>

    <!-- SETTINGS -->

    <section class="section" id="parametres">

      <div class="section-title">

        <h2>
          Paramètres
        </h2>

      </div>

      <div class="settings-grid">
        <b style="text-transform: capitalize;font-size:18px">{{auth()->user()->name}}</b>

        <input
          type="text"
          class="input"
          placeholder="Nom du restaurant"
        >

        <input
          type="email"
          class="input"
          placeholder="Email"
        >

        <input
          type="password"
          class="input"
          placeholder="Nouveau mot de passe"
        >

        <input
          type="text"
          class="input"
          placeholder="Téléphone"
        >

      </div>

      <textarea
        class="input"
        placeholder="Description du restaurant"
        style="margin-top:22px;"
      ></textarea>

      <button class="save-btn">
        Sauvegarder les modifications
      </button>

    </section>

    <!-- FOOTER -->

    <footer>

      <div class="container">

        <div class="footer-content">

          <div>

            <div class="footer-logo">

              <div class="footer-logo-box"><i class="fas fa-utensils"></i></div>

              <span>Foodie</span>

            </div>

            <p class="footer-text">

              Gérez facilement votre restaurant
              et vos commandes avec Foodie.

            </p>

          </div>

          <div class="footer-column">

            <h3>
              Navigation
            </h3>

            <div class="footer-links">

              <a href="#">
                Dashboard
              </a>

              <a href="#">
                Menus
              </a>

              <a href="#">
                Commandes
              </a>

            </div>

          </div>

          <div class="footer-column">

            <h3>
              Contact
            </h3>

            <div class="footer-links">

              <a href="#">
                foodie@gmail.com
              </a>

              <a href="#">
                +237 6XX XX XX XX
              </a>

            </div>

          </div>

        </div>

      </div>

      <div class="footer-bottom">

        © 2026 Foodie - Tous droits réservés

      </div>

    </footer>

  </main>

</div>



<script>

  // PHOTO PROFIL

  const profileInput =
    document.getElementById('profileInput');

  const profilePreview =
    document.getElementById('profilePreview');

  profileInput.addEventListener('change',()=>{

    const file =
      profileInput.files[0];

    if(file){

      const reader =
        new FileReader();

      reader.onload = function(e){

        profilePreview.style.background =
          `url(${e.target.result}) center/cover`;

      }

      reader.readAsDataURL(file);

    }

  });

  // AJOUT MENU

  const addMenuBtn =
    document.getElementById('addMenuBtn');

  const menuList =
    document.getElementById('menuList');

  const menuCount =
    document.getElementById('menuCount');

  let totalMenus = 2;

  addMenuBtn.addEventListener('click',()=>{

    const menuName =
      document.getElementById('menuName').value;

    const menuDescription =
      document.getElementById('menuDescription').value;

    if(menuName === ''){

      alert('Entrez un nom de menu');

      return;

    }

    const menu =
    `
      <div class="menu-card">

        <div class="menu-card-top">

          <div>

            <h3>${menuName}</h3>

            <p style="color:#b5b5b5;margin-top:8px;">
              ${menuDescription}
            </p>

          </div>

          <div class="menu-actions">

            <button class="edit-btn">
              Modifier
            </button>

            <button class="delete-btn delete-menu">
              Supprimer
            </button>

          </div>

        </div>

      </div>
    `;

    menuList.innerHTML += menu;

    totalMenus++;

    menuCount.textContent =
      totalMenus;

    document.getElementById('menuName').value = '';
    document.getElementById('menuDescription').value = '';

  });

  // ================= AJOUT PLAT =================

  const addPlatBtn =
    document.getElementById('addPlatBtn');

  addPlatBtn.addEventListener('click',()=>{

    const platName =
      document.getElementById('platName').value;

    const platPrice =
      document.getElementById('platPrice').value;

    const platDescription =
      document.getElementById('platDescription').value;

    if(platName === '' || platPrice === ''){

      alert('Veuillez remplir les champs');

      return;

    }

    const firstMenu =
      document.querySelector('.plats');

    const plat =
    `
      <div class="plat">

        <div class="plat-image"></div>

        <h4>${platName}</h4>

        <p>${platDescription}</p>

        <div class="price">
          ${platPrice} FCFA
        </div>

        <button class="remove-plat">
          Supprimer
        </button>

      </div>
    `;

    firstMenu.innerHTML += plat;

    document.getElementById('platName').value = '';
    document.getElementById('platPrice').value = '';
    document.getElementById('platDescription').value = '';

  });

  // ================= VALIDATION COMMANDES =================

  const validateButtons =
    document.querySelectorAll('.validate-btn');

  validateButtons.forEach(button=>{

    button.addEventListener('click',()=>{

      button.textContent =
        'Commande validée';

      button.style.background =
        '#1f9d57';

    });

  });

  // ================= REFUS COMMANDES =================

  const refuseButtons =
    document.querySelectorAll('.refuse-btn');

  refuseButtons.forEach(button=>{

    button.addEventListener('click',()=>{

      button.textContent =
        'Commande refusée';

      button.style.background =
        '#b91c1c';

    });

  });

  const menuLinks =
      document.querySelectorAll('.page-link');

    menuLinks.forEach(link => {

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

        },1500);

      });

    });

  
function updateStatus(orderId, newStatus) {
    fetch(`/commande/${orderId}/status`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({ status: newStatus })
    })
    .then(response => response.json())
    .then(data => {
        if(data.success) {
            const cell = document.querySelector(`#row-${orderId} td:last-child`);
            if(newStatus === 'validee') {
                cell.innerHTML = '<span style="color: #1f9d57; font-weight: bold;">Validée</span>';
            } else {
                cell.innerHTML = '<span style="color: #b91c1c; font-weight: bold;">Refusée</span>';
            }
        }
    })
    .catch(error => console.error('Erreur:', error));
}


</script>

</body>
</html>
