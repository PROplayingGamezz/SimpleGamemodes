<?php

namespace simplegamemodes;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\network\mcpe\protocol\types\GameMode;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase
{

    function onEnable()
    {
        $this->getLogger()->notice("SimpleGamemodes enabled by PROplayingGamez");
    }

    public function onCommand(CommandSender $s, Command $cmd, string $label, array $args): bool
    {
        switch ($cmd->getName()) {
            case "gamemodes":
                if ($s->hasPermission("gamemodes.permission")) {
                    $s->sendMessage("§8------ §gGamemodes §8------\n§b/creative (player)\n/survival (player)\n/spectator (player)\n/adventure (player)\n§8------ §gGamemodes §8------");
                } else {
                    $s->sendMessage("§gYou don't have permission to use this command");
                }
                break;
            case "gamemodes-about":
                $s->sendMessage("§8------ §gSimpleGamemodes §cAbout §8------\n§gAuthor: §bPROplayingGamez\n§gApi: §b3.0.0\n§gVersion: §b1.0.0\n§gGitHub: §bPROplayingGamezz\n§8------ §gSimpleGamemodes §cAbout §8------");
                break;
            case "creative":
                if ($s instanceof Player) {
                    if (count($args) <= 0) {
                        if ($s->hasPermission("gamemodes.permission")) {
                            $s->setGamemode(GameMode::CREATIVE);
                            $s->sendMessage("§gYou have changed your gamemode to creative");
                        }
                    }
                    if (count($args) >= 1) {
                        $p = $this->getServer()->getPlayer($args[0]);
                        if ($this->getServer()->getPlayer($args[0]) !== null) {
                            if ($s->hasPermission("gamemodes.permission")) {
                                $p->setGamemode(GameMode::CREATIVE);
                                $p->sendMessage("§b" . $s->getDisplayName() . " §ghas changed your gamemode to creative");
                                $s->sendMessage("§gYou have changed §b" . $p->getDisplayName() . "'s §ggamemode to creative");
                            } else {
                                $s->sendMessage("§gYou don't have permission to use this command");
                            }
                        } else {
                            $s->sendMessage("§b$args[0] §gis not online");
                        }
                    }
                }
                break;
            case "survival":
                if ($s instanceof Player) {
                    if (count($args) <= 0) {
                        if ($s->hasPermission("gamemodes.permission")) {
                            $s->setGamemode(GameMode::SURVIVAL);
                            $s->sendMessage("§gYou have changed your gamemode to survival");
                        }
                    }
                    if (count($args) >= 1) {
                        $p = $this->getServer()->getPlayer($args[0]);
                        if ($this->getServer()->getPlayer($args[0]) !== null) {
                            if ($s->hasPermission("gamemodes.permission")) {
                                $p->setGamemode(GameMode::SURVIVAL);
                                $p->sendMessage("§b" . $s->getDisplayName() . " §ghas changed your gamemode to survival");
                                $s->sendMessage("§gYou have changed §b" . $p->getDisplayName() . "'s §ggamemode to survival");
                            } else {
                                $s->sendMessage("§gYou don't have permission to use this command");
                            }
                        } else {
                            $s->sendMessage("§b$args[0] §gis not online");
                        }
                    }
                }
                break;
            case "spectator":
                if ($s instanceof Player) {
                    if (count($args) <= 0) {
                        if ($s->hasPermission("gamemodes.permission")) {
                            $s->setGamemode(GameMode::SURVIVAL_VIEWER);
                            $s->sendMessage("§gYou have changed your gamemode to spectator");
                        }
                    }
                    if (count($args) >= 1) {
                        $p = $this->getServer()->getPlayer($args[0]);
                        if ($this->getServer()->getPlayer($args[0]) !== null) {
                            if ($s->hasPermission("gamemodes.permission")) {
                                $p->setGamemode(GameMode::SURVIVAL_VIEWER);
                                $p->sendMessage("§b" . $s->getDisplayName() . " §ghas changed your gamemode to spectator");
                                $s->sendMessage("§gYou have changed §b" . $p->getDisplayName() . "'s §ggamemode to spectator");
                            } else {
                                $s->sendMessage("§gYou don't have permission to use this command");
                            }
                        } else {
                            $s->sendMessage("§b$args[0] §gis not online");
                        }
                    }
                }
                break;
            case "adventure":
                if ($s instanceof Player) {
                    if (count($args) <= 0) {
                        if ($s->hasPermission("gamemodes.permission")) {
                            $s->setGamemode(GameMode::ADVENTURE);
                            $s->sendMessage("§gYou have changed your gamemode to adventure");
                        }
                    }
                    if (count($args) >= 1) {
                        $p = $this->getServer()->getPlayer($args[0]);
                        if ($this->getServer()->getPlayer($args[0]) !== null) {
                            if ($s->hasPermission("gamemodes.permission")) {
                                $p->setGamemode(GameMode::ADVENTURE);
                                $p->sendMessage("§b" . $s->getDisplayName() . " §ghas changed your gamemode to adventure");
                                $s->sendMessage("§gYou have changed §b" . $p->getDisplayName() . "'s §ggamemode to adventure");
                            } else {
                                $s->sendMessage("§gYou don't have permission to use this command");
                            }
                        } else {
                            $s->sendMessage("§b$args[0] §gis not online");
                        }
                    }
                }
        }
        return true;
    }
}