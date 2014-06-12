<?php

namespace Vushop\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 */
class Image
{
    /**
     * @var integer
     */
    private $imageId;

    /**
     * @var string
     */
    private $imageName;

    /**
     * @var string
     */
    private $imageUrl;

    /**
     * @var integer
     */
    private $productId;

    /**
     * @var boolean
     */
    private $status;


    /**
     * Get imageId
     *
     * @return integer 
     */
    public function getImageId()
    {
        return $this->imageId;
    }

    /**
     * Set imageName
     *
     * @param string $imageName
     * @return Image
     */
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;

        return $this;
    }

    /**
     * Get imageName
     *
     * @return string 
     */
    public function getImageName()
    {
        return $this->imageName;
    }

    /**
     * Set imageUrl
     *
     * @param string $imageUrl
     * @return Image
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    /**
     * Get imageUrl
     *
     * @return string 
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * Set productId
     *
     * @param integer $productId
     * @return Image
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

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
     * Set status
     *
     * @param boolean $status
     * @return Image
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
}
