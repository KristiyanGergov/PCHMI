<?php

class Item {
    public $id;
    public $name;
    public $description;
    public $price;
    public $available;
    public $type;
    public $user;
    public $image;

    public function __construct($name, $description, $price, $available, $type, $user, $image, $id = null)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->available = $available;
        $this->type = $type;
        $this->user = $user;
        $this->available = true;
        $this->image = $image;
        $this->id = $id;
    }
}

?>