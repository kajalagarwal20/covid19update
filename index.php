<!DOCTYPE html>
<html>
<head>
<title>Lets fight corona </title>
    <?php include 'link/links.php' ;?>
   <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg nav_style nav nav-tabs p-3">
  <a class="navbar-brand pl-5" href="index.php">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-3">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">IndiaCoronaLive <span class="sr-only">(current)</span></a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="worldmap.php">WorldCoronaLive </a>
      </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="symptoms.php">Symptoms</a>
            <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Should you get tested?</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Prevention</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>

        <li class="nav-item">
        <a class="nav-link" href="#symptomsid">Symptoms</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#vid">Prevention</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="#contactid">Contact us</a>
    </li>

    </ul>
  </div>
</nav>
    <section class="corona_update_ind container-fluid">
    <div class="my-5">
        <h3 class="text-center text-uppercase">COVID-19 LIVE UPDATE OF INDIA STATEWISE</h3>
        </div>
        <div class="table-resoponsive">
            <table class="table table-bordered table-striped text-center table-hover">
            <tr>
                <th>Lastupdatetime</th>
                <th>State</th>
                <th>Confirmed</th>
                <th>Active</th>
                <th>Reovered</th>
                <th>Deaths</th>
            </tr>
        <?php
                $data = file_get_contents('https://api.covid19india.org/data.json');
                $coronalive = json_decode($data,true);

                $totalstates=count($coronalive['statewise']);
                $i=1;
                while($i < $totalstates)
                {?>
                <tr>
                    <td><?php echo $coronalive['statewise'][$i]['lastupdatedtime'] . "<br>" ; ?></td>
                    <td><?php echo $coronalive['statewise'][$i]['state'] . "<br>"; ?></td>
                    <td><?php echo $coronalive['statewise'][$i]['confirmed'] . "<br>";?></td>
                    <td><?php echo $coronalive['statewise'][$i]['active'] . "<br>"; ?></td>
                    <td><?php echo $coronalive['statewise'][$i]['recovered'] . "<br>";?></td>
                    <td><?php echo $coronalive['statewise'][$i]['deaths'] . "<br>"; ?></td>
                </tr>
                  <?php
                 $i++;
                }
                ?>





            </table>
        </div>
    </section>


    <!--about section-->

    <div class="container-fluid sub-section pb-5 pt-5" id="aboutid">
        <div class="section_header text-center mb-5 mt-4">
            <h1>ABOUT COVID-19</h1>
        </div>
        <div class="row">
            <div class="col-lg-5 col-md-6 col-12">
                <img src="images/aboutcorona4.jpg" class="img-fluid" alt="About Corona virus">
             </div>
        <div class="col-lg-6 col-md-6 col-12">
            <h2>WHAT IS COVID-19(CORONA VIRUS)</h2>
            <p>Coronaviruses are a group of viruses that can cause disease in both animals and humans. The severe acute respiratory syndrome (SARS) virus strain known as SARS-CoV is an example of a coronavirus.</p>
            <p>The recent outbreak began in Wuhan, a city in the Hubei province of China. Reports of the first COVID-19 cases started in December 2019.

Coronaviruses are common in certain species of animals, such as cattle and camels. Although the transmission of coronaviruses from animals to humans is rare, this new strain likely came from bats, though one study suggests pangolins may be the origin.</p>
            <p>The most common way that this illness spreads is through close contact with someone who has the infection. Close contact is within around 6 feet.

The disease is most contagious when a person’s symptoms are at their peak.</p>
            </div>
        </div>
    </div>


