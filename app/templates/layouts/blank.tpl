<html>
<head>
    <title>{if isset($title)}{$title}{else}Aplicaction{/if}</title>
    <link rel="shortcut icon" href="{Configuration::get('base_url')}public/assets/site/img/favicon.ico" type="image/x-icon">
    <!-- Inicio CSS -->
    <link href="{Configuration::get('public_url')}bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="{Configuration::get('public_url')}bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="{Configuration::get('public_url')}assets/site/css/styles.css" rel="stylesheet" type="text/css"/>
    <link href="{Configuration::get('base_url')}public/bower_components/bootstrap-redmine/assets/css/styles.css" rel="stylesheet" type="text/css"/>
    {if isset($csss)}{foreach from = $csss item = css}<link href="{Configuration::get('public_url')}{$css}.css" rel="stylesheet" type="text/css"/>{/foreach}{/if}
    <script type="text/javascript">var BASE_URL = "{Configuration::get('base_url')}";</script>
    <!-- Fin CSS -->
</head>
<body>
    {include file=$partial}
    <!-- Inicio JS-->
    <script src="{Configuration::get('public_url')}bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="{Configuration::get('public_url')}bower_components/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="{Configuration::get('public_url')}bower_components/requirejs/require.js" type="text/javascript"></script>
    {if isset($jss)}{foreach from = $jss item = js}<script src="{Configuration::get('public_url')}{$js}.js" type="text/javascript"></script>{/foreach}{/if}
    <!-- Fin JS-->
</body>
</html>