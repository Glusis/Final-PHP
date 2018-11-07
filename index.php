<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <title>Final PHP</title>
  <link rel="stylesheet" href="style.css">
  

  
</head>

<body 
    <?php
    $text = getWeatherStringEmmen();
 
 $textArray = explode(" ", $text);
    $var = $textArray[2];
      switch($var)
      {
          case 0:
          case 1:
          case 2:
              echo'style="background-color: rgba(255,0,0,1)"';
              break;
          case 5:
          case 6:
          case 7:
          case 8:
          case 10:
          case 13:
          case 14:
          case 15:
          case 16:
          case 17:
          case 18:
          case 35:
          case 41:
          case 42:
              echo'style="background-color: rgba(0,100,155,1)"';
              break;
          case 3:
          case 4:
          case 37:
          case 38:
          case 39:
              echo'style="background-color: rgba(0,100,155,1)"';
              break;
          case 9:
          case 11:
          case 12:
          case 20:
          case 21:
          case 40:
              echo'style="background-color: rgba(55,100,100,1)"';
              break;
          case 19:
          case 22:
          case 23:
          case 24:
          case 25:
          case 32:
          case 34:
          case 36:
              echo'style="background-color: rgba(0,155,100,1)"';
              break;
          case 28:
          case 30:
              echo'style="background-color: rgba(83,83,89,1)"';
              break;
          case 27:
          case 29:
          case 31:
          case 33:
              echo'style="background-color: rgba(0,0,0,1)"';
              break;
          default:
              
              break;
      }
    ?>
    >
    <?php
						$rss = new DOMDocument();
						$rss->load('http://wordpress.org/news/feed/');
						$feed = array();
						foreach ($rss->getElementsByTagName('item') as $node) {
							$item = array ( 
								'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
								'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
								'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
								'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
								);
							array_push($feed, $item);
						}
						$limit = 7;
						for($x=0;$x<$limit;$x++) {
							$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
							$link = $feed[$x]['link'];
							$description = $feed[$x]['desc'];
							$date = date('l F d, Y', strtotime($feed[$x]['date']));
							echo '<p><strong><a href="'.$link.'" title="'.$title.'">'.$title.'</a></strong><br />';
							echo '<small><em>Posted on '.$date.'</em></small></p>';
							echo '<p>'.$description.'</p>';
						}
					?>

    >
    <div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/V6NZupaL4qI?ecver=2" style="position:absolute;width:100%;height:100%;left:0" width="640" height="360" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
    <form action="process.php" method="post">
                <input name="name" class="input__glusis" type="text" placeholder="Name" />
                <input name="email" class="input__glusis" type="text" placeholder="Email" />
                <span class="input__radio first__radio">
                    <input id="glusis" type="radio" name="glusis1" value="yeet" checked />
                    <label class="input-label" for="glusis">yeet</label>
                </span>
                <span class="input__radio">
                    <input id="glusisxs" type="radio" name="glusis2" value="big yeet" />
                    <label class="input-label" for="glusisxs">big yeet</label>
                </span>
                <input type="checkbox" name="checkbox[]" value="I "> I
                <input type="checkbox" name="checkbox[]" value="am "> am
                <input type="checkbox" name="checkbox[]" value="big "> big
                <input type="checkbox" name="checkbox[]" value="yeet "> yeet
                <select class="input__select" name="glusisSelect">
                    <option selected disabled>Choose your yeet</option>
                    <option value="yeet">yeet</option>
                    <option value="byeet">big yeet</option>
                    <option value="vbyeet">yayeet</option>
                </select>
                <input class="submit-button" type="submit" name="submit" value="YEEEEEEEEEEET" />
            </form>
  ﻿     
      
      <?php
    function getWeatherStringEmmen()
    {   
        $BASE_URL = "http://query.yahooapis.com/v1/public/yql";
        $yql_query = 'select * from weather.forecast where woeid in (select woeid from geo.places(1) where text="Emmen, NL")';
        $yql_query_url = $BASE_URL . "?q=" . urlencode($yql_query) . "&format=xml";

        $reader = new XMLReader();
        $tempLocation = 0;
        $tempText = '';
        $tempCode = '';
        $location = '';

        if (!$reader->open($yql_query_url))
        {
            print "can't read link";
        }

        while ($reader->read())
        {
            if ($reader->nodeType == XMLReader::ELEMENT)
            {
                $name = $reader->name;

                if ($name == 'yweather:location')
                {
                    $location = $reader->getAttribute('city');
                }

                if ($name == 'yweather:condition')
                {
                    $tempText = $reader->getAttribute('text');
                    $tempCode = $reader->getAttribute('code');
                    $tempLocation = $reader->getAttribute('temp');
                }
            }

            if (in_array($reader->nodeType, array(XMLReader::TEXT, XMLReader::CDATA, XMLReader::WHITESPACE, XMLReader::SIGNIFICANT_WHITESPACE)) && $name != '')
            {
                $value = $reader->value;
            }
        }
        return $location . " " . $tempLocation . " " . $tempCode . " " . $tempText;
    }
    $weatherstring = getWeatherStringEmmen();
 
 $weatherarray = explode(" ", $weatherstring);
    $weather = $textArray[3].' '.$textArray[4];
    echo '<h3>Current Weather:</h3>';
    echo $weather;
?>
</body>
</html>