{{-- @component('mail::message')
# Grazie per il tuo ordine!

Ciao **{{ $lead->name }}**,

Siamo felici di informarti che abbiamo ricevuto il tuo ordine! Ecco i dettagli del tuo ordine:

Totale: **€{{ number_format($lead->total_price, 2) }}**

## Cosa succede adesso?
- Stiamo preparando il tuo ordine per la spedizione.
- Riceverai un'altra email con i dettagli di tracciamento appena il tuo ordine sarà spedito.

Se hai domande o desideri modificare il tuo ordine, non esitare a contattarci rispondendo a questa email o visitando la [nostra assistenza clienti](http://localhost:5174).

Grazie ancora per aver scelto **{{ config('app.name') }}**.

Saluti,<br>
Il team di **{{ config('app.name') }}**

@endcomponent --}}

@component('mail::message')
# Dettagli dell'Ordine

## {{$lead->restaurant->name}}

### Data dell'ordine
{{ date("d/m/Y H:m", strtotime($lead->order_date)) }}

### Numero Ordine
{{ $lead->id }}

---

### Piatti Ordinati

@component('mail::table')
| Nome Piatto      | Qnt           | Prezzo  |
|:-----------------|:-------------:|--------:|
@foreach ($lead->dishes as $dish)
| {{ $dish->name }} | {{ $dish->pivot->quantity }} | €{{ $dish->price }} |
@endforeach
@endcomponent

### Totale: **€{{ $lead->total_price }}**

---

## Indirizzo di Spedizione

@component('mail::table')
| Indirizzo        | Città          | Provincia      | Paese         | Codice Postale |
|:-----------------|:---------------|:---------------|:--------------|:---------------|
| {{ $lead->address }} | {{ $lead->province }} |{{$lead->city}}| {{ $lead->country }} | {{ $lead->postalcode }} |
@endcomponent

Grazie per il tuo ordine!

@endcomponent


