<?php
include_once("header.php");
include('hms/include/config.php');
?>
<div class="main-slider">
  <div class="slider">
    <div>
      <div class="slider-img">
        <img src="images/slider3.avif">
        <div class="slider-text">
          <div class="container" id="slide">
            <div class="col-md-8 textside position-relative">
              <div class="content text-center">
                <h6 class="mb-0 content1">Find Your <span class="slider1">Dream Car</span> At Your Price...!</h6>
                <h1 class="mb-0">"I don’t always take selfies, but when I do, it’s with my car."
                </h1>
                <a class="more_btn " href="product1.html">Choose Now</a>
              </div>
            </div>
          </div>

        </div>
      </div> <!-- img -->
    </div><!-- slider -->
    <div>
      <div class="slider-img ">
        <img src="images/slider2.avif">
        <div class="slider-text">
          <div class="container" id="slide">
            <div class="col-md-8 textside position-relative">
              <div class="content text-center">
                <h6 class="mb-0 content1 ">Find Your <span class="slider1">Dream Car</span> At Your Price...!</h6>
                <h1 class="mb-0 content2">"I don’t always take selfies, but when I do, it’s with my car."
                </h1>
                <a class="more_btn" href="product1.html">Choose Now</a>
              </div>
            </div>
          </div>

        </div>
      </div> <!-- img -->
    </div><!-- slider -->
    <div>
      <div class="slider-img ">
        <img src="images/carbg3.avif">
        <div class="slider-text">
          <div class="container" id="slide">
            <div class="col-md-8 textside position-relative">
              <div class="content text-center">
                <h6 class="mb-0 content1">Find Your <span class="slider1">Dream Car</span> At Your Price...!</h6>
                <h1 class="mb-0 content2">"I don’t always take selfies, but when I do, it’s with my car."
                </h1>
                <a class="more_btn" href="product1.html">Choose Now</a>
              </div>
            </div>

          </div>

        </div>
      </div> <!-- img -->
    </div><!-- slider -->

  </div>
</div><!-- main-slider -->
<br><br><br><br>
<div class="container demo">
  <center>
    <h1 class="Gallery1" style="padding-left: 170px;">AboutUs</h1>
  </center>
  <div class="row rowabout" style="margin-bottom: 100px;">
    <div class="col">
      <img src="images/aboutcar.avif" alt="" height="300px" width="100%">
    </div>

    <div class="col colinfo">
      <h3>Body </h3>
      The body contains the passenger and storage space
      The body is made of metal or plastic coverings
      The body includes the hood, trunk lid, roof, fenders, and side frames
      <h3>Engine</h3>
      The engine powers the car
      The engine block includes parts such as the timing chain, camshaft, crankshaft, spark plugs, cylinder heads,
      valves, and pistons
      <h3>Transmission </h3>
      The transmission is part of the car's drivetrain
      The clutch connects and disconnects the engine crankshaft and the transmission <br><br>
      <a href="aboutcar.php"> <input type="button" value="Read More"
          style=" background-color: rgb(252, 232, 205); color: black; font-weight: 600; border-color:rgb(252, 232, 205);  "></a>
    </div>
  </div>
