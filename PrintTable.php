<?php
class PrintTable {
	function constructTable() {
		// Array
		$tableArray = array (
				array (
						'Name' => 'Trixie',
						'Color' => 'Green',
						'Element' => 'Earth',
						'Likes' => 'Flowers' 
				),
				array (
						'Name' => 'Tinkerbell',
						'Element' => 'Air',
						'Likes' => 'Singning',
						'Color' => 'Blue' 
				),
				array (
						'Element' => 'Water',
						'Likes' => 'Dancing',
						'Name' => 'Blum',
						'Color' => 'Pink' 
				) 
		);
		
		$tableHTML = "";
		$tableHTML .= "+------+-------+-------+--------+<br>";
		$tableHTML .= "|Name|Color|Element|Likes|<br>";
		$tableHTML .= "+------+-------+-------+--------+<br>";
		
		foreach ( $tableArray as $key => $val1 ) {
			
			$rowColor = $val1 ['Color']; // Get the row color
			$tableHTML .= "<span style='background:$rowColor;'>";
			// $tableHTML .= "<tr style='background:$rowColor;'>"; // construct html color;
			foreach ( $val1 as $key2 => $val2 ) {
				// echo "key/value: [$key2['Color'] -> $val2]\n\n";
				$tableHTML .= "| $val2 "; // Contruct the cell
			}
			
			$tableHTML .= "|</span><br>";
		}
		
		return $tableHTML; // Print Table
	}
}

?>
