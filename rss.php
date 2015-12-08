 <?php

$file = 'rss.xml';
$fileone = 'phones.xml';

$rss = simplexml_load_file($file);
$data = simplexml_load_file($fileone);

//simple xml writes everything to one line. This is ok because it ignores white space and still parses the dom.
//The following commented was suggested to pretty print the xml but didn't work for us.


//$xml->preserveWhiteSpace = false;
//$xml->formatOutput = true;

//if this script was run before. Delete the old results.
foreach( $rss->channel->item as $deleter ){
    unset($rss->channel->item);
}

//for each home element, generate a rss item tag and appened to channel.

foreach( $data->{model} as $model ) {
        $rss->channel->addChild('item');
}

 $it = $rss->channel->item;
 
 
 //this lets me us a foreach while have the iterator reset
 $x = 0;  
         
           foreach( $data->{model} as $model ) {
            
            $it[$x]->addChild('name', $model->name1);
            $it[$x]->addChild('price', $model->price);
            $it[$x]->addChild('description', $model->description);
            $it[$x]->addChild('grade', $model->grade);
            $x++;
      
        }
//iterator resets
$x = 0;


//writeback the file
$rss->asXML($file);

/*$myfile = file_get_contents('rss.xml');



    header('Content-Type: application/download');
    header('Content-Disposition: attachment; filename="rss.xml"');
    header("Content-Length: " . filesize("rss.xml"));

    $fp = fopen("rss.xml", "r");
    fpassthru($fp);
    fclose($fp);
    */


$myfile = 'rss.xml';
/*
//file downloader. The stacktrace is a 'knownshipable'. We were unable to suppress the error as our c9 project does not a php.ini file.
if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($myfile).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($myfile));
    readfile($myfile);
    exit;
} */


echo $myfile;

?>