<?php

namespace App\Entity;

class voiture 
{
    protected ?int $id = null;
    protected string $marque;
    protected string $description;

    /** 
     * Get the value of id
    */
    public function getId(): ?int 
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(?int $id): self {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of marque
     */
    public function getMarque(): string {
        return $this->marque;
    }

    /**
     * Set the value of marque
     */
    public function setMarque(string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     */

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }
}