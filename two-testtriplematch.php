<?php
$string = "\"Citations:Rojdev, Christina, and Mary Jane O'Rourke, et al., &quot;In-situ strain analysis of potential habitat composites exposed to a simulated long-term lunar radiation exposure,&quot;&nbsp;Radiation Physics and Chemistry 84 (2013): 235&ndash;241. PDFDenisov, A. N., and N. V. Kuznetsov, et al., &quot;On the problem of lunar radiation environment,&quot; Cosmic Research, 2010, 48.6 (2010): 509 - 516. PDFBenaroya., H., Bernold, L., &quot;Engineering of lunar bases,&quot;&nbsp;Acta Astronautica, 62 (2008) 277 &ndash; 299Benaroya - 2008 - Engineering of lunar bases.pdfRojdev, Christina, and Mary Jane O'Rourke, et al., &quot;In-situ strain analysis of potential habitat composites exposed to a simulated long-term lunar radiation exposure,&quot;\u00A0Radiation Physics and Chemistry 84 (2013): 235\u2013241. PDF\u00A0\u00A0Denisov, A. N., and N. V. Kuznetsov, et al., &quot;On the problem of lunar radiation environment,&quot; Cosmic Research, 2010, 48.6 (2010): 509 - 516. PDF\"\n\n                \n        \n    \n       ";
//$string = "Citations:Rojdev, Christina, and Mary Jane O'Rourke, et al., &quot;In-situ strain analysis of potential habitat composites exposed to a simulated long-term lunar radiation exposure,&quot;&nbsp;Radiation Physics and";
//$string = "Citations: Ri.ojdevi, Christina&two-three; \hello (2013)";
$regex = '/[0-9a-zA-Z:\'"\\\.;&, \(\)-]*/';
$firstmatch = preg_match($regex,$string,$matches);
print_r($matches);

?>
