<?php
include "../src/TariffInterface.php";
include "../src/ServiceInterface.php";
include "../src/TariffAbstract.php";
include "../src/TariffBasic.php";
include "../src/TariffStudent.php";
include "../src/TariffHour.php";
include "../src/ServiceDriver.php";


$tariff = new TariffHour(58);
$tariff->addService(new ServiceDriver());
$price = $tariff->countOverallPrice();
