<?php
require_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Servicesphere</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
		  <script>
function gettaluk(val) {
	$.ajax({
	type: "POST",
	url: "get_taluk.php",
	data:'district_id='+val,
	success: function(data){
		$("#taluk-list").html(data);
	}
	});
}
function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>	
	</head>
	<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="navbar-header">
        <a class="navbar-brand" rel="home" href="#">ServiceSphere</a>
		
	</div>

</nav>

<div class="container-fluid">
  
  <!--left-->
 <div class="col-sm-2">
      
    	<div class="panel panel-default">
         
         	<div class="panel-body"></div>
        </div>
        <hr>
       
		 </div>
      
     
 <!--/left-->
  
  <!--center-->
  <div class="col-sm-8">
    <div class="row">
      <div class="col-xs-12">
        <h3>Select Your Location </h3>
		<hr >
		<form name="insert" action="" method="post">
  <table width="100%" height="117"  border="0">
  <tr>
    <th width="27%" height="63" scope="row">District :</th>
    <td width="73%"><select onChange="gettaluk(this.value);"  name="district" id="district" class="form-control" >
<option value="">Select</option>
<!--- Fetching districts--->
<?php
$sql="SELECT * FROM district";
$stmt=$dbh->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
while($row =$stmt->fetch()) { 
  ?>
<option value="<?php echo $row['district_id'];?>"><?php echo $row['district_name'];?></option>
<?php }?>
                    </select></td>
  </tr>
  <tr>
    <th scope="row">Taluk :</th>
    <td><select name="taluk" id="taluk-list" class="form-control">
<option value="">Select</option>
</select></td>
  </tr>
</table>



     </form>
 
      </div>
    </div>
    <hr>
        
   
  </div><!--/center-->

  <!--right-->
  <div class="col-sm-2">
      
    	<div class="panel panel-default">
         	
         	<div class="panel-body"></div>
        </div>
        <hr>
   
  </div>
<!--/right-->
  <hr>
</div><!--/container-fluid-->
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>