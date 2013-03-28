<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    {{Asset::container('bootstrapper')->scripts();}}
    {{Asset::container('bootstrapper')->styles();}}
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/localization/messages_fr.js"></script>
    {{Asset::styles();}} 
    {{Asset::scripts();}} 
</head>
<body>
            <div class="container-fluid">
                <div class="row-fluid">
                   
                        <div class="offset1 span11 row-fluid">
                            <div class="span4 logo"><a href="{{URL::to_action('home@index');}}"><img src="{{asset('img/logo.png');}}" alt="logo" /></a></div>
                        
                        <div class="row-fluid">
                            
                            <div class="offset8 span2">
                                <ul class="nav nav-list">
                                <li>{{HTML::link_to_action('competences@index','Compétences')}}</li>
                                <li>{{HTML::link_to_action('portfolios@index','Portfolio')}}</li>
                                <li>{{HTML::link_to_action('experiences@index','Expériences')}}</li>
                                <li>{{HTML::link_to_action('home@contact','Contact')}}</li>
                                </ul>
                            </div>
			    <div class="row-fluid span9 content">                               
                                    @yield('content')
                            </div>
                        </div>
                    </div>
                </div>

            
                <div class="clearfix"></div>
                <footer class="fluid-row offset6 span2">
                    <p>&copy; Ariane Agnus 2013</p>
                </footer>

		
            </div><!-- /container -->
    
	</body>
        </html>
