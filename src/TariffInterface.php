<?php

interface TariffInterface
{
    public function getPricePerTime();
    public function getPricePerDistance();
    public function addService(ServiceInterface $service): self;
    public function countOverallPrice();
}
