<?php
$hulk = ["Waffenstärke" => 4, "Körpergröße" => 201, "Körperstärke" => 90, "Technologie" => 90, "Heldenrating" => 90];

print('<div style="background-color: red; width: 10%"><p>');
foreach ($hulk as $key => $value) {
    print('<div style="margin-bottom: 10px;"><p>');
    print('<span style="border: solid 1px white; background-color: red; color: white;">'."$key: $value".'</span>');    
    print('</p></div>');
}
print('</p></div>');