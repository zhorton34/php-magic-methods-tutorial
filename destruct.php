<?php

class Home
{
    public $lady;
    public $gentleman;

    public function __construct($lady, $gentleman)
    {
        $this->lady = $lady;
        $this->gentleman = $gentleman;

        echo "Welcome Home {$this->lady} & {$this->gentleman}!\n\n";
    }

    public function __destruct()
    {
        echo "You'll about to die {$this->lady} & {$this->gentleman}...guess it was a simulation after all \n";
    }
}

$home = new Home('Sarah', 'Tom');
$lake_house = new Home('Spicy Senorita', 'Surfer Cali Dude');

unset($home); // destroying or obliterating

sleep(5);

// application ends and then $lake_house destructor will execute

