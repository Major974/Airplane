<?php

namespace App\Entity;
use Doctrine\ORM\EntityRepository;

trait pays
{
    private string $pays;

    public function __construct(string $pays)
    {
        $this->pays = $pays;
    }
}