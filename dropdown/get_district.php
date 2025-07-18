<?php
require_once("config.php");
if(!empty($_POST["state_id"])) 
{
$stateid=$_POST["state_id"];
$sql=$dbh->prepare("SELECT * FROM district WHERE StCode=:stateid");
$sql->execute(array(':stateid' => $stateid));	
?>
<option value="">Select District</option>
<?php
while($row =$sql->fetch())
{
?>
<option value="<?php echo $row["DistrictName"]; ?>"><?php echo $row["DistrictName"]; ?></option>
<?php
}
}
?>
