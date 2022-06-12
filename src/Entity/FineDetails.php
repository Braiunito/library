<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FineDetails
 *
 * @ORM\Table(name="FINE_DETAILS")
 * @ORM\Entity
 */
class FineDetails
{
    /**
     * @var string
     *
     * @ORM\Column(name="FINE_RANGE", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fineRange;

    /**
     * @var string
     *
     * @ORM\Column(name="FINE_AMOUNT", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $fineAmount;

    public function getFineRange(): ?string
    {
        return $this->fineRange;
    }

    public function getFineAmount(): ?string
    {
        return $this->fineAmount;
    }

    public function setFineAmount(string $fineAmount): self
    {
        $this->fineAmount = $fineAmount;

        return $this;
    }


}
