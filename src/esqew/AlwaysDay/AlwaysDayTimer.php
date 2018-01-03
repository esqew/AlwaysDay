<?php
namespace esqew\AlwaysDay {
	use pocketmine\plugin\PluginBase;
	use pocketmine\scheduler\PluginTask; 
	use pocketmine\Server;

        class AlwaysDayTimer extends PluginTask {
                public function onRun($currentTick){
                        Server::getInstance()->getDefaultLevel()->setTime(6000); // set to noon
                }
        }
}
