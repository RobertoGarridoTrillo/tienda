<?php


class Tienda
{

    private int $id = 1;
    private int $idRopa = 1;
    private array $usuarios = array();
    private array $clientes = array();
    private array $ropas = array();
    private array $admins = array();
    private array $carritos = array();

    public function __construct(...$args)
    {
        switch (count($args)) {
            case 1:
                $this->usuarios = $args[1];
                break;
            case 2:
                $this->usuarios = $args[1];
                $this->clientes = $args[2];
                break;
            case 3:
                $this->usuarios = $args[1];
                $this->clientes = $args[2];
                $this->ropas = $args[3];
                break;
            case 4:
                $this->usuarios = $args[1];
                $this->clientes = $args[2];
                $this->ropas = $args[3];
                $this->admins = $args[4];
                break;
            default:
                break;
        }
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getIdRopa(): int
    {
        return $this->idRopa;
    }

    public function setIdRopa(int $idRopa): void
    {
        $this->idRopa = $idRopa;
    }

    public function getUsuarios(): array
    {
        return $this->usuarios;
    }

    public function getAdmins(): array
    {
        return $this->admins;
    }

    public function getClientes(): array
    {
        return $this->clientes;
    }

    public function getCliente(int $id): Cliente
    {
        return $this->clientes[$id];
    }

    public function getRopas(): array
    {
        return $this->ropas;
    }

    public function setCliente(Usuario $usuario, Cliente $cliente): void
    {

        $this->usuarios[$this->id] = $usuario;
        $this->clientes[$this->id] = $cliente;

        $this->usuarios[$this->id]->setId($this->id);
        $this->clientes[$this->id]->setId($this->id);

        $this->id++;
    }

    public function setAdmin(Usuario $usuario, Admin $admin): void
    {
        $this->usuarios[$this->id] = $usuario;
        $this->admins[$this->id] = $admin;

        $this->usuarios[$this->id]->setId($this->id);
        $this->admins[$this->id]->setId($this->id);

        $this->id++;
    }

    public function setRopa(Ropa $ropa): void
    {
        $this->ropas[$this->idRopa] = $ropa;

        $this->ropas[$this->idRopa]->setId($this->idRopa);

        $this->idRopa++;
    }

    public function getCarrito($i): Carrito
    {
        if (isset($this->carritos[$i])) {
            return $this->carritos[$i];
        } else {
            $this->carritos[$i] = new Carrito($i);
        }
        return $this->carritos[$i];
    }

    public function setCarrito(Carrito $carrito): void
    {
        $this->carritos[$carrito->getId()] = $carrito;
    }


}
