<?php

namespace YourName\PluginName;

use pocketmine\Player;
use pocketmine\Server;

use pocketmine\event\Event;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;

use YourName\PluginName\Main;

class EventListener implements Listener{

    private $main;

    public function __construct(Main $main){
        $this->main = $main;
    }

    public function getMain(){
        return $this->main;
    }

    public function onJoin(PlayerJoinEvent $event){
        $player = $event->getPlayer();
        $name = $player->getName();
        $event->setJoinMessage("");
        $this->getMain()->getServer()->broadcastMessage("§a$name Join");
    }
}
