<?php

class RaspberryPiWire
{
    public function setPin($pin, $value)
    {
        $this->execute("gpio write $pin $value");
    }

    public function getPin($pin)
    {
        return (int)$this->execute("gpio read $pin");
    }

    public function setMode($pin, $mode)
    {
        $this->execute("gpio mode $pin $mode");
    }

    public function getAllPins()
    {
        return $this->execute("gpio readall");
    }

    private function execute($command)
    {
        return shell_exec($command);
    }
}