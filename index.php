<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Simple Crud</title>
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/0721815644.js" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
  </script>

  <link rel="stylesheet" href="./css/style.css">

</head>


<body>

  <div class="page">

    <div class="sidebar">
      <!-- <div class="sidebar-header">
                <div class="sidebar-logo-container">
                    <div class="logo-container">
                        <img class="logo-sidebar" src="assets/img/logo.png" />
                    </div>
                    <div class="brand-name-container">
                        <p class="brand-name">
                            Futuric<br />
                            <span class="brand-subname">
                                Workspace
                            </span>
                        </p>
                    </div>
                </div>
            </div> -->
      <div class="sidebar-body">
        <ul class="navigation-list">
          <li class="navigation-list-item">
            <a class="navigation-link" href="#" onclick="showetudiant()">
              <div class="row">
                <div class="col-2">
                  <i class="fas fa-users"></i>
                </div>
                <div class="col-9">
                  Etudiant
                </div>
              </div>
            </a>
          </li>
          <li class="navigation-list-item">
            <a class="navigation-link" href="#" onclick="showbultin()">
              <div class="row">
                <div class="col-2">
                  <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="col-9">
                  Bultin
                </div>
              </div>
            </a>
          </li>
          <li class="navigation-list-item active">
            <a class="navigation-link" href="#" onclick="showmatier()">
              <div class="row">
                <div class="col-2">
                  <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <div class="col-9">
                  Matiers
                </div>
              </div>
            </a>
          </li>



        </ul>

      </div>
    </div>

    <div class="content">
      <div class="navigationBar">

        <button id="sidebarToggle" class="btn sidebarToggle">
          <i class="fas fa-bars"></i>

          </a>


      </div>
      <div>
        <h1 class="head_title" id="theheadtitle"></h1>
      </div>

    </div>
      
    <div class="themaincontent" id="icontent">
      <!-- <iframe src="./etudiant/index.php" frameborder="0"></iframe> -->

    </div>
    

  </div>


  <script>
    let sidebarToggle = document.querySelector(".sidebarToggle");
    sidebarToggle.addEventListener("click", function() {
      document.querySelector("body").classList.toggle("active");
      document.getElementById("sidebarToggle").classList.toggle("active");
    });

     
    var showiframe;

    function showmatier() {

      if(showiframe = false){
        document.getElementById('theheadtitle').innerHTML = "Matiers";
        document.getElementById('icontent').innerHTML = `     <iframe src="./MATIERS/index.php" onload='javascript:(function(o){o.style.height=o.contentWindow.document.body.scrollHeight+"px";}(this));' ></iframe> `;

        showiframe = true;
      }else if(showiframe = true){
        document.getElementById('icontent').innerHTML = `  `;
        document.getElementById('theheadtitle').innerHTML = "";
        document.getElementById('theheadtitle').innerHTML = "Matiers";
        document.getElementById('icontent').innerHTML = `     <iframe src="./MATIERS/index.php" onload='javascript:(function(o){o.style.height=o.contentWindow.document.body.scrollHeight+"px";}(this));' ></iframe> `;

      }

      showiframe = false;
      
    };
    
    
    function showetudiant() {
      if(showiframe = false){
        document.getElementById('theheadtitle').innerHTML = "Etudiant";
      document.getElementById('icontent').innerHTML = `     <iframe src="./etudiant/index.php"  ></iframe> `;
       showiframe = true;
      }else if(showiframe = true){
        document.getElementById('icontent').innerHTML = `  `;
      document.getElementById('theheadtitle').innerHTML = "";
      document.getElementById('theheadtitle').innerHTML = "Etudiant";
      document.getElementById('icontent').innerHTML = `     <iframe src="./etudiant/index.php" ></iframe> `;
      showiframe = true;

      }
      showiframe = false;
    
   
    };

    function showbultin() {
      if(showiframe = false){
        document.getElementById('theheadtitle').innerHTML = "Bultin";
        showiframe=true;
      }else if(showiframe = true){
    
      document.getElementById('theheadtitle').innerHTML = "";
      document.getElementById('icontent').innerHTML = `  `;
      document.getElementById('theheadtitle').innerHTML = "Bultin";

      }
      showiframe = false;

    };
  </script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>


</html>