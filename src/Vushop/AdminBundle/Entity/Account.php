<?php

namespace Vushop\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Account
 */
class Account
{
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
    private $password;

    /**
     * @var string
     */
    private $shippingAddress;

    /**
     * @var \DateTime
     */
    private $createdDate;

    /**
     * @var \DateTime
     */
    private $updatedDate;


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
     * @return Account
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
     * Set password
     *
     * @param string $password
     * @return Account
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set shippingAddress
     *
     * @param string $shippingAddress
     * @return Account
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
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return Account
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
     * @return Account
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
