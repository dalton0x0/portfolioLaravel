<x-mail::message>
# Votre message de contact

Votre message de contact a bien été envoyé :

- Nom : {{ $data['name'] }}<br>
- Email : {{ $data['email'] }}<br>

# Contenu du message :

- Message :<br><br>
{{ $data['message'] }}<br>

<x-mail::button :url="'https://www.cheridanh.cg'">
    Retourner sur le site ?
</x-mail::button>

Merci,<br>
A très bientôt {{ config('app.name') }}
</x-mail::message>
