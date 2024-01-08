
<!--last child-->

<footer class="bg-light p-3 m-0 h-100 text-white footer mx-auto mt-auto mb-0 bg-dark w-100">
<h5 class="text-center">Created by</h5>
<h6 class="text-center">Banglar_Rong_2.0</h6>
<p class="text-center">Thanks for being with us.Dress Yourself in Banglar Rong</p>
</footer>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<!--bootstrape Js link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script >

function onPes()
{
    let x = document.querySelector('.submitBTN');
    x.classList.remove('disabled');
    console.log(x.target.value);
}
$(document).ready(function() {
      $('#onkeyPress').keypress(()=>{
        $('.submitBTN').removeClass('disabled');
      })
});



</script>
<script >
    </body>
</html>