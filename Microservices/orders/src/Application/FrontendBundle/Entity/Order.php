<?php

namespace Application\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="ORDERS")
 */
class Order
{
    /**
     * @ORM\Id
     * @ORM\Column(type="smallint")
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="id_seq", initialValue=1, allocationSize=100)
     */
    private $id;

    /**
     * @ORM\Column(name="customer_name", type="string", length=50)
     */
    private $customerName;

    /**
     * @ORM\Column(name="car_make", type="string", length=50)
     */
    private $carMake;

    /**
     * @ORM\Column(name="car_model", type="string", length=50)
     */
    private $carModel;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set customerName
     *
     * @param string $customerName
     *
     * @return Order
     */
    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;

        return $this;
    }

    /**
     * Get customerName
     *
     * @return string
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * Set carMake
     *
     * @param string $carMake
     *
     * @return Order
     */
    public function setCarMake($carMake)
    {
        $this->carMake = $carMake;

        return $this;
    }

    /**
     * Get carMake
     *
     * @return string
     */
    public function getCarMake()
    {
        return $this->carMake;
    }

    /**
     * Set carModel
     *
     * @param string $carModel
     *
     * @return Order
     */
    public function setCarModel($carModel)
    {
        $this->carModel = $carModel;

        return $this;
    }

    /**
     * Get carModel
     *
     * @return string
     */
    public function getCarModel()
    {
        return $this->carModel;
    }
}
