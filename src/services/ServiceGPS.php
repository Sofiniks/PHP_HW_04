

<?php
class ServiceGPS implements ServiceInterface
{
    const PRICE_PER_HOUR = 15;
    const HOUR = 60;

    public function applyService(TariffInterface $tariff)
    {
        $hours = ceil($tariff->getMinutes() / self::HOUR);
        return self::PRICE_PER_HOUR * $hours;
    }
}
