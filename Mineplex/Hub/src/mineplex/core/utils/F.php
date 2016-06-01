<?php

use pocketmine\utils\TextFormat as C;

class F
{
	public function main($prefix, $body)
	{
		return C::BLUE . $prefix ."> " . C::GRAY . $body);
	}
	
	public function sys($prefix, String body)
    {
		return C::DARK_GRAY . $prefix . "> " . C::GRAY . $body;
    }
}