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
?>