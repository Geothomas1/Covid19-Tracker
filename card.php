<?php
include("conn.php");

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Covid19</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/f.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="./css/style.css">
    <style type="text/css">
        

table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: fixed;
}

table caption {
  font-size: 1.5em;
  margin: .5em 0 .75em;
}

table tr {
  background-color: #f8f8f8;
  border: 1px solid #ddd;
  padding: .35em;
}

table th,
table td {
  padding: .625em;
  text-align: center;
}

table th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
}

@media screen and (max-width: 600px) {
  table {
    border: 0;
  }

  table caption {
    font-size: 1.3em;
  }
  
  table thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  
  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }
  
  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .8em;
    text-align: right;
  }
  
  table td::before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  
  table td:last-child {
    border-bottom: 0;
  }
}

    </style>

    <script>
        // Ignore this in your implementation
        window.isMbscDemo = true;
    </script>

    <title>Accordion</title>

 

    <style type="text/css">
    body {
        margin: 0;
        padding: 0;
    }

    body,
    html {
        height: 100%;
    }

    </style>

</head>
<body>
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

<div mbsc-page class='demo-accordion'>
  
      
     <?php
                                              

 $url1 = 'https://api.covid19india.org/state_district_wise.json';

$request_url1 = $url1;
$curl1 = curl_init($request_url1);
curl_setopt($curl1, CURLOPT_RETURNTRANSFER, true);
$response1 = curl_exec($curl1);
curl_close($curl1);

$myArray1 = json_decode($response1);

?>


<br><br>
      <div mbsc-accordion>
        <div mbsc-card data-collapsible>
           <div class='mbsc-card-header'>
               
                <h5 class="mbsc-card-title mbsc-bold"> KERALA</h5>
                <div class="mbsc-card-subtitle">District Level Data</div>
            </div>
            <div class="mbsc-card-content">                                    
                               
                              <table>

  <thead>
    <tr>
      <th scope="col">District</th>
      <th scope="col">Active Cases</th>
      <th scope="col">Confirmed</th>
      <th scope="col">Recoverd</th>
    </tr>
  </thead>
                                        <tbody>
                                          

<?php

$result1=mysqli_query($conn,"select * from cities where state_id=10");

while($row1=mysqli_fetch_array($result1))
{
    
 $city=$row1[1];

?>
         <tr>
         <td data-label='District'><?php echo $city;?></td>
         <td data-label='Active Cases'><?php  echo $myArray1->Kerala->districtData->$city->active; ?></td>
         <td data-label='Confirmed'> <?php  echo $myArray1->Kerala->districtData->$city->confirmed; ?></td>
         <td data-label='Recoverd'><?php  echo $myArray1->Kerala->districtData->$city->recovered; ?></td>

        </tr>
<?php
}
?>
    



                                        </tbody>
                                    </table>
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


    <script src="./vendor/jquery/jquery.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <script src='./vendor/fixed-header-table/jquery.fixedheadertable.min.js'></script>
    <script src="./js/plugins/fixedheadertable-init.js"></script>
    


    <script src="./js/world/dashboard.js"></script>

    <script src="./js/scripts.js"></script>
  </body>
</html>
