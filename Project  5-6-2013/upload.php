<?php

if(isset($_POST['ADD']))
{
$allowedExts = array("gif", "jpeg", "jpg", "png");
$extension = end(explode(".", $_FILES["file"]["name"]));

$type=$_FILES['uploadedfile']['type'];
if($type !=''){
  if ($type != "application/pdf")
  {echo "<br>Please upload only PDF file";exit;}
		//if($_FILES['uploadedfile']['type']=='application/pdf')
		
if ((($_FILES["uploadedfile"]["type"] == "image/gif")|| ($_FILES["uploadedfile"]["type"] == "image/jpeg")|| ($_FILES["uploadedfile"]["type"] =="image/jpg") || ($_FILES["uploadedfile"]["type"] == "image/pjpeg") || ($_FILES["uploadedfile"]["type"] == "image/x-png") || ($_FILES["uploadedfile"]["type"] == "image/png")) && ($_FILES["uploadedfile"]["size"] < 20000) && in_array($extension, $allowedExts))
		{
			//echo"file is valid";
			//echo getcwd();
			//---------------------on server---------------------------------------
			/*$targetPath1=$_SERVER['DOCUMENT_ROOT']."/upload/";	//destination file path
			$dataFilePath1="http://www.example.com/upload/";//file path which u want to store indatabase	*/
			//----------------------------------------------------------------------------------------------
			
			//---------------------on local---------------------------------------
			$targetPath1=$_SERVER['DOCUMENT_ROOT']."/uploaded/";	//destination file path
			$dataFilePath1=$_SERVER['DOCUMENT_ROOT']."/uploaded/";//file path which u want to store in database		
			//----------------------------------------------------------------------------------------------

			$targetPath = $targetPath1 . basename( $_FILES['uploadedfile']['name']);		//destination file path
			//echo $_FILES['uploadedfile']['tmp_name'];		
			if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $targetPath))//if file move successfully
			
				{
					
					$newFile='imgnewname'.date('YmdHs').$extension;
					
					$dataFilePath= $dataFilePath1.$newFile;
					
				if(!rename($targetPath, $targetPath1.$newFile))		//if rename is not done
						{ $result1=0;		}
		
					else			//if rename is done successfully
						{ $result1=1;	}
				}
					
				else		// if thier is other problem in uploading like size or else
					{$result1=0; 
					
					echo $_FILES['uploadedfile']['error'];
					echo"file can not be uploaded";exit;
					}
					
		}	
		else// if file path is other than jpg
		{
			if($flag1==1)
				$result1=1;
			else
				// if(($_FILES['uploadedfile']['type']=='application/pdf') && ($_FILES['uploadedfile']['type']==''))
				
				if(($_FILES['uploadedfile']['type']=="image/gif")|| ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/pjpeg")|| ($_FILES["file"]["type"] == "image/x-png")|| ($_FILES["file"]["type"] == "image/png") && ($_FILES['uploadedfile']['type']==''))
				
					$result1=2;	
		}
		
}

$con=mysqli_connect("localhost","root","","filepathdb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$insQry="insert into pdf_path(filepath) VALUES('".addslashes($dataFilePath)."')";

mysqli_query($con,$insQry);

mysqli_close($con);
}
?>

<html>
<head>


</head>
<body>
<form id="addForm" name="insertinterimdirections" action="" method="post" enctype="multipart/form-data" >
<input type="hidden" name="filename"><input name='uploadedfile' type='file' onChange="setfilename_Interim(this.value,filename);"/>
(.pdf only)

<input type='submit' name='AddProposedDir' value='ADD' class='lightgraybutton' />  

</form>
</body>
</html>