<!-- Symptoms -->
<div class="container-fluid sub-section pb-5 pt-5" id="symptomsid">
    <div class="section_header text-center mb-5 mt-4">
        <h1>Corona Virus Symptoms</h1>
    </div>
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">
            <img src="images/cough.jpg" class="img-fluid" height="140" width="140"/>
                <figcaption>Cough</figcaption>
            </figure>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">
            <img src="images/runnynose.jpg" class="img-fluid" height="140" width="140"/>
                <figcaption>Runny nose</figcaption>
            </figure>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">
            <img src="images/cold.jpg" class="img-fluid" height="140" width="140"/>
                <figcaption>Cold</figcaption>
            </figure>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">
            <img src="images/fever3.jpg" class="img-fluid" height="140" width="140"/>
                <figcaption>Fever</figcaption>
            </figure>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">
            <img src="images/tired.jpg" class="img-fluid" height="140" width="140"/>
                <figcaption>Tiredness</figcaption>
            </figure>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">
            <img src="images/breathe.jpg" class="img-fluid" height="140" width="140"/>
                <figcaption>Difficulty in breathing(severe cases)</figcaption>
            </figure>
        </div>

    </div>
</div>


</div>
<!-- prevention -->
<section id="vid">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <h2>Protective Measures to fight against Covid-19</h2><br>
        <p>COVID-19 is a deadly virus which isn't cureable yet as its vaccine has not been created. But taking preventive
          measures is always possible and must be taken in order to stop the spread of the virus. Have a look on how WHO advices
          people to take safety and preventive measures to stay safe.</p>
          <p>Click on the link below to view the preventive measures issued by Ministry of Health and Welfare Government of India,that can be taken by us.
        <br>  <a class="id1" href="prevent.pdf" target="_blank" type="application/pdf">View PDF</a>
        </div>
        <div class="col-xm-12 col-sm-12 col-md-6 col-lg-6">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/bPITHEiFWLc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

    </div>
  </div>
</section>

<!-- CONTACT US -->
<div class="container-fluid sub-section pb-5 pt-5" id="contactid">
    <div class="section_header text-center mb-5 mt-4">
        <h1>CONTACT US NOW IF YOU HAVE SYMPTOMS OF CORONA VIRUS</h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 col-12">

          <form action="" method="post">
            <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control" name="username" placeholder="name" autocomplete="off" required>
            </div>

            <div class="form-group">
              <label>Email address</label>
              <input type="email" class="form-control" placeholder="name@example.com" name="email" autocomplete="off" required>
            </div>

            <div class="form-group">
              <label>Mobile</label>
              <input type="number" class="form-control" placeholder="Mobile" name="mobile" autocomplete="off" required>
            </div>

            <div class="form-group">
              <label>Select symptoms</label>
              <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                <input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
                  <label class="custom-control-label" for="customcheckbox1">Cold</label>
              </div>

              <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                <input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever">
                  <label class="custom-control-label" for="customcheckbox2">Fever</label>
              </div>

              <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                <input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="Difficulty">
                  <label class="custom-control-label" for="customcheckbox3">Difficulty in breathing</label>
              </div>

              <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                <input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="tired">
                  <label class="custom-control-label" for="customcheckbox4">Feeling weak</label>
              </div>
            </div>
            <div class="form-group">
              <label>Write More about your symptoms and travel history if any</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
</div>

<!-- Return to Top -->
<a href="index.php" id="return-to-top"><i class="icon-chevron-up"></i></a>
</body>

<!-- FOOTER-->
<footer class="mt-5">
  <div class="footer-copyright text-center py-3" id="footerid">© 2020 Copyright:
    <a href="https://kajalcovid.com/"> Mywebsite.com</a>
  </div>
</footer>

</html>

<?php
include 'dbcon.php';
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$sym=$_POST['coronasym'];
$msg=$_POST['msg'];

$chk="";

foreach($sym as $chk1) {
  $chk .= $chk1 .",";
}
$insertquery = "INSERT INTO coronacase(username,email,mobile,symp,details) VALUES('$username','$email','$mobile','$chk','$msg')";
$query = mysqli_query($con,$insertquery);

 if($query)
 {
   ?>
   <script>
       alert('Inserted successfully')
   </script>
   <?php
 }else{
  ?>
  <script>
      alert('Insertion failed')
  </script>
 <?php
 }
}
  ?>
