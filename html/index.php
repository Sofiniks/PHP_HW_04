<?php
include "../src/tariffs/TariffInterface.php";
include "../src/services/ServiceInterface.php";
include "../src/tariffs/TariffAbstract.php";
include "../src/tariffs/TariffBasic.php";
include "../src/tariffs/TariffStudent.php";
include "../src/tariffs/TariffHour.php";
include "../src/services/ServiceDriver.php";
include "../src/services/ServiceGPS.php";

/** @var TariffInterface $tariff */
$tariff = new TariffHour(5);
$tariff->addService(new ServiceGPS());
$tariff->addService(new ServiceDriver());
$price = $tariff->countOverallPrice();
echo "Cost = $price";
