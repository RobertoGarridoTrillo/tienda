<?php

class Usuario
{
    private string $user = "";
    private string $pass = "";
    private int $nivel = 0;
    private int $id = 0;

    public function __construct(...$args)
    {
        switch (count($args)) {
            case 1:
                $this->user = $args[0];
                break;
            case 2:
                $this->user = $args[0];
                $this->pass = $args[1];
                break;
            case 3:
                $this->user = $args[0];
                $this->pass = $args[1];
                $this->nivel= $args[2];
                break;
            case 4:
                $this->user = $args[0];
                $this->pass = $args[1];
                $this->nivel = $args[2];
                $this->id = $args[3];
                break;
            default:
                break;
        }
    }

    public function getUser(): string
    {
        return $this->user;
    }

    public function setUser(mixed $nombre): void
    {
        $this->user = $nombre;
    }

    public function getPass(): mixed
    {
        return $this->pass;
    }

    public function setPass(mixed $pass): void
    {
        $this->pass = $pass;
    }

    public function getId(): mixed
    {
        return $this->id;
    }

    public function setId(mixed $id): void
    {
        $this->id = $id;
    }

    public function getNivel(): mixed
    {
        return $this->nivel;
    }

    public function setNivel(mixed $nivel): void
    {
        $this->nivel = $nivel;
    }


}

