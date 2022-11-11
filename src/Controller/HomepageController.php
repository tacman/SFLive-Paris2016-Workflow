<?php

namespace App\Controller;

use Survos\WorkflowBundle\Service\WorkflowHelperService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(WorkflowHelperService $workflowHelperService, ParameterBagInterface $parameters)
    {
        $workflows = $workflowHelperService->getWorkflowsGroupedByClass();
        $configuration =  $workflowHelperService->getWorkflowConfiguration();

        return $this->render('homepage/index.html.twig', [
            'workflows' => $workflows,
            'workflowsByTaggedIterator' => $workflowHelperService->getWorkflowsFromTaggedIterator(),
            'workflowsConfiguration' => $configuration,
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
