<?php
include_once("header.php");
include('hms/include/config.php');
  ?>
<section class="h8">
  <div class="container">
    <div class="hcon1">

      <center> <b style="padding-top: 100px; margin-left:-860px ;"> Toyota</b></center>
      <h4 style="color: #fce3b5; font-weight: 400; font-family: sans-serif; font-size: 18px;"><a href="index.html"
          style="color: white; font-size: 18px ; font-family:sans-serif; padding-left: 40px;padding-bottom: 10px; font-weight: 400;">HOME
          < </a>cars </h4>



    </div>
  </div>
</section>
<br><br><br>

<div class="container back1">
  <div class="row  rowabout1">



  <?php
             $procat='toyotacars';
$sql=mysqli_query($con,"select * from product where procat='$procat'");


while($row=mysqli_fetch_array($sql))
{ 
?>
    <div class="col">
      <img src="hms/images/<?php echo $row['proimg'];?>" alt="" height="300px" width="400px">
    </div>

    <div class="col colinfo2">
      <h2 class="nam"><?php echo $row['proname'];?></h2>
      <p> It comes in both petrol and diesel engine variants. The diesel engine, a 2.8-liter unit, produces 201 bhp and
        500 Nm of torque.</p>
      <h5 class="ha"> <?php echo $row['proavg'];?></h5>
      <h3>Rs.<?php echo $row['prodis']; ?> Lakh <strike>Rs.<?php echo $row['proprice']; ?> Lakh  </strike> </h3> onwards <span class="off">Offers</span>
          <h5 class="ha">Avg. Ex-Showroom price</h5>
          <center> <a href="hondaopen1.php?id=<?php echo $row['id']; ?>"><input type="button" class="check" value="View Details"></a></center> 
          <form class="form-submit">
                                       <input type="hidden" class="pname" value="<?php echo $row['proname'];?>">
                                        <input type="hidden" class="pprice" value="<?php echo $row['proprice'];?>">
                                        <input type="hidden" class="pimage" value="<?php echo $row['proimg'];?>">
                                        <input type="hidden" class="pcode" value="<?php echo $row['id'];?>">

                                        <!-- <button id="addItem" class="btn-success btn button check ">Add To Cart</button> -->
                                                                              <div class="alert-message"></div>

                                      </form>
                                      <br><br><br>


  </div>
  <?php } ?>
</div>
</div>

<br><br><br>
<!-- <div class="container back1 back11">
  <div class="row  rowabout1 ">
    <div class="col">
      <img src="images/Toyota Glanza.jpg" alt="" height="300px" width="400px">
    </div>

    <div class="col colinfo2">
      <h2 class="nam">Toyota Glanza</h2>
      <p> It's powered by a 1.2-liter petrol engine with a mild-hybrid system and comes with both manual and automatic
        (AMT) transmission options, as well as a CNG variant. </p>
      <h5 class="ha"> 13-15 kmpl | 106 bhp</h5>
      <h3>Rs. 14.73 Lakh<h3> onwards <span class="off">Offers</span>
          <h5 class="ha">Avg. Ex-Showroom price</h5>
          <center> <a href="toyotaopen1.php"><input type="button" class="check" value="View Details"></a></center>



    </div>
  </div>
</div>
</div>

<br><br><br>
<div class="container back1">
  <div class="row  rowabout1">
    <div class="col">
      <img src="images/Toyota Innova Hycross.png" alt="" height="300px" width="400px">
    </div>

    <div class="col colinfo2">
      <h2 class="nam">Toyota Innova Hycross</h2>
      <p>The HyCross offers a balance of performance, efficiency, and practicality, making it suitable for families and
        those needing a versatile vehicle</p>
      <h5 class="ha"> 12-13 kmpl | 100 bhp</h5>
      <h3>Rs. 6.79 Lakh<h3> onwards <span class="off">Offers</span>
          <h5 class="ha">Avg. Ex-Showroom price</h5>
          <center> <a href="toyotaopen1.php"><input type="button" class="check" value="View Details"></a></center>


    </div>
  </div>
</div>
</div>
<br><br><br>

<div class="container back1">
  <div class="row  rowabout1">
    <div class="col">
      <img src="images/Toyota Rumion.jpg" alt="" height="300px" width="400px">
    </div>

    <div class="col colinfo2">
      <h2 class="nam">Toyota Rumion</h2>
      <p> It features a 1.5-liter engine, offering either a 5-speed manual or 6-speed automatic transmission.</p>
      <h5 class="ha"> 12-14 kmpl | 140 bhp</h5>
      <h3>Rs. 13.73 Lakh<h3> onwards <span class="off">Offers</span>
          <h5 class="ha">Avg. Ex-Showroom price</h5>
          <center> <a href="toyotaopen1.php"><input type="button" class="check" value="View Details"></a></center>



    </div>
  </div>
</div>
</div>
<br><br><br>

<div class="container back1">
  <div class="row  rowabout1">
    <div class="col">
      <img src="images/Toyota-Innova-Crysta.jpg" alt="" height="300px" width="400px">
    </div>
    <div class="col colinfo2">
      <h2 class="nam">Toyota-Innova-Crysta</h2>
      <p>The Toyota Innova Crysta is a popular MPV known for its spacious interior, comfort, and reliability, making it
        a good choice for families and businesses. </p>
      <h5 class="ha"> 15-17 kmpl | 102 bhp</h5>
      <h3>Rs. 10.73 Lakh<h3> onwards <span class="off">Offers</span>
          <h5 class="ha">Avg. Ex-Showroom price</h5>
          <center> <a href="toyotaopen1.php"><input type="button" class="check" value="View Details"></a></center>

    </div>
  </div>
</div>
</div>
<br><br><br>

<div class="container back1">
  <div class="row  rowabout1">
    <div class="col">
      <img src="images/Toyota-Urban-Cruiser.jpg" alt="" height="300px" width="400px">
    </div>

    <div class="col colinfo2">
      <h2 class="nam">Toyota Urban Cruiser</h2>
      <p>The Toyota Urban Cruiser is a subcompact SUV available in both petrol and hybrid petrol options, offering a
        range of features and specifications.</p>
      <h5 class="ha"> 10-11 kmpl | 110 bhp</h5>
      <h3>Rs. 6.73 Lakh<h3> onwards <span class="off">Offers</span>
          <h5 class="ha">Avg. Ex-Showroom price</h5>
          <center> <a href="toyotaopen1.php"><input type="button" class="check" value="View Details"></a></center>



    </div>
  </div>
</div>

</div> -->

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
