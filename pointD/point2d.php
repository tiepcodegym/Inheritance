<?php

class point2d
{
    public float $x;
    public float $y;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX(): float
    {
        return $this->x;
    }

    public function setX(float $x): void
    {
        $this->x = $x;
    }

    public function getY(): float
    {
        return $this->y;
    }

    public function setY(float $y): void
    {
        $this->y = $y;
    }

    public function setXY(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getXY(): array
    {
        return [$this->x, $this->y];
    }

    public function toString(): string
    {
        return 'X: '.$this->getX().', Y: '.$this->getY();
    }
}