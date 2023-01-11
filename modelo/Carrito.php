<?php


class Carrito
{

    private int $id = 1;
    private array $ropasRef = array();
    private int $precioTotal = 0;

    public function __construct(...$args)
    {
        switch (count($args)) {
            case 1:
                $this->id = $args[0];
                break;
            case 2:
                $this->id = $args[0];
                $this->ropasRef = $args[1];
                break;
            case 3:
                $this->id = $args[0];
                $this->ropasRef = $args[1];
                $this->precioTotal = $args[2];
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

    public function getRopasRef(): array
    {
        return $this->ropasRef;
    }

    public function setRopasRef(array $ropasRef): void
    {
        $this->ropasRef = $ropasRef;
    }

    public function getRopaRef(string $i): Ropa
    {
        return $this->ropasRef[$i];
    }

    public function setRopaRef(string $ropaRefAnadir): void
    {
        $this->ropasRef[] = $ropaRefAnadir;
    }

    public function unsetRopaRef(int $idx): void
    {
        unset($this->ropasRef[$idx]);
    }

    public function ordenarRopaRef(): void{
        $this->ropasRef = array_values($this->ropasRef);
    }

    public function getPrecioTotal(): int
    {
        return $this->precioTotal;
    }

    public function setPrecioTotal(int $precioTotal): void
    {
        $this->precioTotal = $precioTotal;
    }

    public function sumarPrecioTotal(int $precioTotal): void
    {
        $this->precioTotal += $precioTotal;
    }

    public function restarPrecioTotal(int $precioTotal): void
    {
        $this->precioTotal -= $precioTotal;
    }
}
