<?php
session_start();
// *****************************************************************************************
// get full root path
// *****************************************************************************************
if (DIRECTORY_SEPARATOR == '/'){
  $_SESSION['root'] = dirname(__FILE__).'/';
}else{
  $_SESSION['root'] = str_replace('\\', '/', dirname(__FILE__)).'/';
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title id="page-title">ExtJS 4 Themer</title>
        <link rel="stylesheet" type="text/css" href="resources/css/ext-all-gray.css">
        <link rel="stylesheet" type="text/css" href="app.css">
        <script type="text/javascript" src="ext-all.js"></script>
        <!-- Color Picker Stuff -->
        <link rel="stylesheet" type="text/css" href="colorpicker.css" />
        <!-- End Color Picker Stuff -->
        <script type="text/javascript" src="app.js"></script>
        <style type="text/css">
            .x-mask {
                z-index:  300000;
            }
            .x-mask-msg {
                z-index:  300001;
                left:     45%;
                top:      45%;
            }
            ::-webkit-scrollbar {
                width: 4px;
                height: 10px;
                margin: 0;
            }
            ::-webkit-scrollbar-track-piece  {
                background-color: #fff;
                -webkit-border-radius: 4px;
            }
            ::-webkit-scrollbar-thumb:vertical {
                height: 50px;
                background-color: #ccc;
                -webkit-border-radius: 3px;
            }
        </style>
    </head>
    <body>
        <div id="mainapp-loading-mask" class="x-mask"></div>
        <div id="mainapp-x-mask-msg">
            <div id="mainapp-loading" class="x-mask-msg">
                <div>Loading Themer App...</div>
            </div>
        </div>
    </body>
</html>
