<?php
  date_default_timezone_set('America/New_York');
  $date =  date('Y-m-d', time());
  $word = "Hello world ! I am in love with NYC";

  echo "The value of \$date: ".$date."<br>";

  $tar = "2017/05/24";
  echo "The value of \$tar: ".$tar."<br>";
  $year = array("2012", "396", "300","2000", "1100", "1089");
  echo "The value of \$year: ";
  print_r($year);
  {
      echo "<br> <br>1. Replaced '-' with '/' in date <br>";
      $date1 = str_replace("-", "/","$date");
      echo "The value of \$date: ".$date1."<br>";
      echo "<br>";
  }
  {
      echo "2.Comparison of dates";
      if (strcmp($tar, $date1) > 0)
	    echo "<br> The future<br><br>";
      elseif  (strcmp($tar, $date1) < 0)
    	echo "<br> The Past<br>";
      else  echo "<br> Oops ";
  }  
      echo "<br>3. Print the position of / in date : <br>";
      for($i=0;$i<strlen($date1);$i++)
  {
      if($date1[$i]=='/')
      {
      echo " ".$i; 
      }
  }
  echo "<br>";
  {
      echo "<br>4. No of words in print :";
      echo "<br>" .str_word_count($date);
  }
  echo "<br>";
  {
      echo "<br>#<u> Hello world ! I am in love with NYC</u>"."<br>";
      echo "<br>";
      echo "5. The length of the above sentence :<br>";
      echo strlen($word)."<br>";
  }
  {
      echo "<br>6. ASCII value of first character of above underlined sentence :";
      echo "<br>" .ord ($word)."<br>";
  }
  {
      echo "<br>7. To return the last two charcters of date :";
      echo "<br>".substr("$date", -2);
      echo "<br>";
  }
      echo "<br> 8.Convert date into array & delimit '/' it with space<br>";
      $dateElements=explode("/",$date1);
      for($i=0;$i<count($dateElements);$i++)
  {
      echo $dateElements[$i]." ";
  }
  echo "<br>";
  findLeapYearforeach($year);
  findLeapYearwhile($year);
  function findLeapYearforeach($year)
  {
      echo "<br><br>9. Done with FOREACH function : <br>";
      foreach($year as $value)
        {
          if(((int)$value)%4==0)
            {
              echo " True";
            }
          else
            {
              echo " False";
            }
                 }
  }

  function findLeapYearwhile($year)
      {
          echo "<br><br>10.Done with WHILE function : <br>";
          $i=0;
          while($i<count($year))

          {
              if(((int)$year[$i])%4==0)
                  {
                  echo " True";
                  }
              else
                  {
                  echo " False";
                  }
              ++$i;

              
          }
      }
  echo "<br><br> 11. Done with SWITCH case : <br>";
  for ($i=0;$i<count($year);$i++)

      {
      
                switch ($year{$i})
            {
              case "2012": if(((int)$year[$i])%4==0)
                  {
                  echo " True";
                  }
              else
                  {
                  echo " False";
                  }

              break;
              case "396": if(((int)$year[$i])%4==0)
                  {
                  echo " True";
                  }
              else
                  {
                  echo " False";
                  }

              break;
              case "300": if(((int)$year[$i])%4==0)
                  {
                  echo " True";
                  }
              else
                  {
                  echo " False";
                  }

              break;
              case "2000": if(((int)$year[$i])%4==0)
                  {
                  echo " True";
                  }
              else
                  {
                  echo " False";
                  }

              break;
              case "1089": if(((int)$year[$i])%4==0)
                  {
                  echo " True";
                  }
              else
                  {
                  echo " False";
                  }

              break;
              case "1100": if(((int)$year[$i])%4==0)
                  {
                  echo " True";
                  }
              else
                  {
                  echo " False";
                  }

              break;
            }
      }
     
      
    


?>
