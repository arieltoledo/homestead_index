sudo<?php

require_once __DIR__ . '/vendor/autoload.php';

//Loading Yaml parser package

use Symfony\Component\Yaml\Yaml;

echo "Homestead Projects";

$homesteadConfigs = Yaml::parseFile('Homestead.yaml');

$sites = $homesteadConfigs['sites'];

foreach ($sites as $site) {
   echo '<ul>' . '<li>' . '<a target="_blank" href="http://' . $site['map']  . '">' . $site['map']   .  '</a>' . '</li></ul>';
}

?>