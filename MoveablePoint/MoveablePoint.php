<?php

class MoveablePoint extends Point
{
    public float $xSpeed;
    public float $ySpeed;

    public function __construct(float $x, float $y, float $xSpeed, float $ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function getXSpeed(): float
    {
        return $this->xSpeed;
    }

    public function setXSpeed(float $xSpeed): void
    {
        $this->xSpeed = $xSpeed;
    }

    public function getYSpeed(): float
    {
        return $this->ySpeed;
    }

    public function setYSpeed(float $ySpeed): void
    {
        $this->ySpeed = $ySpeed;
    }

    public function getSpeed(): array
    {
        return [$this->xSpeed, $this->ySpeed];
    }

    public function move()
    {
        $x = $this->getX() + $this->getXSpeed();
        $y = $this->getY() + $this->getYSpeed();
        parent::setX($x);
        parent::setY($y);
    }

    public function toString(): string
    {
        return 'X: ' . $this->x . ', Y: ' . $this->y;
    }
}

