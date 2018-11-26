	
<?php
//check if the form has been submitted
if(isset($_POST['submit'])) {
	//MD5 encode the submitted content
	$md5 = md5($_POST['text']);
}
?>
 
<p>MD5 Value: <strong><?php echo $md5;?></strong></p>
 
<form action="#" method="post">
    <label>Input your Text : </label>
    <input name="text" id="text" type="text" />
    <input type="submit" value="Create MD5 Hash" />
</form>