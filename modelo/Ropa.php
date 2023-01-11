<?php

class Ropa
{
    private int $id = 0;
    private string $nombre = "";
    private int $precio = 0;
    private string $tipo = "";
    private string $referencia = "";

    public function __construct(...$args)
    {
        switch (count($args)) {
            case 1:
                $this->nombre = $args[0];
                break;
            case 2:
                $this->nombre = $args[0];
                $this->precio = $args[1];
                break;
            case 3:
                $this->nombre = $args[0];
                $this->precio = $args[1];
                $this->tipo = $args[2];
                break;
            case 4:
                $this->nombre = $args[0];
                $this->precio = $args[1];
                $this->tipo = $args[2];
                $this->referencia = $args[3];
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

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getPrecio(): int
    {
        return $this->precio;
    }

    public function setPrecio(int $precio): void
    {
        $this->precio = $precio;
    }

    public function getTipo(): mixed
    {
        return $this->tipo;
    }

    public function setTipo(int $tipo): void
    {
        $this->tipo = $tipo;
    }

    public function getReferencia(): string
    {
        return $this->referencia;
    }

    public function setReferencia(string $referencia): void
    {
        $this->referencia = $referencia;
    }

}
