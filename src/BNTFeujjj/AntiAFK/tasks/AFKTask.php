<?php

namespace BNTFeujjj\AntiAFK\tasks;

use BNTFeujjj\AntiAFK\Main;
use pocketmine\scheduler\Task;
use pocketmine\Server;

class AFKTask extends Task {

    private Main $main;

    public function __construct(Main $main) {
        $this->main = $main;
    }

    public function onRun(): void { 
        foreach ($this->main->afkTime as $playername => $time) {
            $player = Server::getInstance()->getPlayerExact($playername);
            if($player !== null) {
                $now = new \DateTime("now", new \DateTimeZone($this->main->getConfig()->get('time.zone')));
                if ($time < $now) {
                    if(!$player->hasPermission("antiafk.bypass")) {
                        $player->kick($this->main->getConfig()->get('kick.message'));
                    }
                }
            }
        }
    }
}
