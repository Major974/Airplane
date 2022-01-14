<?php

namespace App\Entity;

use Doctrine\ORM\EntityRepository;
use \DateTime;

class Fly
{
   
    private int $id_fly;

    private string $start_location;

    private string $escale;

    private string $location_arrival;

    private datetime $start_location_date;

    private datetime $ascale_date;

    private datetime $location_arrival_date;

    public function __construct(int $id_fly, string $start_location, string $escale, string $location_arrival, datetime $start_location_date, datetime $ascale_date, datetime $location_arrival_date)
    {
        $this->id_fly = $id_fly;
        $this->start_location = $start_location;
        $this->escale = $escale;
        $this->location_arrival = $location_arrival;
        $this->start_location_date = $start_location_date;
        $this->ascale_date = $ascale_date;
        $this->location_arrival_date = $location_arrival_date;
    }

    /**
     * Get the value of id_fly
     *
     * @return int
     */
    public function getIdFly(): int
    {
        return $this->id_fly;
    }

    /**
     * Set the value of id_fly
     *
     * @param int $id_fly
     *
     * @return self
     */
    public function setIdFly(int $id_fly): self
    {
        $this->id_fly = $id_fly;

        return $this;
    }

    /**
     * Get the value of start_location
     *
     * @return string
     */
    public function getStartLocation(): string
    {
        return $this->start_location;
    }

    /**
     * Set the value of start_location
     *
     * @param string $start_location
     *
     * @return self
     */
    public function setStartLocation(string $start_location): self
    {
        $this->start_location = $start_location;

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

    /**
     * Get the value of location_arrival
     *
     * @return string
     */
    public function getLocationArrival(): string
    {
        return $this->location_arrival;
    }

    /**
     * Set the value of location_arrival
     *
     * @param string $location_arrival
     *
     * @return self
     */
    public function setLocationArrival(string $location_arrival): self
    {
        $this->location_arrival = $location_arrival;

        return $this;
    }

    /**
     * Get the value of start_location_date
     *
     * @return datetime
     */
    public function getStartLocationDate(): datetime
    {
        return $this->start_location_date;
    }

    /**
     * Set the value of start_location_date
     *
     * @param datetime $start_location_date
     *
     * @return self
     */
    public function setStartLocationDate(datetime $start_location_date): self
    {
        $this->start_location_date = $start_location_date;

        return $this;
    }

    /**
     * Get the value of ascale_date
     *
     * @return datetime
     */
    public function getAscaleDate(): datetime
    {
        return $this->ascale_date;
    }

    /**
     * Set the value of ascale_date
     *
     * @param datetime $ascale_date
     *
     * @return self
     */
    public function setAscaleDate(datetime $ascale_date): self
    {
        $this->ascale_date = $ascale_date;

        return $this;
    }

    /**
     * Get the value of location_arrival_date
     *
     * @return datetime
     */
    public function getLocationArrivalDate(): datetime
    {
        return $this->location_arrival_date;
    }

    /**
     * Set the value of location_arrival_date
     *
     * @param datetime $location_arrival_date
     *
     * @return self
     */
    public function setLocationArrivalDate(datetime $location_arrival_date): self
    {
        $this->location_arrival_date = $location_arrival_date;

        return $this;
    }
}