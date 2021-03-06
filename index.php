<?php

require_once('util/rssReader.php');
require_once('util/config.php');
require 'vendor/autoload.php';
$config = new Config();
$rssReader = new RssReader($config->rssUrl, $config->limit);
$collection = $rssReader->readCollection();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $config->siteName; ?></title>
<link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="header">
  <h1><?php echo $config->siteDomainWord; ?><span>.<?php echo $config->siteDomainTld; ?></span></h1>
</div>
<div id="menu">
  <ul>
    <li><a href="">Home</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="#domains">Domains</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
</div>
<div id="domainBuy"> <a href="<?php echo $config->buyNowLink; ?>" target="_blank">This Domain Is For Sale, Buy Now</a> </div>
<div id="content">
  <div id="homePage">
    <ul>
    <?php
        $i = 0;
        foreach($collection as $c) {
    ?>
      <li>
          <img class="articleImg" src="images/<?php echo $config->images[$i];?>" />
          <h1><a href="<?php echo $c['link'];?>" target="_blank"><?php echo $c['title'];?></a></h1>
        <p><?php echo $c['description']?></p>
      </li>
    <?php
        $i++;
        }
    ?>
    </ul>
  </div>
</div>
<div id="footer">
  <ul>
    <li> <a name="about"></a>
      <h1>About Me</h1>
      <p><?php echo $config->aboutMe; ?></p>
    </li>
    <li id="domains"> <a name="domains"></a>
      <h1>Domains</h1>
      <ul>
          <?php 
            foreach($config->domains as $d) {
          ?>
          <li><a href="<?php echo $d['link']; ?>" target="_blank"><?php echo $d['title']; ?></a></li>
        <?php } ?>
      </ul>
    </li>
    <li> <a name="contact"></a>
      <h1>Contact Me</h1>
      <p>Rex Jason Alobba<br />
        <a href="mailto:<?php echo $config->email; ?>"><?php echo $config->email; ?></a></p>
    </li>
  </ul>
  <div class="copyright">
    <p>Copyright 2015 <?php echo $config->siteDomainWord.'.'.$config->siteDomainTld;?></p>
  </div>
</div>
</body>
</html>
