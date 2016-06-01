<?php

namespace mineplex\hub;

use pocketmine\plugin\PluginBase;

use mineplex\core\event\EventListener;

class Hub extends PluginBase
{
	public function onEnable()
	{
		new EventListener();
	}
}