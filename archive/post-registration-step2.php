<?php include 'header-loggedin.php' ?>

<div class="container">
<form action="post-registration-step2.php">
<div class="block block-container four-fifths center-margin no-hero">
	<h1>Let us know what you're interested in.</h1>
	<p>Adding interests will make it easier for us to send you tailored content. Search for interests by using the form below and press enter to add them. </p>
	<div class="block color-block blue margintop-30px search">
		<input type="text" placeholder="Type here to add interests" data-provide="typeahead" data-items="4" data-source="[&quot;Japanese (Language)&quot;,&quot;Shakespeare (Literature)&quot;,&quot;Chemistry (Science)&quot;]"/>
	</div>
	<div class="block margintop-30px">
		<h2>Here are some suggestions based on what's popular.</h2>
	<fieldset class="margintop-30px">
	<article class="margin left half border-block select-check selected">
		<div class="left icon-XL camera-icon"></div>
		<h3><strong><a href="#">Japanese (Language)</a></strong></h3>
		<p class="gray marginbottom-0">34 others are interested in this.</p>
		<input type="checkbox" checked="checked" class="absolute right"/>
	</article>

	<article class="margin left half border-block select-check">
		<div class="left icon-XL camera-icon"></div>
		<h3><strong><a href="#">Biology (Science)</a></strong></h3>
		<p class="gray marginbottom-0">134 others are interested in this.</p>
		<input type="checkbox" class="absolute right"/>
	</article>
	</fieldset>

	<fieldset>
	<article class="margin left half border-block select-check">
		<div class="left icon-XL camera-icon"></div>
		<h3><strong><a href="#">Shakespeare (Literature)</a></strong></h3>
		<p class="gray marginbottom-0">4 others are interested in this.</p>
		<input type="checkbox" class="absolute right"/>
	</article>

	<article class="margin left half border-block select-check">
		<div class="left icon-XL camera-icon"></div>
		<h3><strong><a href="#">Art (History)</a></strong></h3>
		<p class="gray marginbottom-0">16 others are interested in this.</p>
		<input type="checkbox" class="absolute right"/>
	</article>
	</fieldset>

	<fieldset>
	<article class="margin left half border-block select-check selected">
		<div class="left icon-XL camera-icon"></div>
		<h3><strong><a href="#">Computer Science (Technology)</a></strong></h3>
		<p class="gray marginbottom-0">62 others are interested in this.</p>
		<input type="checkbox" checked="checked" class="absolute right"/>
	</article>

	<article class="margin left half border-block select-check">
		<div class="left icon-XL camera-icon"></div>
		<h3><strong><a href="#">Architecture (Design)</a></strong></h3>
		<p class="gray marginbottom-0">27 others are interested in this.</p>
		<input type="checkbox" class="absolute right"/>
	</article>
	</fieldset>
	
	<fieldset>
	<article class="margin left half border-block select-check">
		<div class="left icon-XL camera-icon"></div>
		<h3><strong><a href="#">Psychology (Science)</a></strong></h3>
		<p class="gray marginbottom-0">62 others are interested in this.</p>
		<input type="checkbox" class="absolute right"/>
	</article>

	<article class="margin left half border-block select-check selected">
		<div class="left icon-XL camera-icon"></div>
		<h3><strong><a href="#">Chemistry (Science)</a></strong></h3>
		<p class="gray marginbottom-0">27 others are interested in this.</p>
		<input type="checkbox" checked="checked" class="absolute right"/>
	</article>
	</fieldset>
	
	<fieldset>
	<article class="margin left half border-block select-check selected">
		<div class="left icon-XL camera-icon"></div>
		<h3><strong><a href="#">Calculus (Mathematics)</a></strong></h3>
		<p class="gray marginbottom-0">62 others are interested in this.</p>
		<input type="checkbox" checked="checked" class="absolute right"/>
	</article>

	<article class="margin left half border-block select-check">
		<div class="left icon-XL camera-icon"></div>
		<h3><strong><a href="#">Astronomy (Science)</a></strong></h3>
		<p class="gray marginbottom-0">27 others are interested in this.</p>
		<input type="checkbox" class="absolute right"/>
	</article>
	</fieldset>
	
	<fieldset>
	<article class="margin left half border-block select-check selected">
		<div class="left icon-XL camera-icon"></div>
		<h3><strong><a href="#">Economics (Mathematics)</a></strong></h3>
		<p class="gray marginbottom-0">62 others are interested in this.</p>
		<input type="checkbox" checked="checked" class="absolute right"/>
	</article>

	<article class="margin left half border-block select-check">
		<div class="left icon-XL camera-icon"></div>
		<h3><strong><a href="#">Music (History)</a></strong></h3>
		<p class="gray marginbottom-0">27 others are interested in this.</p>
		<input type="checkbox" class="absolute right"/>
	</article>
	</fieldset>
	</div>
	<div class="clearfix"></div>
			<input type="submit" class="btn btn-submit margintop-10px" href="#" value="I'm done, Let's Continue!"/>
</div>

</form>
</div>
<?php include 'footer.php' ?>