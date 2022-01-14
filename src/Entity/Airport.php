<?php

namespace App\Entity;

use Doctrine\ORM\EntityRepository;

class Airport
{
   private int $id;

   private int $Emplacement;

   private string $name;

   public function __construct(int $Emplacement, string $name)
   {

    $this->Emplacement = $Emplacement;
    $this->name = $name;

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
    * Get the value of name
    *
    * @return string
    */
   public function getname(): string
   {
      return $this->name;
   }

   /**
    * Set the value of name
    *
    * @param string $name
    *
    * @return self
    */
   public function setname(string $name): self
   {
      $this->name = $name;

      return $this;
   }
}