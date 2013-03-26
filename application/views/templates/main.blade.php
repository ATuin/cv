<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    {{Asset::container('bootstrapper')->scripts();}}
    {{Asset::container('bootstrapper')->styles();}}
    {{Asset::styles();}} 
    {{Asset::scripts();}} 
</head>
<body>
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="row-fluid">
                            <div class="span1"><a href="{{URL::to_action('home@index');}}"><img src="{{asset('img/logo.jpg');}}" alt="logo" /></a></div>
                        </div>
                        <div class="row-fluid">
                            <div class="span10 well">
                                <div class="row-fluid">
                                    @yield('content')
                                </div>
                            </div>
                            <div class="span2">
                                <ul class="nav nav-list">
                                <li>{{HTML::link_to_action('competences@index','Compétences')}}</li>
                                <li>{{HTML::link_to_action('portfolios@index','Portfolio')}}</li>
                                <li>{{HTML::link_to_action('experiences@index','Expériences')}}</li>
                                <li>{{HTML::link_to_action('home@contact','Contact')}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="clearfix"></div>
                <footer>
                    <p>&copy; Company 2012</p>
                </footer>

            </div> <!-- /container -->
        </body>
        </html>
