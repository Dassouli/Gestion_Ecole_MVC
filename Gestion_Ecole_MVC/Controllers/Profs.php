<?php
class Profs extends Controller{

  public function __construct(){
       parent::__construct('Prof');
  }

    public function index(){              
     $this->view("index",Prof::All());
    }

    public function show($id){
        $this->view("show", Prof::find($id));
    }

   public function destroy($id){       
	 $etd = Prof::find($id);
     $etd->delete();
	 $this->Redirect("../../profs");
    
    }

   public function store($request){   
        $P = new Prof();
        $P->nom =  $request->nom;
        $P->prenom = $request->prenom;
        $P->specialite =$request->specialite;
        $P->save();   
        $this->Redirect("../profs");
    }
   
   public function edit($id)
    {      
		 $this->view("form", Prof::find($id));
    }

   public function update($id,$request){   
        $P = Prof::find($id);
        $P->nom =  $request->nom;
        $P->prenom = $request->prenom;
        $P->specialite =$request->specialite;
        $P->save();   
        $this->Redirect("../../profs");
    }
    public function create(){
    
        $this->view("form");
        
    }


}