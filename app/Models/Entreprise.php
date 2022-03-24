<?php
namespace App\Models;

use DateTime;

class Entreprise extends Model{
    protected $table = 'entreprises';
    

    public function getCreatedAt():string
    {
       return (new DateTime($this->dateCreation))->format('d/m/Y à H:i');
        
    }

    public function getButton():string
    {
return <<<HTML
    <a href="/entreprises/$this->id" class="btn btn-primary">Detail Entreprise</a>


HTML;

    }
    // public function getQuartier()
    // {
    //      return $this->query("
    //      SELECT * FROM `entreprises` , `quartiers` 
    //      WHERE entreprises.quartier_id = quartiers.id",$this->id);
    // }
    // public function getQuartier()
    // {
    //     return $this->query("
    //      SELECT nom FROM  `quartiers` 
    //      WHERE entreprises.quartier_id = quartiers.id", [$this->id]);
    // }

    
    

   
}