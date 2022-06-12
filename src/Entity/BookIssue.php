<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BookIssue
 *
 * @ORM\Table(name="BOOK_ISSUE", indexes={@ORM\Index(name="BookDetail", columns={"BOOK_CODE"}), @ORM\Index(name="Mem", columns={"MEMBER_ID"}), @ORM\Index(name="FineDetail", columns={"FINE_RANGE"})})
 * @ORM\Entity
 */
class BookIssue
{
    /**
     * @var int
     *
     * @ORM\Column(name="BOOK_ISSUE_NO", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $bookIssueNo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_ISSUE", type="date", nullable=false)
     */
    private $dateIssue;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_RETURN", type="date", nullable=false)
     */
    private $dateReturn;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATE_RETURNED", type="date", nullable=true)
     */
    private $dateReturned;

    /**
     * @var \BookDetails
     *
     * @ORM\ManyToOne(targetEntity="BookDetails")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="BOOK_CODE", referencedColumnName="BOOK_CODE")
     * })
     */
    private $bookCode;

    /**
     * @var \FineDetails
     *
     * @ORM\ManyToOne(targetEntity="FineDetails")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FINE_RANGE", referencedColumnName="FINE_RANGE")
     * })
     */
    private $fineRange;

    /**
     * @var \Members
     *
     * @ORM\ManyToOne(targetEntity="Members")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="MEMBER_ID", referencedColumnName="MEMBER_ID")
     * })
     */
    private $member;

    public function getBookIssueNo(): ?int
    {
        return $this->bookIssueNo;
    }

    public function getDateIssue(): ?\DateTimeInterface
    {
        return $this->dateIssue;
    }

    public function setDateIssue(\DateTimeInterface $dateIssue): self
    {
        $this->dateIssue = $dateIssue;

        return $this;
    }

    public function getDateReturn(): ?\DateTimeInterface
    {
        return $this->dateReturn;
    }

    public function setDateReturn(\DateTimeInterface $dateReturn): self
    {
        $this->dateReturn = $dateReturn;

        return $this;
    }

    public function getDateReturned(): ?\DateTimeInterface
    {
        return $this->dateReturned;
    }

    public function setDateReturned(?\DateTimeInterface $dateReturned): self
    {
        $this->dateReturned = $dateReturned;

        return $this;
    }

    public function getBookCode(): ?BookDetails
    {
        return $this->bookCode;
    }

    public function setBookCode(?BookDetails $bookCode): self
    {
        $this->bookCode = $bookCode;

        return $this;
    }

    public function getFineRange(): ?FineDetails
    {
        return $this->fineRange;
    }

    public function setFineRange(?FineDetails $fineRange): self
    {
        $this->fineRange = $fineRange;

        return $this;
    }

    public function getMember(): ?Members
    {
        return $this->member;
    }

    public function setMember(?Members $member): self
    {
        $this->member = $member;

        return $this;
    }


}
