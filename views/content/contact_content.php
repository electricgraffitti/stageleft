<div id="content">
<?php
if(isset($sent) && $sent == true)
{
echo "";
}else{
?>
  
  <?php if(isset($warning)){echo "$message";} ?>
  <form method="post" action="script.php" name="contact">
    
    <label>* Name:</label><br />
    	<input name="name" type="text" value="<?php echo $name; ?>" size="35"/>
    <label>* Email:</label><br />
      <input name="email_address" type="text" value="<?php echo $email_address; ?>" size="35"/>
    <label>* Telephone:</label><br />
       <input name="tel" type="text" value="<?php echo $tel; ?>" size="35"/>
    <label>Reason for Inquiry:</label><br /> 
      <select name="select">
        <option>Select One *</option>
        <option>Staging</option>
        <option>Redesign</option>
        <option>Displays</option>
				<option>Accessory Rentals</option>
				<option>Holiday Decorating</option>
				<option>Shopping Assistance</option>
      </select>
    <label> Additional Comments:</label><br />
    	<textarea name="comments" cols="35" rows="6"><?php echo $comments; ?></textarea>
<div class="clear"></div>
      <input name="submit" type="submit" value="Submit" class="btn" />
  </form>
	<?php } ?>
</div>