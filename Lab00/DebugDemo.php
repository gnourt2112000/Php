<HTML>
<body>
	<h1>Debug Demo</h1>
	<table border="1" width="700">
		<tr style='background-color:red;text-align:center;font-weight: bold; color:white'>
    		<td>Name</td>
    		<td>Address</td>
    		<td>Phone</td>
		</tr>
	
        <?php
            $db = array(
                        array("Nguyen Hai Thanh", "Hai Duong", "0382195410"),
                        array("Nguyen Quang Long", "Hai Duong", "0123438290"),
                        array("Scarlet", "Paris", "1239213"),
                        array("Crescent Moon", "Bejing", "19394004"),
                        array("Linh Cinder", "Bangkok", "9254380202"),
                       );     
            $num = 0;
            
            foreach ($db as $person){
                if($num % 2 == 1)
                    echo "<tr style='background-color:green;color:white'>";
                foreach ($person as $value){
                    echo "<td>$value</td>";
                }
                echo "</tr>";
                $num++;
            }
        ?>
	</table>
</body>
</HTML>

