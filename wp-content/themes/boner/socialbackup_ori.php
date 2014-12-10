<?php
/*
Template Name: Social
*/
?>
<?php get_header();
include('TwitterAPIExchange.php');
 ?>
<style>
.tweets a{color:white !important;}
.tweets a:hover{text-decoration: underline !important;}
.tweets li {color:#fff;margin-bottom:5px; border-top:1px solid white; font-size: 12px; text-transform:none !important; padding: 5px;}
</style>
<section id="socialfeed" class="three">
	<div class="socialfeedwrap">

		<article class="col twitter">

			<h1 class="h large center">Twitter</h1>
			<div class="twitterwrap">
			<ul class="tweets">
			<?php 
			/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "1477383048-6cnzNgEoOhCEQ7cG0OVridM4tV8xCkxKt8ddCyS",
    'oauth_access_token_secret' => "jJj3ElDPSTw0PaZUYj6egH7NwfLZ5ZrzZ7NRUW2gu4",
    'consumer_key' => "vThon5tURcTFBXPBB4HOcg",
    'consumer_secret' => "ZWlCrmIHLET4pWpEdsF04Efp3F41MDBseAudJAWo"
);


$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
$getfield = '?screen_name=BB_Bonner&exclude_replies=true&count=5';
$requestMethod = 'GET';

$twitter = new TwitterAPIExchange($settings);
$response = $twitter->setGetfield($getfield)
                    ->buildOauth($url, $requestMethod)
                    ->performRequest();

$response = json_decode($response);

foreach($response as $tweet){

                    
   					$linkCheck = preg_replace('/((http)+(s)?:\/\/[^<>\s]+)/i', '<a href="$0" target="_blank" rel="nofollow">$0</a>', $tweet->text );
					// Clickable Twitter names
					$personCheck = preg_replace('/[@]+([A-Za-z0-9-_]+)/', '<a href="http://twitter.com/$1" target="_blank" rel="nofollow">@$1</a>', $linkCheck );
					// Clickable Twitter hash tags
					$text = preg_replace('/[#]+([A-Za-z0-9-_]+)/', '<a href="http://twitter.com/search?q=%23$1" target="_blank" rel="nofollow">$0</a>', $personCheck );
					
				    $time = $tweet->created_at;
			    	$time = date_parse($time);
			    	$uTime = mktime($time['hour'], $time['minute'], $time['second'], $time['month'], $time['day'], $time['year']);


	
	echo '<li style="text-transform:normal;">'.$text.'</li>';}?>
	
			</ul>
			  
				<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
					new TWTR.Widget({
						version: 2,
						type: 'profile',
						rpp: 10,
						interval: 30000,
						width: 'auto',
						height: 395,
						theme: {
						shell: {
						background: 'transparent',
						color: '#ffffff'
					},
					tweets: {
						background: '#000000',
						color: '#ffffff',
						links: '#ffffff'
					}
					},
					features: {
						scrollbar: false,
						loop: false,
						live: false,
						behavior: 'all'
					}
					}).render().setUser('BarbaraBoner').start();
				</script>
			</div>
		</article><article class="col facebook">
			
			<h1 class="h large center">Facebook</h1>
            <div class="fb-like-box pc" data-href="http://www.facebook.com/barbaraboner.co.uk" data-width="280" data-height="364" data-colorscheme="light" data-show-faces="false" data-border-color="#222" data-stream="true" data-header="false"></div>
            <div class="fb-like-box mobile" data-href="http://www.facebook.com/barbaraboner.co.uk" data-width="260" data-height="364" data-colorscheme="light" data-show-faces="false" data-border-color="#222" data-stream="true" data-header="false"></div>
		</article><article class="col instagram">
			
			<h1 class="h large center">Instagram</h1>
			<ul class="instawrap"></ul>
		</article>

	</div>
</section>

<?php get_footer(); ?>