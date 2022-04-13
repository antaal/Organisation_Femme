<?php
namespace App\Models;

class Quartier extends Model
{
    protected $table = 'quartiers';

    public function selectQuartier()
    {
        return $this->query("SELECT * FROM quartiers");
    }
}
