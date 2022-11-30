
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<?php 
require_once('config.php');
include('connect/connection.php');
$ID = $_SESSION["user_id"];
 $qry = $connect->query("SELECT * FROM `forms` where LoginID= '$ID'");
            while($row = $qry->fetch_assoc()){
              $getForm1 = (string)$row['Form1Status'];
              $getForm2 = (string)$row['Form2Status'];
              $getForm3 = (string)$row['Form3Status'];
              $getForm4 = (string)$row['Form4Status'];
            }
 ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5 ">
                <button class="navbar-toggler btn btn-sm" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <a class="navbar-brand" href="index1.php">
                <img src="<?php echo validate_image($_settings->info('logo')) ?>" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                <?php echo $_settings->info('short_name') ?>
                </a>
                

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                         <li class="nav-item"><a class="nav-link" aria-current="page" href="index1.php">Home</a></li>  
                         <li class="nav-item"><a class="nav-link" aria-current="page" href="appointment.php">Appoint Now</a></li> 
                         <li class="nav-item"><a class="nav-link" aria-current="page" href="#">Message</a></li> 
                         <li class="nav-item"><a class="nav-link" aria-current="page" href="bilateral1.php">Bilatiral</a></li>
                         <li class="nav-item"><a class="nav-link" aria-current="page" href="breating.php">Breathing</a></li>
                         <li class="nav-item"><a class="nav-link" aria-current="page" href="note.php">Note</a></li>
                         <li class="nav-item"><a class="nav-link" aria-current="page" href="drawing.php">Drawing</a></li> 
                         <!-- <li class="nav-item"><a class="nav-link" onclick="myFunction()" aria-current="page" href="consultation.php">Consultation</a></li> -->
                         

                    <li class="nav-item dropdown">
                          <a href="#"  <?php if ($getForm1 == 0 && $getForm2 == 0 && $getForm3 ==0 && $getForm4 == 0) { echo 'onclick="myFunction()"';
                            } else {
                              echo 'data-bs-toggle="dropdown"';
                            } ?> class="nav-link dropdown-toggle"  aria-expanded="false">
                          <i class="nav-icon fas fa-address-card"></i>
                          Consultation
                          </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo base_url ?>consultation/Consultation"><?php if ($getForm1== 1) {
                          echo "Consultation";
                        } ?></a></li>
                          <li><a class="dropdown-item" href="<?php echo base_url ?>consultation/Psychotheraphy"><?php if ($getForm2== 1) {
                          echo "Psychotheraphy";
                        } ?></a></li>
                          <li><a class="dropdown-item" href="<?php echo base_url ?>consultation/NeuroPsychologicalTesting"><?php if ($getForm3== 1) {
                          echo "Neuro-Psychological Testing";
                        } ?></a></li>
                          <li><a class="dropdown-item" href="<?php echo base_url ?>consultation/PscychologicalAssesment"><?php if ($getForm4== 1) {
                          echo "Psychological Assessment";
                        } ?></a></li>
                        </ul>
                    </li>

                         <li class="nav-item"><a class="nav-link" aria-current="page" href="index.php">Log out</a></li>
                    </ul>
                        
                    <div class="d-flex align-items-center">
                      
                    </div>
                </div>
            </div>
        </nav>


<script>
  $(function(){
    $('#logbtn').click(function(){
      uniin-_modal("","login.php")
    })
    $('#navbarResponsive').on('show.bs.collapse', function () {
        $('#mainNav').addClass('navbar-shrink')
    })
    $('#navbarResponsive').on('hidden.bs.collapse', function () {
        if($('body').offset.top == 0)
          $('#mainNav').removeClass('navbar-shrink')
    })
  })

  $('#search-form').submit(function(e){
    e.preventDefault()
     var sTxt = $('[name="search"]').val()
     if(sTxt != '')
      location.href = './?p=products&search='+sTxt;
  })
</script>
<script>
function myFunction() {
  alert("No form Available");
}
</script>
 <script>
    $(document).ready(function(){
      var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : 'home' ?>';
      var s = '<?php echo isset($_GET['s']) ? $_GET['s'] : '' ?>';
      page = page.replace(/\//g,'_');

      if($('.nav-link.nav-'+page).length > 0){
             $('.nav-link.nav-'+page).addClass('active')
        if($('.nav-link.nav-'+page).hasClass('tree-item') == true){
            $('.nav-link.nav-'+page).closest('.nav-treeview').siblings('a').addClass('active')
          $('.nav-link.nav-'+page).closest('.nav-treeview').parent().addClass('menu-open')
        }
        if($('.nav-link.nav-'+page).hasClass('nav-is-tree') == true){
          $('.nav-link.nav-'+page).parent().addClass('menu-open')
        }

      }
     
    })
  </script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 