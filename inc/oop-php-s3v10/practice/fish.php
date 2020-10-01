<?php

class fish
{
    public $common_name;
    public $flavour;
    public $record_weight;

    
    public function __construct($name,$flavour,$record)
    {
        $this-> common_name = $name;
        $this-> flavour = $flavour;
        $this-> record_weight = $record;
    }
    public function getinfo()
    {
        return "A {$this->common_name} is an {$this->flavour} flavored fish. the word record weight is {$this->record_weight}.";
    }
}

$bass = new fish("largemount bass","excellent","22 pounds 5 ounces");
echo $bass->getinfo();

