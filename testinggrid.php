<?php
include("connect.php");
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>My blog</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body{
            background-color: #000000;
        }
        .col-xs-12{
            height: 100px;
            background-color: blue;
            color: white;
            text-align: center;
            border: 2px solid black;
        }
        .col-sm-6{
            height: 100px;
            background-color: blue;
            color: white;
            text-align: center;
        }
        .col-xs-6{
            height: 100px;
            background-color: #ffff00;
            color: black;
            text-align: center;
            border: 2px solid black;
        }
        .col-xs-4{
            height: 100px;
            background-color: green;
            color: #ffffff;
            text-align: center;
            border: 2px solid black;
        }
        .col-xs-8{
            height: 100px;
            background-color: red;
            color: #000000;
            text-align: center;
            border: 2px solid black;
        }
        .footer .col-sm-4{
            height: 100px;
            background-color: blue;
            color: white;
            text-align: center;
            border: 2px solid black;
        }
    </style>
</head>
<body>
<div class="container">

    <div class="row">
        <div class="col-xs-12">
            <h1 class="visible-xs">Extra small screen xs</h1>
            <h1 class="visible-sm">Extra small screen sm</h1>
            <h1 class="visible-md">Extra small screen md</h1>
            <h1 class="visible-lg">Extra small screen lg</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">.col-xs-12</div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-lg-4">.col-xs-6 .col-lg-4</div>
        <div class="col-xs-6 col-lg-8">.col-xs-6 .col-lg-8</div>
    </div>
    <div>
        <div class="row">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-xs-4">.col-xs-4</div>
                    <div class="col-xs-8">.col-xs-8</div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-xs-4 col-md-push-8">.col-xs-4</div>
                    <div class="col-xs-8 col-md-pull-4">.col-xs-8</div>
                </div>
            </div>
        </div>
        <div class="row footer">
            <div class="col-sm-4">.col-sm-4</div>
            <div class="col-sm-4">.col-sm-4</div>
            <div class="col-sm-4">.col-sm-4</div>
        </div>
    </div>
</div>
</body>
</html>
