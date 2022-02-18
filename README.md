<p align="center">
  <img src="http://image.noelshack.com/fichiers/2021/39/5/1633118741-logo-no-background.png" alt="Voltage logo" height="180" />
</p>

<h1 align="center">Voltage-Groups</h1>
<a href="https://discord.gg/ntF6gH6NNm"><img src="https://img.shields.io/discord/814507789656784898?label=discord&color=7289DA&logo=discord" alt="Discord" /></a>
<br/>
----------------------
<br/>

## Info
> Note: The `main` branch may be in an unstable or even broken state during development.
<br/>

Versions they are available [here](https://github.com/Voltagegroups/ScoreBoardApi/releases)
<br/>
Branch stable for [PM4](https://github.com/Voltagegroups/ScoreBoardApi/tree/pm4)


## Api
A very basic example can be seen here: [ScoreBoardHud](https://github.com/Voltagegroups/ScoreBoardHud) In dev

Create a new score board
```PHP
/** @var int */
$id = ScoreBoardApi::getManager()->createScoreBoard(string $displayName = "",?string $objectiveName = null, string $displaySlot = ScoreBoard::SLOT_SIDEBAR, int $sortOrder = ScoreBoard::SORT_ASCENDING, int $slotOrder = SetDisplayObjectivePacket::SORT_ORDER_ASCENDING); //you can define an id if you want
/** @var ScoreBoard */
$scoreboard = ScoreBoardApi::getManager()->getScoreBoard($id); //you can define all settings if you want
```

Send a score board
```PHP
$scoreboard->sendToPlayers(array $players);
$scoreboard->sendToAll();
```

Set the Line / Remove the Line score board
```PHP
/** @var ScoreBoard*/
$line = new ScoreBoardLine(int $score, string $message = "", ?int $scoreid = null, int $type = ScorePacketEntry::TYPE_FAKE_PLAYER);
$scoreboard->setLineToAll(ScoreBoardLine $line);
$scoreboard->setLinePlayers(array $players,ScoreBoardLine $line);

//this function can change after 

/** @var ScoreBoard*/
$line = new ScoreBoardLine(int $score, string $message = "", ?int $scoreid = null, int $type = ScorePacketEntry::TYPE_FAKE_PLAYER);
$scoreboard->removeLineToAll(ScoreBoardLine $line);
$scoreboard->removeLinePlayers(array $players,ScoreBoardLine $line);
```

Set the Settings
```PHP

```

Add and remove players

```PHP
$scoreboard->addPlayer(Player $player);
$scoreboard->removePlayer(Player $player);

/** @var Player[] $players */
$scoreboard->addPlayers(array $players);
$scoreboard->removePlayers(array $players);
$scoreboard->removeAllPlayers();
```

Examples

```PHP
$scoreboard = ScoreBoardApi::getManager()->getScoreBoard(ScoreBoardApi::getManager()->createScoreBoard("Title", null, null, null, null, Server::getInstance()->getOnlinePlayers(), false));
$player = Server::getInstance()->getPlayerExact("voltage");
$line1 = new ScoreBoardLine(1, "Hello World");
$scoreboard
    ->setLineToAll($line1)
    ->setLineToPlayers([$player], new ScoreBoardLine(2, "You are the best " . $player->getName()))
    ->sendToAll();
```
=
```PHP
$id = ScoreBoardApi::getManager()->createScoreBoard();
$scoreboard = ScoreBoardApi::getManager()->getScoreBoard($id);
$player = Server::getInstance()->getPlayerExact("voltage");
$line1 = new ScoreBoardLine(1, "Hello World");
$scoreboard
    ->addPlayer(Server::getInstance()->getOnlinePlayers())
    ->setDisplayName("Title")
    ->setLineToAll($line1)
    ->setLineToPlayers([$player], new ScoreBoardLine(2, "You are the best " . $player->getName()))
    ->sendToAll();
```

## Contents

- [Features](./FEATURES.md)
- [License](./LICENSE)

## Usages

* [PocketMine-MP](https://github.com/pmmp/PocketMine-MP)

## Community

Active channels:

- Twitter: [@voltagegroups](https://twitter.com/VoltageGroups?t=wSiFVaX5GiHx8Z-LmSC7iQ&s=09)
- Discord: [ntF6gH6NNm](https://discord.gg/ntF6gH6NNm)
- © Voltage-Groups
<div align="center">
  <img src="http://image.noelshack.com/fichiers/2021/39/5/1633118741-logo-no-background.png" height="50" width="50" align="left"></img>
</div>
<br/><br/>

## © Voltage-Groups

Voltage-Groups are not affiliated with Mojang. All brands and trademarks belong to their respective owners. Voltage-Groups is not a Mojang-approved software, nor is it associated with Mojang.
