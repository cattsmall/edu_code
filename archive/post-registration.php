<?php include 'header-loggedin.php' ?>

<div class="container">
<form action="post-registration-step2.php">
<div class="block block-container four-fifths center-margin no-hero">
	          <h1>Add information to your profile so your fellow teachers &amp; classmates can find you.</h1>
	
			<div class="margintop-30px">
	          <?php include 'user-profile-form.php' ?>
	<div class="clearfix"></div>	
			</div>
	
	<hr class="dots even-margin"/>

		          <h1>Connect with people who are already using Edgecate &amp; invite those that aren't.</h1>
			          <h2 class="margintop-30px">Suggested Teachers &amp; Students</h2>
			          <p>Donec id elit non mi porta gravida at eget metus. Donec sed odio dui. </p>
		<?php include 'friends-suggestions.php' ?>
	</div>

	<div class="block block-container four-fifths center-margin margintop-30px">
			          <h2>Link your social networks to get the full experience.</h2>
			          <p>Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
		<?php include 'social-networks-link.php' ?>
			<input type="submit" class="btn btn-submit margintop-30px" href="#" value="I'm done here. Continue"/>
			<div class="clearfix"></div>	
</div>
</form>
</div>
<?php include 'footer.php' ?>