<?php

function clientCode(Logistic $logistic, string $cargo): void
{
    $logistic->deliverCargo($cargo);
}

clientCode(new AirLogistic, 'Cookies');
clientCode(new RoadLogistic, 'Clothes');