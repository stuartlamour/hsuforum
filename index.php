<!DOCTYPE html>
<html>
<head>
	<meta name=description content='prototype forum' />
	<meta charset=utf-8 />
	<title>Forum</title>
	
	<!-- change icon on notifications of new posts -->
<!--
  
<link href="//learn.moodle.net/theme/styles.php/learnmoodle/1379410891/all" rel="stylesheet">  

<link href="//features.demo.moodle.com.au/theme/styles.php/essential/1379554186/all" rel="stylesheet">

<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.3.0/pure-min.css">

<link href="//cdn.jsdelivr.net/foundation/4.3.1/css/foundation.min.css"
rel="stylesheet">

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet"> 

<link href="//www.brightondigitalfestival.co.uk/wp-content/themes/brighton-digital-festival/style.css" rel="stylesheet">

<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet"> 

<link href="http://www.umt.edu/_common/assets/css/um-homepage.min.css" rel="stylesheet">
-->
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'> 
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">


<link href="style.css" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<?php include('elements.php'); ?>


<body>

<!-- forum header content -->
<!--
<header role="region" aria-label="Forum header" class="clearfix" id='hsuforum-header'>
<h1 class="hsuforum-title">Foundations of product design</h1>
<div class="hsuforum-description">
<br/>
<p><strong>Everyone designs.</strong></p>
<p>Design occurs anytime you change any environment.</p>
<p>When you decide what seat to take in an auditorium you’re designing your experience. When you rearrange the furniture in a room or draft an email, you’re designing.</p>
<p>This means no design is itself design, often with interesting outcomes.</p>
<p>Some instructions / introduction / guidence on using this forum</p>
<p>Have fun! - Stuart</p>
</div>

<a href="">6 unread replies</a>
<a href="">4 new (TBD - since last login??)</a>
</header>
-->

<!-- forum threads -->

<section role="region" aria-label="Discussions"  class="hsuforum-threads-wrapper" id="hsuforum-all">

<div class="clearfix">
	<h2 class="pull-left">3 Discussions </h2>
	<a role="button" class="pull-right btn btn-primary" id="hsu-addthread-button" href='#hsuaddthread'>Add a new discussion</a>
	<br class="clearfix clear" />
</div>

<form method="post" role="form" id="hsuaddthread" class="clearfix">
	<fieldset><legend>Add your discussion</legend>
	<div class="pull-left d1">
		<img  src="imgs/3.gif"  class="userpicture img-circle" alt=""/> 
	</div>
	<div class="pull-left d2">
		<input type="text" name="discussiontitle" class="form-control" required="required" title="Your discussion title"  placeholder="Your discussion title" />
		<br />
		<textarea required title="What's on your mind?" name=postcontent placeholder="What's on your mind?" class=form-control></textarea>
		<br />
		<button type=submit class="btn btn-default">Submit</button> 
		<a href="#hsuforum-all">Cancel</a> 
	</div>
	</fieldset>
</form>
<p id="js-liveregion" aria-live="assertive" aria-atomic="true" aria-relevant="additions">
</p>
<!-- begin threads -->
<? echo mPosts(3); ?>
<? echo mPosts(3); ?>
<? echo mPosts(3); ?>


<!-- end threads -->

<!-- <a role="button" class="btn btn-primary" href=''>Load more discussions</a></nav> -->

<br />
<form method="get" role="search"  class="input-group">
	<input type="search" name="searchforum" results="5" x-webkit-speech placeholder="Search discussions in this forum" class="form-control">
	<span class="input-group-btn"> <button type="submit" class="btn">Search</button> </span> 
</form>
</section>

<!-- forum other info -->
<aside id="hsucolophon">
	<h1>colophon/aside stuff TBC...</h1>
	<h3>
		Replies to my posts (16)
	</h3>
	<h3> <a title='View all my forum posts' href=''>My forum posts (12)</a></h3>
	<h3><a title='View discussions started by me' href=''>My discussion (1)</a></h3>
	
</aside>



<!-- 
<footer id=colophon class='clearfix'>
<div id=recent-activity class='d1 pull-left'>
	<h4>
		Replies to my posts (16)
	</h4>
	<p class=center><a class="label label-primary" href='#'>Load more</a></p>
	
</div>
<div class='d1 pull-left'>
	<h3> <a title='View all my forum posts' href=''>My forum posts (12)</a></h3> <h3><a title='View discussions started by me' href=''>My discussions (1)</a></h3>
	<h3><a title='View all forums for this course' href='#allforums'>View all forums for this course</a></h3>
</div>
</footer> 
-->


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script>
// load thread
$(document).on("click",".hsu-focus", function(e) {
	href = $(e.target).attr('href');
	if(href == "#hsuforum-all") {
		$('.hsuforum-thread-article').attr('aria-hidden',"false").attr("aria-expanded","false").removeClass('open');
		$("#js-liveregion").html("");
	}
	else{
		$('.hsuforum-thread-article').attr("aria-hidden","true").attr("aria-expanded","false").removeClass('open');
		$(href).attr("aria-hidden","false").attr("aria-expanded","true").addClass('open');
		$(href).find('.hsuforum-thread-content').focus();
		$(href).find('.hsuforum-thread-content')[0].scrollIntoView(true);
		$("#js-liveregion").html("Discussion opened");
	}
	console.log("the browser says this has focus :");
	console.log(document.activeElement); // element with focus
});


// add threads
$(document).on("click",".hsu-addthread-button", function(e) {
	$($(e.target).attr('href')).focus();
});



// add posts
$(document).on("click", ".scrolltoreply", function(e) {
	postbox =$(e.target).parents('article').find('.addpost');
	postbox[0].scrollIntoView(true);
	postbox[0].focus();
	e.preventDefault();
});

</script>

<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>


</body>
</html>
