<?php
class circle{
    public int|float $radius;
    public $color;
    public function __construct($radius,$color){
        $this->radius=$radius;
        $this->color=$color;
    }

    /**
     * @return float|int
     */
    public function getRadius(): float|int
    {
        return $this->radius;
    }

    /**
     * @param float|int $radius
     */
    public function setRadius(float|int $radius): void
    {
        $this->radius = $radius;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color): void
    {
        $this->color = $color;
    }
    public function area(){
        return ($this->radius*$this->radius*pi());
    }
    public function perimeter(){
        return ($this->radius*2*pi());
    }
    public function toString(){
        return 'Radius: '.$this->radius.', Color: '.$this->color;
    }
}
