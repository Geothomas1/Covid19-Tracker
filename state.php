
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Covid19</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/f.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <div id="main-wrapper">
         <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="index.php"><img src="./images/icon.png" alt="">
                                <span>Covid19 Tracker</span></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        
                                        <a class="nav-link" href="state.php"> India </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="card.php">Over District</a>
                                    </li>
                                  
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
<center><h2><img src="images/india.png"> INDIA</h2></center>
 <div class="content-body">
            <div class="container-fluid">
                
<?php


  $url = 'https://api.rootnet.in/covid19-in/unofficial/covid19india.org/statewise';

$request_url = $url;
$curl = curl_init($request_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
curl_close($curl);

$myArray = json_decode($response);

?>

                <div class="row">
                    <div class="col-xl-5 col-lg-12">
                        <div class="world-statistics">
                            <div class="row align-items-center">
                                <div class="col-xl-6 col-lg-6 col-md-6 col">
                                    <div class="world-widget">
                                       
                                        <div>
                                            <h5>Total Cases</h5>
                                            <img src="./images/6.png" >
                                            <h2><?php echo $myArray->data->total->confirmed;?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col">
                                    <div class="world-widget">
                                        
                                        <div>
                                            <h5>Total Death</h5>
                                            <img src="./images/3.png" >
                                            <h2><?php echo $myArray->data->total->deaths;?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col">
                                    <div class="world-widget">
                                        
                                        <div>
                                            <h5>Total Recovered</h5>
                                            <img src="./images/5.png" >
                                            <h2><?php echo $myArray->data->total->recovered;?></h2>
                                        </div>
                                    </div>
                                </div>
                               <div class="col-xl-6 col-lg-6 col-md-6 col">
                                    
                                   <div class="world-widget">
                                        
                                        <div>
                                            <h5>Active Cases</h5>
                                             <img src="./images/7.png" >
                                            <h2><?php echo $myArray->data->total->active;?></h2>
                                        </div>
                                    </div>
                                </div>

                               
                               
 
                               
                               
                            </div>
                           <img src="">
                        </div>
                    </div>
                 
                </div>






   <div class="row">

<?php

for($i=0;$i<=30;$i++)
{


    
?>
 
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><?php echo $myArray->data->statewise[$i]->state;?></h4>
                            </div>
                            <div class="card-body widget">
                                <div class="row">
                                    <div class="col-xl-3 mb-3">
                                        <span>Cases</span>
                                        <h4 id="italy_cases"><?php echo $myArray->data->statewise[$i]->confirmed;?></h4>
                                    </div>
                                    <div class="col-xl-3 mb-3">
                                        <span>Death</span>
                                        <h4 id="italy_deaths"> <?php echo $myArray->data->statewise[$i]->deaths;?></h4>
                                    </div>
                                    <div class="col-xl-3 mb-3">
                                        <span>Recovered</span>
                                        <h4 id="italy_total_recovered"><?php echo $myArray->data->statewise[$i]->recovered;?></h4>
                                    </div>
                                  
                                    <div class="col-xl-3 mb-3">
                                        <span>Active Cases</span>
                                        <h4 id="italy_active_cases"><?php echo $myArray->data->statewise[$i]->active;?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                


<?php
}

?>
</div>
























        <div class="footer">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-md-6">
                        <div class="copy_right">
                            By Geo Thomas
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>

        <!--removeIf(production)-->
        <!--**********************************
            Right sidebar start
        ***********************************-->
     
        <!--**********************************
            Right sidebar end
        ***********************************-->
        <!--endRemoveIf(production)-->


    </div>

</div>
</div>




    <script src="./vendor/jquery/jquery.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <script src='./vendor/fixed-header-table/jquery.fixedheadertable.min.js'></script>
    <script src="./js/plugins/fixedheadertable-init.js"></script>
    <script src='./vendor/chartjs/Chart.bundle.min.js'></script>


    <script src="./vendor/vectormap/jquery.vmap.min.js"></script>
    <script src="./vendor/vectormap/jquery.vmap.world.js"></script>

    <script src="./js/world/vectormap-world.js"></script>

    <script src="./js/world/dashboard.js"></script>
    <script src="./js/world/chart.js"></script>
    <script src="./js/scripts.js"></script>
    
    <script src="./js/settings.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/styleSwitcher.js"></script>
</body>

</html>