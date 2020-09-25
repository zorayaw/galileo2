<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Items_model extends CI_Model
{
    function getAllItems(){
        return $this->db->query("SELECT a.*, b.*, c.* FROM items a, items_stock b, items_category c WHERE a.item_category = c.category_id AND b.item_id = a.item_id ");
    }
}
