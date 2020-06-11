<?php

namespace App\Controller;

use App\Entity\Role;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RoleController extends AbstractController
{
    /**
     * @Route("/role", name="role")
     */
    public function index()
    {
        $repository = $this->getDoctrine()->getRepository(Role::class);
        $roles = $repository->findAll();
        
        return $this->render('role/index.html.twig', [
            'roles' => $roles,
            'resource' => 'artistes',
        ]);
    }
     /**
     * @Route("/role/{id}", name="role_show")
     */
    public function show($id)
    {
        $repository = $this->getDoctrine()->getRepository(Role::class);
        $role = $repository->find($id);

        return $this->render('role/show.html.twig', [
            'role' => $role,
        ]);
    }

}
