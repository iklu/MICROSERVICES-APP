<?php

namespace ApiBundle\Entity;

/**
 * Service
 */
class Service
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $serviceId;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $serviceUrl;

    /**
     * @var string
     */
    private $sourceUrl;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set serviceId
     *
     * @param string $serviceId
     *
     * @return Service
     */
    public function setServiceId($serviceId)
    {
        $this->serviceId = $serviceId;

        return $this;
    }

    /**
     * Get serviceId
     *
     * @return string
     */
    public function getServiceId()
    {
        return $this->serviceId;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Service
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
     * Set serviceUrl
     *
     * @param string $serviceUrl
     *
     * @return Service
     */
    public function setServiceUrl($serviceUrl)
    {
        $this->serviceUrl = $serviceUrl;

        return $this;
    }

    /**
     * Get serviceUrl
     *
     * @return string
     */
    public function getServiceUrl()
    {
        return $this->serviceUrl;
    }

    /**
     * Set sourceUrl
     *
     * @param string $sourceUrl
     *
     * @return Service
     */
    public function setSourceUrl($sourceUrl)
    {
        $this->sourceUrl = $sourceUrl;

        return $this;
    }

    /**
     * Get sourceUrl
     *
     * @return string
     */
    public function getSourceUrl()
    {
        return $this->sourceUrl;
    }
}

