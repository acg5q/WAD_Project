<?php

/*
 * PHP SimpleXML
 * Loading a XML from a file, adding new elements and editing elements
 */
//get author from form
$names = $_POST["name1"];
$price = $_POST["price"];
$description = $_POST["description"];
$grade = $_POST["grade"];
echo $name;
echo $price;
if (file_exists('phones.xml')) {
    //loads the xml and returns a simplexml object
    $xml = simplexml_load_file('phones.xml');

    //transforming the object in xml format
    $xmlFormat = $xml->asXML();
    //displaying the element in proper format
    echo '<u><b>This is the xml code from phones.xml:</b></u>
     <br /><br />
     <pre>' . htmlentities($xmlFormat, ENT_COMPAT | ENT_HTML401, "ISO-8859-1") . '</pre><br /><br />';

    //adding new child to the xml
    $newChild = $xml->addChild('model');
     $newChild->addChild('name1', $names);
    $newChild->addChild('price', $price);
    $newChild->addChild('description', $description);
    $newChild->addChild('grade', $grade);
  
    //transforming the object in xml format
    $xmlFormat = $xml->asXML();
    //displaying the element in proper format
    echo '<u><b>This is the xml code from phones.xml with new elements added:</b></u>
     <br /><br />
     <pre>' . htmlentities($xmlFormat, ENT_COMPAT | ENT_HTML401, "ISO-8859-1") . '</pre>';

   
    //displaying the element in proper format
    echo '<br /><u><b>This is the xml code from phones.xml with all genre changed:</b></u>
     <br /><br />
     <pre>' . htmlentities($xml->asXML(), ENT_COMPAT | ENT_HTML401, "ISO-8859-1") . '</pre>';
} else {
    exit('Failed to open phones.xml.');
}
    file_put_contents('phones.xml', $xml->asXML());
?>
