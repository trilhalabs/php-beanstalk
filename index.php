<?php
define("LOCAL", "localhost");

$isLocal = $_SERVER['HTTP_HOST'];

#var_dump($isLocal === LOCAL);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>PHP Application - AWS Elastic Beanstalk</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster+Two" type="text/css">
    <?php 
    if ($isLocal === LOCAL) {
    ?>
        <link rel="icon" href="/beanstalk/php/highway.ico" type="image/ico" >
        <link rel="shortcut icon" href="/beanstalk/php/highway.ico" type="image/ico" >
    <?php 
    } else { 
    ?>
        <link rel="icon" href="https://awsmedia.s3.amazonaws.com/favicon.ico" type="image/ico" >
        <link rel="shortcut icon" href="https://awsmedia.s3.amazonaws.com/favicon.ico" type="image/ico" >
        <?php 
    }?>

    <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <?php 
    if ($isLocal === LOCAL) {
    ?>
        <link rel="stylesheet" href="/beanstalk/php/styles.css" type="text/css">    
    <?php 
    } else { 
    ?>
        <link rel="stylesheet" href="/styles.css" type="text/css">    
    <?php 
    }?>

</head>
<body>
    <?php 
    if ($isLocal === LOCAL) {
    ?>
    <section class="congratulations">
        <h1>
            <img src="/beanstalk/php/images/highway-circ-black-350x232.png" alt="Imagem Logo Trilhando Labs" >
            Parabéns... ambiente local!
        </h1>
        <p>Seu ambiente local de uma aplicação <em>PHP</em> está rodando corretamente</p>
        <p>Sua versão PHP: <?= phpversion() ?></p>
        <p>Este ambiente foi carregado a partir da plataforma local Xampp</p>
        <h3>
            <strong> Sobre o autor:</strong> Alexandre Sueiro é casado, pai de meninas e adora esportes. Trabalha em tecnologia a mais
            de 20 anos e adora aprender. 
        </h3>
    </section>
    <?php 
    } else { 
    ?>
    <section class="congratulations">
        <h1>
        <img src="/images/highway-circ-black-350x232.png" alt="Trilhando Labs logo" >
            Congrats... AWS env!
        </h1>
        <p>Your AWS Elastic Beanstalk <em>PHP</em> application is now running on your own dedicated environment in the AWS&nbsp;Cloud</p>
        <p>You are running PHP version <?= phpversion() ?></p>
        <p>This environment is launched with Elastic Beanstalk PHP Platform</p>
        <h3>
            <strong> About the author:</strong> Alexandre Sueiro is married, girls' dad and love sports. He works in IT more than 20 years and love learning. 
        </h3>
    </section>
    <?php
    }?>

    <?php 
    if ($isLocal === LOCAL) {
    ?>
        <section class="instructions">
            <h2>Arquivos de acesso público</h2>
            <ul>
                <li><a href="http://docs.amazonwebservices.com/elasticbeanstalk/latest/dg/">AWS Elastic Beanstalk overview</a></li>
                <li><a href="http://docs.amazonwebservices.com/elasticbeanstalk/latest/dg/create_deploy_PHP_eb.html">Deploying AWS Elastic Beanstalk Applications in PHP Using Eb and Git</a></li>
                <li><a href="http://docs.amazonwebservices.com/elasticbeanstalk/latest/dg/create_deploy_PHP.rds.html">Using Amazon RDS with PHP</a>
                <li><a href="http://docs.amazonwebservices.com/elasticbeanstalk/latest/dg/customize-containers-ec2.html">Customizing the Software on EC2 Instances</a></li>
                <li><a href="http://docs.amazonwebservices.com/elasticbeanstalk/latest/dg/customize-containers-resources.html">Customizing Environment Resources</a></li>
            </ul>

            <h2>Arquivos premium (precisa de autorização)</h2>
            <ul>
                <li><a href="http://aws.amazon.com/sdkforphp">AWS SDK for PHP home</a></li>
                <li><a href="http://aws.amazon.com/php">PHP developer center</a></li>
                <li><a href="https://github.com/aws/aws-sdk-php">AWS SDK for PHP on GitHub</a></li>
            </ul>
        </section>
    <?php
    } else { ?>
        <section class="instructions">
            <h2>Public files</h2>
            <ul>
                <li><a href="http://docs.amazonwebservices.com/elasticbeanstalk/latest/dg/">AWS Elastic Beanstalk overview</a></li>
                <li><a href="http://docs.amazonwebservices.com/elasticbeanstalk/latest/dg/create_deploy_PHP_eb.html">Deploying AWS Elastic Beanstalk Applications in PHP Using Eb and Git</a></li>
                <li><a href="http://docs.amazonwebservices.com/elasticbeanstalk/latest/dg/create_deploy_PHP.rds.html">Using Amazon RDS with PHP</a>
                <li><a href="http://docs.amazonwebservices.com/elasticbeanstalk/latest/dg/customize-containers-ec2.html">Customizing the Software on EC2 Instances</a></li>
                <li><a href="http://docs.amazonwebservices.com/elasticbeanstalk/latest/dg/customize-containers-resources.html">Customizing Environment Resources</a></li>
            </ul>

            <h2>Premium files (need authorization)</h2>
            <ul>
                <li><a href="http://aws.amazon.com/sdkforphp">AWS SDK for PHP home</a></li>
                <li><a href="http://aws.amazon.com/php">PHP developer center</a></li>
                <li><a href="https://github.com/aws/aws-sdk-php">AWS SDK for PHP on GitHub</a></li>
            </ul>
        </section>
    <?php
    }?>
    <!--[if lt IE 9]><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
</body>
</html>
