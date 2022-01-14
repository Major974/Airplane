<?php

namespace App\Entity;

use Doctrine\ORM\EntityRepository;

final class Airplane
{
   private int $Id_plane;

   private int $capasity;

   public function __construct( int $Id_plane , int $capasity){

        $this->id_plane = $Id_plane;
        $this->capasity = $capasity;

    }

   /**
    * Get the value of Id_plane
    *
    * @return int
    */
   public function getIdPlane(): int
   {
      return $this->Id_plane;
   }

   /**
    * Set the value of Id_plane
    *
    * @param int $Id_plane
    *
    * @return self
    */
   public function setIdPlane(int $Id_plane): self
   {
      $this->Id_plane = $Id_plane;

      return $this;
   }

   /**
    * Get the value of capasity
    *
    * @return int
    */
   public function getCapasity(): int
   {
      return $this->capasity;
   }

   /**
    * Set the value of capasity
    *
    * @param int $capasity
    *
    * @return self
    */
   public function setCapasity(int $capasity): self
   {
      $this->capasity = $capasity;

      return $this;
   }
}