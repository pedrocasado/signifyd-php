<?php

class Seller extends SignifydModel
{
    public $name;
    public $domain;
    public $shipFromAddress; // Address
    public $corporateAddress;

    public function __construct()
    {
        $validator = array();
        $validator["name"] = array("type" => "string", "value" => null);
        $validator["domain"] = array ("type" => "string", "value" => null);
        $validator["shipFromAddress"] = array("type" => "SignifydModel", "value" => array(
            "subtype" => "Address"
        ));
        $validator["corporateAddress"] = array("type" => "SignifydModel", "value" => array(
            "subtype" => "Address"
        ));

        $this->validationInfo = $validator;
    }
}