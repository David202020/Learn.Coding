<?php

namespace YourName\PluginName;

use pocketmine\plugin\PluginBase;

use pocketmine\event\Listener;

class Main extends PluginBase implements Listener{

    public function onEnable(){
        $this->registerConfig();
        $this->registerEvents();
        $this->getLogger()->info("§aEnabled.");
    }

    private function registerConfig(){
                    /////////////////////////////// CONFIG ///////////////////////////////
        @mkdir($this->getDataFolder());
        $this->saveDefaultConfig();
    }
    
    private function registerEvents(){
                    /////////////////////////////// EVENTS ///////////////////////////////
        $this->getServer()->getPluginManager()->registerEvents(new EventListener($this), $this);
    }
    
    public function onDisable(){
        $this->getLogger()->info("§cDisabled.");
    } 
}
