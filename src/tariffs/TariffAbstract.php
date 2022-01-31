<?php
abstract class TariffAbstract implements TariffInterface
{
    protected $pricePerKilometer;
    protected $pricePerMinute;
    protected $pricePerHour;
    protected $distance;
    protected $minutes;
    /** @var ServiceInterface[] */
    protected $services = [];

    public function __construct(int $distance, int $minutes)
    {
        $this->distance = $distance;
        $this->minutes = $minutes;
    }
    public function getMinutes(): int
    {
        return $this->minutes;
    }

    public function getPricePerDistance() : int
    {
        return $this->distance * $this->pricePerKilometer;
    }

    public function getPricePerTime() : int
    {
        if($this->pricePerHour) {
            $hours = ($this->minutes - $this->minutes % 60 + 60) / 60;
            return $hours * $this->pricePerHour;
        }else {
            return $this->minutes * $this->pricePerMinute;
        }
    }
    public function addService(ServiceInterface $service): TariffInterface
    {
        $this->services[] = $service;
        return $this;
    }

    public function countOverallPrice() : int
    {
        $price = $this->getPricePerDistance() + $this->getPricePerTime();
        if ($this->services) {
            foreach ($this->services as $service) {
                $price += $service->applyService($this);
            }
        }
        return $price;
    }
}
