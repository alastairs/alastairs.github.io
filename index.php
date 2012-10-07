<?php include('feed_support.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-GB">
  <head>
    <title>Alastair Smith's homepage</title>
    <link type="text/css" href="css/reset.css" rel="stylesheet" />
    <link type="text/css" href="css/layout.css" rel="stylesheet" />
    <link type="text/css" href="css/style.css" rel="stylesheet" />
    <link type="text/css" href="css/cupertino/jquery-ui-1.8.1.custom.css" rel="stylesheet" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/jquery-ui.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      //<![CDATA[
      var codeborkSession = null;
      var reelcriticSession = null;

      $(function() {
          $(".blog").accordion({
              collapsible: true,
              autoHeight: false
          });
      });
      //]]>
    </script>
  </head>
  <body>
    <div id="wrapper">
      <div id="mainContent">
        <div class="column tripleColumn">
          <h1 id="title">Hi! Hello! Good Day!</h1>
        </div>  
        <div id="intro" class="column tripleColumn">
          <div class="shadow">
            <img src="https://secure.gravatar.com/avatar/639d9144c935d74458cd033d4c6f0f28?s=300" alt="Alastair Smith"/>
          </div>
          <p>I'm Alastair, a software developer based in Cambridge, UK.  I work primarily in the Microsoft space
          with C# and the .NET Framework, but fiddle around with many other technologies and languages such as 
          WiX, PowerShell, and PHP.</p>
          
		  <p>I'm the founder of the <a href="http://www.camswcraft.org/" title="Cambridge Software Craftsmanship Community website">
		  Cambridge Software Craftsmanship Community (CSCC)</a>, a group set up to promote and encourage professionalism
		  the software industry.  Currently we run two meet-ups per month: a round-table discussion on the first Tuesday, 
		  and a hands-on session on the third Tuesday.</p>
           
          <p>I'm also a keen amateur bassoonist, playing regularly with the 
          <a href="http://www.cambridgegraduateorchestra.com/" title="Cambridge Graduate Orchestra">Cambridge 
		  Graduate Orchestra</a> and the <a href="http://www.huntsphil.org.uk/" title="Huntingdonshire Philharmonic">
		  Huntingdonshire Philharmonic</a>. In 2009, I achieved the DipABRSM in Performance on the instrument.  I 'dep' 
		  for various ensembles in the Cambridge area including Cambridge Symphonic Winds, the City of Cambridge Symphony 
		  Orchestra, and the Uttlesforde orchestra. <a href="http://www.codebork.com/contact" title="Contact | CodeBork">
		  Contact me</a> if you would like me to play.</p>
        </div>

		<div id="codebork" class="column tripleColumn">
		  <h2>CodeBork.com</h2>
		  <p>CodeBork is my main blog where I write on technical subjects, mostly programming.</p>
		  <div id="codeborkBlog" class="blog">
			<?php printFeed($codebork, true); ?>
		  </div>
		</div>
		<!--<div id="keyProjects" class="column">
		  <h2>Visual Studio Build Progress Bar</h2>
		  <div>A simple add-in to Visual Studio (2008-2012) to display the current build progress 
		  in the Windows 7 and Windows 8 task bars.</div>
		</div>-->
        <div id="reelcritic" class="column tripleColumn">
          <h2>ReelCritic.co.uk</h2>
          <p>ReelCritic is a newer blog that I set up to discuss film and television news and events.  I mostly
          use it to post reviews of films that I have seen.</p>
          <div id="reelcriticBlog" class="blog">
            <?php printFeed($reelcritic); ?>
          </div>
        </div>

        <div id="github" class="column">
          <h2>GitHub</h2>
          <p class="summary">I use <a href="http://www.github.com/" title="GitHub">GitHub</a> extensively to manage
          my personal projects.  Here's a list of my public-accessible repositories; if you are a collaborator on
          one of my private repositories and are logged in to GitHub, you'll be able to see those too.</p>
          <div id="github-badge"></div>
          <script type="text/javascript" charset="utf-8">
            GITHUB_USERNAME="alastairs";
          </script>
          <script src="http://drnic.github.com/github-badges/dist/github-badge-launcher.js" type="text/javascript"></script>
        </div>

        <div id="photography" class="column doubleColumn">
          <h2>Photography</h2>
          <p class="summary">I'm an amateur photographer.  I like working with natural light, particularly outdooor
          and landscape scenes.  I shoot with a Nikon D90 digital SLR camera and either a fast 50mm prime lens or
          a slower 18-105mm zoom lens.</p>
          <p class="summary">My photographs are hosted on
          <a href="http://picasaweb.google.com/alastairsmith1">Google's Picasa service</a>.</p>
          <embed type="application/x-shockwave-flash" src="http://picasaweb.google.com/s/c/bin/slideshow.swf" width="600" height="400" flashvars="host=picasaweb.google.com&hl=en_GB&feat=flashalbum&RGB=0x000000&feed=http%3A%2F%2Fpicasaweb.google.com%2Fdata%2Ffeed%2Fapi%2Fuser%2Falastairsmith1%3Falt%3Drss%26kind%3Dphoto%26access%3Dpublic%26psc%3DF%26q%26uname%3Dalastairsmith1" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>
        </div><!-- #photography -->
      </div><!-- #mainContent -->
    </div><!-- #wrapper -->
  </body>
</html>
