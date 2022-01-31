<?php
class TariffHour extends TariffAbstract
{
    protected $pricePerHour = 200;

    public function __construct(int $minutes)
    {
        $this->minutes = $minutes;
    }
}