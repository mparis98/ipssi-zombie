<?php
/**
 * Created by PhpStorm.
 * User: matthieuparis
 * Date: 29/11/2018
 * Time: 14:23
 */
declare(strict_types=1);

namespace InvoiceApp\Entity;

use InvoiceApp\Repository\Humain;
use InvoiceApp\ValueObject\Weapons;

final class Resistant implements Humain
{

    private $hp;
    private $weapon;

    /**
     * Resistant constructor.
     * @param $hp
     * @param $weapon
     */
    public function __construct($hp, Weapons $weapon)
    {
        $this->hp = $hp;
        $this->weapon = $weapon;
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
     * @return Weapons
     */
    public function getWeapon(): string
    {
        return $this->weapon->toString();
    }

    /**
     * @param Weapons $weapon
     */
    public function setWeapon($weapon)
    {
        $this->weapon = $weapon;
    }

    public function toString(): string
    {
        return $this->getHp()." HP - arme : ".$this->getWeapon();
    }

    public function dommage()
    {
        return ($this->weapon->getDamage())/2;
    }


}