<?php

namespace ItemTips;

use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\math\Vector3;
use pocketmine\block\Block;
use pocketmine\item\Item;
use pocketmine\block\Air;
use pocketmine\entity\Effect;
use pocketmine\utils\Config;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\event\player\PlayerItemHeldEvent;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\Server;
use pocketmine\inventory\Inventory;
use pocketmine\utils\TextFormat;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\player\PlayerRespawnEvent;

class Main extends PluginBase implements Listener {
	
  public function onLoad(){ $this->getLogger()->info(TextFormat::WHITE . "插件启动中"); }

  public function onEnable() {
  $this->getServer()->getPluginManager()->registerEvents($this,$this);
  $this->getLogger()->info(TextFormat::GOLD."ItemTips插件启用 by:XingHao");
  }

  public function onDisable(){
  $this->getLogger()->info("ItemTips插件关闭");
  }
  
  public function onItemHeld(PlayerItemHeldEvent $event){
  $player = $event->getPlayer();
  $id = $event->getItem()->getID();
  
  switch($id){
      
  case "302":
  $event->getPlayer()->sendPopup("§6[ItemTips] §b伺服器服主是：XingHao| 有啥事可以联系他！ ");
  return false;
  }
  }
    
}
?>
