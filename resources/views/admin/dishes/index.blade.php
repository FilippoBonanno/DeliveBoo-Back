@extends('layouts.admin')

@section('content')
    <div class="text-center mt-3">
        <a href="{{ route('admin.dishes.create') }}" class="btn btn-primary btn-sm">Crea Piatto</a>
    </div>

    @if (Auth::user()->restaurant->dishes->isNotEmpty())
        <div class="table-responsive mt-4">
            <table class="table table-bordered table-striped">
                <thead class="thead-light">
                    <tr>
                        <th>Nome</th>
                        <th>Prezzo</th>
                        <th class="d-none d-md-table-cell">Img</th> <!-- Nascondi immagine su smartphone -->
                        <th class="d-none d-lg-table-cell">Descrizione</th> <!-- Nascondi descrizione su tablet e mobile -->
                        <th class="d-none d-sm-table-cell">Ristorante</th> <!-- Nascondi ristorante su smartphone -->
                        <th>Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dishes as $dish)
                        <tr>
                            <td>
                                <a href="{{ route('admin.dishes.show', $dish) }}">{{ $dish->name }}</a>
                            </td>
                            <td>{{ $dish->price }} €</td>
                            <td class="d-none d-md-table-cell"> <!-- Immagine visibile solo su tablet e desktop -->
                                @if (Str::startsWith($dish->img, 'http'))
                                    <img src="{{ $dish->img }}" alt="{{ $dish->name }}" class="img-fluid custom-img-size">
                                @else
                                    <img src="{{ asset('storage/' . $dish->img) }}" alt="{{ $dish->name }}" class="img-fluid custom-img-size">
                                @endif
                            </td>
                            <td class="d-none d-lg-table-cell">{{ Str::limit($dish->description, 50) }}</td> <!-- Nascondi descrizione su tablet e mobile -->
                            <td class="d-none d-sm-table-cell">{{ $dish->restaurant->name }}</td> <!-- Nascondi ristorante su smartphone -->
                            <td class="action-buttons">
                                <!-- Bottoni Modifica e Elimina -->
                                <a href="{{ route('admin.dishes.edit', $dish->id) }}" class="btn btn-primary btn-sm d-none d-md-inline-block">Modifica</a>
                                <button type="button" class="btn btn-outline-danger btn-sm d-none d-md-inline-block" data-toggle="modal" data-target="#confirmModal"
                                    data-action="{{ route('admin.dishes.destroy', $dish) }}" data-name="{{ $dish->name }}">
                                    Elimina
                                </button>

                                <!-- Icone Modifica e Elimina per schermi piccoli -->
                                <a href="{{ route('admin.dishes.edit', $dish->id) }}" class="btn btn-link d-md-none">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button type="button" class="btn btn-link d-md-none" data-toggle="modal" data-target="#confirmModal"
                                    data-action="{{ route('admin.dishes.destroy', $dish) }}" data-name="{{ $dish->name }}">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="text-center mt-3">
            <h3>Non hai ancora inserito nessun piatto</h3>
        </div>
    @endif

    <!-- Modale di conferma -->
    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmModalLabel">Conferma Eliminazione</h5>
                </div>
                <div class="modal-body">
                    Sei sicuro di voler eliminare il piatto <strong id="nomePiatto"></strong>?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Annulla</button>
                    <form id="confirmDeleteForm" method="POST" action="">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Elimina</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteButtons = document.querySelectorAll('button[data-action]');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const action = this.getAttribute('data-action');
                    const nomePiatto = this.getAttribute('data-name');

                    document.getElementById('confirmDeleteForm').action = action;
                    document.getElementById('nomePiatto').textContent = nomePiatto;

                    $('#confirmModal').modal('show');
                });
            });

            const cancelButton = document.querySelector('.btn-secondary');
            cancelButton.addEventListener('click', function() {
                $('#confirmModal').modal('hide');
            });
        });
    </script>

    <!-- Aggiunta dello stile personalizzato per immagini e tabella -->
    <style>
        /* Assicura che la tabella si adatti */
        .table {
            table-layout: auto;
            width: 100%;
        }

        /* Immagini quadrate */
        .custom-img-size {
            width: 100px;
            height: 100px;
            object-fit: cover;
        }

        /* Regolazione della dimensione dell'immagine sui dispositivi tablet */
        @media (max-width: 1024px) and (min-width: 768px) {
            .custom-img-size {
                width: 80px;
                height: 80px;
            }
        }

        /* Riduci la dimensione dell'immagine sui dispositivi mobili */
        @media (max-width: 768px) {
            .custom-img-size {
                width: 50px;
                height: 50px;
            }
        }

        /* Nascondi i bottoni di testo su schermi piccoli */
        @media (max-width: 768px) {
            .action-buttons .btn-sm {
                display: none;
            }
        }

        /* Icone per schermi piccoli */
        .action-buttons .btn-link {
            font-size: 1.5em;
        }

        /* Nascondi descrizione su dispositivi tablet e mobili */
        @media (max-width: 1024px) {
            .d-lg-table-cell {
                display: none;
            }
        }

        /* Nascondi ristorante su smartphone */
        @media (max-width: 768px) {
            .d-sm-table-cell {
                display: none;
            }
        }

        td, th {
            vertical-align: middle;
            text-align: center;
        }
    </style>
@endsection
