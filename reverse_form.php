
<?php
if(isset($_POST['submit'])){
	$data = $_POST['plainText'];
	$encrypt = strrev($data);
	$decrypt = strrev($encrypt);
}	
?>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
Plain text: <input type="text" name="plainText" value="<?php if(isset($_POST['submit'])) echo $data; ?>"/>
Encrypted text: <input type="text" name="encrypted" value="<?php if(isset($_POST['submit'])) echo $encrypt; ?>" />
Decrypted text<input type="text" name="decrypted" value="<?php if(isset($_POST['submit'])) echo $decrypt; ?>"/>
<input type="submit" value="Decode" name="submit">
</form>

