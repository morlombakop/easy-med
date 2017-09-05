<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <title>
                EasyMed | Easing Medical Product Inventory And Distribution In Guinea Public Founded Pharmacy
            </title>
            <meta content="IE=edge" http-equiv="x-ua-compatible"/>
            <meta content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" name="viewport"/>
            <meta content="yes" name="apple-mobile-web-app-capable"/>
            <meta content="yes" name="apple-touch-fullscreen"/>
            <link href="{{ URL::to('node_modules/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
            <link href="{{ URL::to('css/theme.min.css') }}" rel="stylesheet" type="text/css"/>
            <link href="{{ URL::to('css/style.css') }}" rel="stylesheet" type="text/css">
            </link>
        </meta>
    </head>
    <header>
        @yield('navigation')
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <div class="wrap-center clearfix">
            <div class="col-md-3">
                <div class="wrap-author">
                    <img alt="img" class="img-cicle" src="{{URL::to('img/me.jpg')}}">
                    </img>
                </div>
            </div>
            <div class="col-md-9">
                <div class="wrap-footer">
                    <p class="text-center">
                        This web tools is a prototype build as Master thesis under
                        <strong>
                            Leeds Beckett University
                        </strong>
                        <br/>
                        The Thesis is being completed by
                        <strong>
                            Thierno Mamadou Alpha Bah
                        </strong>
                        and supervised by
                        <strong>
                            Mohamed Ismail Z
                        </strong>
                        <br/>
                        © July 2017, Thierno Mamadou Alpha Bah
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ URL::to('node_modules/jquery/dist/jquery.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ URL::to('node_modules/tether/dist/js/tether.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ URL::to('node_modules/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript">
    </script>
</html>
