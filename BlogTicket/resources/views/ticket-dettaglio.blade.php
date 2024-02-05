<x-main-layout>
    <x-navbar />

    <div class="containerTicketDettaglio">
        <div class="card">
            <div class="card-header">
                Ticket ID # {{$ticket['id']}}
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$ticket['Oggetto']}}</h5>
                <p class="card-text">Stato ticket: {{$ticket['Stato']}}</p>
                <p class="card-text">Proprietario : {{$ticket['Proprietario']}}</p>
                <p class="card-text">{{$ticket['Dettaglio richiesta']}}</p>

                <a href="#" class="btn btn-primary" onclick="showForm()">Rispondi</a>
            </div>
        </div>
    </div>

    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    
    <div id="containerForm" class="containerForm">
        <form action="{{route('invio')}}" method="POST">
            @CSRF
            <div class="mb-3">
                <h5>Rispondi</h5>
            <textarea name="RispostaTicket" id="textareaDettaglioTicket" cols="100%" rows="3"></textarea>
            
            <div class="dropdown">
                <button id="buttonDropdownDettaglio" class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Cambia stato ticket
                </button>
                <ul id="dropdownTicketDettaglio" class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Aperto</a></li>
                  <li><a class="dropdown-item" href="#">Pending</a></li>
                  <li><a class="dropdown-item" href="#">Completato</a></li>
                </ul>
              </div>
            

 
            <button type="submit" class="btn btn-primary">Invia risposta</button>
          </form>
    </div>
    


</x-main-layout>
