<?php
$xmlDoc=new DOMDocument();
$xmlDoc->load("../sitesearch.xml");

$x=$xmlDoc->getElementsByTagName('link');

//uzmi q kao parametar iz URL adrese
$q=$_GET["q"];

//pogledaj da li je vrednost unosa veca od nule
if (strlen($q)>0)
{
$hint="";
for($i=0; $i<($x->length); $i++)
  {
  $y=$x->item($i)->getElementsByTagName('title');
  $z=$x->item($i)->getElementsByTagName('url');
  if ($y->item(0)->nodeType==1)
    {
    //nadji linkove koji se poklapaju
    if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$q))
      {
      if ($hint=="")
        {
        $hint="<a href='" . 
        $z->item(0)->childNodes->item(0)->nodeValue . 
        "'>" . 
        $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
        }
      else
        {
        $hint=$hint . "<br /><a href='" . 
        $z->item(0)->childNodes->item(0)->nodeValue . 
        "''>" . 
        $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
        }
      }
    }
  }
}


if ($hint=="")
  {
  $response="Nema predloga";
  }
else
  {
  $response=$hint;
  }

//output 
echo $response;
?>
