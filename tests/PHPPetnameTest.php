<?php

namespace LCherone;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Assert;

class PHPPetnameTest extends TestCase
{

    /**
     * Pulls out current words for testing
     */
    public function setUp()
    {
        $this->adverbs    = Assert::readAttribute(new PHPPetname(), 'adverbs');
        $this->adjectives = Assert::readAttribute(new PHPPetname(), 'adjectives');
        $this->names      = Assert::readAttribute(new PHPPetname(), 'names');
    }

    /**
     * @covers \LCherone\PHPPetname::Name
     * @covers \LCherone\PHPPetname::Generate
     */
    public function testGenerateOneIsName()
    {
        $result = PHPPetname::Generate(1);
        
        $this->assertTrue(in_array($result, $this->names));
    }
    
    /**
     * @covers \LCherone\PHPPetname::Adjective
     * @covers \LCherone\PHPPetname::Name
     * @covers \LCherone\PHPPetname::Generate
     */
    public function testGenerateTwoIsAdjectiveName()
    {
        $result = PHPPetname::Generate(2);
        
        $result = explode('-', $result);
        
        // count we got 2
        $this->assertTrue(count($result) == 2);
        
        // check first is adjective
        $this->assertTrue(in_array($result[0], $this->adjectives));
        
        // check second is name
        $this->assertTrue(in_array($result[1], $this->names));
    }
    
    /**
     * @covers \LCherone\PHPPetname::Adverb
     * @covers \LCherone\PHPPetname::Adjective
     * @covers \LCherone\PHPPetname::Name
     * @covers \LCherone\PHPPetname::Generate
     */
    public function testGenerateThreeIsAdverbAdjectiveName()
    {
        $result = PHPPetname::Generate(3);
        
        $result = explode('-', $result);
        
        // count we got 3
        $this->assertTrue(count($result) == 3);
        
        // check first is adverb
        $this->assertTrue(in_array($result[0], $this->adverbs));
        
        // check first is adjective
        $this->assertTrue(in_array($result[1], $this->adjectives));
        
        // check second is name
        $this->assertTrue(in_array($result[2], $this->names));
    }

}
