<?php include('include/header.php') ;

if(!isset($_SESSION['loggedUserId'])) {
 header('Location:../login.php');
}

?>
<section id="roomType" class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center pb-2">
            <div class="col-md-7 heading-section text-center ftco-animate fadeInUp ftco-animated">
                <h2 class="my-3">Type kamar yang Tersedia</h2>
            </div>
        </div>
 
 <!-- Filter Drop down  -->
 <div class="float-right ">
<select name="category" id="roomFilter" class="form-control custom-select bg-white border-md filter">
  <option disabled="" selected="">FilterBy  </option>
  <option value="1">All</option>
  <option value="2">Harga Dibawah 500rb</option>
  <option value="3">Harga diantara 500rb dan 1jt</option>
  <option value="4">Harga Diatas 1jt</option>
</select>
</div>

<br>
<br>
<br>
        <div class="row" id="contentArea">
            
           
        </div>

    </div>
</section>

<script src ="js/roomType.js" ></script>

<?php include('include/footer.php')?>

