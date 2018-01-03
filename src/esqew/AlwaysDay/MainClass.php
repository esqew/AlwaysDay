<?php

namespace esqew\AlwaysDay {

	use esqew\AlwaysDay\AlwaysDayTimer;
	use pocketmine\plugin\PluginBase;
	use pocketmine\scheduler\PluginTask; 
	use pocketmine\Server;

	class MainClass extends PluginBase {
		public function onEnable(){
			$this->getLogger()->info("AlwaysDay v1.0 enabed! (by Sean Quinn <sean@esqew.com>)");
			$this->getServer()->getScheduler()->scheduleRepeatingTask(new AlwaysDayTimer($this), 1);
		}
	}
}


?>
