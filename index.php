<?php
/**
 * These links will be printed in order of the array's order.
 * @var array
 */
$links = array(
	array('url' => 'http://www.felixmiddendorf.eu', 'text' => 'Felix Middendorf'),
	array('url' => 'http://www.sperker.de', 'text' => 'Hans-Christian Sperker'),
	array('url' => 'http://www.diskurswelt.de', 'text' => 'Diskurswelt')
);

echo '<?xml version="1.0" encoding="utf-8" ?>', "\n";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
  <title>anonymous@fhchaos</title>
  <meta name="author" content="Felix Middendorf" />
  <meta name="description" content="fhchaos is Felix' and Hans' webserver." />
  <meta name="keywords" content="Felix, Hans, Chaos, Bamberg, Administration" />
  <meta name="robots" content="index,follow" />
  <meta name="language" content="en" />
  <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>
<body>
  <div id="container">
    <h1>Welcome anonymous@fhchaos!</h1>
    <p>This is fhchaos, <a href="http://www.felixmiddendorf.eu/">Felix'</a> and <a href="http://www.sperker.de">Hans'</a> little server that just runs and runs and runs. Thanks to the fine folks at <a rel="nofollow" href="http://www.debian.org/">Debian</a>.</p>
<?php if(isSet($links) && (count($links) > 0)): ?>
    <h2>Where am I?</h2>
    <p>You probably did not want to go to this site, right? Try one of these instead:</p>
    <ul>
<?php foreach($links as $link): ?>
      <li><a href="<?php echo $link['url']; ?>"><?php echo $link['text']; ?></a></li>
<?php endforeach; ?>
    </ul>
<?php
endif;
?>
  </div>
  <div id="footer"><a rel="nofollow" href="http://www.felixmiddendorf.eu/contact/#imprint">Impressum</a></div>
</body>
</html>
