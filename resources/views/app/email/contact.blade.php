<x-mail::message>
# Bonjour !!!

Votre message de contact a été envoyé avec succès !

Récapulatif :

- Nom : {{ $data['name'] }}<br>
- Email : {{ $data['email'] }}<br>

# Contenu du message :

{{ $data['message'] }}<br>

# Retourner sur mon site ?

<x-mail::button :url="'https://www.cheridanh.cg'">
    Cliquez ici
</x-mail::button>

Merci,<br>
A très bientôt<br>
{{ config('app.name') }}
</x-mail::message>
