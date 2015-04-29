<?php $url = 'http://checkip.dyndns.org/';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, 'linux');
$resultat = curl_exec ($ch);
curl_close($ch);
$ip=substr($resultat, 76, 105);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>@Mail!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="img/favicon.png">
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>

<body>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			 <a id="modal-446452" href="#modal-container-446452" role="button" class="btn" data-toggle="modal">ReadMe!</a>
			<div class="modal fade" id="modal-container-446452" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title" id="myModalLabel">
								ReadMe!
							</h4>
						</div>
						<div class="modal-body">
							<p>
								<center><strong><span class="glyphicon glyphicon-bullhorn"></span> à propos :</strong></center><br>
								Ce script php permet d'envoyer des mails via php. Il suffit de remplir le formulaire et de l'envoyer.
								Il faut cependant paramétrer le SMTP et en option cURL.
								<br><br>Developper avec Bootstrap et php.</i>
								<br><br>
								<center><strong><span class="glyphicon glyphicon-wrench"></span> Paramétrage (windows) :</strong></center><br>
								<b>SMTP :</b>
								<ul>
									<li>Ouvrir le fichier <code>php.ini</code><br></li>
									<li>Dans la section <b><i><small>[mail function]</small></i></b><br></li>
									<li>Trouver la ligne "SMTP=...."<br></li>
									<li>Mettre l'adresse du serveur smtp de <a href="http://www.commentcamarche.net/faq/893-parametres-de-serveurs-pop-imap-et-smtp-des-principaux-fai" role="button">votre FAI</a> et la modifier comme ceci : <code>SMTP = smtp.sfr.fr</code> (exemple pour sfr).</li>
									<li><b>Si souci à l'envoi du mail : </b> Remplacer le mail dans la ligne <code>sendmail_from = you@yourdomain</code> par le mail de l'expéditeur.</li>
									<li>Recharger la conf du serveur</li>
								</ul>
								<b>cURL :</b>
								<ul>
									<li>activer en décommentant la ligne <code>;extension=php_curl.dll</code> (enlever le point virgule (;) au début de ligne) dans le fichier <code>php.ini</code>.</li>
								</ul>
								<br><i><stronger>Sous Linux</stronger> il suffit d’installer le paquet php5-curl: <code>sudo apt-get install php5-curl</code> pour les distributions dérivées de Debian.
								Et de redémarrer Apache: <code>sudo /etc/init.d/apache2 restart</code>.</i>
							</p>
							<br>
							<p>Ralevy'</p>
						</div>
						<div class="modal-footer">
							 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
					
				</div>
				
			</div>
			<form role="form" method="POST" action="send.php">
				<div class="form-group">
					<span class="glyphicon glyphicon-user"></span> <label for="exampleInputEmail1">Nom expediteur</label><input type="text" class="form-control" placeholder="nom" name="exp_name">
				</div>
				<div class="form-group">
					<span class="glyphicon glyphicon-envelope"></span> <label for="exampleInputEmail1">Mail expediteur</label><input type="email" class="form-control" id="exampleInputEmail1" placeholder="exemple@fai.com" name="exp">
				</div>
				<div class="form-group">
					<span class="glyphicon glyphicon-envelope"></span> <label for="exampleInputEmail1">Mail destinataire</label><input type="email" class="form-control" id="exampleInputEmail1" placeholder="destinataire1@fai.com, destinataire2@fai.com" name="dest"><span class="help-block">Séparer les destinataires par une ","</span>
				</div>
				<div class="form-group">
					<span class="glyphicon glyphicon-pushpin"></span> <label for="exampleInputEmail1">Objet</label><input type="text" class="form-control" placeholder="object" name="object">
				</div>
				<div class="form-group">
					<span class="glyphicon glyphicon-pencil"></span> <label for="exampleInputEmail1">Message</label><textarea class="form-control" rows="3" placeholder="contenu du message..." name="msg"></textarea><span class="help-block">Utilisez des balises html pour mettre en forme le message.</span>
				</div>
				<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-send"></span> Send!</button> <button type="reset" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span> Reset</button>
			</form><br>
			<?php echo '<p class="text-muted">Le mail sera envoyer avec l\'adresse ip suivante : <code>'.$ip.'</code></p>'; ?>
		</div>
	</div>
</div>
</body>
</html>