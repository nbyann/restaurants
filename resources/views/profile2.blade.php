<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon Profil - Suivi Commandes</title>
    <link rel="stylesheet" href="{{ asset('css/pw.css') }}">
</head>
<body style="background: #0b0b0b; color: white; font-family: sans-serif; padding: 40px;">

    <div style="max-width: 800px; margin: auto;">
        <h2>Suivi de vos commandes</h2>
        <a href="/pw-connected" style="color: #ff9f43; text-decoration: none;">← Retourner à l'accueil</a>

        <div style="margin-top: 30px;">
            @foreach($commandes as $commande)
                <div style="background: #111; border-left: 5px solid {{ $commande->status == 'validee' ? '#1f9d57' : ($commande->status == 'refusee' ? '#b91c1c' : '#ff9f43') }}; padding: 20px; margin-bottom: 15px; border-radius: 4px;">
                    <div style="display: flex; justify-content: space-between;">
                        <strong>Commande #{{ $commande->id }} - {{ $commande->restaurant->name_R }}</strong>
                        <span style="padding: 4px 8px; border-radius: 3px; font-size: 0.9em; font-weight: bold; background: {{ $commande->status == 'validee' ? '#1f9d57' : ($commande->status == 'refusee' ? '#b91c1c' : '#ff9f43') }}; color: black;">
                            {{ $commande->status == 'en_attente' ? 'En attente de validation' : ($commande->status == 'validee' ? 'Commande Acceptée' : 'Commande Refusée') }}
                        </span>
                    </div>
                    <div style="margin-top: 10px; color: #aaa;">
                        Montant : {{ $commande->montant_C }} FCFA | Adresse : {{ $commande->adresseLivraison_C }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</body>
</html>