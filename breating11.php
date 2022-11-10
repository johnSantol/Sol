<?php require_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php require_once('inc/header.php') ?>
<?php require_once('inc/topBarNav.php') ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>MOODICATION</title>
    <link rel="stylesheet" href="style.css">
</head>
<style class = "text/css">

body{
    width: 100%;
    /*background: url(bg1.jpg);*/
    /*background-position: center;*/
    background-size: cover;
    height: 100vh;
}

.srch:focus{
    outline: none;
}

.content{
    width: 1200px;
    height: auto;
    margin: auto;
    color: black;
    position: relative;
}

.content .par{
    padding-left: 20px;
    padding-bottom: 25px;
    font-family: Arial;
    letter-spacing: 1.2px;
    line-height: 30px;
}

.content h1{
    font-family: 'Times New Roman';
    font-size: 50px;
    padding-left: 20px;
    margin-top: 9%;
    letter-spacing: 2px;
}

.content .cn{
    width: 160px;
    height: 40px;
    background: #ff7200;
    border: none;
    margin-bottom: 10px;
    margin-left: 20px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    transition: .4s ease;
    
}

.content .cn a{
    text-decoration: none;
    color: #000;
    transition: .3s ease;
}

.cn:hover{
    background-color: #fff;
}

.content span{
    color: #ff7200;
    font-size: 65px
}

.form{
    width: 250px;
    height: 380px;
    background: linear-gradient(to top, rgba(0,0,0,0.8)50%,rgba(0,0,0,0.8)50%);
    position: absolute;
    top: -20px;
    left: 870px;
    transform: translate(0%,-5%);
    border-radius: 10px;
    padding: 25px;
}

.form h2{
    width: 220px;
    font-family: sans-serif;
    text-align: center;
    color: #ff7200;
    font-size: 22px;
    background-color: #fff;
    border-radius: 10px;
    margin: 2px;
    padding: 8px;
}

.form input{
    width: 240px;
    height: 35px;
    background: transparent;
    border-bottom: 1px solid #ff7200;
    border-top: none;
    border-right: none;
    border-left: none;
    color: #fff;
    font-size: 15px;
    letter-spacing: 1px;
    margin-top: 30px;
    font-family: sans-serif;
}

.form input:focus{
    outline: none;
}

::placeholder{
    color: #fff;
    font-family: Arial;
}

.btnn{
    width: 240px;
    height: 40px;
    background: #ff7200;
    border: none;
    margin-top: 30px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color: #fff;
    transition: 0.4s ease;
}
.btnn:hover{
    background: #fff;
    color: #ff7200;
}
.btnn a{
    text-decoration: none;
    color: #000;
    font-weight: bold;
}
.form .link{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 17px;
    padding-top: 20px;
    text-align: center;
}
.form .link a{
    text-decoration: none;
    color: #ff7200;
}
.liw{
    padding-top: 15px;
    padding-bottom: 10px;
    text-align: center;
}
.icons a{
    text-decoration: none;
    color: #fff;
}
.icons ion-icon{
    color: #fff;
    font-size: 30px;
    padding-left: 14px;
    padding-top: 5px;
    transition: 0.3s ease;
}
.icons ion-icon:hover{
    color: #ff7200;
}
</style>

    <style>
      @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');

* {
  box-sizing: border-box;
}

body {
  background-color: #fff;
  color: #fff;
}

.container1 {
  display: flex;
  align-items: center;
  justify-content: center;
  margin: auto;
  height: 300px;
  width: 300px;
  position: relative;
  transform: scale(1);
}

.circle {
  background-color: #010f1c;
  height: 100%;
  width: 100%;
  border-radius: 50%;
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
}

.gradient-circle {
  background: conic-gradient(
    #55b7a4 0%,
    #4ca493 40%,
    #808080 40%,
    #808080 60%,
    #336d62 60%,
    #2a5b52 100%
  );
  height: 320px;
  width: 320px;
  z-index: -2;
  border-radius: 50%;
  position: absolute;
  top: -10px;
  left: -10px;
}

.pointer {
  background-color: #000;
  border-radius: 50%;
  height: 20px;
  width: 20px;
  display: block;
}

.pointer-container1 {
  position: absolute;
  top: -40px;
  left: 140px;
  width: 20px;
  height: 190px;
  animation: rotate 7.5s linear forwards infinite;
  transform-origin: bottom center;
}

@keyframes rotate {
  from {
    transform: rotate(0deg);
  }

  to {
    transform: rotate(360deg);
  }
}

.container.grow {
  animation: grow 3s linear forwards;
}

@keyframes grow {
  from {
    transform: scale(1);
  }

  to {
    transform: scale(1.2);
  }
}

.container.shrink {
  animation: shrink 3s linear forwards;
}

@keyframes shrink {
  from {
    transform: scale(1.2);
  }

  to {
    transform: scale(1);
  }
}

</style>
<script>
const container = document.getElementById('container');
const text = document.getElementById('text');

const totalTime = 7500;
const breatheTime = (totalTime / 5) * 2;
const holdTime = totalTime / 5;

breathAnimation();

function breathAnimation() {
  text.innerText = 'Breathe In!';
  container.className = 'container grow';

  setTimeout(() => {
    text.innerText = 'Hold';

    setTimeout(() => {
      text.innerText = 'Breathe Out!';
      container.className = 'container shrink';
    }, holdTime);
  }, breatheTime);
}

setInterval(breathAnimation, totalTime);

    </script>

<body>
    <div class="container1" id="container1">
      <div class="circle"></div>

      <p id="text"></p>

      <div class="pointer-container1">
        <span class="pointer"></span>
      </div>

      <div class="gradient-circle"></div>
    </div>

     
</body>
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

</html>