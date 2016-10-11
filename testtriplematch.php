<?php
$string = '<http://lunarsettlementindex.org/display/LSI/Unknown+Ideal+Habitat+Structure> <http://www.w3.org/2000/01/rdf-schema#comment> "Further research and development must be done in order to determine the ideal habitat structure for a humans to survive on the Moon." .';
$keyone = '<http://lunarsettlementindex.org/display/LSI/Unknown+Ideal+Habitat+Structure>';
$regexstringforcontainer = $keyone;
$pattern = preg_quote($regexstringforcontainer,'/');
$regex = '/^'.$pattern.' <[0-9A-Za-z:_\.\/#=+?-]*> (<[0-9A-Za-z:_\.\/#=+?-]*>|"[a-z ,A-z0-9-]*") ./';
$firstmatch = preg_match($regex,$string,$matches);
print_r($matches);
preg_match('/<[0-9A-Za-z:_\.\/#=+?-]*>/','<http://www.w3.org/2000/01/rdf-schema#comment>',$elf);
print_r($elf);
preg_match('/<[0-9A-Za-z:_\.\/#=+?-]*> (<[0-9A-Za-z:_\.\/#=+?-]*>|"[a-z ,A-z0-9-\.]*") ./','<http://www.w3.org/2000/01/rdf-schema#comment> "Further research and development must be done in order to determine the ideal habitat structure for a humans to survive on the Moon." .',$donk);
print_r($donk);
?>
