<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Members
 *
 * @ORM\Table(name="MEMBERS")
 * @ORM\Entity
 */
class Members
{
    /**
     * @var string
     *
     * @ORM\Column(name="MEMBER_ID", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $memberId;

    /**
     * @var string
     *
     * @ORM\Column(name="MEMBER_NAME", type="string", length=30, nullable=false)
     */
    private $memberName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CITY", type="string", length=20, nullable=true)
     */
    private $city;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_REGISTER", type="date", nullable=false)
     */
    private $dateRegister;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATE_EXPIRE", type="date", nullable=true)
     */
    private $dateExpire;

    /**
     * @var string
     *
     * @ORM\Column(name="MEMBERSHIP_STATUS", type="string", length=15, nullable=false)
     */
    private $membershipStatus;

    public function getMemberId(): ?string
    {
        return $this->memberId;
    }

    public function getMemberName(): ?string
    {
        return $this->memberName;
    }

    public function setMemberName(string $memberName): self
    {
        $this->memberName = $memberName;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getDateRegister(): ?\DateTimeInterface
    {
        return $this->dateRegister;
    }

    public function setDateRegister(\DateTimeInterface $dateRegister): self
    {
        $this->dateRegister = $dateRegister;

        return $this;
    }

    public function getDateExpire(): ?\DateTimeInterface
    {
        return $this->dateExpire;
    }

    public function setDateExpire(?\DateTimeInterface $dateExpire): self
    {
        $this->dateExpire = $dateExpire;

        return $this;
    }

    public function getMembershipStatus(): ?string
    {
        return $this->membershipStatus;
    }

    public function setMembershipStatus(string $membershipStatus): self
    {
        $this->membershipStatus = $membershipStatus;

        return $this;
    }


}
