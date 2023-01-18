<?php

class Plane implements Transport
{
    public function load(): void
    {
        echo "Plane is loading...";
    }

    public function deliver(string $cargo): void
    {
        echo "Plane delivering $cargo";
    }

    public function unload(): void
    {
        echo "Plane is unloaded...";
    }
}