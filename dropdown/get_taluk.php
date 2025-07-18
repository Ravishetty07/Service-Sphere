<?php
require_once("config.php");
if(!empty($_POST["district_id"])) 
{
$district_id=$_POST["district_id"];
$sql=$dbh->prepare("SELECT * FROM taluk WHERE district_id=:district_id");
$sql->execute(array(':district_id' => $district_id));	
?>
<option value="">Select Taluk</option>
<?php
while($row =$sql->fetch())
{
?>
<option value="<?php echo $row["taluk_name"]; ?>"><?php echo $row["taluk_name"]; ?></option>
<?php
}
}
?>
