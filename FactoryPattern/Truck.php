<?php

class Truck implements Transport
{
    public function load(): void
    {
        echo "Truck is loading...";
    }

    public function deliver(string $cargo): void
    {
        echo "Truck delivering $cargo";
    }

    public function unload(): void
    {
        echo "Truck is unloaded...";
    }
}