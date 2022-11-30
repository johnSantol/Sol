 <?php require_once('inc/topBarNav.php') ?>
     <?php require_once('inc/navigation.php') ?>


<?php

if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['check_list'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list'] as $selected){
$qry = $conn->query("UPDATE `forms` SET `Form3Status`='1' WHERE LoginID = $selected;");
}}}
?>
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
<input type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary" value="Upload" name="">

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

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div  class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable">
    <div style="background-color: white;" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color: black;">Upload Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
        <table id="datatable" class="table table-striped" style="width:100%">
         <thead>
            <tr>
                <th></th>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th> 
            </tr>
        </thead>
     
        <tbody>
          <?php 
          $i = 1;
          $qry = $conn->query("SELECT `user_id`,`fname`,`lname`,`email` FROM `login`");
            while($row = $qry->fetch_assoc()):
          ?>
            <tr>
              <td class="text-center"><input type="checkbox" name="check_list[]" value="<?php echo($row['user_id']) ?>"></td>
              <td><?php echo ucwords($row['user_id']) ?></td>
              <td><?php echo ucwords($row['fname']) ?></td>
              <td><?php echo ucwords($row['lname']) ?></td>
            </tr>
          <?php endwhile; ?>
        </tbody>
       
    </table>
   
  
  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" name="submit" class="btn btn-primary" value="Submit"/>
        <!-- <button type="button" name="SubmitButton" data-bs-dismiss="modal" class="btn btn-primary">Done</button> -->
      </form>
      </div>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function () {
    $('#datatable').DataTable();
});
</script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">

