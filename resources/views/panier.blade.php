<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Panier - Foodie</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.css" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
}

body{
background:#0b0b0b;
color:white;
}

.container{
width:92%;
max-width:1350px;
margin:auto;
}

/*HEADER*/

header{
padding:30px 0;
border-bottom:1px solid rgba(255,255,255,0.05);
background:#111111;
}

.logo{
display:flex;
align-items:center;
gap:12px;
font-size:1.4rem;
font-weight:700;
}

.logo-box{
    display: flex;
    justify-content: center;
    align-items: center;
width:45px;
height:45px;
border-radius:12px;
background:#ff7a00;
}



.cart-section{
padding:70px 0;
min-height:100vh;
}

.cart-title{
font-size:3rem;
margin-bottom:15px;
}

.cart-subtitle{
color:#b5b5b5;
margin-bottom:50px;
}

.cart-container{
display:grid;
grid-template-columns:2fr 1fr;
gap:35px;
}

.cart-items{
display:flex;
flex-direction:column;
gap:25px;
}

.cart-item{
background:#131313;
border-radius:28px;
padding:25px;
display:flex;
justify-content:space-between;
align-items:center;
gap:20px;
border:1px solid rgba(255,255,255,0.05);
transition:0.3s;
}

.cart-item:hover{
transform:translateY(-5px);
border-color:#ff7a00;
}

.item-left{
display:flex;
align-items:center;
gap:20px;
}

.item-image{
width:120px;
height:120px;
border-radius:20px;
background:#242424;
}
.item-image img{
width:120px;
height:120px;
border-radius:20px;
}

.item-info h3{
font-size:1.4rem;
margin-bottom:10px;
}

.item-info p{
color:#b3b3b3;
}

.item-price{
font-size:1.3rem;
font-weight:700;
color:#ff7a00;
}

.remove-btn{
margin-top:12px;
background:#1d1d1d;
color:white;
padding:10px 16px;
border:none;
border-radius:12px;
cursor:pointer;
transition:0.3s;
}

.remove-btn:hover{
background:#ff2b55;
}



.summary{
background:#131313;
padding:30px;
border-radius:28px;
height:fit-content;
border:1px solid rgba(255,255,255,0.05);
position:sticky;
top:20px;
}

.summary h2{
margin-bottom:30px;
}

.summary-row{
display:flex;
justify-content:space-between;
margin-bottom:18px;
color:#d4d4d4;
}

.total{
font-size:1.4rem;
font-weight:700;
margin-top:25px;
padding-top:20px;
border-top:1px solid rgba(255,255,255,0.05);
}

.checkout-btn{
width:100%;
margin-top:30px;
padding:18px;
border:none;
border-radius:18px;
background:#ff7a00;
color:white;
font-size:1rem;
font-weight:600;
cursor:pointer;
transition:0.3s;
}

.checkout-btn:hover{
background:#ff9432;
transform:translateY(-3px);
}



footer{
background:#111111;
border-top:1px solid rgba(255,255,255,0.05);
padding-top:70px;
}

.footer-content{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(240px,1fr));
gap:40px;
padding-bottom:50px;
}

.footer-bottom{
border-top:1px solid rgba(255,255,255,0.05);
text-align:center;
padding:25px;
color:#999;
}

.acceuil1{
    position:absolute;
    top:20px;
    right:40px;
    height:50px;
    /* background-color:#ff7a00; */
    background:transparent;
    color:white;
    border-radius:8px;
    width:85px;
    font-size:18px;
    font-weight:bold;
    cursor:pointer;
}
.acceuil1:hover{
    transform:translateY(-5px);
    transition:0.5s;
}

@media(max-width:950px){

.cart-container{
grid-template-columns:1fr;
}

.cart-item{
flex-direction:column;
align-items:flex-start;
}

}
.nom-plat{
    text-transform: capitalize;
    font-size: 22px;
    font-weight: 700;
    color: #ff7a00;
    margin-bottom: 40px;
}
.cart-item{
    height: 200px;
}
.nom-rest{
    font-size: 16px;
    font-weight: bold;
    text-transform: capitalize;
}
.image-plat{
    background-color: #0b0b0b;
    height: 120px;
    width: 120px;
    border-radius: 10px;
}
.supprimer{
    height: 60px;
    background-color: #ff7a00;
    color: white;
    font-weight: 700;
    border: none;
    border-radius: 10px;
    width: 100px;
   cursor: pointer;
}
.image-plat img{
     height: 120px;
    width: 120px;
    border-radius: 10px;
}

</style>
</head>

<body>

<header>

<div class="container">

<div class="logo">

<div class="logo-box"><i class="fas fa-utensils"></i></div>

    <span>Foodie</span>

</div>
<button class="acceuil1">
Acceuil
</button>

</div>

</header>

<section class="cart-section">

<div class="container">

<h1 class="cart-title">
Votre panier <i class="fas fa-cart-shopping"></i>
</h1>

