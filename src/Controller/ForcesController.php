<?php

namespace App\Controller;

use App\Document\forces;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ForcesController extends Controller {

    /**
     * @Route("/api/forces", name="api_forces")
     */
    public function index() {

        $newState = $this->get('doctrine_mongodb')
            ->getRepository(forces::class)
            ->findOneBy(["id" => "forces"]);

        if (!$newState) {
            throw $this->createNotFoundException('No Response Found!');
        }

        return new JsonResponse(array($newState->getId() => $newState->getForces()));

    }

}

?>