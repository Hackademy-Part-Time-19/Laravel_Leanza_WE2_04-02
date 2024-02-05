<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    private $tickets = [
        [
            'id' => 1,
            'Oggetto' => 'Problemi personal Pc',
            'Stato' => 'Aperto',
            'Proprietario' => 'Luca Leanza',
            'Dettaglio richiesta' => 'Con la presente si richiede supporto per la risoluzione di problemi personali al pc. Grazie.'
        ],
        [
            'id' => 2,
            'Oggetto' => 'Richiesta supporto',
            'Stato' => 'Chiuso',
            'Proprietario' => 'Mario Rossi',
            'Dettaglio richiesta' => 'Con la presente richiedo supporto per la configurazione del CRM relativo al front office, grazie.'
        ],
        [
            'id' => 3,
            'Oggetto' => 'Bug Sistema',
            'Stato' => 'Pending',
            'Proprietario' => 'Samuele Fasciglione',
            'Dettaglio richiesta' => 'La presente per segnalare un bug nel sistema, grazie.'
        ]
    ];


    public function HomePage(){
        return view('welcome', ['tickets' => $this->tickets]);
    }

    public function TicketDettaglio($id){
        return view('ticket-dettaglio', ['id' => $id],['ticket' => $this->tickets[$id - 1]]);
    }

    public function invioMail(Request $request){
        $data = $request->all();

        Mail::to("luca@gmail.com")->send(new ContactMail($data['RispostaTicket']));
        return redirect()->back() ->with('success', 'Risposta inviata correttamente');
      
}
}
