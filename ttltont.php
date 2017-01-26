<?php
/**
 * Making a SPARQL SELECT query
 *
 * This example creates a new SPARQL client, pointing at the
 * dbpedia.org endpoint. It then makes a SELECT query that
 * returns all of the countries in DBpedia along with an
 * english label.
 *
 * Note how the namespace prefix declarations are automatically
 * added to the query.
 *
 * @package    EasyRdf
 * @copyright  Copyright (c) 2009-2013 Nicholas J Humfrey
 * @license    http://unlicense.org/
 */
set_include_path(get_include_path() . PATH_SEPARATOR . './easyrdf-0.9.0/lib/');
require_once "./easyrdf-0.9.0/lib/EasyRdf.php";
//  require_once "../html_tag_helpers.php";
// Setup some additional prefixes for the Drupal Site
EasyRdf_Namespace::set('socrata', 'http://www.socrata.com/rdf/terms#');
EasyRdf_Namespace::set('content', 'http://purl.org/rss/1.0/modules/content/');
EasyRdf_Namespace::set('dc', 'http://purl.org/dc/terms/');
EasyRdf_Namespace::set('foaf', 'http://xmlns.com/foaf/0.1/');
EasyRdf_Namespace::set('og', 'http://ogp.me/ns#');
EasyRdf_Namespace::set('ods', 'http://open-data-standards.github.com/2012/01/open-data-standards#');
EasyRdf_Namespace::set('geo', 'http://www.w3.org/2003/01/geo/wgs84_pos#');
EasyRdf_Namespace::set('rdfs', 'http://www.w3.org/2000/01/rdf-schema#');
EasyRdf_Namespace::set('sioc', 'http://rdfs.org/sioc/ns#');
EasyRdf_Namespace::set('dsbase', 'http://data.nasa.gov/resource/');
EasyRdf_Namespace::set('ds', 'http://data.nasa.gov/resource/gvk9-iz74/');
EasyRdf_Namespace::set('sioct', 'http://rdfs.org/sioc/types#');
EasyRdf_Namespace::set('skos', 'http://www.w3.org/2004/02/skos/core#');
EasyRdf_Namespace::set('xsd', 'http://www.w3.org/2001/XMLSchema#');
EasyRdf_Namespace::set('usps', 'http://www.w3.org/2000/10/swap/pim/usps#');
EasyRdf_Namespace::set('prov', 'http://www.w3.org/ns/prov#');
EasyRdf_Namespace::set('owl', 'http://www.w3.org/2002/07/owl#');
EasyRdf_Namespace::set('rdf', 'http://www.w3.org/1999/02/22-rdf-syntax-ns#');
EasyRdf_Namespace::set('rss', 'http://purl.org/rss/1.0/');
EasyRdf_Namespace::set('lsi', 'http://data.thespaceplan.com/ontologies/lsi#');
EasyRdf_Namespace::set('dcat', 'http://www.w3.org/ns/dcat#');

$graph = new EasyRdf_Graph();
$parsed = new EasyRdf_Parser_Turtle();
$serialized = new EasyRdf_Serialiser_Ntriples();
$filename = 'Lack-of-Knowledge-on-Resource-Locations.ttl';
$fp = fopen($filename,'rw');
$data = fread($fp, filesize($filename));
fclose($fp);

$baseUri = 'http://data.thespaceplan.com/ontologies/lsi#';
$format = 'turtle';

$result = $parsed->parse($graph,$data,$format,$baseUri); 

//EasyRdf_Parser::parseFile($filename,$format = null,$uri = null);
print_r($graph);


$resulttwo = $serialized->serialise($graph,'ntriples',$options = array()); 
print_r($graph);
//$datatwo = $graph->dump();
//echo $datatwo;
echo $resulttwo;
?>
