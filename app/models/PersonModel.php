<?php

namespace App\Models;

/**
 * Class PersonModel
 * @package App\Models
 */
class PersonModel extends CoreModel
{

    /** @var string */
    private $_lastname;
    /** @var string */
    private $_firstname;
    /** @var string */
    private $_phone_number;

    /**
     * PersonModel constructor.
     * @param array $params
     */
    public function __construct(array $params){
        parent::__construct($params);
    }

    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->_lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname($lastname)
    {
        $this->_lastname = $lastname;
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->_firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname($firstname)
    {
        $this->_firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->_phone_number;
    }

    /**
     * @param string $phone_number
     */
    public function setPhoneNumber($phone_number)
    {
        $this->_phone_number = $phone_number;
    }




}