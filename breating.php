<!-- yugn inayos ko dito ay yung sa header -->
<!-- parehas sila ng ID nung sa nasa header tsaka nasa body kaya natetake nila ang css ng bawat isa -->
<!-- yung mga container na id sa body pinalitan ko ng cont --> 
<!-- yung nasa css tsaka java na container na word pinalitan ko din ng cont -->
<?php require_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php require_once('inc/header.php') ?>
<?php require_once('inc/topBarNav.php') ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style.css" />
    <title>Relaxer</title>
  </head>
  <body>

    <br>
    <br>
    <br>
    <h1>Breathing</h1>

    <div class="cont" id="cont">
      <div class="circle"></div>

      <p id="text"></p>

      <div class="pointer-cont">
        <span class="pointer"></span>
      </div>

      <div class="gradient-circle"></div>
    </div>
    <style>
      @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');

* {
  box-sizing: border-box;
}

body {
  background-color: #fff;
  color: #fff;
}

.cont {
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

.pointer-cont {
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

.cont.grow {
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

.cont.shrink {
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
const cont = document.getElementById('cont');
const text = document.getElementById('text');

const totalTime = 7500;
const breatheTime = (totalTime / 5) * 2;
const holdTime = totalTime / 5;

breathAnimation();

function breathAnimation() {
  text.innerText = 'Breathe In!';
  cont.className = 'cont grow';

  setTimeout(() => {
    text.innerText = 'Hold';

    setTimeout(() => {
      text.innerText = 'Breathe Out!';
      cont.className = 'cont shrink';
    }, holdTime);
  }, breatheTime);
}

setInterval(breathAnimation, totalTime);

    </script>
  </body>
</html>
