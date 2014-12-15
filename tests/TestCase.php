<?php
// Copyright 1999-2014. Parallels IP Holdings GmbH.

abstract class TestCase extends PHPUnit_Framework_TestCase
{

    /** @var PleskX\Api\Client */
    protected $_client;

    protected function setUp()
    {
        $host = getenv('REMOTE_HOST');
        $login = getenv('REMOTE_LOGIN');
        $password = getenv('REMOTE_PASSWORD');

        $this->_client = new PleskX\Api\Client($host);
        $this->_client->setCredentials($login, $password);
    }

}
