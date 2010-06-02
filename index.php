<?php 
    include('get_content.php');
    global $codebork, $reelcritic;
    
    function printFeed($feed, $includeReadMore = false) {
        foreach ($feed as $item) { ?>
        <h3><a href="#"><?php print($item['title']);?></a></h3>
        <div>
          <p><?php print(date('j F Y H:m', $item['date']));?></p>
          <p><?php print($item['desc']);?></p>
          <?php if ($includeReadMore) { ?>
          <p><a href="<?php print($item['link']);?>" alt="<?php print($item['title']);?>" title="<?php print($item['title']);?>">Read more&hellip;</a></p>
          <?php } ?>
        </div>
      <?php }
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-GB">
  <head>
    <title>Alastair Smith's homepage</title>
    <link type="text/css" href="css/reset.css" rel="stylesheet" />
    <link type="text/css" href="css/style.css" rel="stylesheet" />
    <link type="text/css" href="css/cupertino/jquery-ui-1.8.1.custom.css" rel="stylesheet" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/jquery-ui.min.js" type="text/javascript"></script>
    <script language="Javascript" type="text/javascript">
      //<![CDATA[
      var codeborkSession = null;
      var reelcriticSession = null;

      $(function() {
          $("#codebork").accordion({
              collapsible: true,
              autoHeight: false
          });

          $("#reelcritic").accordion({
              collapsible: true,
              autoHeight: false
          });
      });      
      //]]>
    </script>
  </head>
  <body>
    <h1>Hi. Hello. Good Day.</h1>
    <p>This is my personal homepage.  Welcome!</p>

    <h2>CodeBork.com</h2>
    <div id="codebork">
    <?php printFeed($codebork, true); ?>
    </div>

    <h2>ReelCritic.co.uk</h2>
    <div id="reelcritic">
      <?php printFeed($reelcritic); ?>
    </div>

    <h2>GitHub</h2>
    <div id="github-badge"></div>
    <script type="text/javascript" charset="utf-8">
      GITHUB_USERNAME="alastairs";
    </script>
    <script src="http://drnic.github.com/github-badges/dist/github-badge-launcher.js" type="text/javascript"></script>
  </body>
</html>
