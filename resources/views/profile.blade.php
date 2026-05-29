<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    *{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
    }
    .deconnexion{
        position: absolute;
        top:50px;
        right:80px;
        background-color:#ff7a00;
        height:50px;
        color:white;
        border-radius:8px;
        font-weight:700;
        width:160px;
        font-size:18px;
    }
    </style>
</head>

<body>
<div class="profile-container" style="background-color: #0b0b0b; color: #ffffff; min-height: 100vh; padding: 40px 20px; ">
    
    <div class="profile-header" style="max-width: 800px; margin: 0 auto 30px auto; display: flex; align-items: center; gap: 20px;">
        <div class="avatar-circle" style="width: 80px; height: 80px; background-color: #ff7a00; color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 32px; font-weight: bold;">
            {{ substr(Auth::user()->name, 0, 1) }}
        </div>
        <div>
            <h1 style="font-size: 28px; font-weight: bold; margin: 0; text-transform:capitalize;">{{auth()->user()->name}}</h1>
            <p style="color: #fff; margin: 5px 0 0 0;">Gérez vos informations et vos commandes</p>
        </div>
    </div>
    <form id="decon" action="{{ route('logout')}}" method="POST">
    {{ csrf_field() }}
    <button class="deconnexion" type="submit">Deconnexion</button>
    </form>

    <div class="profile-card" style="max-width: 800px; margin: 0 auto; background-color: #131313; border-radius: 12px; padding: 30px; box-shadow: 0 4px 6px rgba(0,0,0,0.3); border: 1px solid #2d313f;">
        
        <form action="" method="POST">
            {{ csrf_field() }} <div class="form-group" style="margin-bottom: 20px;">
                <label style="display: block; color: #fff; margin-bottom: 8px; font-size: 14px;">Nom complet</label>
                <input type="text" name="name" value="{{ Auth::user()->name }}" style="width: 100%; background-color: #1b1b1b; border: 1px solid #3d4357; color: white; padding: 12px; border-radius: 8px; font-size: 16px; box-sizing: border-box; outline: none; focus: border-color: #febc11;">
            </div>

            <div class="form-group" style="margin-bottom: 20px;">
                <label style="display: block; color: #fff; margin-bottom: 8px; font-size: 14px;">Adresse Email</label>
                <input type="email" name="email" value="{{ Auth::user()->email }}" style="width: 100%; background-color: #1b1b1b; border: 1px solid #3d4357; color: white; padding: 12px; border-radius: 8px; font-size: 16px; box-sizing: border-box; outline: none;">
            </div>

            <div class="form-group" style="margin-bottom: 30px;">
                <label style="display: block; color: #fff; margin-bottom: 8px; font-size: 14px;">Ville de livraison par défaut</label>
                <select name="city" style="width: 100%; background-color: #1b1b1b; border: 1px solid #3d4357; color: white; padding: 12px; border-radius: 8px; font-size: 16px; outline: none;">
                    <option value="Douala" {{ Auth::user()->city == 'Douala' ? 'selected' : '' }}>Douala, Cameroun</option>
                    <option value="Yaoundé">Yaoundé, Cameroun</option>
                </select>
            </div>

            <hr style="border: 0; border-top: 1px solid #2d313f; margin-bottom: 25px;">

            <div style="display: flex; justify-content: space-between; align-items: center;">
                <button type="submit" style="background-color: #ff7a00; color: #fff; border: none; padding: 12px 24px; font-size: 16px; font-weight: bold; border-radius: 8px; cursor: pointer; transition: background 0.2s;">
                    Sauvegarder les modifications
                </button>
                
                <a href="/pw-connected" style="color: #a0aec0; text-decoration: none; font-size: 14px;">Retour à l'accueil</a>
            </div>

        </form>
    </div>
</div>
</body>
</html>
