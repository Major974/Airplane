<?php

namespace App\Entity;

use Doctrine\ORM\EntityRepository;

final class client
{
    private int $Client_id;

    private int $Payment;

    public function __construct(int $Client_id, int $Payment)
    {
        $this->client_id = $Client_id;
        $this->payment = $Payment;
    }
   

    /**
     * Get the value of Payment
     *
     * @return int
     */
    public function getPayment(): int
    {
        return $this->Payment;
    }

    /**
     * Set the value of Payment
     *
     * @param int $Payment
     *
     * @return self
     */
    public function setPayment(int $Payment): self
    {
        $this->Payment = $Payment;

        return $this;
    }

    /**
     * Get the value of Client_Id
     *
     * @return int
     */
    public function getClientid(): int
    {
        return $this->Client_id;
    }

    /**
     * Set the value of Client_id
     *
     * @param int $Client_id
     *
     * @return self
     */
    public function setClientid(int $Client_id): self
    {
        $this->Client_id = $Client_id;

        return $this;
    }
}