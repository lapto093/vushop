<?php

namespace Vushop\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 */
class Product
{
    /**
     * @var integer
     */
    private $productId;

    /**
     * @var string
     */
    private $productName;

    /**
     * @var integer
     */
    private $categoryId;

    /**
     * @var string
     */
    private $price;

    /**
     * @var string
     */
    private $description;

    /**
     * @var boolean
     */
    private $status;

    /**
     * @var boolean
     */
    private $isNew;

    /**
     * @var boolean
     */
    private $mostSell;

    /**
     * @var \DateTime
     */
    private $createdDate;

    /**
     * @var \DateTime
     */
    private $updatedDate;


    /**
     * Get productId
     *
     * @return integer 
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set productName
     *
     * @param string $productName
     * @return Product
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;

        return $this;
    }

    /**
     * Get productName
     *
     * @return string 
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Set categoryId
     *
     * @param integer $categoryId
     * @return Product
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return integer 
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Product
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set isNew
     *
     * @param boolean $isNew
     * @return Product
     */
    public function setIsNew($isNew)
    {
        $this->isNew = $isNew;

        return $this;
    }

    /**
     * Get isNew
     *
     * @return boolean 
     */
    public function getIsNew()
    {
        return $this->isNew;
    }

    /**
     * Set mostSell
     *
     * @param boolean $mostSell
     * @return Product
     */
    public function setMostSell($mostSell)
    {
        $this->mostSell = $mostSell;

        return $this;
    }

    /**
     * Get mostSell
     *
     * @return boolean 
     */
    public function getMostSell()
    {
        return $this->mostSell;
    }

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return Product
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime 
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Set updatedDate
     *
     * @param \DateTime $updatedDate
     * @return Product
     */
    public function setUpdatedDate($updatedDate)
    {
        $this->updatedDate = $updatedDate;

        return $this;
    }

    /**
     * Get updatedDate
     *
     * @return \DateTime 
     */
    public function getUpdatedDate()
    {
        return $this->updatedDate;
    }
}