<p class="cart-subtitle">
Retrouvez toutes vos commandes avant validation.
</p>

<div class="cart-container">

<!-- ITEMS -->

<div class="container" style="margin-top: 50px;width: 1100px; margin-bottom:100px">
    <!-- <h2>Votre Panier</h2> -->

    @if($cartItems->isEmpty())
        <p>Votre panier est vide.</p>
        <a href="/pw-connected" class="btn">Retourner aux menus</a>
    @else
        <div id="cartItems">
            @foreach($cartItems as $item)
                <div class="cart-item" style="background: #111; padding: 10px; margin-bottom: 10px; border-radius: 8px; display: flex; justify-content: space-between; align-items: center;">
                <div class="image-plat">
<img src="{{ $item->plat->image ? asset($item->plat->image) : asset('vendor/taro.jpg') }}" alt="{{ $item->plat->name_P }}">

                </div>    
                <div>
                        <h4 class="nom-plat">{{ $item->plat->name_P }}</h4>
                        <small class="nom-rest">Restaurant : {{ $item->plat->restaurant->name_R }}</small>
                    </div>
                    <div>
                        <span>Quantité : {{ $item->quantite }}</span>
                    </div>
                    <div>
                        <strong>{{ $item->plat->prix_P * $item->quantite }} FCFA</strong>
                    </div>
                     <!-- <button class="supprimer">Supprimer</button> -->
                      <form action="{{route('cart.remove',$item->id)}}" method="POST" style="display: inline;">
                        @csrf 
                        @method('DELETE')
                        <button type="submit" class="supprimer">Supprimer</button>
                      </form>
                      
                </div>
               
            @endforeach
        </div>

        <form action="{{ route('cart.checkout') }}" method="POST" style="margin-top: 30px; background: #161616; padding: 20px; border-radius: 8px;">
            @csrf
            <div style="margin-bottom: 15px;width:100%;">
                <label for="adresse" style="display:block; margin-bottom: 5px;">Adresse de livraison exacte :</label>
                <input type="text" id="adresse" name="adresseLivraison_C" required placeholder="Ex: Rue 14, Bastos, Yaoundé" style="width: 100%; padding: 10px; background: #222; border: 1px solid #333; color: white; border-radius: 4px;">
            </div>

            <button type="submit" style="background: #ff9f43; color: black; padding: 12px 25px; border: none; border-radius: 5px; font-weight: bold; cursor: pointer;width:100%;">
                Confirmer et commander
            </button>
        </form>
    @endif
</div>
</div>

<!-- SUMMARY -->

<!-- <div class="summary">

<h2>Résumé</h2>

<div class="summary-row">

<span>Articles</span>

<span id="articlesCount">
3
</span>

</div>

<div class="summary-row">

<span>Livraison</span>

<span>
1500 FCFA
</span>

</div>

<div class="summary-row total">

<span>Total</span>

<span id="totalPrice">
23500 FCFA
</span>

</div>

<button class="checkout-btn" id="checkoutBtn">

Soumettre la commande

</button>

</div>

</div>

</div>

</section> -->

<footer>

<div class="container">

<div class="footer-content">

<div>

<h2>Foodie</h2>

<p style="margin-top:15px;color:#b5b5b5;line-height:1.8;">
La meilleure marketplace de restauration.
</p>

</div>

<div>

<h3>Navigation</h3>

<button style="margin-top:15px;color:#b5b5b5; border: none;background: none;cursor: pointer;" id="acceuil">
Acceuil
</button>

</div>

<div>

<h3>Contact</h3>

<p style="margin-top:15px;color:#b5b5b5;">
foodie@gmail.com
</p>

</div>

</div>

</div>

<div class="footer-bottom">
© 2026 Foodie
</div>

</footer>

<script>

const removeButtons =
document.querySelectorAll('.remove-btn');

const cartItems =
document.getElementById('cartItems');

const totalPrice =
document.getElementById('totalPrice');

const articlesCount =
document.getElementById('articlesCount');

function updateCart(){

const items =
document.querySelectorAll('.cart-item');

let total = 1500;

items.forEach(item=>{

total += Number(
item.dataset.price
);

});

totalPrice.textContent =
total + 'FCFA';

articlesCount.textContent =
items.length;

}

removeButtons.forEach(button=>{

button.addEventListener('click',()=>{

button.closest('.cart-item').remove();

updateCart();

});

});

const checkoutBtn =
document.getElementById('checkoutBtn');

checkoutBtn.addEventListener('click',()=>{

alert(
'Commande soumise \nTotal : ' +
totalPrice.textContent
);

});

updateCart();
document.getElementById('acceuil').addEventListener('click',()=>{
      window.location.href="/pw-connected";
    });

    document.querySelector('.acceuil1').addEventListener('click',()=>{
      window.location.href="/pw-connected";
    });
</script>

</body>
</html>
