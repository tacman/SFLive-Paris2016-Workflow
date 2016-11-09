<?php

namespace AppBundle\Workflow;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Workflow\Event\Event;
use Symfony\Component\Workflow\Event\GuardEvent;
use Symfony\Component\Workflow\Workflow;

class AutoTransitionListener implements EventSubscriberInterface
{
    private $workflow;

    public function __construct(Workflow $workflow)
    {
        $this->workflow = $workflow;
    }

    public function onAnnouncePublish(Event $event)
    {
        $this->workflow->apply($event->getSubject(), 'publish');
    }

    public static function getSubscribedEvents()
    {
        return array(
            'workflow.article.announce.publish' => 'onAnnouncePublish',
        );
    }
}
