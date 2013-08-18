<?php 
 
echo "these are a random array of csc files  <br>";
echo '<a href="./file.php?page=showcsv">Click to View csv</a>';



	

$row = 2;
if (($handle = fopen("example.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 100000, ",")) !== FALSE) {
       if($row == 2) {
       	$field_names = $data;
       	$row++;
       } else {
       	$data = array_combine($field_names, $data);
       	$records[] = $data;
       }
      
    }
    	     
    
    
    fclose($handle);
    //print_r($field_names);
   // print_r($records);
} else {
  echo 'no file found or some error';
                                    
	
}

if (!isset($_REQUEST['page'])) {
		
	print_r($records);


    

	}  else  {  echo "do something with yourself";
	
	
	}	           
	


?>