<?php

Class Config {
    /*Customize Per Site - Begin*/
    public $siteName = "Site Title";
    public $siteDomainWord = "sitename";    
    public $siteDomainTld = "tld";
    public $buyNowLink = "http://sedo.com";
    public $rssUrl = 'http://feeds.reuters.com/reuters/oddlyEnoughNews?format=xml';
    public $images = array('11kImage01.jpg','11kImage02.jpg','11kImage03.jpg');
    /*Customize End*/
    public $limit = 3; 
    public $domains = array(
        array('title'=> 'dronefly.co', 'link' => 'http://www.dronefly.co'),
        array('title'=> 'acct.co', 'link' => 'http://www.acct.co'),
        array('title'=> 'risingbillions.com', 'link' => 'http://www.risingbillions.com'),
        array('title'=> 'improve.im', 'link' => 'http://www.improve.im'),
        array('title'=> 'recla.im', 'link' => 'http://www.recla.im'),
        array('title'=> 'bylining.com', 'link' => 'http://www.bylining.com'),
        array('title'=> 'smartwatchorder.com', 'link' => 'http://www.smartwatchorder.com'),
        array('title'=> 'watchresale.com', 'link' => 'http://www.watchresale.com'),
        array('title'=> '11k.co', 'link' => 'http://www.11k.co'),
        array('title'=> 'dronejog.com', 'link' => 'http://www.dronejog.com'),
        array('title'=> '5kres.com', 'link' => 'http://www.5kres.com'),
        array('title'=> 'skyman.co', 'link' => 'http://www.skyman.co'),
        array('title'=> 'tinman.co', 'link' => 'http://www.tinman.co'),        
        array('title'=> 'gyms.ninja', 'link' => 'http://www.gyms.ninja'),
        array('title'=> 'trainlike.ninja', 'link' => 'http://www.trainlike.ninja'),
        array('title'=> 'innovator.ninja', 'link' => 'http://www.innovator.ninja'),
        array('title'=> 'hiit.ninja', 'link' => 'http://www.hiit.ninja')
    );
    public $aboutMe = "My name on the Internet is myspaceless. I'm a Christian, loving husband, musician, archer, and Software Engineer.";
    public $email = "myspaceless@gmail.com";
}