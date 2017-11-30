<?php

namespace YourName\PluginName;

use pocketmine\plugin\PluginBase;

use pocketmine\event\Listener;

class Main extends PluginBase implements Listener{

    public function onEnable(){
        $this->getLogger()->info("§aEnabled.");
    }

    public function onDisable(){
        $this->getLogger()->info("§cDisabled.");
    } 
}
