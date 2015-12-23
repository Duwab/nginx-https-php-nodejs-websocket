<!DOCTYPE html>
<html>
<head>
    <title>Cached Page</title>
    <link href="/assets/css/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="container">
        <h1>Much Server</h1>
        <p><?php echo "Page compilation timestamp = " . time(); ?></p>
        <p>
            Go to <a href="/" target="_blank">Cached home</a> or <a href="/home-index-routed-url" target="_blank">Cached page routed to index.php</a>
        </p>
        <p>
            Go to <a href="/nocache" target="_blank">Nocache</a>
        </p>
        <p>
            Go to <a href="/ws/" target="_blank">Chat</a>
        </p>
        <p>
            <?php $purge_url = "/purge-url?url=" . ($_SERVER["HTTPS"] ? "https" : "http") . "://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>
            Purge script for this page <a href="<?php echo $purge_url;?>" target="_blank"><?php echo $purge_url;?></a>
        </p>
        <?php
            $i = 0;
            while($i < 100000000)
            {
                $i++;
            }
            echo "i a atteint $i!<br/>";

            $i = 0;
            while($i < 1000)
            {
                echo 'Voici la ligne pour $i = ' . $i++ . '<br/>';
            }
        ?>
    </div>
</body>
</html>

