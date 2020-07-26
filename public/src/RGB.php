<?php


namespace App;


class RGB
{
    private int $red;
    private int $green;
    private int $blue;

    public function __construct(int $red, int $green, int $blue)
    {
            $this->setRed($red);
            $this->setGreen($green);
            $this->setBlue($blue);
    }

    public function equals(RGB $color):bool
    {
        return $this->red === $color->getRed() && $this->green === $color->getGreen() && $this->blue === $color->getBlue();
    }

    public static function random():self
    {
        return new self(mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
    }

    public function mix(RGB $color):self
    {
        return new self(
            ($this->red + $color->getRed()) / 2,
            ($this->green + $color->getGreen()) / 2,
            ($this->blue + $color->getBlue()) / 2
        );
    }

    private function setRed($red):void
    {
        if($red < 0 || $red > 255) throw new \Exception('Ошибка. Диапазон от 0 до 255');

        $this->red = $red;
    }
    private function setGreen($green):void
    {
        if($green < 0 || $green > 255) throw new \Exception('Ошибка. Диапазон от 0 до 255');

        $this->green = $green;
    }
    private function setBlue($blue):void
    {
        if($blue < 0 || $blue > 255) throw new \Exception('Ошибка. Диапазон от 0 до 255');

        $this->blue = $blue;
    }

    public function getRed():int
    {
        return $this->red;
    }
    public function getGreen():int
    {
        return $this->green;
    }
    public function getBlue():int
    {
        return $this->blue;
    }

}