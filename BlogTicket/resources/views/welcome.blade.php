<x-main-layout>

    <x-navbar/>

    <x-lista-ticket/>

    <table id="table" class="table">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Oggetto</th>
                <th scope="col">Stato</th>
                <th scope="col">Proprietario</th>
            </tr>
        </thead>
        <tbody>
           {{--  {{dd($tickets)}} --}}
            @foreach ($tickets as $ticket)
            <tr>
                <th scope="row">{{$ticket['id']}}</th>
                <td><a href="{{route('ticket-dettaglio', ["id"=> $ticket['id']])}}">{{$ticket['Oggetto']}}</a></td>
                <td>{{$ticket['Stato']}}</td>
                <td>{{$ticket['Proprietario']}}</td>
            </tr>
            
            @endforeach
        </tbody>
    </table>


</x-main-layout>
