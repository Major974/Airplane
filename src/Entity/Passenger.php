<?php

namespace App\Entity;

use Doctrine\ORM\EntityRepository;
use App\Entity\Client;

class Passenger extends client
{
   private int $Id_Passenger;

   private string $Lastname;

   private string $Firstname;

   private int $Passport;

   public function __construct(int $Id_passenger, string $Lastname, string $Firstname, int $Passport , int $Client_id, int $Payment)
   {
      parent::__construct($Client_id, $Payment);
       $this->id_passenger = $Id_passenger;
       $this->lastname = $Lastname;
       $this->firstname = $Firstname;
       $this->passport = $Passport;
   }

   /**
    * Get the value of Id_Passenger
    *
    * @return int
    */
   public function getIdPassenger(): int
   {
      return $this->Id_Passenger;
   }

   /**
    * Set the value of Id_Passenger
    *
    * @param int $Id_Passenger
    *
    * @return self
    */
   public function setIdPassenger(int $Id_Passenger): self
   {
      $this->Id_Passenger = $Id_Passenger;

      return $this;
   }

   /**
    * Get the value of Lastname
    *
    * @return string
    */
   public function getLastname(): string
   {
      return $this->Lastname;
   }

   /**
    * Set the value of Lastname
    *
    * @param string $Lastname
    *
    * @return self
    */
   public function setLastname(string $Lastname): self
   {
      $this->Lastname = $Lastname;

      return $this;
   }

   /**
    * Get the value of Firstname
    *
    * @return string
    */
   public function getFirstname(): string
   {
      return $this->Firstname;
   }

   /**
    * Set the value of Firstname
    *
    * @param string $Firstname
    *
    * @return self
    */
   public function setFirstname(string $Firstname): self
   {
      $this->Firstname = $Firstname;

      return $this;
   }

   /**
    * Get the value of Passport
    *
    * @return int
    */
   public function getPassport(): int
   {
      return $this->Passport;
   }

   /**
    * Set the value of Passport
    *
    * @param int $Passport
    *
    * @return self
    */
   public function setPassport(int $Passport): self
   {
      $this->Passport = $Passport;

      return $this;
   }
}