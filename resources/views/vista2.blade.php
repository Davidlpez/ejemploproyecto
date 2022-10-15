@extends('layouts.plantilla')

@section('content')
<br> 
<div class="container">
    <div class="row justify-content-center">
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="vistauno">|Independencia|</a>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
        <a class="navbar-brand" href="vistados">|Gastronomia|</a>
        <a class="navbar-brand" href="vistatres">|Lugares Turisticos|</a>
        <a class="navbar-brand" href="vistacuatro">|Economia|</a>
        <a class="navbar-brand" href="vistacinco">|Costumbres y Tradiciones|</a>
        <a class="navbar-brand" href="vistaseis">|Cultura|</a>
    </div>
  </div>
</nav>
<body>
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> <center> <b> Gastronomía De Guatemala </b> </center> </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   La gastronomía guatemalteca es muy variada, dependiendo la región de Guatemala ofrece unos sabores u otros. En la actualidad Guatemala tiene 22 regiones de las cuales cada una tiene un plato típico. Por ejemplo, en la pequeña ciudad colonial de Antigua Guatemala, destaca por sus dulces, gran parte de ellos elaborados con frutos secos, miel, leche… <br> <br>

La mayoría de la comida guatemalteca la podemos encontrar a precios muy económicos en puestos callejeros o en cualquier tipo de restaurantes. Prácticamente en su totalidad la comida guatemalteca se caracteriza por tener unos ingredientes comunes en la mayoría de sus platos: frijol, arroz, maíz y tortilla, éste último como acompañante. La gran mayoría de la comida de Guatemala proviene de la cocina maya, teniendo una fuerte influencia de la gastronomía de España aunque también podemos encontrar cierta influencia de China en algunos de sus platos. <br> <br>

Como desayuno típico en Guatemala podemos encontrar frijoles, huevos, queso, plátano frito, crema y tortillas acompañado de café, jugo o licuado (éste último son zumos de frutas mezclado normalmente con agua o bien leche).<br> <br>

En referencia al almuerzo habitual como primero suele ser una sopa, como un entrante, primer plato casi siempre acompañado de arroz, verdura, ensadada o algo de carne. <br> <br>

En la mayoría des sus platos se pueden utilizar muchas especias que también son utilizadas por muchos países. <br> <br>

Por último, el postre puede ser variado, desde cualquier tipo de fruta o bien pastel.<br> <br>

Guatemala se caracteriza por ser un país con muy buena fruta y verdura, papaya, mango, piña, rábanos, pepino….<br> <br>

En referencia a la bebida, el café es uno de los más bebido en Guatemala. Es un país con grandes plantaciones de café, es por ello que se puede encontrar café de alta calidad siendo exportado a muchos países alrededor del mundo. En Guatemala se tiene tendencia a tomar el café bastante ligero y con bastante azúcar. <br> <br>
<hr>
A continuación  explicamos brevemente algunos de los platos típicos de Guatemala:
<hr>

<br>
<hr>
<div> <center> <b> CHURRASQUITO </b> </center></div> 
<hr>
<br>

Plato típico de Guatemala compuesto en la mayoría de casos por carne asada, chorizo, longaniza acompañado por papata, arroz, frijol, guacamol…los acompañamientos pueden variar dependiendo en función del gusto de cada persona.
Churrasquito, gastronomía guatemalteca

<br>
<hr>
<center> <b> TAMAL COLORADO </b>  </center>
<hr>
<br>

Dicho plato es uno de los más populares de Guatemala. Está hecho con una hoja llamada maxán y se encarga de darle un sabor característico al Tamal.  Es una masa que está rellena de una salsa de tomate y achiote, un poco de carne (por lo general pollo o cerdo).

<br>
<hr>
<center> <b> PEPIAN </b>  </center>
<hr>
<br>

En Guatemala Pepian es considerado uno de los platos más populares y deliciosos, normalmente acompañado con arroz y tortilla.

Podemos encontrar 2 tipos de pepián, el pepián negro y el pepián colorado, se denomina colorado debido al color que coge de uno de sus ingredientes.

Gran parte de los ingredientes del pepián son de origen Árabe e Hindú. Algunos de los ingredientes del Pepián son: espinazo de cerdo, cilantro, pollo, chile, ajonjolí, ajo, cebolla.
Pepian, , gastronomía guatemalteca
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
