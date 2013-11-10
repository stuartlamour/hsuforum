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
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.2/css/font-awesome.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'> 
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">


<link href="style.css" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<?php include('elements.php'); ?>


<body>

<!-- forum header content -->

<header role="region" aria-label="Forum header" class="clearfix" id='hsuforum-header'>
<h1 class="hsuforum-title">Foundations of product design</h1>
<div class="hsuforum-description clearfix">
<br/>
<p><strong>Everyone designs.</strong></p>
<p>Design occurs anytime you change any environment.</p>
<p>When you decide what seat to take in an auditorium you’re designing your experience. When you rearrange the furniture in a room or draft an email, you’re designing.</p>
<p>This means no design is itself design, often with interesting outcomes.</p>
<p>Some instructions / introduction / guidence on using this forum</p>
<p>Have fun! - Stuart</p>
</div>
<br class='clear'/>
<p class="hsuforum-displayOptions pull-right">
Display : <select>
<option selected="selected" value="header">Default</option>
<option value="tree">Tree</option>
<option value="nested">Nested</option>
</select>
</p>
</header>


<!-- forum threads -->

<section role="region" aria-label="Discussions"  class="hsuforum-threads-wrapper" id="hsuforum-all">

<div class="clearfix">
	<div class="pull-left">
	<h2>3 Discussions </h2>
	</div>
	<a role="button" class="pull-right btn btn-primary" id="hsu-addthread-button" href='#hsuaddthread'>Add a new discussion</a>
	<br class="clearfix clear" />
	
	<div class="hsuforum-filter clearfix"><a href=''>My discusions (6)</a> | <a href="">Replies to my posts (3)</a> | <div class="btn-group">
  <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
    Group <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#">A</a></li>
    <li><a href="#">B</a></li>
    <li><a href="#">C</a></li>
    <li class="divider"></li>
    <li><a href="#">All</a></li>
  </ul>
</div>
	<div class="hsuforum-sort pull-right"> Sort by :
	<div class="btn-group">
	<button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
    Recent <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
  	<li><a href="#">Last post date</a></li>
    <li><a href="#">Creation date</a></li>
    <li><a href="#">First name</a></li>
    <li><a href="#">Last name</a></li>
    <li><a href="#">Replies</a></li>
  </ul></div></p>
	</div>
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

<div id="replybox" style="display:none;">
<form method="post" role="form" class="addpost" tabindex="0">
<fieldset>
	<legend>Reply to </legend>
	<div class="hsuforum-post-figure">
		<img alt="your name here" src="imgs/3.gif" class="userpicture img-circle"> 
	</div>
	<div class="hsuforum-post-body">
		<br>
		<div title="Post a reply" placeholder="Post a reply" contenteditable="true" spellcheck="true" role="textbox" aria-multiline="true" class="textarea">
		</div>
		<br>
		<input type="file" name="files" multiple="">
		<br>
		<input type="hidden" name="replyto">
		<button type="submit" class="btn btn-default">Submit</button> 
		<a class="pull-right" href="">Use advanced editor</a>
	</div>
</fieldset>
</form>
</div>

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
	/*
	console.log("the browser says this has focus :");
	console.log(document.activeElement); // element with focus
	*/
});

// add posts
$(document).on("click", ".scrolltoreply", function(e) {
	postbox =$(e.target).parents('article').find('.addpost');
	postbox[0].scrollIntoView(true);
	postbox[0].focus();
	e.preventDefault();
});

$replybox = $('#replybox');

$(document).on('click','.hsuforum-post .scrolltoreply',function(e) {
	$replybox = $('#replybox').find('form').clone();
	$to = $(e.target).parents('li').attr('data-author');
	$($replybox).find('legend').html("Reply to "+$to);
	$($replybox).find('input[name="replyto"]').val($to);
	$(e.target).parents('.hsuforum-post-tools').after($replybox);
	$(e.target).parents('li').find('form').focus();
	$message = "<li id='postmarker'>This is where your post will go</li>";
	
	e.preventDefault();
});

$(document).on("submit", ".addpost", function(e) {
	/*
	processForm(e);
	$(e.target).remove();
	e.preventDefault();
	*/
});





