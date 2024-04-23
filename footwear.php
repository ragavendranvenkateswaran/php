<?php
class Footwear {
    protected $brand;
    protected $size;
    protected $color;

    public function __construct($brand, $size, $color) {
        $this->brand = $brand;
        $this->size = $size;
        $this->color = $color;
    }

    public function Info() {
        echo "Brand: {$this->brand}, Size: {$this->size}, Color: {$this->color  }" ;
    }
}

class Shoe extends Footwear {
    protected $style;

    public function __construct($brand, $size, $color, $style) {
        parent::__construct($brand, $size, $color);
        $this->style = $style;
    }

    public function Info() {
        parent::Info();
        echo "Style: {$this->style}\n" ;
    }
}

class Boot extends Footwear {
    protected $material;

    public function __construct($brand, $size, $color, $material) {
        parent::__construct($brand, $size, $color);
        $this->material = $material;
    }
    public function Info() {
        parent::Info();
        echo "Material: {$this->material}\n";
    }
}

$footwearArray = [];
$footwearArray[] = new Shoe("Nike", 10, "Black   ", "Running");
$footwearArray[] = new Shoe("Adidas", 9, "White   ", "Casual");
$footwearArray[] = new Boot("Puma", 11, "Brown   ", "Leather");

foreach ($footwearArray as $footwear) {
    $footwear->Info();
}