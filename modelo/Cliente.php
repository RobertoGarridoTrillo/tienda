<?php

class Cliente
{
    private string $nombre = "";
    private int $telefono = 0;
    private int $saldo = 0;
    private int $id = 0;


    public function __construct(...$args)
    {
        switch (count($args)) {
            case 1:
                $this->nombre = $args[0];
                break;
            case 2:
                $this->nombre = $args[0];
                $this->telefono = $args[1];
                break;
            case 3:
                $this->nombre = $args[0];
                $this->telefono = $args[1];
                $this->saldo = $args[2];
                break;
            case 4:
                $this->nombre = $args[0];
                $this->telefono = $args[1];
                $this->saldo = $args[2];
                $this->id = $args[3];
                break;
            default:
                break;
        }
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function getTelefono(): int
    {
        return $this->telefono;
    }

    public function setTelefono(int $telefono): void
    {
        $this->telefono = $telefono;
    }

    public function getSaldo(): int
    {
        return $this->saldo;
    }

    public function setSaldo(int $saldo): void
    {
        $this->saldo = $saldo;
    }

    public function sumarSaldo(int $dinero):void{
        $this->saldo += $dinero;
    }

    public function restarSaldo(int $dinero):void{
        $this->saldo -= $dinero;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

}
