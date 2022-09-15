<?php
namespace App\Controller\API;

use PhpCleanArchitecture\Application\Commands\CreateConference;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/conference')]
class ConferenceController extends AbstractController
{
    #[Route('', methods: ['GET'])]
    public function index() : JsonResponse
    {
        return $this->json(['status' => 'OK']);
    }

    #[Route('', methods: ['POST'])]
    public function createConference(Request $request, CreateConference $createConferenceCommand) : JsonResponse
    {
        $createConferenceCommand->execute();
        return $this->json($request->toArray(), 201);
    }
}