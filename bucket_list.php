<?php
echo "> How many things do you want to add to your bucket list?" . PHP_EOL;
$aantal = readline("> ");
$totaal = 1;
$things = array();
    if (is_numeric($aantal)) 
    {
        for ($tell = 1; $tell <= $aantal; $tell++) 
        { 
        echo "> What do you want to add to your bucket list?" . PHP_EOL;
        $addons = readline("> ");
        $things[] = $addons;
        }      
    }
else
{
    exit("> '" . $aantal . "' is not a number, try again.");
}
echo "> Your bucket list is:" . PHP_EOL;
foreach($things as $final) {
    echo "> " . $final . PHP_EOL;
 }