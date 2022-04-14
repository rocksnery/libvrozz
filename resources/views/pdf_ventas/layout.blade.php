<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <style>
             @page 
            {
                /*margin-top: 1cm;*/
                /*margin: 0.5cm;*/
                margin: 0.5cm 0.5cm;
            }

            body {
                font-size: 9px;
                font-family: 'Arial';

                /*margin-top: 0cm;
                margin-left: 0cm;
                margin-right: 0cm;
                margin-bottom: 0cm;*/
                
            }

            header {
                /*position: fixed;
                top: 0cm;
                left: 0cm;
                right: 0cm;
                height: 1cm;*/

                 /** Extra personal styles **/
                /*border-bottom: 1px solid #000;
                text-align: center;
                line-height: 1.0cm;*/
            }

            footer { 
                position: fixed; 
                bottom: 0cm; 
                left: 0cm; 
                right: 0cm;
                height: 2cm;

                /** Extra personal styles **/
                border-top: 1px solid #000;
                text-align: center;
                line-height: 1.0cm;


            }



           table {
                border-left: 0.01em solid #aaa;
                border-right: 0;
                border-top: 0.01em solid #aaa;
                border-bottom: 0;
                border-collapse: collapse;
            }
            table td,
            table th {
                border-left: 0;
                border-right: 0.01em solid #aaa;
                border-top: 0;
                border-bottom: 0.01em solid #aaa;
            }
        </style>

        <title>@yield('title')</title>

    </head>
    <body>
        <header>
              <!--div class="col-md-12 text-right"-->
                <img src="{{ asset('images/logo_upz.png') }}" align="right" width="200px">
            <!--/div-->

          <br>
          <br> 
          <!--  @yield('title_report') -->
          <h3> @yield('title') </h3> 
        </header>
        <main>  
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                    	@yield('content')
                    </div>
                </div>  
            </div>
        </main>

        <footer>
           
            <small>UPZ Fresnillo  | 
            <a href="http://www.upz.mx"  target="_blank">www.upz.mx</a></small>

            
        </footer>



       

    </body>
</html>