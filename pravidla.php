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
			<li><a href="index.php">Domů</a></li>
			<li class="active"><a href="#">Pravidla</a></li>
			<li><a href="ateam.php">A-Team</a></li>
      <li><a href="novinky.php">Novinky</a></li>
      <li><a href="vip.php">VIP</a></li>
      <li><a href="soc-site.php">Sociální Sítě</a></li>
		</ul></nav>
	</header>
	
	<section id="content" class="body">
    <article class="hentry">	
			<header>
				<h2 class="entry-title"><a href="#" rel="bookmark" 
        title=Pravidla">Pravidla</a></h2>
			</header>
    </section>
  <section id="content" class="body">
    <article class="hentry">
      <h6></h6>
<H2>Discord:</H2>
<H6>1. Zákaz spamování, vulgarity, agrese, floodování
(Spam =  3 a více Opakujících se zpráv, které jsou stejné/podobné do 1 Hodiny!)
(Flood = Více jak 3 písmena za sebou např. Honzoooooooooooooooo)</H6>
<H6>2. Je zakázané urážet nebo si dělat srandu z člena A-Teamu.</H6>
<H6>3. Zákaz posílat gify, emoji nebo odkazy, které jsou nevhodné.</H6>
<H6>4. Hanlivé sexuální a nebo úchylné projevy </H6>
<H6>5. Projevy rasizmu, nacizmu ,neonacizmu apod.</H6>
<H6>6. Nevhodný nebo vulgární nick .</H6>
<H6>7. Reklamu si dělej pouze v 《📰》reklama</H6> 
<H6>8. Zákaz obcházení trestu/banu </H6>
<H6>9. Vydávání se za člena Admin Teamu se trestá </H6>
<H6>10. V roomkách pro hlasovou komunikaci je zakázáno se projevovat vulgárně pokud s tím někdo nesouhlasí!</H6>
<H6>11. V roomkách pro hlasovou komunikaci je zakázáno řvát či vydávat nějaké pazvuky.</H6>
<H6>12. Je zákaz chodit z roomky do roomky a provokovat.</H6> 
<H6>13. Váš nickname nemůže napodobovat člena z A-Teamu nebo ho nějak poškozovat.</H6>
<H6>14. Pokud někdo bude porušovat pravidla a ty toho budeš svědkem máš povinnost to hlásit!</H6>
<H6>15. Zbytečně neoznačovat A-Team pokud to není nutné nebo jste nenašli nějaký bug/chybu.</H6>
<H6>16. Neznalost pravidel se neomlouvá!</h6>
	</section>

  <section id="content" class="body">
    <article class="hentry">
      
  <H2>Minecraft:</H2>
<H6>1. Zákaz spamování, floodování, agresivity</H6>
<H6>2. Zákaz provokace nebo lhaní Admin Teamu </H6>
<H6>3. Zákaz urážení Admin Teamu nebo serveru </H6>
<H6>4. Zákaz hanlivých sexuálních a nebo úchylných projevů</H6> 
<H6>5. Zákaz rasismu, nacismu ,neonacismu apod.</H6>
<H6>6. Zákaz nevhodného nebo vulgárního nicku</H6>
<H6>7. Zákaz nevhodného nebo vulgárního skin </H6>
<H6>8. Zákaz Cílené reklamy ( jméno/zkratka serveru)</H6>
<H6>9. Zákaz vlastnit nepovolené Modifikace (Xray,Autoclicker,Wurst,Huzuni,liquid bounce, apod.)</H6>
<H6>10. zákaz Tpakillů</H6>
<H6>11. Je zakázáno lákat hráče na falešné nabídky </H6>
<H6>12. Multiacc za účelem obohacení je zakázán</H6>
<H6>13. Obcházení trestu/banu je zakázáno</H6>
<H6>14. Vydávání se za člena Admin Teamu se trestá </H6>
<H6>15. Nezneužívej žádného práva ani bugu, chyby ve hře nebo givnutých věcí, nenahlášení </H6>
<H6>je stejně trestné jako zneužívání.</H6>
<H6>16. Vyšší pozice vám mohou dát ban bez uvedení důvodu</H6>
<H6>17. Zákaz kradnutia</H6>
<H6>18. Base si môžte urobiť minimálne 1k blockov od spawnu</H6>
19. Zákaz ničenia iných base okrem vaše
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