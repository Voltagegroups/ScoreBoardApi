<?php

namespace Voltage\Api;

use pocketmine\plugin\PluginBase;
use Voltage\Api\listener\ScoreBoardListener;
use Voltage\Api\manager\ScoreBoardManager;

class ScoreBoardApi extends PluginBase
{
    private static ScoreBoardManager $manager;

    /**
     * @return ScoreBoardManager
     */
    public static function getManager() : ScoreBoardManager {
        return self::$manager;
    }

    public function onLoad(): void
    {
        self::$manager = new ScoreBoardManager();
    }

    public function onEnable(): void
    {
        new ScoreBoardListener($this);
    }
}