</div>
<!-- category -->
<section class="cate" style="background-color:rgb(248, 247, 247); padding-bottom: 50px;">
  <center>
    <br>
    <h1 class="Gallery"> Popular Car Brands </h1>
  </center>


  <div class="container">
    <div class="row row1">

      <?php

      $sql = mysqli_query($con, "select * from category ");


      while ($row = mysqli_fetch_array($sql)) {
        ?>





        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" id="card1">

          <div class="car">
            <img src="hms/images/<?php echo $row['catimg']; ?>" class="card-img-top car1" alt="..." height="200px"
              width="200px">
            <div class="card-body">

              <center>
                <h5 class="card-title ct"><?php echo $row['catname']; ?></h5>
              </center>
              <p class="card-text" style="text-align: justify;">Lorem ipsum dolor sit, amet consectetur adipisicing
                elit. Explicabo soluta, error dolore voluptate quos voluptates.

              </p>

              <a href="category.php?viewid=<?php echo $row['id']; ?>">
                <center><button
                    style="background-color: #fcdfc1; padding:5px 20px; border-radius: 10px; border-color: #fcdfc1;">View
                    More</button></center>
              </a>
              <!-- <center> <a href="category.php? Viewid=<?php echo $row['id']; ?>" class="btn btn-primary btn11">View More</a></center>  -->


            </div>
          </div>
        </div>
        <!-- <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" id="card1">
          <div class="car">
            <img src="images/helevate.avif" class="card-img-top car1" alt="..." height="200px" width="200px">
            <div class="card-body">
              <center>
                <h5 class="card-title ct"> Maruti Suzuki</h5>
                <p class="card-text" style="text-align: justify;">Lorem ipsum dolor sit, amet consectetur adipisicing
                  elit. Explicabo soluta, error dolore voluptate quos voluptates.

                </p>
                <center> <a href="Maruti.php" class="btn btn-primary btn11">View More</a>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" id="card1">
          <div class="car">
            <img src="images/m1 (3).jpg" class="card-img-top car1" alt="..." height="200px" width="200px">
            <div class="card-body">
              <center>
                <h5 class="card-title ct">Mahindra</h5>
              </center>
              <p class="card-text" style="text-align: justify;">Lorem ipsum dolor sit, amet consectetur adipisicing
                elit. Explicabo soluta, error dolore voluptate quos voluptates.

              </p>
              <center> <a href="Mahindra.php" class="btn btn-primary btn11">View More</a></center>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" id="card1">
          <div class="car">
            <img src="images/hbrio2.jpg" class="card-img-top car1" alt="..." height="200px" width="200px">
            <div class="card-body">
              <center>
                <h5 class="card-title ct">Toyota</h5>
              </center>
              <p class="card-text" style="text-align: justify;">Lorem ipsum dolor sit, amet consectetur adipisicing
                elit. Explicabo soluta, error dolore voluptate quos voluptates.

              </p>
              <center> <a href="Toyota.php" class="btn btn-primary btn11">View More</a></center>
            </div>
          </div>
        </div> -->


      <?php } ?>
    </div>


  </div>

</section>
<br><br>
<!-- servises -->
<section class="servi1">
  <h1 class="Gallery">Services</h1>
  <div class="container">
    <div class="row row1">
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" id="card1">

        <div class="car2 ser">
          <center> <i class="fa-solid fa-car fa-2xl" style="color: #c48f78;"></i></center>
          <div class="card-body">
            <center>
              <h5 class="card-title">Car Selling</h5>
            </center>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem temporibus.</p>

          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" id="card1">
        <div class="car2 ser">
          <center> <i class="fa-solid fa-screwdriver-wrench fa-2xl" style="color: #c48f78;"></i></center>
          <div class="card-body">
            <center>
              <h5 class="card-title">Parts Repairs</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem temporibus.</p>

          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" id="card1">
        <div class="car2 ser">
          <center><i class="fa-solid fa-car-burst fa-2xl" style="color: #c48f78;"></i></center>
          <div class="card-body">
            <center>
              <h5 class="card-title">Car Insurance</h5>
            </center>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem temporibus.</p>

          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" id="card1">
        <div class="car2 ser">
          <center> <i class="fa-solid fa-gas-pump fa-2xl" style="color: #c48f78"></i></center>
          <div class="card-body">
            <center>
              <h5 class="card-title">Oil Change</h5>
            </center>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem temporibus.</p>

          </div>
        </div>
      </div>
    </div>
    <br><br>

  </div>

</section>

<!-- bestseller -->
<section class="cate" style="background-color:rgb(248, 247, 247); padding-bottom: 50px;">
  <center>
    <br>
    <h1 class="Gallery"> Bestceller cars </h1>
  </center>


  <div class="container">
    <div class="row row1">
    <?php
    // Fetch products marked as best-sellers
    // $pid=[];
    // $sql = mysqli_query($con, "SELECT pro_id FROM orders");
    // while($row = mysqli_fetch_array($sql)) {
    //   $pid[] =$row['pro_id'];
    //      }
    //      $pid2=implode(',' ,$pid);
    //      $pid1=array_map('intval', explode(',', $pid2));
    //      $findDuplicate = array_diff_assoc(
    //       $pid1, 
    //       array_unique($pid1)
    //   );
    //   $idList=implode(',',$findDuplicate);
        
    // $bestsell=mysqli_query($con, "SELECT * FROM product where id IN ($idList) Limit 4");
    // while($row1 = mysqli_fetch_array($bestsell)) { ?>
  
