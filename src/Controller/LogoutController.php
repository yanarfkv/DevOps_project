<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LogoutController extends AbstractController
{
    /**
     * @Route("/logout", name="logout", methods="GET")
     */
    public function logout()
    {
        throw new \Exception('Don\'t forget to activate logout in security.yaml');
    }
}
