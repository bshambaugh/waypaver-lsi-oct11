Run in the shell:
/waypaver-lsi-oct11/scraper-four.php

php scraper-four.php > (output++) roadblocks-processed.ttl

run script with url for roadblocks:
http://lunarsettlementindex.org/display/LSI/Human+Health+Risk+of+Long-term+Low+Gravity
, ... , etc.

combine output from roadblocks into one file.
roadblocks-processed.ttl

repeat to create other files:
... roadblocks-processed.ttl
... specificsolutions-processed.ttl
... roadblock-categories-processed.ttl
... generalsolutions-processed.ttl

use rdf2rdf to convert roadblocks-processed.ttl to roadblocks-processed.nt
available at: http://www.l3s.de/~minack/rdf2rdf/

Run in the shell:
/waypaver-lsi-oct11/copy2-readfile-vartwo-finalthree.php

use as $inputfile: generalsolutions-processed.nt, roadblocks-processed.nt,
specificsolutions-processed.nt, roadblock-categories-processed.nt,
roadblocks-processed.nt
