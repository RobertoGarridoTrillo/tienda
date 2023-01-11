<?php

class Admin
{
    private string $nombre = "";
    private int $id = 0;

    public function __construct(...$args)
    {
        switch (count($args)) {
            case 1:
                $this->nombre = $args[0];
                break;
            case 2:
                $this->nombre = $args[0];
                $this->id = $args[1];
                break;
            default:
                break;
        }
    }

    public function getNombre(): mixed
    {
        return $this->nombre;
    }

    public function setNombre(mixed $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function getId(): mixed
    {
        return $this->id;
    }

    public function setId(mixed $id): void
    {
        $this->id = $id;
    }

}
