<?php

namespace App\Entity;
use app\Entity\Passenger;
use Doctrine\ORM\EntityRepository;

class Tickets extends Passenger
{
   private int $id_ticket;

   private bool $Luggage_supplement;

   public function __construct(int $id_ticket, bool $Luggage_supplement,int $Id_passenger, string $Lastname, string $Firstname, int $Passport , int $Client_id, int $Payment)
   {
      parent::__construct($Id_passenger, $Lastname, $Firstname, $Passport, $Client_id, $Payment);
       $this->id_ticket = $id_ticket;
       $this->Luggage_supplement = $Luggage_supplement;
   }

   /**
    * Get the value of Luggage_supplement
    *
    * @return bool
    */
   public function getLuggageSupplement(): bool
   {
      return $this->Luggage_supplement;
   }

   /**
    * Set the value of Luggage_supplement
    *
    * @param bool $Luggage_supplement
    *
    * @return self
    */
   public function setLuggageSupplement(bool $Luggage_supplement): self
   {
      $this->Luggage_supplement = $Luggage_supplement;

      return $this;
   }

   /**
    * Get the value of id_ticket
    *
    * @return int
    */
   public function getIdTicket(): int
   {
      return $this->id_ticket;
   }

   /**
    * Set the value of id_ticket
    *
    * @param int $id_ticket
    *
    * @return self
    */
   public function setIdTicket(int $id_ticket): self
   {
      $this->id_ticket = $id_ticket;

      return $this;
   }
}