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
                         <li class="nav-item"><a class="nav-link" onclick="myFunction()" aria-current="page" href="#">Consultation</a></li>
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