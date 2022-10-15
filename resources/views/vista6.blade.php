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
                <div class="card-header"> <center> <b> Cultura De Guatemala </b> </center> </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Guatemala es un país que goza de una riqueza cultural inimaginable y reconocida en todo el mundo. De hecho, ha sido merecedor de tres distinciones de Patrimonio Mundial otorgados por la Unesco gracias a sus parques arqueológicos, lagos, ruinas de Quiriguá y tradiciones de las antiguas civilizaciones mayas.

Existen muchos elementos que destacan las costumbres y tradiciones de Guatemala, por ejemplo las danzas, festivales, la belleza singular de las vestimentas, la precisión, las ceremonias y ofrendas, el dramatismo de los bailes folclóricos y, sobre todo, el despliegue de colores vivos.

Aunado a ello, la cultura de Guatemala se caracteriza por ser plurilingüe y multiétnica, pues se hablan 22 idiomas mayas, el garífuna, el xinca y por supuesto, el español. Cada etnia que habita en el país aporta sus propias tradiciones, las cuales han sido preservadas por muchísimos años para dar como resultado un territorio rico en cuanto a bailes típicos, gastronomía, literatura y arte.') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
