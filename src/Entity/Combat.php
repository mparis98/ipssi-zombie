<?php
/**
 * Created by PhpStorm.
 * User: matthieuparis
 * Date: 29/11/2018
 * Time: 14:38
 */
declare(strict_types=1);

namespace InvoiceApp\Entity;

final class Combat
{

    private $resistant;
    private $zombie;

    /**
     * Combat constructor.
     * @param $resistant
     * @param $zombie
     */
    public function __construct(Resistant $resistant, Zombie $zombie)
    {
        $this->resistant = $resistant;
        $this->zombie = $zombie;
    }

    /**
     * @return Resistant
     */
    public function getResistant(): string
    {
        return $this->resistant->toString();
    }

    /**
     * @param Resistant $resistant
     */
    public function setResistant($resistant)
    {
        $this->resistant = $resistant;
    }

    /**
     * @return Zombie
     */
    public function getZombie(): string
    {
        return $this->zombie->toString();
    }

    /**
     * @param Zombie $zombie
     */
    public function setZombie($zombie)
    {
        $this->zombie = $zombie;
    }

    public function game(Resistant $resistant, Zombie $zombie)
    {
            echo "<br>"."Le combat commence"."<br>";

            while (!($resistant->getHp() <=0) or $zombie->getHp() <= 0)
            {
                $degats = $resistant->dommage();
                echo "Le joueur inflige ".$degats."pts de dégats au zombie"."<br>";
                $zombie->setHp($zombie->getHp() - $degats);
                echo "HP zombie : ".$zombie->getHp()."<br>";

                if ($zombie->getHp() <= 0)
                {
                    echo "Le zombie est mort";
                    break;
                }

                $degatsZombie= $zombie->getDegats();
                echo "Le zombie inflige ".$degatsZombie." pts de dégats au joueur"."<br>";
                $resistant->setHp($resistant->getHp() - $degatsZombie);
                echo "HP joueur : ".$resistant->getHp()."<br>";

                if ($resistant->getHp() <=0)
                {
                    echo "Le joueur est mort";
                    break;
                }

            }
    }




}