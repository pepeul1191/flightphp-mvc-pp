<html>
<head>
<title>Título TPL</title>
    <!-- Inicio CSS -->
    <link href="{Configuration::get('base_url')}public/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="{Configuration::get('base_url')}public/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="{Configuration::get('base_url')}public/assets/site/css/styles.css" rel="stylesheet" type="text/css"/>
    <!-- Fin CSS -->
</head>
<body>
    <h1>Index</h1>
    <b>BASE_URL : </b>{Configuration::get('base_url')}
    {include file=$partial}
    <!-- Inicio JS-->
    <script src="{Configuration::get('base_url')}public/bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="{Configuration::get('base_url')}public/bower_components/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="{Configuration::get('base_url')}public/bower_components/requirejs/require.js" type="text/javascript"></script>
    <script src="{Configuration::get('base_url')}public/assets/site/js/app.js" type="text/javascript"></script>
    <!-- Fin JS-->
</body>
</html>