<?php
require_once "../entities/Item.php";
require_once "../database/Database.php";

function get_items(){
  $db = new Database();
  $items = $db->get_items("bowl", 1);
}

?>