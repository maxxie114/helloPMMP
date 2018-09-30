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
use pocketmine\event\player\PlayerQuitEvent;

class EventListener implements Listener {

    /* @var hello */
    private $hello;


    public function __construct(Hello $hello) {
        $this->hello = $hello;
    }

    /**
     * @param PlayerJoinEvent $event
     */
    public function onJoin(PlayerJoinEvent $event): void {
        //$event->getPlayer() = new Player();
        $event->getPlayer()->sendMessage("hello world!!!!!");

    }

    /**
     * @param PlayerQuitEvent $event
     */
    public function onQuit(PlayerQuitEvent $event): void {
        $this->hello->getServer()->broadcastMessage($event->getPlayer()->getName()." Just left");
    }
}