<?php
    // Step 1: collecting all product id's from orders
    $pid = [];
    $sql = mysqli_query($con, "SELECT pro_id FROM orders");
    while ($row = mysqli_fetch_array($sql)) {
        $ids = explode(',', $row['pro_id']); 
        foreach ($ids as $id) {
            $id = intval(trim($id));
            if ($id > 0) $pid[] = $id;
        }
    }

    // Step 2: how many product are repeated
    $repeat = array_count_values($pid);

    // Step 3: descending order and it gives first reference of the product
    uksort($repeat, function($a, $b) use ($repeat, $pid) {
        $cmp = $repeat[$b] <=> $repeat[$a]; 
        if ($cmp === 0) {
            return array_search($a, $pid) <=> array_search($b, $pid);
        }
        return $cmp;
    });

    // Step 4: fetch product data from DB in sorted order
    $sorted_ids = array_keys($repeat);
    if (!empty($sorted_ids)) {
        $idList = implode(',', $sorted_ids);
        $bestsell = mysqli_query($con, "SELECT * FROM product WHERE id IN ($idList)");

        $products_map = [];
        while ($row = mysqli_fetch_assoc($bestsell)) {
            $products_map[$row['id']] = $row;
        }

        foreach ($sorted_ids as $product_id) {
            if (isset($products_map[$product_id])) {
                $row1 = $products_map[$product_id];
    ?>
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" id="card1">

        <div class="car">
          <img src="hms/images/<?php echo $row1['proimg']; ?>" class="card-img-top car1" alt="..." height="200px" width="200px">
          <div class="card-body">
            <center>
              <h5 class="card-title ct1"><?php echo $row1['proname']; ?></h5>
            </center>
            <!-- <p class="card-text" style="text-align: justify;">It's a subcompact SUV with a 1.2-liter naturally aspirated petrol engine, a 1.0-liter turbocharged petrol engine, and a 1.5-liter diesel engine options
              </p> -->
            <h5 class="ha1"> Rs.<?php echo $row1['prodis']; ?>Lakh <strike>Rs.<?php echo $row1['proprice']; ?> Lakh</strike></h5>
            <h5 class="bes1">onwards <span class="off1">Offers</span></h5>
            <i class="fa-solid fa-star fa-sm" style="color:rgb(0, 0, 0);"></i>
            <i class="fa-solid fa-star fa-sm" style="color:rgb(0, 0, 0);"></i>
            <i class="fa-solid fa-star fa-sm" style="color:rgb(0, 0, 0);"></i>
            <i class="fa-solid fa-star fa-sm" style="color:rgb(0, 0, 0);"></i>
            <i class="fa-solid fa-star-half-stroke fa-sm" style="color: #000000;"></i>
            <h5 class="ha11"> <?php echo $row1['proavg']; ?></h5>

            <h5 class="ha11">Avg. Ex-Showroom price</h5>
            <center><a href="hondaopen1.php?id=<?php echo $row1['id']; ?>"><input type="button" class="check" value="View Details"></a></center>
        <form class="form-submit">
          <input type="hidden" class="pname" value="<?php echo $row1['proname']; ?>">
          <input type="hidden" class="pprice" value="<?php echo $row1['proprice']; ?>">
          <input type="hidden" class="pimage" value="<?php echo $row1['proimg']; ?>">
          <input type="hidden" class="pcode" value="<?php echo $row1['id']; ?>">

        
          <div class="alert-message"></div>

        </form>
          </div>
        </div>
      </div>
       <!-- <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" id="card1">
        <div class="car">
          <img src="images/dzire.jpg" class="card-img-top car1" alt="..." height="200px" width="200px">
          <div class="card-body">
            <center>
              <h5 class="card-title ct1"> Maruti Dzire</h5>
            </center>
            <p class="card-text" style="text-align: justify;">It's a subcompact SUV with a 1.2-liter naturally aspirated petrol engine, a 1.0-liter turbocharged petrol engine, and a 1.5-liter diesel engine options
              </p>  
            <h5 class="ha1"> Rs. 6.73 Lakh <strike>Rs.6.73 Lakh </strike></h5>
            <h5 class="bes1">onwards <span class="off1">Offers</span></h5>
            <i class="fa-solid fa-star fa-sm" style="color:rgb(0, 0, 0);"></i>
            <i class="fa-solid fa-star fa-sm" style="color:rgb(0, 0, 0);"></i>
            <i class="fa-solid fa-star fa-sm" style="color:rgb(0, 0, 0);"></i>
            <i class="fa-solid fa-star fa-sm" style="color:rgb(0, 0, 0);"></i>
            <i class="fa-solid fa-star-half-stroke fa-sm" style="color: #000000;"></i>
            <h5 class="ha11"> 10-12 kmpl | 109 bhp</h5>

            <h5 class="ha11">Avg. Ex-Showroom price</h5>
            <center> <a href="Honda.php" class="btn btn-primary btn11">Add To Cart</a></center>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" id="card1">
        <div class="car">
          <img src="images/marazzo.jpg" class="card-img-top car1" alt="..." height="200px" width="200px">
          <div class="card-body">
            <center>
              <h5 class="card-title ct1"> Mahindra Marazzo</h5>
            </center>
              <p class="card-text" style="text-align: justify;">It's a subcompact SUV with a 1.2-liter naturally aspirated petrol engine, a 1.0-liter turbocharged petrol engine, and a 1.5-liter diesel engine options
              </p>  
            <h5 class="ha1">Rs. 11.73 Lakh <strike>Rs. 11.73 Lakh</strike></h5>
            <h5 class="bes1">onwards <span class="off1">Offers</span></h5>
            <i class="fa-solid fa-star fa-sm" style="color:rgb(0, 0, 0);"></i>
            <i class="fa-solid fa-star fa-sm" style="color:rgb(0, 0, 0);"></i>
            <i class="fa-solid fa-star fa-sm" style="color:rgb(0, 0, 0);"></i>
            <i class="fa-solid fa-star fa-sm" style="color:rgb(0, 0, 0);"></i>
            <i class="fa-solid fa-star-half-stroke fa-sm" style="color: #000000;"></i>
            <h5 class="ha11">13-14 kmpl | 100 bhp</h5>

            <h5 class="ha11">Avg. Ex-Showroom price</h5>
            <center> <a href="Honda.php" class="btn btn-primary btn11">Add To Cart</a></center>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" id="card1">
        <div class="car">
          <img src="images/Toyota-Innova-Crysta.jpg" class="card-img-top car1" alt="..." height="200px" width="200px">
          <div class="card-body">
            <center>
              <h5 class="card-title ct1">Toyota-Innova-Crysta</h5>
            </center>
              <p class="card-text" style="text-align: justify;">It's a subcompact SUV with a 1.2-liter naturally aspirated petrol engine, a 1.0-liter turbocharged petrol engine, and a 1.5-liter diesel engine options
              </p>  
            <h5 class="ha1"> Rs. 10.73 Lakh <strike>Rs. 10.73 Lakh</strike></h5>
            <h5 class="bes1">onwards <span class="off1">Offers</span></h5>
            <i class="fa-solid fa-star fa-sm" style="color:rgb(0, 0, 0);"></i>
            <i class="fa-solid fa-star fa-sm" style="color:rgb(0, 0, 0);"></i>
            <i class="fa-solid fa-star fa-sm" style="color:rgb(0, 0, 0);"></i>
            <i class="fa-solid fa-star fa-sm" style="color:rgb(0, 0, 0);"></i>
            <i class="fa-solid fa-star-half-stroke fa-sm" style="color: #000000;"></i>
            <h5 class="ha11"> 15-17 kmpl | 102 bhp</h5>

            <h5 class="ha11">Avg. Ex-Showroom price</h5>
            <center> <a href="Honda.php" class="btn btn-primary btn11">Add To Cart</a></center>
          </div>
        </div>
      </div>  -->

      <?php
         }
        }

      }
      else{
        echo"<p>No best seller product found</p>";
      }
    ?>
   

   
    </div>


  </div>

