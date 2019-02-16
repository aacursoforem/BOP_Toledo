<?
// This is a template for a PHP scraper on morph.io (https://morph.io)
// including some code snippets below that you should find helpful

require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';
//

$months = array('01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12');

foreach ($months as $mes) {
// // Read in a page
 $page = 'https://bop.diputoledo.es/webEbop/ebopResumen.jsp?publication_date=17/'.$mes.'/2018&publication_date_to=17/'.$mes.'/2009
 $html = scraperwiki::scrape($page);
//
// // Find something on the page using css selectors
 $dom = new simple_html_dom();
 $dom->load($html);
 print_r($dom->find("h3.publisherBlock"));
 
}  // end foreach
 
//
// // Write out to the sqlite database using scraperwiki library
// scraperwiki::save_sqlite(array('name'), array('name' => 'susan', 'occupation' => 'software developer'));
//
// // An arbitrary query against the database
// scraperwiki::select("* from data where 'name'='peter'")

// You don't have to do things with the ScraperWiki library.
// You can use whatever libraries you want: https://morph.io/documentation/php
// All that matters is that your final data is written to an SQLite database
// called "data.sqlite" in the current working directory which has at least a table
// called "data".
?>
