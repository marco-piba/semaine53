<?php 

class Agence {

protected $_nom;
protected $_adresse;
protected $_codePostal;
protected $_ville;
protected $_ModeRestauration;



public function getNom(){
    return $this->_nom;
}
public function getAdresse(){
    return $this->_adresse;
}
public function getCodePostal(){
    return $this->_codePostal;
}
public function getVille(){
    return $this->_ville;
}
public function getModeRestauration(){
    return $this->_ModeRestauration;
}


public function setNom(string $nom){
    return $this->_nom=$nom;
}
public function setAdresse(string $adresse){
    return $this->_adresse=$adresse;
}
public function setCodePostal(string $postal){
    return $this->_codePostal=$postal;
}
public function setVille(string $ville){
    return $this->_ville=$ville;
}
public function setModeRestauration(bool $rest){
    return $this->_ModeRestauration=$rest;
}


// Définition du constructeur de la classe
  /* function __construct($nom, $adresse,$postal,$ville) 
   {
        $this->_nomAgence = $nom;
        $this->_adresse = $adresse;
        $this->_postal = $postal;
        $this->_ville = $ville;
   }

*/


}


?>