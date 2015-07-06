
	 <?php//echo $file['file_name'];?>
 <?php echo validation_errors(); 

echo $error;
echo $file['file_name'];
printf('<img src="%s">',base_url('uploads').'/'.$file['file_name']);


 ?>


