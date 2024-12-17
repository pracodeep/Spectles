<?php
if (isset($_POST['email']))
{
 extract($_POST);
 
if($_POST['email']){

$to = 'info@optiimax.in';		/*enter ur email address on which u want all mails*/
$subject = 'OPTIIMAX' ; 
/*Enter ur Subject */
$msg = '<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>OPTIIMAX Enquiry</title>

<style>
table {
  border-collapse: collapse;
}

table, th, td {
  border: 1px solid black;
}
td{
    padding :5px;
    font-size: 18px;
}

</style>

</head>

<body>

<div style="margin: auto;background: #eee;padding: 25px;max-width: 900px;border: 1px solid #dedede;">

<center></center>
<h3 style="text-align:center"> CAT Lawyers Enquiry Form </h3>

<table cellspacing=\"4\" cellpadding=\"4\" border=\"1\" align=\"center\" style="margin:auto">
 
 <tr>
 <td align=\"center\">Name</td>
 <td align=\"center\">'.$name.'</td>
  </tr>
  <tr>
 <td align=\"center\">Email</td>
 <td align=\"center\">'.$email.'</td>
 </tr>
   
  <tr>
 <td align=\"center\">Subject</td>
 <td align=\"center\">'.$subject.'</td>
 </tr>

   <tr>
 <td align=\"center\">phone</td>
 <td align=\"center\">'.$phone.'</td>
 </tr>

   <tr>
 <td align=\"center\">Subject</td>
 <td align=\"center\">'.$message.'</td>
 </tr>
  
 
</table>
<br>
<br>
</div>
</body>
</html>';




// Make sure to escape quotes

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: OPTIIMAX <info@optiimax.in>' . "\r\n";		
	/*domain name and support email enter */

    if (mail($to, $subject, $headers))
    {?>
       <script>
     alert("Thanks for Query.   We will get in touch with you shortly");
     window.location.href="contact.php" ;		/*return on page which u want*/ 
     </script>
    <?php
    } else{
        echo"<script>alert('Error, Please try again.');window.location.href='contact.php'</script>"; ?>
           
    <?PHP }
    }else{ ?>
    
<script>
 alert("Error, Please insert all mendotory filed!!.");
 window.location.href="contact.php" ;		/*return on page which u want*/ 
 </script>
    
<?php }

}
?>  




