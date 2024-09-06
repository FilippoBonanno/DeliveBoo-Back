@extends('layouts.admin')

@section('content')
    <div class="text-center px-2 row m-0">
        @foreach ($dishes as $dish)
    <div class="col-4 mt-3 border border-primary">
        <h4>Nome</h4>
        <div>
            <a href="{{ route('admin.dishes.show', $dish) }}">{{ $dish->name }}</a>
        </div>
        <h4>Prezzo</h4>
        <div>
            {{ $dish->price }}
        </div>
        <h4>Img</h4>
        @if (Str::startsWith($dish->img, 'http'))
            <div class="w-100">
                <img src="{{ $dish->img }}" alt="" class="w-50">
            </div>
        @else
            <div>
                <img src="{{ asset('storage/' . $dish->img) }}" alt="img" class="w-50">
            </div>
        @endif
        <h4>Descrizione </h4>
        <div>
            {{ $dish->description }}
        </div>
        <h4>Ristorante</h4>
        <div>
            {{ $dish->restaurant->name }}
        </div>
        <a href="{{ route('admin.dishes.edit', $dish->id) }}" class="btn btn-primary">Modifica</a>
        <button type="button" class="btn btn-outline-danger my-3" data-toggle="modal" data-target="#confirmModal" 
            data-action="{{ route('admin.dishes.destroy', $dish) }}" data-name="{{ $dish->name }}">
            Elimina Piatto
        </button>
    </div>
@endforeach

    </div>

   
    <!-- Modale di conferma -->
<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmModalLabel">Conferma Eliminazione</h5>
            </div>
            <div class="modal-body">
                Sei sicuro di voler eliminare il piatto <strong id="nomePiatto"></strong>?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annulla</button>
                <form id="confirmDeleteForm" method="POST" action="">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Elimina</button>
                </form>
            </div>
        </div>
    </div>
</div>


    <script>
document.addEventListener('DOMContentLoaded', function () {
    // Seleziona tutti i bottoni di eliminazione
    const deleteButtons = document.querySelectorAll('button[data-action]');
    
    deleteButtons.forEach(button => {
        button.addEventListener('click', function () {
            // Ottieni l'azione del form dalla proprietà data-action del bottone
            const action = this.getAttribute('data-action');
            // Ottieni il nome del piatto dalla proprietà data-name del bottone
            const nomePiatto = this.getAttribute('data-name');
            
            // Imposta l'azione del form nella modale
            document.getElementById('confirmDeleteForm').action = action;
            // Imposta il nome del piatto nella modale
            document.getElementById('nomePiatto').textContent = nomePiatto;

            // Mostra la modale
            $('#confirmModal').modal('show');
        });
    });

    // Gestisce la chiusura della modale quando clicchi su "Annulla"
    const cancelButton = document.querySelector('.btn-secondary');
    cancelButton.addEventListener('click', function () {
        $('#confirmModal').modal('hide');
    });
});

    </script>
@endsection
