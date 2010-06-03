<?php
    // CodeBork
	$codebork = parseFeed('http://www.codebork.com/rss.xml');
	
	// ReelCritic
	$reelcritic = parseFeed('http://www.reelcritic.co.uk/rss.xml');
	
	function parseFeed($url) {
	    $doc = new DOMDocument();
		$doc->load($url);
		$feed = array();
		foreach ($doc->getElementsByTagName('item') as $node) {
			$timestamp = strtotime($node->getElementsByTagName('pubDate')->item(0)->nodeValue);
			$itemRSS = array ( 
				'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
				'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
				'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
				'date' => $timestamp
				);
			array_push($feed, $itemRSS);
		}
		
		return $feed;
	}
	
    function printFeed($feed, $includeReadMore = false, $numItems = 5) {
        $count = $numItems;
        foreach ($feed as $item) { 
            if ($count == 0) break; ?>
        <h3><a href="#"><?php print($item['title']);?></a></h3>
        <div>
          <p class="postInfo">Posted on <?php print(date('j F Y \a\t H:m', $item['date']));?></p>
          <div class="teaser"><?php print($item['desc']);?></div>
          <?php if ($includeReadMore) { ?>
          <p class="postInfo"><a href="<?php print($item['link']);?>" alt="<?php print($item['title']);?>" title="<?php print($item['title']);?>">Read more&hellip;</a></p>
          <?php } ?>
        </div>
    <?php 
            $count--;
        }
    }
?>