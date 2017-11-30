<?php

namespace YourName\PluginName;

use pocketmine\plugin\PluginBase;

use pocketmine\event\Listener;

class Main extends PluginBase implements Listener{

    public function onEnable(){
        $this->registerConfig();
        $this->getLogger()->info("§aEnabled.");
    }

    private function registerConfig(){
                    /////////////////////////////// CONFIG ///////////////////////////////
        @mkdir($this->getDataFolder());
        $this->saveDefaultConfig();
    }
    
    public function onDisable(){
        $this->getLogger()->info("§cDisabled.");
    } 
}
