
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<?php 
require_once('../../config.php');
include('../../connect/connection.php');
$ID = $_SESSION["user_id"];
 $qry = $connect->query("SELECT `Form1Status` FROM `login` where user_id= '$ID'");
            while($row = $qry->fetch_assoc()){
              $getForm1 = (string)$row['Form1Status'];
              // echo $row['Form1Status'];
              // echo $getForm1;
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
                         <li class="nav-item"><a class="nav-link" aria-current="page" href="../../index1.php">Home</a></li>  
                         <li class="nav-item"><a class="nav-link" aria-current="page" href="../../appointment.php">Appoint Now</a></li> 
                         <li class="nav-item"><a class="nav-link" aria-current="page" href="#">Message</a></li> 
                         <li class="nav-item"><a class="nav-link" aria-current="page" href="../../bilateral1.php">Bilatiral</a></li>
                         <li class="nav-item"><a class="nav-link" aria-current="page" href="../../breating.php">Breathing</a></li>
                         <li class="nav-item"><a class="nav-link" aria-current="page" href="../../note.php">Note</a></li>
                         <li class="nav-item"><a class="nav-link" aria-current="page" href="../../drawing.php">Drawing</a></li> 
                         <!-- <li class="nav-item"><a class="nav-link" onclick="myFunction()" aria-current="page" href="consultation.php">Consultation</a></li> -->
                         

                    <li class="nav-item dropdown">
                          <a href="#" class=" nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="nav-icon fas fa-address-card"></i>
                          Consultation
                          </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo base_url ?>consultation/Consultation">Consultation</a></li>
                          <li><a class="dropdown-item" href="<?php echo base_url ?>consultation/Psychotheraphy">Psychotheraphy</a></li>
                          <li><a class="dropdown-item" href="<?php echo base_url ?>consultation/NeuroPsychologicalTesting">Neuro-Psychological Testing</a></li>
                          <li><a class="dropdown-item" href="<?php echo base_url ?>consultation/PscychologicalAssesment">Psychological Assessment</a></li>
                        </ul>
                    </li>

                         <li class="nav-item"><a class="nav-link" aria-current="page" href="../../index.php">Log out</a></li>
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

 <br>
           
<center>
<div class="card" style="width: 60%"><br> 
 <center><h2 >Neuro Psychological Testing Form</h2></center>
  <div class="card-body"><br> 
<p style="word-spacing: 10px;">
I,<input type="text" class=" in col-md-6" placeholder="Name" id="cname" name="cname">,<input type="text" class="in col-md-1" placeholder="Age"> years old, a resident of <input type="text" class="in col-md-4" placeholder="Address" id="cname" name="cname">,agree to undergo  a pre-employment psychological evaluation under Sol Psychological Services.</p>
<p>I understand that the objective of the process is to determine my cognitive, emotional, social, and occupational  functioning.</p>


<p style="text-indent: 30px;"><b>A. Terms of Payment</b></p>
<p>I fully understand that the service provided by the Sol Psychological Services will  accumulate the total amount of <b>ONE THOUSAND EIGHT HUNDRED PESOS</b> (1,800.00) only for the whole course of the evaluation until the release of my psychological evaluation report.</p>
<p>I agree that I must pay  the amount of <b>ONE THOUSAND EIGHT HUNDRED PESOS</b> (1,800.00) upon testing administration and release of the psychological evaluation report.</p>
<p style="text-indent: 30px;"><b>B. Informed Consent</b></p>
<p>I understand that the assessment involves the completion of a series of psychological tests and clinical interview. The total amount the time of the assessment may vary and will depend upon the questions that I or the clincian may have.</p>
<p>I understand that I or the clinician may experience emotional distress because of the personal nature of some of the information solicited in the assessment process. In this regard, I or the clinician, may interrupt or discontinue this assessment procedure at any time.</p>
<p>I solemnly attest that all information that I will give to this assessment is true and correct to the best of my knowledge.</p>
<p style="text-indent: 30px;"><b>C. Limits of Confidentiality</b></p>
<p>Like all treatment records, reports and results of psychological assessment are confidential and can only be released with a written consent authorizing such release. However, I understand that if I disclose information related to suspected threats of physical harm of self or others, or if commanded of court , Sol Psychological Services will be required to disclose such information to appropriate authorities or parties mandated by the law.</p>

<p><b>I have read, understood and agreed to the following statement as conditions under which I have given this consent.I also understand that with written notice, I can revoke this consent at any time.</b></p>
<input type="checkbox" value="I agree to the terms and conditions" style="color:  grey; text-align:left ;" name=""> I have read and accept the agreement
<br><br>  
<input type="submit" class="btn btn-primary" value="Submit" name="">

</div>

</div>
</center>



<style>
  p{
    text-align: left;
  }
  .in{
    border:none;
    border-bottom:1px solid black;
    margin-left: 5px;
    margin-right: 5px;
  }
</style> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">