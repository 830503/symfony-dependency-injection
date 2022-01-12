<?php

namespace App\Controller;

use App\Entity\Capitalize;
use App\Entity\Dash;
use App\Entity\Logger;
use App\Entity\Master;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MasterController extends AbstractController
{
    #[Route('/master', name: 'master')]
    public function index(Request $request)
    {
        $message = (string)$request->request->get('message');
        // // $master = new Master($message, new Dash(), new Logger());
        // $master = new Master($message, new Capitalize(), new Logger());

        if ($request->request->get('select') == 'capitalize') {
            $master = new Master($message, new Capitalize(), new Logger());
        } else {
            $master = new Master($message, new Dash(), new Logger());
        }
        return $this->render('master/index.html.twig', [
            'controller_name' => $master->getMessage(),
        ]);
    }
}
