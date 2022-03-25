<?php
namespace App\Controllers;

use App\Models\Quartier;
 class QuartierController extends Controller {

    public function index(){
        

        
        $quartier = new Quartier($this->getDB());
        $quartiers = $quartier->all();
       
        return $this->view('admin.entreprise.form', ['test'=>$quartiers]);
    }

 }
