<?php
class ServiceDriver implements ServiceInterface
{
    const COST = 100;

    public function applyService(TariffInterface $tariff)
    {
        return self::COST;
    }
}
