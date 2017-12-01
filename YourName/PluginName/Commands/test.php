<?php

namespace YourName\PluginName\Commands;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use YourName\PluginName\Main;

class test extends Command{
	
	public function __construct(){
        parent::__construct("test");
        $this->setDescription("Test Commands");
        $this->setAliases(["test"]);
        $this->setPermission("test.command");
	}
	
	public function execute(CommandSender $sender, string $label, array $args){
        if (!$this->testPermission($sender)){
            return true;
        }
                $sender->sendMessage("§7(§4§l!§r§7) §bOh Test Works :)");
            return true;
        }
    }
