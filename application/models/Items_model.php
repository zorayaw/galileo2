<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Items_model extends CI_Model
{
    function getAllItems(){
        return $this->db->query("SELECT a.*, b.*, c.* FROM items a, items_stock b, items_category c WHERE a.item_category = c.category_id AND b.item_id = a.item_id ");
    }

    function updateStock($stock_id, $amount){
        return $this->db->query("UPDATE items_stock set item_stock = item_stock+'$amount' WHERE stock_id = '$stock_id'");
    }

    function insertStockIncomeHistory($stock_id, $admin_id, $amount){
        return $this->db->query("INSERT INTO incoming_stock(stock_id, admin_id, amount) VALUES('$stock_id', '$admin_id', $amount)");
    }
}
