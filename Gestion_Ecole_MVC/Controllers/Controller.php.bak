<?php

abstract class Controller{

public function __construct(string $model){
        // chargez le fichier correspondant au modèle souhaité
        include_once ROOT.'Models/'.$model.'.php';        

 } 

    public function view(string $fichier, $data=null){
    include_once ROOT.'views/'.lcfirst(get_class($this)).'/'.$fichier.'.php';           
   }
   
public function Redirect($chemin)
	{
	   header('Location:'.$chemin);
}

    abstract public function index();

    abstract public function show($id);

    abstract public function create();

    abstract public function store($request);

    abstract public function edit($id);

    abstract public function update($id, $request);

    abstract public function destroy($id);
   
}
?>