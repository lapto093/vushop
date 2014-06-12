<?php

namespace Vushop\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Slideshow
 */
class Slideshow
{
    /**
     * @var integer
     */
    private $slideshowId;

    /**
     * @var string
     */
    private $itemName;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $imageUrl;

    /**
     * @var string
     */
    private $url;

    /**
     * @var \DateTime
     */
    private $createdDate;

    /**
     * @var \DateTime
     */
    private $updatedDate;


    /**
     * Get slideshowId
     *
     * @return integer 
     */
    public function getSlideshowId()
    {
        return $this->slideshowId;
    }

    /**
     * Set itemName
     *
     * @param string $itemName
     * @return Slideshow
     */
    public function setItemName($itemName)
    {
        $this->itemName = $itemName;

        return $this;
    }

    /**
     * Get itemName
     *
     * @return string 
     */
    public function getItemName()
    {
        return $this->itemName;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Slideshow
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
     * Set imageUrl
     *
     * @param string $imageUrl
     * @return Slideshow
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
     * Set url
     *
     * @param string $url
     * @return Slideshow
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return Slideshow
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
     * @return Slideshow
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
