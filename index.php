
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

       <?php
                       error_reporting(0);
                       $url2 = 'https://coronavirus-monitor.p.rapidapi.com/coronavirus/worldstat.php';
$collection_name2 = 'RapidAPI';
$request_url2 = $url2 . '/' . $collection_name2;
$curl2 = curl_init($request_url2);
curl_setopt($curl2, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl2, CURLOPT_HTTPHEADER, [
  'X-RapidAPI-Host: coronavirus-monitor.p.rapidapi.com',
  'X-RapidAPI-Key: d58217fcf3mshca2a35d772ef468p161b03jsne8f930ee269a',
  'Content-Type: application/json'
]);


$response2 = curl_exec($curl2);
curl_close($curl2);
$myArray2 = json_decode($response2);
?>

        <div class="content-body">
            <div class="container-fluid">
                
                <div class="row">
                    <div class="col-xl-5 col-lg-12">
                        <div class="world-statistics">
                            <div class="row align-items-center">
                                <div class="col-xl-6 col-lg-6 col-md-6 col">
                                    <div class="world-widget">
                                       
                                        <div>
                                            <h5>Total Cases</h5>
                                            <img src="./images/6.png" >
                                            <h2><?php echo $myArray2->total_cases;?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col">
                                    <div class="world-widget">
                                        
                                        <div>
                                            <h5>Total Death</h5>
                                            <img src="./images/3.png" >
                                            <h2><?php echo $myArray2->total_deaths;?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col">
                                    <div class="world-widget">
                                        
                                        <div>
                                            <h5>Total Recovered</h5>
                                            <img src="./images/5.png" >
                                            <h2><?php echo $myArray2->total_recovered;?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col">
                                    <div class="world-widget">
                                        
                                        <div>
                                            <h5>New Cases</h5>
                                            <img src="./images/2.png" >
                                            <h2 ><?php echo $myArray2->new_cases;?></h2>
                                        </div>
                                    </div>

                                     </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col">
                                    <div class="world-widget">
                                        
                                        <div>
                                            <h5>New Death</h5>
                                             <img src="./images/8.png" >
                                            <h2><?php echo $myArray2->new_deaths;?></h2>
                                        </div>
                                    </div> 
                                    </div>                              
                                <div class="col-xl-6 col-lg-6 col-md-6 col">
                                    
                                   <div class="world-widget">
                                        
                                        <div>
                                            <h5>Active Cases</h5>
                                             <img src="./images/7.png" >
                                            <h2><?php echo $myArray2->active_cases;?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col">
                                    
                                   <div class="world-widget">
                                        
                                        <div>
                                            <h5>Serious Cases</h5>
                                            <img src="./images/1.png" >
                                            <h2><?php echo $myArray2->serious_critical;?></h2>
                                        </div>
                                    </div>
                                </div>
 
                                <div class="col-xl-6 col-lg-6 col-md-6 col">
                                    
                                   <div class="world-widget">
                                        
                                        <div>
                                            <h5>Total_cases_per_1m_population</h5>
                                             <img src="./images/9.png" >
                                            <h2><?php echo $myArray2->total_cases_per_1m_population;?></h2>
                                        </div>
                                    </div>
                                </div>

                               
                            </div>
                            <div class="row">
                    <div class="col-12">
                        <div >
                            <span class="stats-taken mr-2">Last Update: </span>
                            <strong id="stat-taken" class="text-primary"></strong>
                        </div>
                    </div>
                </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-12">
                        <div class="world-map">
                            <div class="card">
                                <div class="card-body">
                                    <div id="vmap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center text-center">
                    <div class="col">
                        <div class="google-ads-leaderboard">
                            <img src="./images/ads/ads1.jpg" alt="" class="img-fluid">
                            <p>Add you ads here</p>
                        </div>
                    </div>
                </div>

             

               

                <div class="row">
                   

                    <div class="col-xl-9">
                        <div class="card">
                            <div class="card-body">
                               
                                <div class="all-country table-responsive">
                                    <table id="table" class="table table-striped">
                                        <thead>
                                            <tr>
                                               
                                                <th>Country</th>
                                                <th>Cases</th>
                                                <th>Today Cases</th>
                                                <th>Deaths</th>
                                                <th>Today Deaths</th>
                                                <th>Recovered</th>
                                                <th>Active</th>
                                                <th>Critical</th>
                                            </tr>
                                        </thead>
                                        <tbody>

<?php
error_reporting(0);
$url = 'https://coronavirus-monitor.p.rapidapi.com/coronavirus/cases_by_country.php';
$collection_name = 'RapidAPI';
$request_url = $url . '/' . $collection_name;
$curl = curl_init($request_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, [
  'X-RapidAPI-Host: coronavirus-monitor.p.rapidapi.com',
  'X-RapidAPI-Key: d58217fcf3mshca2a35d772ef468p161b03jsne8f930ee269a',
  'Content-Type: application/json'
]);
$response = curl_exec($curl);
curl_close($curl);

$myArray = json_decode($response);
$date=$myArray->statistic_taken_at;
for($i=0;$i<=217;$i++)
{
$country_name=$myArray->countries_stat[$i]->country_name;
if(!empty($country_name))
{

$cases=$myArray->countries_stat[$i]->cases;
$deaths= $myArray->countries_stat[$i]->deaths;
$total_recovered=$myArray->countries_stat[$i]->total_recovered;
$new_deaths=$myArray->countries_stat[$i]->new_deaths;
$serious_critical=$myArray->countries_stat[$i]->serious_critical;
$active_cases=$myArray->countries_stat[$i]->active_cases;
$newcase=$myArray->countries_stat[$i]->new_cases;

                                            echo "<tr>";
                                            echo "<td>$country_name</td>";
                                            echo "<td> $cases</td>";
                                            echo "<td>$newcase</td>";
                                            echo "<td>$deaths</td>";
                                            echo "<td>$new_deaths</td>";
                                            echo "<td> $total_recovered</td>";
                                            echo "<td> $active_cases</td>";
                                            echo "<td> $serious_critical</td>";
                                            echo "</tr>";
                                           }
                                       }
                                       ?>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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