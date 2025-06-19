<?php
include_once("header.php");
include('hms/include/config.php');
?>
 <?php 
   $idtext=$_GET['viewid'];
      $catslug=mysqli_query($con,"select catname,catslug from category where id='$idtext'");
      $row1=mysqli_fetch_array($catslug);
       ?>
        
<section class="h8">
  <div class="container">
    <div class="hcon1">

      <center> <b style="padding-top: 100px; margin-left:-860px ;"><?php echo $row1['catname'] ?></b></center>
      <h4 style="color: #fce3b5; font-weight: 400; font-family: sans-serif; font-size: 18px;"><a href="index.html"
          style="color: white; font-size: 18px ; font-family:sans-serif; padding-left: 40px;padding-bottom: 10px; font-weight: 400;">HOME
          < </a>cars </h4>



    </div>
  </div>
 
</section>
<br><br><br>

<div class="container back1  ">

  <div class="row  rowabout1">
  <?php
      $procat=$row1['catslug'];
$sql=mysqli_query($con,"select * from product where procat='$procat'");

while($row=mysqli_fetch_array($sql))
{ 
?>

      <div class="col">
        <img src="hms/images/<?php echo $row['proimg']; ?>" alt="" height="300px" width="400px">

      </div>

      <div class="col colinfo2">
        <h2 class="nam"><?php echo $row['proname']; ?></h2>
        <p><?php echo $row['prodesc']; ?></p>
        <h5 class="ha"><?php echo $row['proavg']; ?></h5>
        <h3>Rs.<?php echo $row['prodis']; ?> Lakh <strike>Rs.<?php echo $row['proprice']; ?> Lakh</strike></h3> onwards <span class="off">Offers</span>
        <h5 class="ha">Avg. Ex-Showroom price</h5>
        <center><a href="hondaopen1.php?id=<?php echo $row['id']; ?>"><input type="button" class="check" value="View Details"></a></center>
        <form class="form-submit">
          <input type="hidden" class="pname" value="<?php echo $row['proname']; ?>">
          <input type="hidden" class="pprice" value="<?php echo $row['proprice']; ?>">
          <input type="hidden" class="pimage" value="<?php echo $row['proimg']; ?>">
          <input type="hidden" class="pcode" value="<?php echo $row['id']; ?>">

          <!-- <button id="addItem" class="btn-success btn button check">Add To Cart</button> -->
          <div class="alert-message"></div>

        </form>
        <br><br><br>


      </div>


    <?php }?>
  </div>


</div>
<br><br>

<!-- <section class="back1 back11">
   <div class="col">

  <img src="images/benzza.png" alt="" height="300px" width="400px">
</div>

<div class="col colinfo2">
  <h2 class="nam"> Maruti Brezza</h2>
  <p>The Maruti Brezza is a compact SUV offered in petrol and CNG variants, with both manual and automatic transmission options. </p>
       <h5 class="ha"> 15-16 kmpl | 113 bhp</h5>
        <h3>Rs. 13.73 Lakh<h3> onwards <span class="off">Offers</span>
        <h5 class="ha">Avg. Ex-Showroom price</h5>
        <center> <a href="marutiopen1.php"><input type="button" class="check" value="View Details"></a></center>
  
      
      
</div>
</section>

<br><br><br> -->

<!-- <div class="col">
  <img src="images/swift.jpg" alt="" height="300px" width="400px">
</div>

<div class="col colinfo2">
  <h2 class="nam"> Maruti Swift</h2>
  <p> It's powered by a 1.2-liter petrol engine, available with manual or AMT transmissions, and also comes in a CNG variant. </p>
  <h5 class="ha"> 12-14 kmpl | 90 bhp</h5>
   <h3>Rs. 6.79 Lakh<h3> onwards <span class="off">Offers</span>
   <h5 class="ha">Avg. Ex-Showroom price</h5>
   <center> <a href="marutiopen1.php"><input type="button" class="check" value="View Details"></a></center>
  
 
</div>

<br><br><br>


<div class="col">
  <img src="images/ertiga-1.webp" alt="" height="300px" width="400px">
</div>

<div class="col colinfo2">
  <h2 class="nam"> Maruti Ertiga</h2>
  <p>The Maruti Ertiga is a 7-seater MPV known for its spaciousness and practicality. It comes with a 1.5-liter K15C Smart Hybrid petrol engine, offering a claimed mileage of 20.51 kmpl.</p>
       <h5 class="ha"> 14-15 kmpl | 100 bhp</h5>
        <h3>Rs. 12.73 Lakh<h3> onwards <span class="off">Offers</span>
        <h5  class="ha">Avg. Ex-Showroom price</h5>
        <center> <a href="marutiopen1.php"><input type="button" class="check" value="View Details"></a></center>
     
      
      
</div>

<br><br><br>


<div class="col">
  <img src="images/baleno.jpg" alt="" height="300px" width="400px">
</div>
<div class="col colinfo2">
  <h2 class="nam"> Maruti Baleno</h2>
  <p>The Maruti Baleno is a premium hatchback available in both petrol and CNG fuel options, offering manual and automatic transmissions</p>
  <h5  class="ha"> 13-14 kmpl | 112 bhp</h5>
   <h3>Rs. 13.73 Lakh<h3> onwards <span class="off">Offers</span>
   <h5  class="ha" >Avg. Ex-Showroom price</h5>
   <center> <a href="marutiopen1.php"><input type="button" class="check" value="View Details"></a></center>

</div>
<br><br><br>


<div class="col">
  <img src="images/dzire.webp" alt="" height="300px" width="400px">
</div>

<div class="col colinfo2">
  <h2 class="nam"> Maruti Dzire</h2>
  <p>It's offered with a 1.2-liter petrol engine, available in manual or automatic (AMT) transmission, and a 1.2-liter petrol + CNG version.</p>
  <h5  class="ha"> 10-12 kmpl | 109 bhp</h5>
   <h3>Rs. 6.73 Lakh<h3> onwards <span class="off">Offers</span>
   <h5  class="ha">Avg. Ex-Showroom price</h5>
   <center> <a href="marutiopen1.php"><input type="button" class="check" value="View Details"></a></center>
  
 

  
</div>   -->
<?php
include_once("footer.php")
  ?>
<script>
  $(document).ready(function(){
 $(document).on('click','#addItem',function(e){
e.preventDefault();
var form=$(this).closest(".form-submit");
var pcode=form.find('.pcode').val();
var pname=form.find('.pname').val();
var pimage=form.find('.pimage').val();

var pprice=form.find('.pprice').val();
//var $this = $(this);
var alertmsg=form.find('.alert-message');
$.ajax({
url:'action.php',
method:'post',
data:{pcode:pcode,pname:pname,pimage:pimage,pprice:pprice},
success:function(response){
  console.log(response);
  alertmsg.html(response);

  // $this.closest('.alert-message').html(response)
  //$(this).closest('.alert-message').html(response);
 //alertmsg.html(response);
  //window.scrollto(0,0);
  load_cart_item_number();
}
});

 });

  load_cart_item_number();
function load_cart_item_number(){
  $.ajax({
url:'action.php',
method:'get',
data:{cartItem:"cart_item"},
success:function(response){

  $("#cart-item").html(response);
  
}
});
}

  });
