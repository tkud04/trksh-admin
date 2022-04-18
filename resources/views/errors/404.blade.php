
<!DOCTYPE html>
<html lang="en">
<head>        
    <title>Not Found | Admin Dashboard - Astro Ride NG</title>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link rel="icon" type="image/ico" href="favicon.ico">    
    <link href="css/stylesheets.css" rel="stylesheet" type="text/css">        
    
    <script type='text/javascript' src='js/plugins/jquery/jquery.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/jquery-ui.min.js'></script>   
    <script type='text/javascript' src='js/plugins/jquery/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/globalize.js'></script>    
    <script type='text/javascript' src='js/plugins/bootstrap/bootstrap.min.js'></script>
    
    <script type='text/javascript' src='js/plugins/uniform/jquery.uniform.min.js'></script>
    
    <script type='text/javascript' src='js/plugins.js'></script>    
    <script type='text/javascript' src='js/actions.js'></script>
    <script type='text/javascript' src='js/settings.js'></script>
</head>
<body class="bg-default bg-light"> 
    
    <div class="container">        

        <div class="block-error">
            <div class="row">
                <div class="col-md-12">
                    <div class="error-logo"><img src="img/icon.png"/></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="error-code">
                        ERROR: 404 Not found
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">            
                    <div class="error-text">Oh, the page you're looking for couldn't be found</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <button class="btn btn-default btn-clean btn-block" onClick="document.location.href = '{{url('/')}}';">Back to dashboard</button>
                </div>
                <div class="col-md-6">
                    <button class="btn btn-default btn-clean btn-block" onClick="history.back();">Previous page</button>
                </div>
            </div>
        </div>       

    </div>

</body>
</html>