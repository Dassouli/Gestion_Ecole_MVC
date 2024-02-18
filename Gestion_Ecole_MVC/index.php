<?php
//Extraction du chemin du fichier en cours d'exécution (index.php)
$chemin_index=$_SERVER['SCRIPT_FILENAME'];
//Elimination des 9 derniers caractères pour obtenir le chemin racine de l'application
$chemin_App= substr($chemin_index,0,-9) ;
//Définition de la constante ROOT qui contient le chemin racine de l'application
define("ROOT",$chemin_App);

//chargement des classes Model, Controller, Request
include_once ROOT.'DAO/Model.php';
include_once ROOT.'Controllers/Controller.php';
include_once ROOT.'Controllers/Request.php';
//inclusion du fichier d'en-tête de la vue (dossier public) 
include_once ROOT.'views/public/header.php';
//Récupérez les paramètres du lien: Contrôleur, action et l'id

$params=explode('/',$_GET['url']);
//Vérifier si le premier segment de l'URL n'est pas vide (contrôleur)
if($params[0]!="")
{
//Stocker le premier segment de l'URL dans la variable $controller
$controller=$params[0];

/*
Vérification de l'existence du fichier de contrôleur spécifique 
et inclusion si trouvé.
*/
if(file_exists(ROOT.'Controllers/'.$controller.".php"))
{
    include_once ROOT.'Controllers/'.$controller.".php";
// Initialisation de $action par "index" (action par défaut)
$action="index";
//initialisation de $id par 0
$id=0;
/*Détermination de l'action à exécuter en fonction 
du deuxième segment de l'URL, et de l'ID si présent 
dans le troisième segment */

    if(isset($params[1]))
    {
        $action=$params[1];
         if(isset($params[2]))
         {
             $id=$params[2];             
         }
    }
/*
- Instanciation du contrôleur 
- vérification si la méthode existe ($action)
- Exécution de la méthode en fonction de ses paramètres
*/	
    $instance=new $controller();
    if(method_exists($instance, $action)){
    $request=null;
    if(!empty($_POST))
       $request = new Request($_POST);
          
	   if($id!=0)
        if($request!=null)        
            $instance->$action($id,$request);
        else
            $instance->$action($id);	  
      else
	      $instance->$action($request);
      }
    else
        echo"url introuvable !!!!!!";
}
else
    echo "url introuvable!!!!--";
}
else
  {

?>
<center>
 <h1> <a href="etudiants" > Gestion des etudiants </a></h1>
 <h1> <a href="profs" > Gestion des profs </a></h1>
</center>
<?php 
} 
//inclusion du fichier de pied de page (dossier public) 
include_once ROOT.'views/public/footer.php';


?>
