<?php

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\block\BlockPlaceEvent;

use mineplex\core\utils\F;

class EventListener implements Listener
{
	public function __construct()
	{
		
	}
	
	public function onJoin(PlayerJoinEvent $event)
	{
		$event->setJoinMessage(F::sys("Join", $event->getPlayer()->getName());
	}
	
	public function onQuit(PlayerQuitEvent $event)
	{
		$event->setJoinMessage(F::sys("Quit", $event->getPlayer()->getName());
	}
	
	public function onBreak(BlcokBreakEvent $event)
	{
		$event->setCancelled(true);
	}
	
	public function onPlace(BlcokPlaceEvent $event)
	{
		$event->setCancelled(true);
	}
}