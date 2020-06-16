<?php

namespace App\Controller;

use EasyCorp\Bundle\EasyAdminBundle\Controller\EasyAdminController;
use App\Entity\Libro;
use Symfony\Component\Yaml\Dumper;

class AdminControllerBookflix extends EasyAdminController
{

    protected function CargarPdfAction(){
        
        $entity = $this->request->query;

        return $this-> redirectToRoute('update_book', array('id' =>  $entity->get('id'),'entity' => $entity));

    }
}