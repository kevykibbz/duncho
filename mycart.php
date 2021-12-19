<?php include('header.php') ?>
<!-- gallery -->
  <section class="w3-gallery">
  <div class="porfolio-inf py-5">
    <div class="container pt-lg-5 pb-lg-4">
      <div class="row title-content" style="margin-bottom:10px !important;">
        <div class="col-lg-4 title-left">
        <h3 class="hny-title text-center">Duncho | My Cart 
          <?php
                $t='';
                $select_array=['email'=>$_COOKIE['userid']];
                $qsql=$obj->select('cart_items',$select_array);
                if($qsql)
                {
                  $t=number_format(count($qsql));
                  ?>
                    <span class="cart-counter badge badge-pill badge-danger p-2"><?php echo $t; ?></span>
                  <?php
                }
          ?></h3>
        </div>
      </div>
      <div class="port-text-cards text-left mt-5 mb-3 d-flex">
        <button class="btn active filter-button" data-filter="all" onclick="$('.filter-button').removeClass('active');$(this).addClass('active');">All</button>
        <button class="btn filter-button" data-filter="photo"onclick="$('.filter-button').removeClass('active');$(this).addClass('active');">Women</button>
        <button class="btn filter-button" data-filter="graphic"onclick="$('.filter-button').removeClass('active');$(this).addClass('active');">Men</button>
        <button class="btn filter-button" data-filter="webdesign"onclick="$('.filter-button').removeClass('active');$(this).addClass('active');">Teens</button>
      </div>
      <br />

      <div class="row">
        <?php
        $userid='';
        if(isset($_SESSION['userid']))
        {
          $userid=$_SESSION['userid'];
        }
        ?>
        <input type="hidden" name="userid" id="userid" value="<?php echo $userid;?>">
        <div class="col-12">
             <div class="cart-message text-center"></div>
        </div>
        <?php   
          $query=$con->query('SELECT * FROM cart_items ORDER BY id DESC ');
          if($query->num_rows >0)
          {
              while($rows=$query->fetch_assoc())
              {

               ?>
                 <div class="col-md-3 filter photo clear_cart">
                  <div class="each-item">
                    <a href="#"><img class="port-image img-fuild lazy"  loading="lazy" src="images/<?php echo $rows['item'] ?>"  alt="" /></a>
                  </div>
                  <div class="course-content">
                    <div class="course-info row">
                      <h6 class="col-12"><a class="course-instructor" href="#">Christina Rose</a></h6>
                      <p class="text-center">Cost $ <?php echo number_format($rows['price']);?></p>
                      <button class="btn btn-danger col-12 text-center course-titlegulp-wrapper removecart_btn" onclick="remove_cart(this,<?php echo $rows['id']?>)" disabled><i class="fa fa-remove"></i> remove from cart</button>
                    </div>
                  </div>
                </div>
               <?php
              }
          }
          else
          {
            ?>
             <div class="row">
               <div class="col-12 text-center">
                    <h4 class="text-center">cart is empty</h4>
               </div>
             </div>
            <?php
          }

        ?>
        <script type="text/javascript">
       function remove_cart(el,data)
       {
          $.ajax(
          {
              url: "php/remove_cart.php",
              method:'post',
              dataType: "text",
              data:{id:data},
              success:function(callback)
              {
                var data=JSON.parse(callback);
                if(data.error !=='')
                { 
                  $('.cart-message').html('<div class="alert alert-danger">'+data.error+'</div>');
                }
                else
                {
                  $('.cart-message').html('<div class="alert alert-success">'+data.success+'</div>');
                  window.location=window.location;
                }
                
              },
              error:function()
              {
                alert('something went wrong');
              }
          });
       }
      </script>
      </div>
           <?php
                $query=$con->query('SELECT * FROM cart_items ORDER BY id DESC ');
                if($query->num_rows >0)
                {
                    $tot='';
                    $sql =$con->prepare("SELECT sum(price) as total  FROM `cart_items` ");
                    $sql->execute();
                    $result=$sql->get_result();
                    while ($row =$result->fetch_assoc())
                    { 
                       $tot=$row['total'];
                    }
                    ?>
                      <p class="text-center">Total Cost ............................$ <?php echo $tot;?></p>
                      <p class="text-center">Shipping fee...............................................$ 30</p>
                      <p class="text-center">Total amount................................................$ <?php echo number_format($tot+30);?></p>
                      <div class="text-center"><a  href="checkout.php"  class="btn btn-success col-6 text-center course-titlegulp-wrapper checkotbtn" disabled> proceed to checkout <i class="fa fa-arrow-right"></i></a></div>
                    <?php
                }
            ?>
    </div>
    <!-- //gallery container -->
  </div>
</section>
<!-- //gallery -->
  <script type="text/javascript">
    $(function()
    {
      if(localStorage.userid ==='' || localStorage.userid ===undefined)
      {
        window.location='login.php';
      }
      else
      {
        $('.logged_in,.home-links').removeClass('d-none');
        $('.removecart_btn,.checkotbtn').attr('disabled',false);
      }
    });
  </script>
<?php include('footer.php') ?>