<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $judul ?> | Web Programming</title>
    <link rel="stylesheet" href=" <?php echo base_url() ?>assets/css/style.css" type="text/css">
</head>

<body>
    <div id="wrapper"> 
        <header>
            <hgroup>
                <h1> WEB BSI</h1>
                <h3>Infor Seputar Kampus BSI</h3>
            </hgroup>
            <nav>
                <ul>
                    <li><a href="<?php echo base_url() . 'index.php/web' ?>">Home</a></li>
                    <li><a href="<?php echo base_url() . 'index.php/web/blog' ?>">Blog</a></li>
                    <li><a href="<?php echo base_url() . 'index.php/web/user' ?>">User</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </header>
