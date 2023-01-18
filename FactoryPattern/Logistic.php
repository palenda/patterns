<?php

abstract class Logistic
{
    abstract public function getTransport(): Transport;

    public function deliverCargo(string $cargoName): void
    {
        $transport = $this->getTransport();

        $transport->load();
        $transport->deliver($cargoName);
        $transport->unload();
    }
}