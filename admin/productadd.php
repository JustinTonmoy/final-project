<?php
require_once('function.php');
dbconnect();
session_start();

if (!is_user()) {
    redirect('index.php');
}

?>

        

<?php
 $user = $_SESSION['username'];
$usid = $pdo->query("SELECT id FROM users WHERE username='".$user."'");
$usid = $usid->fetch(PDO::FETCH_ASSOC);
 $uid = $usid['id'];
 include ('header.php');
 ?>



 
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Product</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                
                <div class="col-md-10 col-md-offset-1">
                
                
    

        <?php

if($_POST)
{


$category = $_POST["category"];
$title = $_POST["title"];
$price = $_POST["price"];



///////////////////////-------------------->> Catid  ki 0??
$error = 0;

 if($producttype==0)
      {
$err1=1;
}
 


if(isset($err1))
 $error = $err1;;


if (!isset($error) || $error == 0){


$res = $pdo->exec("INSERT INTO product SET  category='".$category."', title='".$title."',  price='".$price."'");
if($res){

echo "<div class='alert alert-success alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>    

Staff Added Successfully!

</div>";

}else{
    echo "<div class='alert alert-danger alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>    

Some Problem Occurs, Please Try Again. 

</div>";
}
} else {
    
    
if (!isset($err1) || $err1 == 1){
echo "<div class='alert alert-danger alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>    

Please select a Category!!!!

</div>";
}   
}



} 
    ?>
        


     <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>     
                
                
                
                
                
                    <form action="productadd.php" method="post">
        
                    <div class="form-group">
                    
                    <label>Select Product </label>
                    
                    <select name="category" class="form-control" style="width:200px; height: 40px;">
                    <option value="0">Please Select Product</option>


                    <?php

$ddaa = $pdo->query("SELECT id, title FROM producttype ORDER BY id");
    while ($data = $ddaa->fetch(PDO::FETCH_ASSOC))
    {                                   
 echo "<option value='$data[id]'>$data[title]</option>";
    }
?>
               

                    
                    </select><br/>

</div>
                
                <div class="form-group">
                    
                    <label>Title</label><br/>
                    <input type="text" name="title" style="width:200px; height: 40px;" /><br/><br/>
                </div>  
                
                <div class="form-group">
                    
                    <label>Price</label><br/>
                    <input type="text" name="price" style="width:200px; height: 40px;" /><br/><br/>
                </div>    
                
             
                
          
                    <input type="submit" class="btn btn-lg btn-success btn-block" value="ADD">
                    </form>
                </div>
                        
                        
                        
                        
                        
                
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
        



<script src="js/bootstrap-timepicker.min.js"></script>


<script>
jQuery(document).ready(function(){
    
  
  jQuery("#ssn").mask("999-99-9999");
  
  // Time Picker
  jQuery('#timepicker').timepicker({defaultTIme: false});
  jQuery('#timepicker2').timepicker({showMeridian: false});
  jQuery('#timepicker3').timepicker({minuteStep: 15});

  
});
</script>







<?php
 include ('footer.php');
 ?>