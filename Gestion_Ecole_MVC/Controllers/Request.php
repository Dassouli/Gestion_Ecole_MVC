<?php
class Request{   
public function __construct($POST){
 foreach($POST as $key=>$value)
 $this->$key=$value;    
}

public function input($prop)
{
 return $this->$prop;    
}
}
?>