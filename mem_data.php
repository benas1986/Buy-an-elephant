<?php
$id = $_REQUEST['id'];
require_once 'class.php';
$conn = new db_class();
$fetch = $conn->member_id($id);
?>

<div class = "form-group">
    <input type = "text" name = "firstname" value = "<?php echo $fetch['firstname']?>" class="form-control" maxlength="50" placeholder="Firstname" required/>
    <input type = "hidden" name="id" value = "<?php echo $id?>" />
</div>
<div class = "form-group">
    <input type = "text" name="lastname" value="<?php echo $fetch['lastname']?>" class="form-control" maxlength="50" placeholder="Lastname" required/>
</div>
<div class = "form-group">
    <input type = "email" name="email" value="<?php echo $fetch['email']?>" class="form-control" maxlength="100" placeholder="Email address" required/>
</div>		
<div class = "form-group">
    <input type = "tel" name="phone" value="<?php echo $fetch['phone']?>" class="form-control" maxlength="20" placeholder="Phone" required/>
</div>	
<div class = "form-group">
    <input type="text" name="message" value="<?php echo $fetch['message']?>" class="form-control" maxlength="250" placeholder="Message" required/>
</div>	