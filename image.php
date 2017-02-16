<?php
		session_start();
		$regno=$_SESSION['regno'];
		include('dataconnection.php');

		$faname = $_FILES["f1"]["name"];

		$dst = "./images/students/".$regno.$faname;
		$fdst = "images/students/".$regno.$faname;
	
		$max_size =500000; //File Size in Bytes

	if(filesize($_FILES['f1']['tmp_name']) > $max_size) {
      ?>
      <script type="text/javascript">
      alert("image size too large. it should be less than 500 kb..");
      window.location="uploadimage.php";
      </script>
      <?php
    }
    else
    {







		//Move Uploaded File To Destination
		move_uploaded_file($_FILES["f1"]["tmp_name"],$dst);
		
       $_SESSION['image']=$fdst;



       $sql="update sdata set image='$fdst'  where regno='$regno'; ";
	    mysqli_query($con,$sql);
	     mysqli_close($con);
	      header("Location:uploadimage.php");
	 }
	   



?>