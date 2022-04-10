<?php

namespace App\Http\Livewire;

use App\Models\Agriculteur;
use App\Models\Intervention;
use App\Models\Parcelle;
use Livewire\Component;

class Livewire extends Component
{
    private $question1;
    private $question2;
    private $question3;
    private $question4;
    private $question5;
    public function render()
    {
        $this->question1=Agriculteur::all("agr_nom")->sortBy("agr_nom");
        $this->question2=Parcelle::where("par_superficie",">",500)->get();
        $this->question3=Parcelle::where("par_lieu","arith","and")->whereBetween("par_superficie",[200,500])->get();
        $this->question4=Parcelle::join('agriculteurs', 'parcelles.par_prop', '=', 'par_id')->get(['parcelles.*','agriculteurs.agr_nom']);
        $from = date('2011-11-07');
        $to = date('2012-02-9');
        $this->question5=Intervention::whereBetween("int_debut",[$from,$to])->get();
        // $this->question5=Intervention::all();
        $this->question6=Intervention::join('parcelles', 'interventions.int_par_id', '=', 'parcelles.par_id')->get(['parcelles.par_nom','interventions.*']);
        $this->question7=Intervention::join('parcelles', 'interventions.int_par_id', '=', 'parcelles.par_id')
            ->join('employes', 'interventions.int_emp_nss', '=', 'employes.emp_nss')
            ->get(['parcelles.par_nom','employes.emp_nom','interventions.*']);
        return view('livewire.livewire',['question1'=>$this->question1,
            'question2'=>$this->question2,
            'question3'=>$this->question3,
            'question4'=>$this->question4,
            'question5'=>$this->question5,
            'question6'=>$this->question6,
            'question7'=>$this->question7,
        ]);
    }
}
