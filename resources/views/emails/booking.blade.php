@component('mail::message')
# Confirmation de Reservation de {{ $kilos }} Kilos.

Mr/me {{ $owner['name'] }} vous avez recue une nouvelle Reservationde de la part
de {{ $user->name }}. pour confirmer cette reservation veuillez clicker sur
le lien si dessous.

@component('mail::button', ['url' => $url . '/?k=' . $kilos ])
lien de confirmation
@endcomponent

Merci,<br>
La Team Goaubled
@endcomponent