function findPlace(Node,thisDepth) {
	var testNode = Node;
	
	var testDepth = $(testNode).data("level");
	console.log('testNode depth : '+ testDepth);
	console.log('this depth : '+ thisDepth);
	
	if (thisDepth <= testDepth){
		if(!$(testNode).next('li.child').length) {
			console.log('FOUND NODE ');
			console.log($(testNode).find('.hsuforum-post-content').html());
			return testNode;
		}
		// step
		else {
			console.log('ITERATING');
			console.log($(testNode).next('li.child').find('.hsuforum-post-content').html());
			findPlace($(testNode).next('li.child'), thisDepth);
		}
	}
	/*
	else {
		insertBeforeFlag = true;
		 return testNode;
	}
	*/
}

function processForm(e) {
	hsuforumThreadRepliesList = $(e.target).parents('article').find('.hsuforum-thread-replies-list');

	var hsuforumPostFigure = '<div class="hsuforum-post-figure"><img alt="" src="imgs/3.gif" class="userpicture img-circle"></div>';
	
	var reply = $(e.target).find('input[name="replyto"]').val();
	
	var hsuforumPostByline ='<h5 role="heading" aria-level="5" class="hsuforum-post-byline">Post by <a href="">you</a>';
	var child = '';
	
	// js for replying to posts
	if (reply) {
		hsuforumPostByline +='<span class="sr-only">to</span> <i class="icon-share-alt"></i>  <a href="">'+ reply +'</a>';
		
		var hsuforumThreadRepliesList = $(e.target).parents('.hsuforum-post');
		child = 'child';
		
		var parentLevel = parentLevel = hsuforumThreadRepliesList.data("level");
		var level = (parentLevel+1);
		var dataLevel = 'data-level="'+level+'"';
		
		
		insertBeforeFlag = false;
		if($(e.target).parents('.hsuforum-post').next('li.child').length) {
			
			hsuforumThreadRepliesList = findPlace($(e.target).parents('.hsuforum-post').next('li.child'),level);
			console.log($(hsuforumThreadRepliesList).find('.hsuforum-post-content').html());
			console.log('before ?'+ insertBeforeFlag);
		}
	}
	
	hsuforumPostByline += '</h5>';
	
	var content = $(e.target).find('.textarea').html();
	var hsuforumPostContent ='<div class="hsuforum-post-content">'+ content +'</div>';
	
	var hsuforumPostTools = '<div class="hsuforum-post-tools" aria-label="tools" role="region"> <a class="scrolltoreply" href="#">Reply</a> |<div class="btn-group"> <div> <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown"> Rate <span class="caret"></span> </button> <ul class="dropdown-menu" role="menu"> <li role="menuitem"><label><input type="radio" name="useful" class="sr-only"><span>Useful</span></label></li> <li role="menuitem"><label><input type="radio" name="useful" class="sr-only"><span>No rating</span></label></li> </ul> </div> </div>| <a href="">Useful (0)</a> | <span aria-label="tracking options"><a title="bookmark" href="#"><span class="sr-only">bookmark</span><i class="icon-flag-alt"></i></a> | <a title=" mark substantive" href="#"><span class="sr-only">mark substantive</span><i class="icon-bookmark-empty"></i></a></span> <div class="btn-group pull-right"> <div> <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown"><span class="sr-only">More </span>Options <span class="caret"></span> </button> <ul class="dropdown-menu" role="menu"> <li><a role="menuitem" href="#">Edit</a></li> <li><a role="menuitem" href="#">Delete</a></li> <li class="divider"></li> <li><a role="menuitem" href="#">Export</a></li> </ul> </div> </div> </div>';
	
	var hsuforumPostBody ='<div class="hsuforum-post-body">'+ hsuforumPostByline + dataLevel + hsuforumPostContent +'<time class="hsuforum-post-pubdate" pubdate=""><a title="permalink" href="">3:08 pm on October 28th, 2013</a></time>'+ hsuforumPostTools +'</div>';
	
	var hsuforumPost = '<li class="hsuforum-post clearfix '+ child +'" data-author="you" '+ dataLevel +'>'+ hsuforumPostFigure + hsuforumPostBody +'</li>';
	
	
	if (reply) {
		// its a reply iteam - add
		console.log($(hsuforumThreadRepliesList).length);
		if(insertBeforeFlag) {
			$(hsuforumThreadRepliesList).before(hsuforumPost);
			console.log('INSERT BEFORE');
			alert('your reply has been posted');
		}
		else {
			$(hsuforumThreadRepliesList).after(hsuforumPost);
			console.log('INSERT AFTER');
			alert('your reply has been posted');
		}
	}
	else {
		// its a list - append
		$(hsuforumThreadRepliesList).append(hsuforumPost);
		alert('your reply has been posted');
	}
	// console.log(hsuforumPost);
}


</script>

<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>


</body>
</html>