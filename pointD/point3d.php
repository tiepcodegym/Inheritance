<?php

class point3d extends point2d
{
    public float $z;

    public function __construct(float $x, float $y, float $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }

    /**
     * @return float
     */
    public function getZ(): float
    {
        return $this->z;
    }

    /**
     * @param float $z
     */
    public function setZ(float $z): void
    {
        $this->z = $z;
    }

    public function setXYZ(float $x, float $y, float $z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }

    public function getXYZ(): array
    {
        return [$this->x, $this->y, $this->z];
    }
    public function toString(): string
    {
        return 'X: '.$this->getX().', Y: '.$this->getY().', Z: '.$this->getZ();
    }

}
