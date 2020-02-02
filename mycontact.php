<?php
if(isset($_POST['submit'])){
if(isset($_POST['Name'])&& isset($_POST['Email'])&& isset($_POST['phone']) && isset($_POST['Message'])){
  echo $Name=$_POST['Name'];
echo $Email=$_POST['Email'];
 echo  $phone=$_POST['phone'];
  echo $Message=$_POST['Message'];
     if(!empty($_POST['Name']) && !empty($_POST['Email'])&& !empty($_POST['phone']) && !empty($_POST['Message'])){
	   $to='samridhi94chawla@gmail.com';
	   $subject='contact form submitted';
	   $body=$Name."\n".$Message;
	   $headers='From:'.$Email;
	     if(mail($to,$subject,$body,$headers)){?>
		      <script language="javascript" type="text/javascript">

		alert('Thank you for the message. We will contact you shortly.');

		window.location.href = 'index.html';

	</script>
		<?php } else{?>
		
		 <script language="javascript" type="text/javascript">

		alert('All details are Required!');

		window.location.href = 'index.html';
		
		<?php}
	 
	 }


}

}
else{?>
		
		 <script language="javascript" type="text/javascript">

		alert('Sorry , an error occurred!');

		window.location.href = 'index.html';
		
		<?php
}
?>
