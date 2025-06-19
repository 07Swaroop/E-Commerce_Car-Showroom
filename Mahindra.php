<?php
include_once("header.php");
include('hms/include/config.php');
?>
<section class="h8">
  <div class="container">
    <div class="hcon1">

      <center> <b style="padding-top: 100px; margin-left:-860px ;">Mahindra Cars</b></center>
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
    $procat = 'mahindracars';
    $sql = mysqli_query($con, "select * from product where procat='$procat'");


    while ($row = mysqli_fetch_array($sql)) {
      ?>
      <div class="col">
        <img src="hms/images/<?php echo $row['proimg'];?>" alt="" height="300px" width="400px">
      </div>

      <div class="col colinfo2">
        <h2 class="nam"><?php echo $row['proname'];?></h2>
        <p>The Mahindra Bolero is a rugged, dependable SUV known for its affordability and ability to tackle various
          terrains. It's offered in a few trim levels and is powered by a diesel engine, typically a 1.5-liter option.</p>
        <h5 class="ha"> <?php echo $row['proavg'];?></h5>
        <h3>Rs.<?php echo $row['prodis']; ?> Lakh <strike>Rs.<?php echo $row['proprice']; ?> Lakh  </strike> </h3> onwards <span class="off">Offers</span>
            <h5 class="ha">Avg. Ex-Showroom price</h5>
            <center> <a href="hondaopen1.php?id=<?php echo $row['id']; ?>"><input type="button" class="check" value="View Details"></a></center> 
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
    <?php } ?>
  </div>
</div>


<!-- <div class="container back1 back11">
  <div class="row  rowabout1 ">
    <div class="col">
      <img src="images/scorpio.jpg" alt="" height="300px" width="400px">
    </div>

    <div class="col colinfo2">
      <h2 class="nam"> Mahindra Scorpio</h2>
      <p>The Scorpio N, the latest iteration, is a 7-seater SUV with a modern design and a range of features</p>
      <h5 class="ha"> 15-16 kmpl | 119 bhp</h5>
      <h3>Rs. 11.73 Lakh<h3> onwards <span class="off">Offers</span>
          <h5 class="ha">Avg. Ex-Showroom price</h5>
          <center> <a href="mahindraopen1.php"><input type="button" class="check" value="View Details"></a></center>



    </div>
  </div>
</div>
</div>

<br><br><br>
<div class="container back1">
  <div class="row  rowabout1">
    <div class="col">
      <img src="images/thar.jpg" alt="" height="300px" width="400px">
    </div>

    <div class="col colinfo2">
      <h2 class="nam">Mahindra Thar</h2>
      <p> The 4x4 model offers both engines with automatic transmission, while the RWD model has a manual transmission
        for diesel and automatic for petrol</p>
      <h5 class="ha"> 12-14 kmpl | 90 bhp</h5>
      <h3>Rs. 3.79 Lakh<h3> onwards <span class="off">Offers</span>
          <h5 class="ha">Avg. Ex-Showroom price</h5>
          <center> <a href="mahindraopen1.php"><input type="button" class="check" value="View Details"></a></center>


    </div>
  </div>
</div>
</div>
<br><br><br>

<div class="container back1">
  <div class="row  rowabout1">
    <div class="col">
      <img src="images/marazzo.jpg" alt="" height="300px" width="400px">
    </div>

    <div class="col colinfo2">
      <h2 class="nam">Mahindra Marazzo</h2>
      <p>The Mahindra Marazzo is a compact MPV that offers seating for seven or eight passengers and is powered by a
        1.5-liter diesel engine. </p>
      <h5 class="ha"> 13-14 kmpl | 100 bhp</h5>
      <h3>Rs. 11.73 Lakh<h3> onwards <span class="off">Offers</span>
          <h5 class="ha">Avg. Ex-Showroom price</h5>
          <center> <a href="mahindraopen1.php"><input type="button" class="check" value="View Details"></a></center>



    </div>
  </div>
</div>
</div>
<br><br><br>

<div class="container back1">
  <div class="row  rowabout1">
    <div class="col">
      <img src="images/xev 9e.jpeg" alt="" height="300px" width="400px">
    </div>
    <div class="col colinfo2">
      <h2 class="nam"> Mahindra xev 9e</h2>
      <p>It features a 3-screen dashboard, a 16-speaker audio system, and an augmented reality heads-up display.</p>
      <h5 class="ha"> 16-17 kmpl | 112 bhp</h5>
      <h3>Rs. 13.73 Lakh<h3> onwards <span class="off">Offers</span>
          <h5 class="ha">Avg. Ex-Showroom price</h5>
          <center> <a href="mahindraopen1.php"><input type="button" class="check" value="View Details"></a></center>

    </div>
  </div>
</div>
</div>
<br><br><br>

<div class="container back1">
  <div class="row  rowabout1">
    <div class="col">
      <img src="images/mahindra xuv700.jpg" alt="" height="300px" width="400px">
    </div>

    <div class="col colinfo2">
      <h2 class="nam">Mahindra xuv700</h2>
      <p> It boasts a modern interior with features like a panoramic sunroof, advanced driver assistance systems (ADAS),
        and a 10.25-inch touchscreen with wireless Android Auto</p>
      <h5 class="ha"> 10-12 kmpl | 109 bhp</h5>
      <h3>Rs. 5.73 Lakh<h3> onwards <span class="off">Offers</span>
          <h5 class="ha">Avg. Ex-Showroom price</h5>
          <center> <a href="mahindraopen1.php"><input type="button" class="check" value="View Details"></a></center>



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



