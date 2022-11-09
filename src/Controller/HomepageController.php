<?php

namespace App\Controller;

use Survos\WorkflowBundle\Service\WorkflowHelperService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(WorkflowHelperService $workflowHelperService)
    {
        $workflows = $workflowHelperService->getWorkflowsGroupedByClass();

        return $this->render('homepage/index.html.twig', [
            'workflows' => $workflows,
            'workflowsByTaggedIterator' => $workflowHelperService->getWorkflowsFromTaggedIterator()
        ]);
    }

    /**
     * @Route("/login/{username}", name="login")
     */
    public function login()
    {
        throw new \LogicException('The security component should handle this route');
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logout()
    {
        throw new \LogicException('The security component should handle this route');
    }
}
