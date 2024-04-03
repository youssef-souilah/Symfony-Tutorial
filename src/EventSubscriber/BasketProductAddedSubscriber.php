<?php

namespace App\EventSubscriber;

use App\Event\BasketProductAdded;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class BasketProductAddedSubscriber implements EventSubscriberInterface
{
    public function onBasketProductAdded(BasketProductAdded $event): void
    {
        echo("from event subscriber !");
    }

    public static function getSubscribedEvents(): array
    {
        return [
            BasketProductAdded::class => ['onBasketProductAdded',100],
        ];
    }
}
