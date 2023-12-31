<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="custom.css">

    <link rel="stylesheet" href="stylesheet.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"> -->

</head>
<body>
<header>
        <?php
            include "header.php";
        ?>
    </header>

    <div class="filler">
        <p class="filler"></p>
    </div>
    <main>

        <!-- Methods of Contact -->
        <div class="container text-center shadow mt-3 mb-3 bg-white rounded">
            <div class="row">
            <div class="col  p-3">
                <h4>Schedule an Appointment</h4>
                <p>To better value your time, I offer convienient appointment scheduling. A meeting can be organizied to meet your needs.</p>
            
  <!-- Button trigger modal -->
    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
        View Available Times
    </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Available Times</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <button type="button" class="btn btn-secondary"><a href="https://m.youtube.com/watch?v=dQw4w9WgXcQ" rel="Calendar Schedule">View Calendar</a></button>
            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
        </div>
        <!-- <div class="modal-footer">

        </div> -->
      </div>
    </div>
  </div>
            
            </div>

            <div class="col p-3 bg-light">
                <h4>Shoot me an Email</h4>
                <p>Send me an email with your name, contact details, and your <a href="services.php">preferred service.</a> You can expect a response within 24 hours.</p>
                <span class="fst-italic">@ - woodard.workshop@gmail.com</span>
            </div>

            <div class="col p-3">
                <h4>Give me a Call</h4>
                <p>You can also give me a call to discuss my services, to schedule an appointment, or give me so valued feedback.</p>
                <span class="fst-italic"># - (801)-695-4444</span>
            </div>
            </div>
        </div>
        </div>





        <!-- CONTACT FORM -->
        <div class="box">
        <div class="container mt-5">

            <h2 class="text-center mb-3 pt-5">Let's get in Touch</h2>


            <label for="">First and Last name</label>
            <div class="row mb-3">
                <div class="col">
                  <input type="text" class="form-control" placeholder="John" aria-label="First name">
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Doe" aria-label="Last name">
                </div>
              </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="johndoe@example.com">
            </div>



            <h4 class="text-center fs-4 mt-5">Select the service you're needing</h4>



            <div class="container text-center mb-3">
                    <input type="checkbox" class="btn-check" id="btn-check-1">
                    <label class="btn btn-light m-1" for="btn-check-1">Print Design</label>

                    <input type="checkbox" class="btn-check" id="btn-check-2">
                    <label class="btn btn-light m-1" for="btn-check-2">Branding</label>

                    <input type="checkbox" class="btn-check" id="btn-check-3">
                    <label class="btn btn-light m-1" for="btn-check-3">Digital Display Design</label>
    
                    <input type="checkbox" class="btn-check" id="btn-check-5">
                    <label class="btn btn-light m-1" for="btn-check-5">Custom Art Commission</label>

                    <input type="checkbox" class="btn-check" id="btn-check-6">
                    <label class="btn btn-light m-1" for="btn-check-6">Other</label>

                </div> 

              <div class="mb-5">
                <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>

              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-light btn-lg">Submit</button>
              </div>
              
        </div>


    </div>
    <footer>
        <?php
            include "footer.php";
        ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>