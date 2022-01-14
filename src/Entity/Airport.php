<?php

namespace App\Entity;

use Doctrine\ORM\EntityRepository;

class Airport
{
   private int $id;

   private int $Emplacement;

   private string $escale;

   public function __construct(int $Emplacement, string $escale)
   {

    $this->Emplacement = $Emplacement;
    $this->escale = $escale;

   }


   /**
    * Get the value of Emplacement
    *
    * @return int
    */
   public function getEmplacement(): int
   {
      return $this->Emplacement;
   }

   /**
    * Set the value of Emplacement
    *
    * @param int $Emplacement
    *
    * @return self
    */
   public function setEmplacement(int $Emplacement): self
   {
      $this->Emplacement = $Emplacement;

      return $this;
   }

   /**
    * Get the value of escale
    *
    * @return string
    */
   public function getEscale(): string
   {
      return $this->escale;
   }

   /**
    * Set the value of escale
    *
    * @param string $escale
    *
    * @return self
    */
   public function setEscale(string $escale): self
   {
      $this->escale = $escale;

      return $this;
   }
}