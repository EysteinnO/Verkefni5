<?php
require "save_json.php";

$jsonUrl = "/mnt/volume-nyc1-01/html/Verkefni5/application/view/home/myndir.json";
$myndir = file_get_contents($jsonUrl);

$myndir_array = json_decode($myndir, true);

echo "<pre>";
print_r($myndir_array);
echo "</pre>";
?>

<div class="container">

    <div class="box">  

        <form action="" method="post"> 
            Nafn: <input type="text" name="imgName" id="imgName"> </br>
            Link: <input type="text" name="imgSrc" id="imgSrc"> </br>
            <input type="submit" id="submit" value="Submit"/> </br>
        </form>   

    </div>

    <div class="box">
    <!-- Búum til töflu með $colors fylki -->
    <table>
     <tr>
        <th>Mynd</th>
        <th>Myndurl</th>
  
      </tr>
      <?php
          $jsonUrl = "/mnt/volume-nyc1-01/html/Verkefni5/application/view/home/myndir.json";
          $myndir = file_get_contents($jsonUrl);

          $myndir_array = json_decode($myndir, true);
          // vinnum með gögnin úr objectinu $json_object

           // $jsonArray->results er vísun í property, results 
           // results er fylki sem geymir objects.  
           // -> er notað til að vísa í property og aðferðir í object.
           foreach ($myndir_array->results as $value) {

            // $value er sætistala í result fylki sama og [0],[1] osfrv.
            // $value->shortName er vísun í shortName property í objecti (nafnlaust).
            // shortName skilar gildi.
            echo "<tr><td>", $value->shortName, "</td>","<td>", $value->value, "</td></tr>";              
          }           
      ?>
    </table>

</div>
</div>
<!--Currency dót-->
<div class="container">

<div class="box">

<?php
$currency_url = "http://apis.is/currency/arion";

$currency = file_get_contents($currency_url);
$currency_array = json_decode($currency, true);

$currencies = $currency_array["results"];
print_r($currency);

?>

<table>
     <tr>
        <th>Land</th>
        <th>Gengi</th>
      </tr>
      <?php      
      foreach ($currencies as $value) {         
          echo    "<tr>",
                      "<td>", 
                          $value["shortName"],  
                      "</td>",
                       "<td>", 
                          $value["value"],
                      "</td>",      
                  "</tr>";
        }           
      ?>
</table>


</div>

</div>
    
    </div>
</div>


