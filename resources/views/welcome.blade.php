<?php
if(!empty($_GET['cityname'])){

$open_weather_url='http://api.openweathermap.org/data/2.5/weather?q='.$_GET['cityname'].'&units=metric&cnt=7&appid=bab22d6acefa7658012bce2443ba7b56&cnt=16';
$weather_json=file_get_contents($open_weather_url);
$weather_array = json_decode($weather_json, true);


}
?>




@extends('app')
@section('content')
            <div class="content">
                <div class="title m-b-md  color:green " style="color:green;">
                World Weather 
                  
                </div>
                </div>
@endsection
<div>
<form action=""  >
              
                    <input type="text" name = "cityname" placeholder="Enter city name">
                    <button type = "submit">Submit</button>
                    <br>
                    <?php
                    // if(!empty($weather_array)){
                    //     // foreach($weather_array['main'] as $text);
                    //     echo ('$weather_array');
                    // }
                    
                  if(!empty($weather_array)){
                      foreach($weather_array['main'] as $text){
                            //   echo  "<font size='6'  color='black'> $weather_json</font>"
                            print_r("<font size='6'  color='black'> Max temp :</font>");
                            print_r($weather_array['main']['temp_max']);

                            print_r("<font size='6'  color='black'> Min temp : </font>");
                            print_r($weather_array['main']['temp_min']);

                            print_r("<font size='6'  color='black'> Humidity : </font>");
                            print_r($weather_array['main']['humidity']);
                            
                            print_r("<br>");
                      }
                       



                  }
              
                    ?>
                    
                    </form>
</div>


<div>
<?php


?>



</div>