<?php
require_once("config.php");
if(!empty($_POST["district_id"])) 
{
$district_id=$_POST["district_id"];
$sql=$dbh->prepare("SELECT * FROM district WHERE StCode=:district_id");
$sql->execute(array(':district_id' => $district_id));	
?>
<option value="">Select District</option>
<?php
while($row =$sql->fetch())
{
?>
<option value="<?php echo $row["district_name"]; ?>"><?php echo $row["district_name"]; ?></option>
<?php
}
}
?>
