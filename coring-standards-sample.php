<?php

namespace Respect\CodingStandards;

use Respect\CodingStandards\SampleNamespace\AnotherSample;

/** Sample class to describe coding standards */
class Sample
{
    const A_SAMPLE_CONSTANT = 'val';
    
    /** @var Respect\AnotherPackage\SomeClass */
    public $barBaz;
    /** @var string */
    public $fooBar;
    /** @var mixed */
    protected $loremIpsum;
    
    public function __construct()
    {
        //constructors are not required to have DocComments.
    }
    
    /**
     * Just a sample function
     * 
     * @return boolean 
     */
    public function fooBarBaz(AnotherSample $sampleParam, $paramTwo)
    {
        if (false === $paramTwo)
            $sampleParam->fooBar();
            
        foreach ($sampleParam->listLoremIpsum() as $lipsumKey => $lipsumValue)
            $lipsumValue->doSomething();
            
        foreach ($fooBar as $baz)
            if ('ok' === (string) $baz->bat())
                return false;
            
        return true;
    }
    
    protected function something()
    {
        //protected and private methods are not required to have DocComments.
    }
    
}

