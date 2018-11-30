<?php
/**
 * Created by PhpStorm.
 * User: matthieuparis
 * Date: 29/11/2018
 * Time: 14:35
 */

declare(strict_types=1);

namespace InvoiceApp\Entity;

final class Zombie
{

    private $hp;
    private $degats;

    /**
     * Zombie constructor.
     * @param $hp
     * @param $degats
     */
    public function __construct($hp, $degats)
    {
        $this->hp = $hp;
        $this->degats = $degats;
    }

    /**
     * @return mixed
     */
    public function getHp(): float
    {
        return $this->hp;
    }

    /**
     * @param mixed $hp
     */
    public function setHp($hp)
    {
        $this->hp = $hp;
    }

    /**
     * @return mixed
     */
    public function getDegats(): int
    {
        return $this->degats;
    }

    /**
     * @param mixed $degats
     */
    public function setDegats($degats)
    {
        $this->degats = $degats;
    }

    public function toString(): string
    {
        return $this->getHp()." HP - Degats : ".$this->getDegats();
    }



}