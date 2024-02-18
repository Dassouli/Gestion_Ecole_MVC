<?php

class Etudiants extends Controller{

  public function __construct(){
       parent::__construct('Etudiant');
  }

    public function index(){              
     $this->view("index",Etudiant::All());
    }

    public function show($id){
        $this->view("show", Etudiant::find($id));
    }

   public function destroy($id){       
	 $etd = Etudiant::find($id);
     $etd->delete();
	 $this->Redirect("../../Etudiants");
    
    }

   public function store($request){   
        $E = new Etudiant();
        $E->nom =  $request->nom;
        $E->prenom = $request->prenom;
        $E->specialite =$request->specialite;
        
        $E->save();   
        $this->Redirect("../Etudiants");
    }
   
   public function edit($id)
    {      
		 $this->view("form", Etudiant::find($id));
    }

   public function update($id,$request){   
        $E = Etudiant::find($id);
        $E->nom =  $request->nom;
        $E->prenom = $request->prenom;
        $E->specialite =$request->specialite;
        $E->save();   
        $this->Redirect("../../Etudiants");
    }
    public function create(){
    
        $this->view("form");
        
    }


}