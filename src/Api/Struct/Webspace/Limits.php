<?php
// Copyright 1999-2021. Plesk International GmbH.

namespace PleskX\Api\Struct\Webspace;

use PleskX\Api\Struct;

class Limits extends Struct
{
    public string $overuse;
    public array $limits;

    public function __construct(\SimpleXMLElement $apiResponse)
    {
        $this->_initScalarProperties($apiResponse, ['overuse']);
        $this->limits = [];

        foreach ($apiResponse->limit as $limit) {
            $this->limits[(string) $limit->name] = new Limit($limit);
        }
    }
}
