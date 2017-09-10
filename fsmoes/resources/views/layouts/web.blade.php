<html>
<head>
    <title>FISIP Prof.Dr.Moestopo</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

   
<style >
    

/*head*/
.logoHead{
    background: url('img/logo.png') no-repeat;
    float: left;
    height:72px;
    width:72px;
    
    margin-left: 20px;
    margin-top: 10px;
    }
/*haed*/
/*change navbar*/
/*fontH1,2,3*/
h1 {
    font: bold 14px  'Lucida Grande', 'Lucida Sans', 'Lucida Sans Unicode', Verdana, Sans-Serif;
    margin-bottom: 15px;
    color: #ff8604;
    
}
 h2 {
    font: bold 15px  'Lucida Grande', 'Lucida Sans', 'Lucida Sans Unicode', Verdana, Sans-Serif;
    margin-bottom: 15px;
    color: #ff8604;
    
}
 h3 {
    font: bold 18px  'Lucida Grande', 'Lucida Sans', 'Lucida Sans Unicode', Verdana, Sans-Serif;
    margin-bottom: 15px;
    color: #ff8604;
    border-bottom: 1px solid #ff8604;
}
h4 {
    font: bold 24px  'Lucida Grande', 'Lucida Sans', 'Lucida Sans Unicode', Verdana, Sans-Serif;
    margin-bottom: 15px;
    color: #ff8604;
    
}
p{
    font:  14px  'Lucida Grande', 'Lucida Sans', 'Lucida Sans Unicode', Verdana, Sans-Serif;
}

/*fontH1,2,3*/
    .navbar-inverse {
    /*background-color: #ff8604;*/
    background-color: #fff;
    font-size:14px;
    color: #000;

    }

    .navbar-brand{
        background-color: #fff;
    }

    .navbar-inverse .navbar-nav>li>a {
    color: #000;
    background-color: #fff;
    }
    /*change navbar when hover*/
    .navbar-inverse .navbar-nav > li > a:hover, .navbar-inverse .navbar-nav > li > a:focus {
    background-color: #ff8604;
    color: #fff;
}
 /*change navbar dropdown when hover*/   
    .navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:focus, .navbar-inverse .navbar-nav>.open>a:hover {
    color: #000;
    background-color:  #FFFFF0;
}


.dropdown-menu>li>a {
    display: block;
    padding: 3px 20px;
    clear: both;
    font-weight: 400;
    line-height: 1.42857143;
    color: #333;
    white-space: nowrap;

}
.dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover {
    color: #262626;
    text-decoration: none;
    background-color: #ff8604;
}
/*navigasitu*/
.footer{
     background-color: #ff8604;
     color: #fff;
}
    
  /*   @media(min-width: 768px)
  {
      .dropdown:hover .dropdown-menu{
          display: block;
      }
  } */
/* ARTIKEL CONTENT
-------------------------------------------------- */


.artikel .col-lg-4 {
  margin-top: 20px;
  margin-bottom: 20px;
  text-align: center;

}
.artikel h2 {
  font-weight: normal;
  font: bold 18px  'Lucida Grande', 'Lucida Sans', 'Lucida Sans Unicode', Verdana, Sans-Serif;
    margin-bottom: 15px;
    color: #ff8604;
    border-bottom: 1px solid #ff8604;
}
.artikel .col-lg-4 p {
  margin-right: 10px;
  margin-left: 10px;
}

  /*prafooter*/
  .clear {
    clear:both;
}
#extra p {
    font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Verdana, Sans-serif;
}
#extra strong, #extra em, #extra b, #extra i {
    font-family:  'Lucida Grande', 'Lucida Sans', 'Lucida Sans Unicode', Verdana, sans-serif;
}

#extra a:link,
#extra a:visited { color: #fff; }
#extra a:hover { color: #feb465; }

#extra h3 {
    font: bold 18px  'Lucida Grande', 'Lucida Sans', 'Lucida Sans Unicode', Verdana, Sans-Serif;
    margin-bottom: 15px;
    color: #ff8604;
}
#extra-wrap {
   
    color: #000;
    padding-bottom: 24px;
    border-top: #164F74;
    background: #5a5a5a;
    min-height: 200px;
    padding: 20px;
}
#extra {
    
    margin: 0 auto;
    font-size: 12px;
    line-height: 20px;
    }
#extra .col-md-4 {
    float: left;
    margin-left: 30px;
    width: 222px;
}
#extra .first {
    margin-left: 0;
}
/* Subscribe Stuff */
ul.subscribe-stuff {
    list-style: none;
    margin: 0;
    padding: 0;
}
ul.subscribe-stuff li {
    float: left;
    margin: 0 3px 12px 0;
    padding: 0;
}
ul.subscribe-stuff li img {
    padding: 0;
    margin: 0;
    border: none;
    background: none;
}
/* footer-list */
.footer-list ul {
    background: url(../images/footer-line.png) repeat-x left top;
    list-style: none;
    padding: 0;
    margin-left: 0;
}
.footer-list ul li {
    border-bottom: 1px solid #ff8604;
}
.footer-list ul li a:link,
.footer-list ul li a:visited {
    font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Verdana, Sans-Serif;
    display: block;
    padding: 7px 0 7px 5px;
    margin-left: 0;
    color: #000;
}
.footer-list ul li a:hover { color: #feb465; }


#footer {
    background: #ff8604;
    height: 50px;
}
#prafooter{
    background: #5a5a5a;
    min-height: 200px;
    padding: 20px;
}
#footer p{
    color: #fff;
    margin: 0;
    padding-top: 15px;
    text-align: center;
}
  /*prafooter*/


</style>
        
    
</head>
<body>
    
   
    
    
            
    @include('includes.navbar')
         

   

    <div class="container-fluid">
        <div class="row">
            
            
                @yield('content')
            
        </div>
    </div>



  @include('includes.prafooter')

  <div id="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <p>Copyright &copy; FISIP UNIVERSITAS PROF.DR.MOESTOPO(BERAGAMA) </p>
            </div>
        </div>
    </div>
</div>

    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>


     


  
         
</body>
</html>

