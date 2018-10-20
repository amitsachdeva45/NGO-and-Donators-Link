<?php 	
include('simple_html_dom.php');
$html = new simple_html_dom();
$query_URL = "http://www.who.int/topics/en/";
$html->load_file($query_URL);

$i=0;
//echo "<table border='1' width='100%'' height='500px;'>";
//echo"<tr>";
			foreach( $html->find('.tab') as $element )
				{ echo $element; }
					
		//	echo "</table>";

?>


