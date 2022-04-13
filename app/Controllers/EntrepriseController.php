<?php
namespace App\Controllers;

use App\Models\Entreprise;


class EntrepriseController extends Controller{


    public function welcome()
    {
        return $this->view('entreprise.index'); 
    }

    public function index(){

        $entreprise = new Entreprise($this->getDB());
        $entreprises = $entreprise->all();
       
        return $this->view('entreprise.index', compact('entreprises'));
    }


    public function show(int $id) //on attendd un entier
    {   
        $entreprise = new Entreprise($this->getDB());
        $entreprise = $entreprise->findById($id);

    
        return $this->view('entreprise.show', compact('entreprise'));
    }
}