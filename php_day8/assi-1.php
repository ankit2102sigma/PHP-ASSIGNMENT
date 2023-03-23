<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
     .container{
        width:80%;
        margin:auto;
        

     }
     .item{
        margin: 20px;
     }
     .desimg img{
        width:100%;
        margin-bottom:50px;
        max-height: 700px;
     }
     .desimg {
        font-size:28px;
     }
     .heading{
        display: flex;
        align-items: center;
        font-size: 80px;
        justify-content: center;
        background: black;
        color: yellow;
        height: 140px;
        margin: 0px;
        padding: 0px;
     }


</style>
</head>
<body>
    

<?php

class RssFeed {
    private $url;

    public function __construct()
    {
        $this->url = $_POST['name'];;  
    } 

    public function getFeed() {
        libxml_use_internal_errors(true);

        $rss_feed = simplexml_load_file($this->url);
        echo "<h1 class=  'heading'>";
         echo "Lifehacker";
         echo "</h1>";
             echo "<div class=  'container'>";
                 if(isset($rss_feed->channel)){
                      if(isset($rss_feed->channel->item)){
                            foreach ($rss_feed->channel->item as $item) {
                              $title = (string) $item->title; 
                              $link   = (string) $item->link; 
                              $description =  $item->description;
                       
                
                                echo "<div class='item'";
                                    echo "<a href ='".$link."'><h1>".$title."</a></h1>";
                                        echo "<hr>";
                                    echo "<div = 'description'>";
                                        echo "<p class='desimg'>".$description."</p>";
                                    echo  "</div>";
                                echo "</div>";
                                   }
                                }
                                    else{
                                        echo "Invalid rss link";
                                        }
                                }else{
                                    echo "Invalid Rss Link";
                                }
                                    echo "</div>";
                                
    }
}
$rss = new RssFeed;
$rss->getFeed();

?>


</body>
</html>
