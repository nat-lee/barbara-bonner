<?php get_header(); ?>

<section id="lost">
	<h1>Dang, we're lost!</h1>
	<p class="lost">Sorry, we've been so busy making delicious mushrooms we've lost this page!</p>
	<p class="lost">Why don't you have a search?</p>
	<?php get_search_form(); ?>

	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>
</section>

<?php get_footer(); ?>