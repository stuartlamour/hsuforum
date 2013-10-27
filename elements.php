<?php

// just something fun to template html for forums with //
$authors = array('Neumann János Lajos','Kurt Friedrich Gödel','Alan Mathison Turing','you','Ada Lovelace','Charles Babbage','David Hilbert');

$content = array(
'<strong>Good design is inovative</strong><p>The possibilities for innovation are not, by any means, exhausted. Technological development is always offering new opportunities for innovative design. But innovative design always develops in tandem with innovative technology, and can never be an end in itself.</p>',

'<strong>Good design makes a product useful</strong><p>A product is bought to be used. It has to satisfy certain criteria, not only functional, but also psychological and aesthetic. Good design emphasises the usefulness of a product whilst disregarding anything that could possibly detract from it.</p>',

'<strong>Good design is aesthetic</strong>
<p>The aesthetic quality of a product is integral to its usefulness because products we use every day affect our person and our well-being. But only well-executed objects can be beautiful.</p>',

'<strong>Good design makes a product understandable</strong>
<p>It clarifies the product’s structure. Better still, it can make the product talk. At best, it is self-explanatory.</p>',
'<strong>Good design is unobtrusive</strong>
<p>
Products fulfilling a purpose are like tools. They are neither decorative objects nor works of art. Their design should therefore be both neutral and restrained, to leave room for the user’s self-expression.
</p>',
'<strong>Good design is honest</strong>
<p>It does not make a product more innovative, powerful or valuable than it really is. It does not attempt to manipulate the consumer with promises that cannot be kept.</p>',

'<strong>Good design is long-lasting</strong>
<p>It avoids being fashionable and therefore never appears antiquated. Unlike fashionable design, it lasts many years – even in today’s throwaway society.</p>',

'<strong>Good design is thorough down to the last detail</strong>
<p>Nothing must be arbitrary or left to chance. Care and accuracy in the design process show respect towards the user.</p>',

'<strong>Good design is environmentally-friendly</strong>
<p>Design makes an important contribution to the preservation of the environment. It conserves resources and minimises physical and visual pollution throughout the lifecycle of the product.</p>',

'<strong>Good design is as little design as possible</strong>
<p>Less, but better – because it concentrates on the essential aspects, and the products are not burdened with non-essentials.</p>

<p>Back to purity, back to simplicity.</p>');

$titles = array(
'Start with end user needs',
'Do the hard work to make it simple',
'Build for inclusion',
'Understand context',
'Be consistent, not uniform',
'Make the most frequent tasks easy and less frequent tasks achievable',
'Make the default settings smart'
);


$reply = ' <!-- reply form -->
<form method="post"  role="region" class="addpost" aria-label="Post a reply">
<fieldset>
	<legend>Post a reply</legend> 
	<div class="hsuforum-post-figure">
		<img alt="" src="imgs/3.gif"  class="userpicture img-circle" /> 
	</div>
	<div class="hsuforum-post-body">
		<br>
		<div title="Post a reply" placeholder="Post a reply" contenteditable="true" spellcheck="true" role="textbox" aria-multiline="true" class="textarea">
		</div>
<!--
		<textarea title="Post a reply" name="postcontent" placeholder="Post a reply" class=form-control></textarea>
-->
		<br>
		<input type="file" name="files" multiple>
		<br>
		<button type="submit" class="btn btn-default">Submit</button> 
		<a class="pull-right" href="">Use advanced editor</a>
	</div>
	
</fieldset>
</form>';

$threadId = 1;


// role="navigation"


function getNext($id){
	$n = $id+1;
	if($n < 4){
	return ' <a class="hsu-focus" data-target="#id_'.$n.'" href="#id_'.$n.'" style="text-align:right;float:right;">next discussion <i class="icon-angle-right"></i></a> ';
	}
}
function getPrevious($id){
	$p = $id-1;
	if($p >= 1){
	return ' <a class="hsu-focus" data-target="#id_'.$p.'" href="#id_'.$p.'"><i class="icon-angle-left"></i> previous discussion</a> ';
	}
}

// thread header //
function mHead($num) {
global $authors,$threadId, $titles;
$rand = array_rand($authors, 1);
$author = $authors[$rand];
$views = $num*10;


$trand = array_rand($titles, 1);
$title = $titles[$trand];


$head = '<header class="hsuforum-thread-header clearfix">
<div class="hsuforum-thread-figure">
	<img class="userpicture img-circle" src="imgs/'.$rand.'.gif"  alt="" />
</div>

<div class="hsuforum-thread-body">
<p class="hsuforum-thread-byline"><a class="hsuforum-thread-author" href="#">by '.$author.'</a> | <time class="hsuforum-thread-pubdate" datetime="2013-09-24T08:00:14-05:00" pubdate>2:05pm Sept 24 2013</time>

<a href="#id_'.$threadId.'" title="view unread posts" class="hsu-unreadcount hsu-focus">'.$num.' unread </a></p>

<h3 role="heading" aria-level="3" class="hsuforum-thread-title" id="thread'.$threadId.'"><a href="#id_'.$threadId.'" class="hsu-focus" data-target="#id_'.$threadId.'" >'.$title.'</a></h3>';

if ($num) {
		$head .= '<div class="hsuforum-thread-replies-meta pull-right" >
				<span class="hsuforum-thread-viewcount">'.$views.' views</span> | <span class="hsuforum-thread-repliescount">'.$num.' replies </span><br/> last post 3:08pm  Oct 7, 2013</p>';
}
/*<!-- subscription stuff -->
	<div class="pull-right" aria-label="tracking options" role="region">
	<a title="subscribe" href="#"><span class="sr-only">subscribe</span><i class="icon-envelope-alt"></i></a>
	 | 
	 <a title="bookmark" href="#"><span class="sr-only">bookmark</span><i class="icon-flag-alt"></i></a>
	 | 
	 <a title=" mark substantive" href="#"><span class="sr-only">mark substantive</span><i class="icon-bookmark-empty"></i></a>
	 </div>
*/
$head .= "</div><!-- hsuforum-thread-body --></header>";
	
	
	$head .= '
	<div class="hsuforum-thread-content" tabindex="0" >
	<br />
		<p>Back in the late 1970s, Dieter Rams was becoming increasingly concerned by the state of the world around him – “an impenetrable confusion of forms, colours and noises.” Aware that he was a significant contributor to that world, he asked himself an important question: is my design good design?</p>
		<p>As good design cannot be measured in a finite way he set about expressing the ten most important principles for what he considered was good design. (Sometimes they are referred as the ‘Ten commandments’.)</p>
	</div>
	<!-- close content -->
	
	<!-- thread tools -->
	<div class="hsuforum-thread-tools" aria-label="tools" role="region">
		<a class="scrolltoreply" href="#">Reply</a> |
		<div class="btn-group">
		<div>
		<button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
		Rate <span class="caret"></span>
		</button>
		<ul class="dropdown-menu" role="menu">
			<li ><label><input type="radio" name="useful" class="sr-only"/><span>Useful</span></label></li>
			<li ><label><input type="radio" name="useful" class="sr-only"/><span>No rating</span></label></li>
		</ul>
		</div>
		</div>
	| <a href="">Useful (3)</a> 
	| <!-- subscription stuff -->
	<span aria-label="tracking options" role="region">
	<a title="subscribe" href="#"><span class="sr-only">subscribe</span><i class="icon-envelope-alt"></i></a>
	 | 
	 <a title="bookmark" href="#"><span class="sr-only">bookmark</span><i class="icon-flag-alt"></i></a>
	 | 
	 <a title=" mark substantive" href="#"><span class="sr-only">mark substantive</span><i class="icon-bookmark-empty"></i></a>
	 </span>
	 
	 <!-- options -->
	<div class="btn-group pull-right" >
		<div>
		<button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown"><span class="sr-only">More </span>Options <span class="caret"></span>
		</button>
		<ul class="dropdown-menu" role="menu">
			<li><a role="menuitem" href="#">Edit</a></li>
			<li><a role="menuitem" href="#">Delete</a></li>
			<li class="divider"></li>
			<li><a role="menuitem" href="#">Export</a></li>
		</ul>
		</div>
	</div>
	
	
	</div><!-- close thread tools -->
	
  

';

return $head;
}

// forum post //
function mPost() {
global $authors, $content,$threadId;
$rand = array_rand($authors, 1);
$author = $authors[$rand];

$crand = array_rand($content, 1);
$post_content = $content[$crand];


$post = '<li class="hsuforum-post clearfix" data-author="'.$author.'">

<div class="hsuforum-post-figure">
<img class="userpicture img-circle" src="imgs/'.$rand.'.gif"  alt="" />
</div>

<div class="hsuforum-post-body">
	<span class="hsu-unreadcount">Unread
	<!--<a href="" title="next unread post"> <span class="sr-only">Next unread post</span><i class="icon-angle-right"></i></a>-->
	</span>
	<h5 class="hsuforum-post-byline">Post by <a href="">'.$author.'</a></h5>


	<div class="hsuforum-post-content">
		'.$post_content.'
	</div>
	
	<time class="hsuforum-post-pubdate" pubdate><a title="permalink" href="">3:08 pm on October 1, 2013</a></time>
	
	
	
	<div class="hsuforum-post-tools" aria-label="tools" role="region">
    <a class="scrolltoreply" href="#">Reply</a> |<div class="btn-group">
  <div>
  <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
    Rate <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li role="menuitem"><label><input type="radio" name="useful" class="sr-only"/><span>Useful</span></label></li>
    <li role="menuitem"><label><input type="radio" name="useful" class="sr-only"/><span>No rating</span></label></li>
  </ul>
    </div>
    </div>| <a href="">Useful (3)</a> 
 <!-- options -->
	 | <!-- bookmark tools -->
    <span  aria-label="tracking options"><a title="bookmark" href="#"><span class="sr-only">bookmark</span><i class="icon-flag-alt"></i></a>
	 | 
	 <a title=" mark substantive" href="#"><span class="sr-only">mark substantive</span><i class="icon-bookmark-empty"></i></a></span>
	 
	<div class="btn-group pull-right" >
		<div>
		<button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown"><span class="sr-only">More </span>Options <span class="caret"></span>
		</button>
		<ul class="dropdown-menu" role="menu">
			<li><a role="menuitem" href="#">Edit</a></li>
			<li><a role="menuitem" href="#">Delete</a></li>
			<li class="divider"></li>
			<li><a role="menuitem" href="#">Export</a></li>
		</ul>
		</div>
	</div>
    
    
	</div>
</div>
</li>';
return $post;
}

function mPosts($num) {
	global $reply,$authors,$threadId,$articleNav;
	if($num !== 0) {
		$num  = array_rand($authors, 1)+1;
	}
	$i=1;
	$posts = '
	<!-- new article -->
	<article role="article" id="id_'.$threadId.'" class="hsuforum-thread-article clearfix" tabindex="0" aria-labelledby="thread'.$threadId.'" >';
	
	$posts .= mHead($num);
	if($num !== 0) {
		$posts .= '
		<!-- replies section -->
		<!-- <section class="hsuforum-thread-replies" role="region" aria-label="'.$num.' Replies"> -->
		<div class="hsuforum-thread-replies" tabindex="0"><h4>'.$num.' Replies</h4>
		<ol class="hsuforum-thread-replies-list list-unstyled">';
		while ($i <= $num){
			$posts .= mPost();
			$i++;
		}
		$posts .= '</ol>
		</div>
		<!-- </section> -->
		<!-- close replies section -->';
	}
	$posts .= $reply;
	$posts .= '<nav  class="hsuforum-thread-nav" ><a class="hsu-focus" data-target="hsuforum-all" href="#hsuforum-all"><i class="icon-angle-up"></i> close discussion</a>'.getPrevious($threadId).getNext($threadId).'

</nav></article>
	<!-- close article -->';
	$threadId++;
	return $posts;
}

?>