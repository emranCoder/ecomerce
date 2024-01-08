    

<!--last child-->

<footer class="bg-light p-3 m-0 h-100 text-white footer mx-auto mt-5 mb-0 bg-dark w-full">
<h5 class="text-center">Created by</h5>
<h6 class="text-center">Banglar_Rong_2.0</h6>
<p class="text-center">Thanks for being with us.Dress Yourself in Banglar Rong</p>
</footer>


    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<!--bootstrape Js link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script >


  let cartValue = document.querySelector('.cart-value');
  let x =<?php 
      if(isset($_SESSION['NumberOfProducts']))
      {
        echo json_encode($_SESSION['NumberOfProducts']);
      }else
      {
        echo json_encode(0);
      }
       ?>;
  let products=<?php 
      if(isset($_SESSION['products']))
      {
        echo json_encode($_SESSION['products']);
      }else
      {
        echo json_encode([]);
      }
       ?>;
  function addCart(e)
  {
    products.push(e);
    x+=1;
    cartValue.innerText = x;    

    $.post("session/cardSession.php", { data: products }, function(response) {
      console.log(response);
  });
  }
  function makePayment(){
      let paymentMethod = document.querySelector('.checkBox input[type=checkbox]:checked').value;
      let addr = document.querySelector('.addr').value;
      let products = <?php 
      if(isset($_SESSION['products']))
      {
        echo json_encode($_SESSION['products']);
      }else
      {
        echo json_encode([]);
      }
       ?>;
      let id = <?php
      
      if(isset($_SESSION['login_email']))
      {
        echo json_encode($_SESSION['login_email']);
      }else
      {
        echo json_encode(0);
      } ?>;

      $.post("order_process.php", { paymentMethod: paymentMethod,addr:addr,id:id,products:products }, function(response) {

      if(response==="ok")
      {
        window.location.replace("http://localhost/banglar/index.php?order=true");
      }else
      {
        window.location.replace("http://localhost/banglar/cart.php?order=false");
      }
  });
}  

function methodChoose1(){
  let method = document.getElementsByClassName('method-Choose');
method[1]['checked']= false;
     
}
function methodChoose2(){
  let method = document.getElementsByClassName('method-Choose');
method[0]['checked']= false;
}
  $(document).ready(function() {
      $('#onkeyPress').keypress(()=>{
        $('.submitBTN').removeClass('disabled');
      })
});


</script>

</body>
</html>