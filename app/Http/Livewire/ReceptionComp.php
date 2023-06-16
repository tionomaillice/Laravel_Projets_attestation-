<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Demandes;
use Carbon\Carbon;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;







class ReceptionComp extends Component
{
    public $demandes;
    use WithPagination;
    public $search="";
    public $newDemande=[];


    public function mount()
    {
        $this->demandes = Demandes::all();




    }



    public function render()
    {
        $searchCriteria="%".$this->search."%";

        $data= [

            "demandes"=> Demandes::where("nom","like",$searchCriteria)
        ];
        // $data = DB::table("demandes")->get();
        return view('livewire.reception.index',$data)
        ->extends("layouts.master")
            ->section("contenu");
    }
    //  public function saveRecord(Request $request){
    //     $dt= Carbon::now();
    //     $folder_name= 'demande_files';
    //     $date_time= $dt->toDayDateTimeString();
    //     \Storage::disk('local')->makeDirectory('$folder_name,0775,true');
    //     if($request->hasFile('filedemande_file')){
    //         foreach($request->filedemande_file as $fichier){
    //             $destinationPath=$folder_name.'/';
    //             $Action=$fichier->getClientOriginalName();
    //             $demande_file_tbl[
    //                 'Action'=> $Action,
    //                 'nom'=>$destinationPath.$Action,
    //                 'date'=> $date_time;
    //                 'numero'=>$numeric,
    //             ]
    //         }
    //     }
    //  }
    // public function goToDowDemandes(){

    //  }
    // public function addDemande(){
    //     dump(  $this ->newDemande);
    // }

 }


