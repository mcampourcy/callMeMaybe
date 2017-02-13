<?php

namespace App\Models;

/**
 * Class CoreModel
 * @package App\Models
 */
class CoreModel
{

    /**
     * Model constructor
     * @param array $params
     */
    public function __construct($params = [])
    {
        if (!empty($params)) {
            $this->hydrate($params);
        }
    }

    /**
     * Hydrator
     * @param array $params
     */
    public function hydrate($params = [])
    {
        foreach ($params as $method => $value) {
            $setter = "set" . ucfirst($method);
            if (method_exists($this, $setter)) {
                $this->$setter($value);
            }
        }
    }
}