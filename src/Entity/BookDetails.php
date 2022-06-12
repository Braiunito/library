<?php

namespace App\Entity;

use App\Entity\SuppliersDetails;
use Doctrine\ORM\Mapping as ORM;

/**
 * BookDetails
 *
 * @ORM\Table(name="BOOK_DETAILS", indexes={@ORM\Index(name="cts41", columns={"SUPPLIER_ID"})})
 * @ORM\Entity
 */
class BookDetails
{
    /**
     * @var string
     *
     * @ORM\Column(name="BOOK_CODE", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $bookCode;

    /**
     * @var string
     *
     * @ORM\Column(name="BOOK_TITLE", type="string", length=50, nullable=false)
     */
    private $bookTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="CATEGORY", type="string", length=15, nullable=false)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="AUTHOR", type="string", length=30, nullable=false)
     */
    private $author;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PUBLICATION", type="string", length=30, nullable=true)
     */
    private $publication;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="PUBLISH_DATE", type="date", nullable=true)
     */
    private $publishDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="BOOK_EDITION", type="integer", nullable=true)
     */
    private $bookEdition;

    /**
     * @var string
     *
     * @ORM\Column(name="PRICE", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $price;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RACK_NUM", type="string", length=3, nullable=true)
     */
    private $rackNum;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_ARRIVAL", type="date", nullable=false)
     */
    private $dateArrival;

    /**
     * @var SuppliersDetails
     *
     * @ORM\ManyToOne(targetEntity="SuppliersDetails")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="SUPPLIER_ID", referencedColumnName="SUPPLIER_ID")
     * })
     */
    private $supplier;

    public function getBookCode(): ?string
    {
        return $this->bookCode;
    }

    public function getBookTitle(): ?string
    {
        return $this->bookTitle;
    }

    public function setBookTitle(string $bookTitle): self
    {
        $this->bookTitle = $bookTitle;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getPublication(): ?string
    {
        return $this->publication;
    }

    public function setPublication(?string $publication): self
    {
        $this->publication = $publication;

        return $this;
    }

    public function getPublishDate(): ?\DateTimeInterface
    {
        return $this->publishDate;
    }

    public function setPublishDate(?\DateTimeInterface $publishDate): self
    {
        $this->publishDate = $publishDate;

        return $this;
    }

    public function getBookEdition(): ?int
    {
        return $this->bookEdition;
    }

    public function setBookEdition(?int $bookEdition): self
    {
        $this->bookEdition = $bookEdition;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(string $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getRackNum(): ?string
    {
        return $this->rackNum;
    }

    public function setRackNum(?string $rackNum): self
    {
        $this->rackNum = $rackNum;

        return $this;
    }

    public function getDateArrival(): ?\DateTimeInterface
    {
        return $this->dateArrival;
    }

    public function setDateArrival(\DateTimeInterface $dateArrival): self
    {
        $this->dateArrival = $dateArrival;

        return $this;
    }

    public function getSupplier(): ?SuppliersDetails
    {
        return $this->supplier;
    }

    public function setSupplier(?SuppliersDetails $supplier): self
    {
        $this->supplier = $supplier;

        return $this;
    }


}
