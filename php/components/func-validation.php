<?php  

# Form validation function
function is_empty($var, $text, $location, $ms, $data){
   if (empty($var)) {
   	 # Error message
   	 $em = $text." es requerido";
   	 header("Location: $location?$ms=$em&$data");
   	 exit;
   }
   return 0;
}

?>