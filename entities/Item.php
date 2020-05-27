<?php

class Item {

    public $name;
    public $description;
    public $price;
    public $available;
    public $type;
    public $user;
    public $image;

    public function __construct($name, $description, $price, $type, $user, $image)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->type = $type;
        $this->user = $user;
        $this->available = true;
        $this->image = $image;
    }
}

?>