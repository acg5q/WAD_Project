<?php

/*
 * PHP SimpleXML
 * Loading a XML from a file, adding new elements and editing elements
 */
//get author from form
$name = $_POST["name"];
$price = $_POST["price"];
$desciption = $_POST["description"];
$grade = $_POST["grade"];

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
    $newChild = $xml->addChild('phones');
    $newChild->addChild('name', $name);
    $newChild->addChild('price', $price);
    $newChild->addChild('description', $desciption);
    $newChild->addChild('grade', $grade);
  
   

   
} else {
    exit('Failed to open phones.xml.');
}
    file_put_contents('https://ide.c9.io/garethduffy/xmlforproject/xml/phones.xml', $xml->asXML());
?>


 //changing the nodes values
    //in this case we are changing the value 
    //of all children called <name>
    foreach ($xml->children() as $child)
        $child->genre = "CHANGED";
    //displaying the element in proper format
    echo '<br /><u><b>This is the xml code from books.xml with all genre changed:</b></u>
     <br /><br />
     <pre>' . htmlentities($xml->asXML(), ENT_COMPAT | ENT_HTML401, "ISO-8859-1") . '</pre>';