<?php

namespace App\Models;

class Cart
{
    public $items = null;
    public $totalQtyProducts = 0;
    public $totalPrice = 0;

    public function __construct($oldCart) {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQtyProducts = $oldCart->totalQtyProducts;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id) {
        $storedItem = ['qty' => 0, 'price' => $item->price, 'item' => $item];
        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty']++;
        $storedItem['price'] = $item->price * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQtyProducts++;
        $this->totalPrice += $item->price;
    }

    public function deleteProduct($id) {
        $this->items[$id] ['qty']--;
        $this->items[$id] ['price'] -= $this->items[$id] ['item'] ['price'];
        $this->totalQtyProducts--;
        $this->totalPrice -= $this->items[$id] ['item'] ['price'];

        if ($this->items[$id] ['qty'] <= 0) {
            unset($this->items[$id]);
        }
    }

    public function addProduct($id) {
        $this->items[$id] ['qty']++;
        $this->items[$id] ['price'] += $this->items[$id] ['item'] ['price'];
        $this->totalQtyProducts++;
        $this->totalPrice += $this->items[$id] ['item'] ['price'];
    }
}
