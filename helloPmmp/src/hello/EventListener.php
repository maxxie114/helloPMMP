<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 9/30/18
 * Time: 1:22 AM
 */

namespace hello;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

class EventListener implements Listener {


    /**
     * @param PlayerJoinEvent $event
     */
    public function onJoin(PlayerJoinEvent $event): void {
        //$event->getPlayer() = new Player();
        $event->getPlayer()->sendMessage("hello world!!!!!");

    }
}
