<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SuppliersDetails
 *
 * @ORM\Table(name="SUPPLIERS_DETAILS")
 * @ORM\Entity
 */
class SuppliersDetails
{
    /**
     * @var string
     *
     * @ORM\Column(name="SUPPLIER_ID", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $supplierId;

    /**
     * @var string
     *
     * @ORM\Column(name="SUPPLIER_NAME", type="string", length=30, nullable=false)
     */
    private $supplierName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ADDRESS", type="string", length=50, nullable=true)
     */
    private $address;

    /**
     * @var int
     *
     * @ORM\Column(name="CONTACT", type="bigint", nullable=false)
     */
    private $contact;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL", type="string", length=15, nullable=false)
     */
    private $email;

    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }

    public function getSupplierName(): ?string
    {
        return $this->supplierName;
    }

    public function setSupplierName(string $supplierName): self
    {
        $this->supplierName = $supplierName;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getContact(): ?string
    {
        return $this->contact;
    }

    public function setContact(string $contact): self
    {
        $this->contact = $contact;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }


}
