
 <?php require_once('inc/topBarNav.php') ?>
     <?php require_once('inc/navigation.php') ?>

<div class="card">
  <div class="card-body">              

    <form action="../admin/consultation/Form1/formInsert.php" method="GET">
    <!-- <form action="#" method="GET"> -->
      <h1 >Consultation Form</h1>

      <div class="row">
        <div class="col">
          <input type="text" class="form-control" name="cname" placeholder="Name" aria-label="Full Name">
        </div>
        <div class="col">
          <input type="datetime" class="form-control" name="cbday" placeholder="Birthday" aria-label="Birthday">
        </div>
      </div>
<br>  
      <div class="row">
        <div class="col">
          <input type="text" class="form-control" name="cgender" placeholder="Gender" aria-label="Gender">
        </div>
        <div class="col">
          <input type="text" class="form-control" name="ccv" placeholder="Civil Status" aria-label="Civil Status">
        </div>
        <div class="col">
          <input type="text" class="form-control" name="creligion" placeholder="Religion" aria-label="Religion">
        </div>
        <div class="col">
          <input type="text" class="form-control"  name="cbo" placeholder="Birth Order" aria-label="Birth Order">
        </div>
      </div>
<br>
      <div class="row">
        <div class="col">
          <input type="text" class="form-control" name="caddress" placeholder="Address" aria-label="Address">
        </div>
      </div>
  <br><br><br>
      <div class="row">
        <div class="col">
          <input type="text" class="form-control" name="chouse" placeholder="House No./Lot/Block/Building Number" aria-label="">
        </div>
        <div class="col">
          <input type="text" class="form-control" name="cbarangay"placeholder="Barangay" aria-label="">
        </div>
      </div>
<br>
      <div class="row">
        <div class="col">
          <input type="text" class="form-control" name="ctowncity" placeholder="Town/City" aria-label="">
        </div>
        <div class="col">
          <input type="text" class="form-control" name="province" placeholder="Province" aria-label="">
        </div>
      </div>
<br>
      <div class="row">
        <div class="col">
          <input type="text" class="form-control" name="mobilenumber" placeholder="Mobile Number" aria-label="">
        </div>
        <div class="col">
          <input type="text" class="form-control" name="cemail" placeholder="Email Address" aria-label="">
        </div>
      </div>

      <input type="submit" name="Upload" id="Upload"  value="Upload" style="position: relative;" class="btn btn-primary" >
    </form>
    </div> <!-- Form End -->
    </div>
<input type="button"  value="Upload" style="position: relative;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div  class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div style="background-color: white;" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color: black;">Upload Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <table class=" table-hover" style="color:black;">
        <thead>
    
        <tbody>
          <?php 
          $i = 1;
          $qry = $conn->query("SELECT `email` FROM `login`");
            // $qry = $conn->query("SELECT *,concat(firstname,' ',lastname) as name from `login` where id != '1' and id != '{$_settings->userdata('id')}' and `type` != 3 order by concat(firstname,' ',lastname) asc ");
            while($row = $qry->fetch_assoc()):
          ?>
            <tr>
              <td class="text-center"><input type="checkbox" name=""></td>
              <td><?php echo ucwords($row['email']) ?></td>
              <!-- <td ><p class="m-0 truncate-1"><?php echo $row['username'] ?></p></td> -->
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Done</button>
      </div>
    </div>
  </div>
</div>


 