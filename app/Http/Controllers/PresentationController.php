<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactReceived;
use Illuminate\Support\Facades\Mail;

class PresentationController extends Controller
{

    private $services =[
        ["title"=>"Odontoiatria", 
         "description"=>"Odontoiatra è il medico specialista in odontoiatria. Evidenze di questa convinzione sono state riscontrate anche nelle culture dei popoli dell'antica India, Egitto, Giappone e Cina, tanto che, fino al XIV secolo d.C.",
         "price"=>"300",
         "details"=>" la Francia proibì ufficialmente ai barbieri di praticare la chirurgia[18]. In Germania e in Francia, in un periodo che va dal 1530 al 1575, vennero realizzate le prime pubblicazioni interamente dedicate all'odontoiatria. Ambroise Paré, spesso ricordato come il padre della chirurgia, fu tra i primi a pubblicare trattati sul corretto trattamento chirurgico delle patologie dei denti. simile al becco di un pellicano, usato per eseguire estrazioni dentali.",
         "img"=>"http://placehold.it/700x400"
        ],
        ["title"=>"Chirurgia", 
         "description"=>"Trattamento chirurgico delle patologie dei denti.  barbiere-chirurgo francese, e fu chirurgo regale al cospetto di diversi monarchi dell'epoca",
         "price"=>"400",
         "details"=>"Per esercitare la professione è necessario completare un ciclo di studi specifico, dalla durata variabile a seconda della legge vigente nei diversi Stati del mondo. In alcune nazioni è obbligatorio, inoltre, superare un esame di Stato per ottenere l'abilitazione all'esercizio della professione. Un dentista può svolgere la propria attività all'interno del sistema sanitario nazionale, in ambito privato, oppure come ufficiale nelle forze armate.",
         "img"=>"http://placehold.it/700x400"
        ],
        ["title"=>"Dentistica applicata", 
         "description"=>"Egli si occupa della prevenzione, della diagnosi e della terapia, sia medica che chirurgica, di malattie ed anomalie del cavo orale",
         "price"=>"500",
         "details"=>"L'incidenza della carie dentaria nelle civiltà pre-agricole era ancora molto bassa, solo 10.000 anni fa, infatti, con la diffusione dell'agricoltura, si assistette ad un aumento significativo del numero di individui colpiti da questa malattia[2]. Uno studio del 2017 suggerisce che già ai tempi degli uomini di Neanderthal (circa 130.000 anni fa) erano in uso i primi strumenti odontoiatrici rudimentali[3]. Anche altri studi sulla civiltà della valle dell'Indo hanno fornito evidenze di trattamenti odontoiatrici praticati nel 7000 a.C",
         "img"=>"http://placehold.it/700x400"
        ],
    ];

    private $workers =[
        ["name"=>"John Doe",
         "job"=>"odontoiatra",
         "details"=>"Ciao, sono John, faccio l' odontoiatra da anni e questo studio dentistico é una ffigata.. ci sono molte sedie, che si piegano, io come odontoiatra sono specializzato nell indrizzamento dei denti in maniera naturale e forzatura lieve, proprio come piace ai mie clienti, che per il 56% tornano",
          "img"=>"/img/dentist-2.jpg"
        ],
        ["name"=>"Alina Kdijiviosky",
         "job"=>"Chirurgo",
         "details"=>"Datemi il tempo di presentarmi, sono il chirurgo piu rinomato di questo studio dentistico, taglio gengive, tolgo denti, metto denti, e amo i miei clienti. Questo lavoro mi da la forza di andare avanti nella mia carriera grazie ai feedback dei miei clienti, che mi danno 5 stelline tutti alle foto delle loro gengive in fase di operazione sul mio istagram",
          "img"=>"/img/dentist-3.png"
        ],
        ["name"=>"Toby Jonson",
         "job"=>"Dentista",
         "details"=>"Come dentista mi sento proprio a mio agio in questo studio dentistico, tutti i miei clienti sono molto contenti, tolgo le carie in maniera molto professionale, tappo buchi di denti spaccati, ho il colluttorio a casa e mia moglie mi ama anche se non rompo il cazzo agli altri, questo fa di me un gran dentista!",
          "img"=>"/img/dentist-1.png"
        ],
    ];


    public function index() {
        return view('welcome', ['services'=>[$this->services[0],$this->services[1]]]);
    }

    public function about() {
        return view('about',['workers'=>$this->workers]);
    }

    public function work() {
        return view('work', ["services"=>$this->services]);
    }

    public function serviceDetails($title){
        $selected = [];
        foreach ($this->services as $service) {
            if ($service["title"] == $title){
                $selected = $service;
            }
        }
        if(count($selected) < 1 ){
            $selected = $this->services[0];
        }
        return view('service-details', ["service"=>$selected]);
    }

    public function contacts() {
        return view('contacts');
    }
    
    public function submit(Request $request){
       
        $name = $request->input('name');
        $email = $request->input('email');
        $text = $request->input('text');

        $contact = compact('name','email','text');

        Mail::to($email)->send(new ContactReceived($contact));
        return redirect (route('thank-you',["name"=>$name]));
    }

    public function thankYou($name){
        return view('thank-you',['name'=>$name]);
    }
}
