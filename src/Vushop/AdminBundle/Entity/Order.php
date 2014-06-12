<?php

namespace Vushop\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Order
 */
class Order
{
    /**
     * @var integer
     */
    private $orderId;

    /**
     * @var integer
     */
    private $accountId;

    /**
     * @var string
     */
    private $accountName;

    /**
     * @var string
     */
    private $shippingAddress;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $createdDate;

    /**
     * @var \DateTime
     */
    private $updatedDate;

    /**
     * @var string
     */
    private $orderCode;


    /**
     * Get orderId
     *
     * @return integer 
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set accountId
     *
     * @param integer $accountId
     * @return Order
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * Get accountId
     *
     * @return integer 
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * Set accountName
     *
     * @param string $accountName
     * @return Order
     */
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;

        return $this;
    }

    /**
     * Get accountName
     *
     * @return string 
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * Set shippingAddress
     *
     * @param string $shippingAddress
     * @return Order
     */
    public function setShippingAddress($shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;

        return $this;
    }

    /**
     * Get shippingAddress
     *
     * @return string 
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Order
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
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return Order
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
     * @return Order
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

    /**
     * Set orderCode
     *
     * @param string $orderCode
     * @return Order
     */
    public function setOrderCode($orderCode)
    {
        $this->orderCode = $orderCode;

        return $this;
    }

    /**
     * Get orderCode
     *
     * @return string 
     */
    public function getOrderCode()
    {
        return $this->orderCode;
    }
}
