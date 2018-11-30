<?php
/**
 * Created by PhpStorm.
 * User: matthieuparis
 * Date: 29/11/2018
 * Time: 14:25
 */
declare(strict_types=1);

namespace InvoiceApp\ValueObject;

class Weapons
{

    private $name;
    private $damage;

    /**
     * Weapons constructor.
     * @param $name
     * @param $damage
     */
    public function __construct($name, $damage)
    {
        $this->name = $name;
        $this->damage = $damage;
    }


    /**
     * @return mixed
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDamage(): int
    {
        return $this->damage;
    }

    /**
     * @param mixed $damage
     */
    public function setDamage($damage)
    {
        $this->damage = $damage;
    }

    public function toString(): string
    {
        return $this->getName().": ".$this->getDamage()." pts de dégats";
    }


}