<?php

namespace App\Controllers\Admin;

use App\Models\Quartier;
use App\Models\Entreprise;
use App\Controllers\Controller;


class PostController extends Controller
{
    public function index()
    {
         $this->isAdmin();
        $entreprises = (new Entreprise($this->getDB()))->all();

        return $this->view('admin.entreprise.index', compact('entreprises'));
        
    }
    public function create()
    {
        $this->isAdmin();
        return $this->view('admin.entreprise.form');
    }

    public function createPost()
    {   $this->isAdmin();
        $entreprise = new Entreprise($this->getDB());
        $quartier = array_pop($_POST);
        $result = $entreprise ->create($_POST, $quartier);

        if ($result) {
            return header('Location: /admin/entreprises');
        }
    }
    public function edit(int $id)
    {       $this->isAdmin();
        $entreprise = (new Entreprise($this->getDB()))->findById($id);
        $quartier = (new Quartier($this->getDB()))->all();


        return $this->view('admin.entreprise.form', compact('entreprise', 'quartier'));
    }

    public function update(int $id)
    {    $this->isAdmin();
        $entreprise = new Entreprise($this->getDB());
        $quartier = array_pop($_POST);
        $result = $entreprise ->update($id, $_POST, $quartier);

        if ($result) {
            return header('Location: /admin/entreprises');
        }

    }

    public function destroy (int $id)
    {   $this->isAdmin();
        $entreprise = new Entreprise($this->getDB());
        $result = $entreprise ->destroy($id);

        if ($result) {
            return header('Location: /admin/entreprises');
        }
    }
    
}

