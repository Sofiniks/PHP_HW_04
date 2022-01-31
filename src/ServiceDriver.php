<?php
class ServiceDriver implements ServiceInterface
{
    private $cost = 100;

    public function applyService(TariffInterface $tariff, &$price)
    {
        $price += $this->cost;
    }
}
