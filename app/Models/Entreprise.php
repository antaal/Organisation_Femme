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
    
   
public function getQuartier()
{
    return $this->query("SELECT quartiers.nom FROM `quartiers`  INNER JOIN `entreprises`  on entreprises.quartier_id = quartiers.id WHERE entreprises.id = ?",
    [$this->id]);
}

 
    
    
public function create(array $data, ?array $relations=  null)
{
    parent::create($data);

    // $id = $this->db->getPDO()->lastInsertId();

    // // foreach ($relations as $quartier_id) {
    // //     $stmt = $this->db->getPDO()->prepare("INSERT entreprises (id, quartier_id) VALUES (?, ?)");
    // //     $stmt->execute([$id, $quartier_id]);
    // // }
   

    // return true;
}

public function update(int $id, array $data, ?array $relations = null)
{
    parent::update($id, $data);

 

}

   
}