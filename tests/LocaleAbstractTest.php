<?php
// Copyright 1999-2021. Plesk International GmbH.

namespace PleskXTest;

class LocaleAbstractTest extends AbstractTestCase
{
    public function testGet()
    {
        $locales = static::$client->locale()->get();
        $this->assertGreaterThan(0, count($locales));

        $locale = $locales['en-US'];
        $this->assertEquals('en-US', $locale->id);
    }

    public function testGetById()
    {
        $locale = static::$client->locale()->get('en-US');
        $this->assertEquals('en-US', $locale->id);
    }
}