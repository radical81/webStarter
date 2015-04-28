<?php

/* RSS Reader using dg/rss-php from composer. */

Class RssReader {
    public $url;
    public $limit;
    
    public function __construct($url, $limit) {
        $this->url = $url;
        $this->limit = $limit;
    }
    
    public function readCollection() {
        $obj = array();
        try {            
            $rss = Feed::loadRss($this->url);
            $i = 0;
            foreach ($rss->item as $item) {
                $temp = array();
                $temp['title'] = $item->title;
                $temp['link'] = $item->link;
                $temp['content'] = $item->{'content:encoded'};
                $temp['description'] = $item->description;
                $temp['timestamp'] = $item->timestamp;
                $obj[] = $temp;
                $i++;
                if($i == $this->limit) {
                    break;
                }
            }
            
        } catch (Exception $ex) {
            echo $ex->getMessage()."\n";
        }
        return $obj;
    }
}