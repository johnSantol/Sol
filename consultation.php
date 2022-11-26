
<?php require_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php require_once('inc/header.php') ?>
<?php require_once('inc/topBarNav.php') ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Music Player</title>
  </head>
  <body>
   

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
  </body>

    <style>
      @import url('https://fonts.googleapis.com/css?family=Lato&display=swap');

* {
  box-sizing: border-box;
}

body {
  background-image: linear-gradient(
    0deg,
    rgba(247, 247, 247, 1) 23.8%,
    rgb(255, 255, 255) 92%
  );
 
  
  flex-direction: column;
  align-items: center;
  justify-content: center;
  font-family: 'Lato', sans-serif;
  
}
.h {
text-align: center;
}

.music-container {
  background-color: rgba(108, 245, 245, 0.753);
  border-radius: 15px;
  box-shadow: 0 20px 20px 0 rgba(3, 148, 158, 0.89);
  display: flex;
  padding: 20px 30px;
  position: relative;
  margin: 100px 0;
  z-index: 10;
}

.img-container {
  position: relative;
  width: 110px;
}

.img-container::after {
  content: '';
  background-color: rgb(134, 205, 238);
  border-radius: 50%;
  position: absolute;
  bottom: 100%;
  left: 50%;
  width: 20px;
  height: 20px;
  transform: translate(-50%, 50%);
}

.img-container img {
  border-radius: 50%;
  object-fit: cover;
  height: 110px;
  width: inherit;
  position: absolute;
  bottom: 0;
  left: 0;
  animation: rotate 3s linear infinite;

  animation-play-state: paused;
}

.music-container.play .img-container img {
  animation-play-state: running;
}

@keyframes rotate {
  from {
    transform: rotate(0deg);
  }

  to {
    transform: rotate(360deg);
  }
}

.navigation {
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 1;
}

.action-btn {
  background-color: rgba(108, 245, 245, 0.753);
  border: 0;
  color: #ffffff;
  font-size: 20px;
  cursor: pointer;
  padding: 10px;
  margin: 0 20px;
}

.action-btn.action-btn-big {
  color: #ffffff;
  font-size: 30px;
}

.action-btn:focus {
  outline: 0;
}

.music-info {
  background-color: rgba(5, 5, 5, 0.164);
  border-radius: 15px 15px 0 0;
  position: absolute;
  top: 0;
  left: 20px;
  width: calc(100% - 40px);
  padding: 10px 10px 10px 150px;
  opacity: 0;
  transform: translateY(0%);
  transition: transform 0.3s ease-in, opacity 0.3s ease-in;
  z-index: 0;
}

.music-container.play .music-info {
  opacity: 1;
  transform: translateY(-100%);
}

.music-info h4 {
  margin: 0;
}

.progress-container {
  background: #fff;
  border-radius: 5px;
  cursor: pointer;
  margin: 10px 0;
  height: 4px;
  width: 100%;
}

.progress {
  background-color: #fe8daa;
  border-radius: 5px;
  height: 100%;
  width: 0%;
  transition: width 0.1s linear;
}

    </style>
</html>
