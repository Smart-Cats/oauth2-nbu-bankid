<?php

namespace TheRezor\OAuth2\Client\Provider;

use League\OAuth2\Client\Provider\ResourceOwnerInterface;

class BankIDResourceOwner implements ResourceOwnerInterface
{
    /**
     * Raw response
     *
     * @var array
     */
    protected $response;

    /**
     * Creates new resource owner.
     *
     * @param  array  $response
     */
    public function __construct(array $response = [])
    {
        $this->response = $response;
    }

    /**
     * Get resource owner id
     *
     * @return string
     */
    public function getId()
    {
        return $this->response['memberId'];
    }

    /**
     * First name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->response['data']['firstName'] ?? null;
    }

    /**
     * Middle name
     *
     * @return string
     */
    public function getMiddleName()
    {
        return $this->response['data']['middleName'] ?? null;
    }

    /**
     * Last name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->response['data']['lastName'] ?? null;
    }

    /**
     * Phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->response['data']['phone'] ?? null;
    }

    /**
     * Inn
     *
     * @return string
     */
    public function getInn()
    {
        return $this->response['data']['inn'] ?? null;
    }

    /**
     * Birth day
     *
     * @return string
     */
    public function getBirthDay()
    {
        return $this->response['data']['birthDay'] ?? null;
    }

    /**
     * Sex: M|F
     *
     * @return string
     */
    public function getSex()
    {
        return $this->response['data']['sex'] ?? null;
    }

    /**
     * Scans
     *
     * @return array
     */
    public function getScans()
    {
        return $this->response['data']['scans'] ?? [];
    }

    /**
     * Addresses
     *
     * @return array
     */
    public function getAddresses()
    {
        return $this->response['data']['addresses'] ?? [];
    }

    /**
     * Documents
     *
     * @return array
     */
    public function getDocuments()
    {
        return $this->response['data']['documents'] ?? [];
    }

    /**
     * Return all of the owner details available as an array.
     *
     * @return array
     */
    public function toArray()
    {
        return $this->response;
    }
}