</section>
<br><br>

<section class="">
  <div class="container">
    <div class="brand-logos">
      <img src="./Images/malogo.jpg" alt="Mahindra">
      <img src="./Images/mlogo.jpg" alt="Subaru">
      <img src="./Images/tlogo.jpg" alt="Hyundai">
      <img src="./Images/hlogo.jpg" alt="Toyota">

    </div>
  </div>
</section>
<section class="blog-section">
  <div class="container">
    <h4 class="section-title sect">From The Blog</h4>
    <div class="row g-4">
      <!-- Card 1 -->
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <img src="./Images/blog1.jpg" alt="Blog 1">
          <div class="blog-content">
            <div class="blog-meta">Feb 10, 2020 • 0 Comments</div>
            <div class="blog-title">Nullam Laoreet Lobortis Ligula...</div>
            <div class="blog-desc">Fusce ornare a ex at elementum. Mauris urna ante...</div>
            <a href="#" class="read-more">READ MORE <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <img src="./Images/blog2.jpg" alt="Blog 2">
          <div class="blog-content">
            <div class="blog-meta">Feb 10, 2020 • 0 Comments</div>
            <div class="blog-title">Aenean Commodo Volutpat Ornare...</div>
            <div class="blog-desc">Aenean commodo volutpat ornare. Quisque vulputate...</div>
            <a href="#" class="read-more">READ MORE <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <img src="./Images/ab3.jpg" alt="Blog 3">
          <div class="blog-content">
            <div class="blog-meta">Feb 15, 2020 • 2 Comments</div>
            <div class="blog-title">Curabitur Tempor Condimentum...</div>
            <div class="blog-desc">Aliquam erat volutpat. Nulla facilisi. Etiam nec arcu...</div>
            <a href="#" class="read-more">READ MORE <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<section class="h">
  <div class="container">
    <div class="hcon">
      <center> <b style="padding-top: 100px;">Subcribe For Latest Update</b></center>


      <center>
        <p>"When it comes to cars, only two things matter: power and speed.!"
        </p>
      </center>
      <center><button type="button" class="btn10">View More</button></center>

    </div>
  </div>
