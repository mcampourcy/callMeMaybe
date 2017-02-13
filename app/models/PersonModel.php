<?php

namespace App\Models;

/**
 * Class PersonModel
 * @package App\Models
 */
class PersonModel extends CoreModel
{

    /** @var int */
    private $_id;
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
     * @return int
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        if(is_numeric($id)) {
            $this->_id = $id;
        } else {
            throw new \InvalidArgumentException("L'id doit etre un nombre");
        }
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
        if(is_string($lastname) && strlen($lastname) > 0) {
            $this->_lastname = htmlspecialchars(trim($lastname));
        } else {
            throw new \InvalidArgumentException("Le champ doit etre du texte");
        }
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
        if(is_string($firstname) && strlen($firstname) > 0) {
            $this->_firstname = htmlspecialchars(trim($firstname));
        } else {
            throw new \InvalidArgumentException("Le champ doit etre du texte");
        }
    }

    /**
     * @return string
     */
    public function getPhone_number()
    {
        return $this->_phone_number;
    }

    /**
     * @param string $phone_number
     */
    public function setPhone_number($phone_number)
    {
        if(is_string($phone_number) && strlen($phone_number) > 0) {
            $this->_phone_number = htmlspecialchars(trim($phone_number));
        } else {
            throw new \InvalidArgumentException("Le champ doit etre du texte");
        }
    }




}