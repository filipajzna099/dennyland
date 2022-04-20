<?php
require('Persistence.php');
$comment_post_ID = 1;
$db = new Persistence();
$comments = $db->get_comments($comment_post_ID);
$has_comments = (count($comments) > 0);
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
<script async src="https://arc.io/widget.min.js#n5cNZUnP"></script>
<link rel="shortcut icon" href="favicon.png" type="image/x-icon"/>
	<title>Dennyland</title>
	<meta charset="utf-8" />
	
	<link rel="stylesheet" href="css/main.css" type="text/css" />

	<!--[if IE]>
	  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<!--[if lte IE 7]>
		<link rel="stylesheet" type="text/css" media="all" href="css/ie.css"/>
		<script src="js/IE8.js" type="text/javascript"></script><![endif]-->	
	<!--[if lt IE 7]>
		<link rel="stylesheet" type="text/css" media="all" href="css/ie6.css"/><![endif]-->



</head>

<body id="index" class="home">
	
	<header id="banner" class="body">
		<h1><a href="#">__Dennyland__ <strong>Dennyland - český minecraft server v roce <ins>2021</ins></strong></a></h1>
		<nav><ul>
			<li class="active"><a href="#">Domů</a></li>
			<li><a href="pravidla.php">Pravidla</a></li>
			<li><a href="ateam.php">A-Team</a></li>
      <li><a href="novinky.php">Novinky</a></li>
      <li><a href="vip.php">VIP</a></li>
      <li><a href="soc-site.php">Sociální Sítě</a></li>
		</ul></nav>
	</header>

<script src="index.js"></script>
  
	<section id="content" class="body">
	  
	  <article class="hentry">	
			<header>
				<h2 class="entry-title"><a href="#" rel="bookmark" title=Založení webu">Založení WEBU</a></h2>
			</header>
			
			<footer class="post-info">
				<abbr class="published" title="2021-08-10T14:07:00-07:00">
					14th November 2021
				</abbr>

				<address class="vcard author">
					Od <a class="url fn" href="ateam.php">Admin 666filip</a>
				</address>
			</footer>
			
			<div class="entry-content">
				<p>Dobrý den, my jsme Dennyland, kvalitní server s dobrou komunitou. Rádi vítame každého nového člena!</p>
			</div>
		</article>
			
	</section>

  <section id="ip" class="body">
  <h2>IP: dennyland.mc.hostify.cz</h2>
    
  <h4 class="entry-title"><a href="pravidla.php" rel="bookmark" title=pravidla">Pravidla</a></h4>
  </section>

<section id="content" class=body>


<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<script>
var rq = '//api.syfaro.net/server/status';
var error = 'unknown';
var classes = {
	error: "fa-question",
	false: "fa-times",
	true: "fa-check",
};
var allclasses = "";
for(i in classes) {
	allclasses += ' '+classes[i];
};

function q(addr, cb) {
	$.ajax({
		url: rq,
		type: 'GET',
		dataType: 'json',
		data: {ip: addr, players: true},
	})
	.done(function(data) {
		console.log("success");
		console.log(data);
		cb(data);
	})
	.fail(function(data) {
		console.log("error");
	})
	.always(function() {
	});
}
function setclass(o, c) {
	o.removeClass(allclasses);
	o.addClass(classes[c]);
	o.html('');
}
function settext(o, t) {
	o.removeClass(allclasses);
	o.html(t);
}
function display(data) {
	var np = $('#numplayers'),
		version = $('1.18.1'),
		online = $('#online'),
		motd = $('#motd'),
		updated = $('#updated'),
        players = $('#players');
    data.online = data.status === 'success';

    settext(updated, data.last_update);
	setclass(online, data.online);
    if (data.online) {
        settext(np, data.players.now);
	    settext(version, data.version);
	    settext(motd, data.motd);
        if (data.players.sample) {
            settext(players,
                data.players.sample.map(function(v){
                    return v.name;
                }).join(', '));
        } else {
            settext(players, '');
        }
    } else {
        setclass(np, error);
        setclass(version, error);
        setclass(motd, error);
        setclass(players, error);
    }
}
$(document).ready(function() {
	q('dennyland.mc.hostify.cz', display);
});
</script>

<style type="text/css" media="screen">
	.statusbox {
		min-width: 5em;
		min-height: 2em;
		border: 1px solid #999;
		border-radius: 1em;
		background-color: #eee;
		padding: 0.5em;
		margin: 0.5em;
	}
	.label {
		text-align: right;
		float: left;
		margin-right: 1em;
		min-width: 8em;
		color: #444;
	}
	.grey {
		color: #666;
	}
</style>

<div class="statusbox">
	<span class="label">Online: </span>
	<i id="online" class="fa fa-question"></i>
	<br/>
	<span class="label">Verze: </span>
	<i id="version" class="fa fa-question"></i>
	<br/>
	<span class="label">MOTD: </span>
	<i id="motd" class="fa fa-question"></i>
	<br/>
	<span class="label">Hráčů: </span>
	<i id="numplayers" class="fa fa-question"></i>
	<br/>
    <span class="label">&nbsp;</span>
    <i id="players" class="fa fa-question"></i>
    
</div>
  
</section>

<section id="content" class=body>

<iframe src="https://discord.com/widget?id=897897044012859422&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
  
</section>
  
	<section id="comments" class="body">
	  
	  <header>
			<h2>Komentáře</h2>
		</header>

    <ol id="posts-list" class="hfeed<?php echo($has_comments?' has-comments':''); ?>">
      <li class="no-comments">Buď první, který přidá Komentář.</li>
      <?php
        foreach ($comments as &$comment) {
          ?>
          <li><article id="comment_<?php echo($comment['id']); ?>" class="hentry">	
    				<footer class="post-info">
    					<abbr class="published" title="<?php echo($comment['date']); ?>">
    						<?php echo( date('d F Y', strtotime($comment['date']) ) ); ?>
    					</abbr>

    					<address class="vcard author">
    						Od <a class="url fn" href="#"><?php echo($comment['comment_author']); ?></a>
    					</address>
    				</footer>

    				<div class="entry-content">
    					<p><?php echo($comment['comment']); ?></p>
    				</div>
    			</article></li>
          <?php
        }
      ?>
		</ol>
		
		<div id="respond">

      <h3>Napište nám Komentář</h3>

      <form action="post_comment.php" method="post" id="commentform">

        <label for="comment_author" class="required">Jméno</label>
        <input type="text" name="comment_author" id="comment_author" value="" tabindex="1" required="required">
        
        <label for="email" class="required">Email</label>
        <input type="email" name="email" id="email" value="" tabindex="2" required="required">

        <label for="comment" class="required">Vaše zpráva</label>
        <textarea name="comment" id="comment" rows="10" tabindex="4"  required="required"></textarea>

        <input type="hidden" name="comment_post_ID" value="<?php echo($comment_post_ID); ?>" id="comment_post_ID" />
        <input name="submit" type="submit" value="Odeslat Komentář" />
        
      </form>
      
	</section>
	
	<footer id="contentinfo" class="body">
		
		<p>2021 <a href="#">Dennyland</a></p>
	</footer>

</body>
</html>