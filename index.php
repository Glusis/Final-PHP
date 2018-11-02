<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <title>Final PHP</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
    <div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/V6NZupaL4qI?ecver=2" style="position:absolute;width:100%;height:100%;left:0" width="640" height="360" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
    <form action="process.php" method="post">
                <input class="input__iphone" type="text" placeholder="Name" />
                <input class="input__iphone" type="text" placeholder="Email" />
                <span class="input__radio first__radio">
                    <input id="iphone" type="radio" name="iphone" value="Phone X" />
                    <label class="input-label" for="iphone">iPhone X</label>
                </span>
                <span class="input__radio">
                    <input id="iphonexs" type="radio" name="iphone" value="Phone Xs" />
                    <label class="input-label" for="iphonexs">iPhone Xs</label>
                </span>
                <select class="input__select" name="iphoneSelect">
                    <option selected disabled>Choose your storage</option>
                    <option value="16GB">16GB</option>
                    <option value="32GB">32GB</option>
                    <option value="128GB">128GB</option>
                </select>
                <input class="submit-button" type="submit" name="submit" value="ORDER NOW!" />
            </form>
  <?php
   echo 'your mother';
  ?>
</body>
</html>