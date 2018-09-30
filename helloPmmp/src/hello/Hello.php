<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 9/30/18
 * Time: 1:03 AM
 */

namespace hello;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class Hello extends PluginBase {

    public function onLoad(): void {
        $this->getLogger()->info(TextFormat::BLUE."hello world");
    }

    public function onEnable(): void {
        $this->getServer()->getPluginManager()->registerEvents(new EventListener(), $this);
        $this->getLogger()->info(TextFormat::AQUA."hello world!!!");
    }

    public function onDisable(): void {
        $this->getLogger()->info(TextFormat::RED."bye cruel world... :(");
    }



}