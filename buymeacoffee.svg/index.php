<?PHP

//it is what it is
header('Content-type: image/svg+xml');

//defaults
$backgroundColor = "#808080";//grey
$color           = "#000000";//black
$coffee          = "#a52a2a";//brown
$border          = "#000000";//black
$borderWidth     = "0";//none

//get colors if specified
if(isset($_GET["backgroundcolor"]))
{
	$backgroundColor = "#" . $_GET["backgroundcolor"];
}
if(isset($_GET["color"]))
{
	$color = "#" . $_GET["color"];
}
if(isset($_GET["coffee"]))
{
	$coffee = "#" . $_GET["coffee"];
}
if(isset($_GET["border"]))
{
	$border = "#" . $_GET["border"];
}
if(isset($_GET["borderwidth"]))
{
	$borderWidth = $_GET["borderwidth"];
}

$xmlDoc = new DOMDocument();
$xmlDoc->load("button.svg");

$paths = $xmlDoc->documentElement->getElementsByTagName("path");

foreach ($paths as $path) 
{
    $path->setAttribute("fill",$color);
}

$paths->item(0)->setAttribute("fill",$backgroundColor);
$paths->item(0)->setAttribute("stroke-width",$borderWidth);
$paths->item(0)->setAttribute("stroke",$border);
$paths->item(12)->setAttribute("fill",$coffee);

print $xmlDoc->saveXML();

?>