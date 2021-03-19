<!DOCTYPE html> 
<html> 

<head> 
	<title> 
		Select and upload multiple 
		files to the server 
	</title> 
</head> 

<body> 
	<form action="upload_file.php" method="POST"
			enctype="multipart/form-data"> 

		<h2>Upload Files</h2> 
		
		<p> 
			Select files to upload: 
		
			<input type="file" name="files[]" multiple> 
			
			<br><br> 
			
			<input type="submit" name="submit" value="Upload" > 
		</p> 
	</form> 
</body> 

</html>					 