</section>

<div class="container py-5">
  <div class="text-center mb-5">
    <h2 class="section-title">What Our Customers Say!</h2>
    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore
      et dolore magna aliqua.</p>
  </div>

  <div class="row">
    <!-- Testimonial 1 -->
    <div class="col-md-4">
      <div class="testimonial-card">
        <div class="quote-icon">“</div>
        <div class="testimonial-header">
          <img src="https://randomuser.me/api/portraits/men/11.jpg" alt="Alex">
          <div>
            <div class="stars">★★★★★</div>
            <strong>Alex Ritchell</strong>
          </div>
        </div>
        <p class="testimonial-text">Perfect Themes and the best of all that you have many options to choose! Best
          Support team ever!</p>
      </div>
    </div>

    <!-- Testimonial 2 -->
    <div class="col-md-4">
      <div class="testimonial-card">
        <div class="quote-icon">“</div>
        <div class="testimonial-header">
          <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Leaax">
          <div>
            <div class="stars">★★★★☆</div>
            <strong>Leaax May</strong>
          </div>
        </div>
        <p class="testimonial-text">It has survived not only five Lorem Ipsum is simply dummy text of the printing and
          typesetting industry.</p>
      </div>
    </div>

    <!-- Testimonial 3 -->
    <div class="col-md-4">
      <div class="testimonial-card">
        <div class="quote-icon">“</div>
        <div class="testimonial-header">
          <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="Alan">
          <div>
            <div class="stars">★★★☆☆</div>
            <strong>Alan Sears</strong>
          </div>
        </div>
        <p class="testimonial-text">I'm one of those custom satisfied, Satisfied customer is the best source of
          advertisement. It has survived.</p>
      </div>
    </div>
  </div>
</div>
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
load_cart_item_number();
  });
 
</script>