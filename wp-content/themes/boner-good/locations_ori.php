<?php
/*
Template Name: Locations
*/
?>
<?php get_header(); ?>
<script type="text/javascript">
var continent="";
var country="";
var city="";
var store="";
function LoadContinents(){
 $("#mc_continent").html("");
 var continents=new Array();
 var i;
 $(".mc_continent").each(function(){
  var s=$(this).html();
  var idx=-1;
  for (i=0; i<continents.length; i++)
   if (continents[i]==s){
    idx=i;
    break;
   }
  if (idx<0) {
   continents[continents.length] = s;
  }
 });
 continents.sort();
 for (i=0; i<continents.length; i++)
 {
  s=continents[i];
  $("#mc_continent").append("<a href = '#topa' onclick='LoadCountries(\""+s+"\")'>"+s+"</a>");
 }
}

function LoadCountries(continent){
//alert("load countries: continent="+continent);
 $("#mc_country").html("");
 $("#mc_city").html("");
 $("#mc_continent").parent().find("h1").html('Select Continent <span class="fr">&#9660;</span>');
 $("#mc_country").parent().find("h1").html('Select Country <span class="fr">&#9660;</span>');
 $("#mc_city").parent().find("h1").html('Select City <span class="fr">&#9660;</span>');
 var countries = new Array();
 var i;
 $(".mc_info").each(function(){
  var s=$(this).find(".mc_continent").html();
  if (s==continent)
  {
    var s1=$(this).find(".mc_country").html();
    var idx=-1;
    for (i=0; i<countries.length; i++)
     if (countries[i]==s1){
      idx=i;
      break;
     }
    if (idx<0) {
     countries[countries.length] = s1;
    }
  }
 });
 countries.sort();
 for (i=0; i<countries.length; i++)
 {
  s1=countries[i];
  $("#mc_country").append("<a href = '#topa'  onclick='LoadCities(\""+s1+"\")'>"+s1+"</a>");
 }
 if (continent.length>0)
 {
  $("#mc_continent").slideToggle("fast");
  $("#mc_country").slideToggle("fast");
  $("#mc_continent").parent().find("h1").html(continent);
 }
}

function LoadCities(country){
//alert("load cities: country="+country);
 $("#mc_city").html("");
 $("#mc_country").parent().find("h1").html('Select Country <span class="fr">&#9660;</span>');
 $("#mc_city").parent().find("h1").html('Select City <span class="fr">&#9660;</span>');
 var cities = new Array();
 var i;
 $(".mc_info").each(function(){
  var s=$(this).find(".mc_country").html();
  if (s==country)
  {
    var s1=$(this).find(".mc_city").html();
    var idx=-1;
    for (i=0; i<cities.length; i++)
     if (cities[i]==s1){
      idx=i;
      break;
     }
    if (idx<0) {
     cities[cities.length] = s1;
    }
  }
 });
 cities.sort();
 for (i=0; i<cities.length; i++) {
     s1 = cities[i];
     s2=s1;
     s2=s2.replace("'","");
     s2=s2.replace('"',"");
     $("#mc_city").append("<a href = '#topa' onclick='LoadStore(\""+s2+"\")'>"+s1+"</a>");
 }
 if (country.length>0)
 {
  $("#mc_country").slideToggle("fast");
  $("#mc_city").slideToggle("fast");
  $("#mc_country").parent().find("h1").html(country);
 }
}


function LoadStore(store){
 $(".store").hide();
 $(".store").each(function(){
//CORTINA D'AMPEZZO
  var s=$(this).find(".mc_city").html();
  s=s.replace("'","");
  s=s.replace('"',"");
  if (s==store)
   $(this).fadeIn("fast");
 })
 $("#mc_city").parent().find("h1").html(store);
}


$(document).ready(function(){
 LoadContinents();
 LoadCountries("");
});
</script>

<section id="locations" style='overflow: hidden;'>
	<div id="locationwrap" class="group">
   <div id="locationleft">
<a name="topa"></a>
    <div class="controls">
      <h1>Select Continent <span class="fr">&#9660;</span></h1>
      <div id="mc_continent" class="storelist"></div>
		</div>

    <div class="controls">
      <h1>Select Country <span class="fr">&#9660;</span></h1>
      <div id="mc_country" class="storelist"></div>
		</div>

    <div class="controls">
      <h1>Select City <span class="fr">&#9660;</span></h1>
      <div id="mc_city" class="storelist"></div>
		</div>


<?php /*
    <div class="controls">
      <h1>Select Country <span class="fr">&#9660;</span></h1>
      <div id="mc_country" class="storelist"></div>
		</div>

    <div class="controls">
      <h1>Select City <span class="fr">&#9660;</span></h1>
      <div id="mc_city" class="storelist"></div>
		</div>

    <div class="controls">
      <h1>Select Store <span class="fr">&#9660;</span></h1>
      <div id="mc_store" class="storelist"></div>
		</div>

		<div class="controls">
			<h1>Select City <span class="fr">&#9660;</span></h1>
			<div class="storelist">
			<?php
				$args = array( 'numberposts' => 999, 'category' => '4', 'orderby' => 'title', 'order' => 'ASC');
				$lastposts = get_posts( $args );
				foreach($lastposts as $post) : setup_postdata($post);
			?>

				<a href="#<?php the_ID(); ?>"><?php the_title(); ?></a>

			<?php
				endforeach;
				wp_reset_query();
			?>
			</div>
		</div>
*/?>
		</div>
		<div class="stores">
			<?php
				$args = array( 'numberposts' => 999, 'category' => '4' );
				$lastposts = get_posts( $args );
				foreach($lastposts as $post) : setup_postdata($post);
			?>

				<div class="store" id="<?php the_ID(); ?>">
					<h1 class="h large"><?php the_title(); ?></h1>
					<?php if(get_field('shop')): ?>
						<?php while(the_repeater_field('shop')): ?>
							<p class="location"><?php the_sub_field('address'); ?>
<div style="display: none" class="mc_info">
<span style="display: none" class="mc_continent"><?php the_sub_field('continent'); ?></span>
<span style="display: none" class="mc_country"><?php the_sub_field('country'); ?></span>
<span style="display: none" class="mc_city"><?php the_sub_field('city'); ?></span>
<span style="display: none" class="mc_store"><?php the_ID(); ?></span>
<span style="display: none" class="mc_title"><?php the_title(); ?></span>
</div>
							<br><strong><?php the_sub_field('phone'); ?><?php if(get_sub_field('url')) {
								echo ' - <a target="_blank" href="' . get_sub_field('url') . '">Website</a> &raquo;';
							} ?></strong></p>
						<?php endwhile; ?>
		 			<?php endif; ?>
				</div>

			<?php
				endforeach;
				wp_reset_query();
			?>
    </div>
	</div>
</section>

<?php get_footer(); ?>