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
                <div class="card-header"> <center> <b> Independencia De Guatemala </b> </center> </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
    
                    {{ __('El 15 de septiembre de 1821 es un día memorable para nuestra Nación, cuando representantes de las provincias centroamericanas declararon a Guatemala independiente de España y conformaron una Junta Gubernativa Provisional que firmó el acta de soberanía, que fue el camino para convertir a Guatemala en un país libre y soberano.

Cuando se cumplen 199 años de la firma del acta, historiadores y políticos consideran conveniente y necesario pensar en lo trascendental que ha sido para la vida política y democrática para el país.

Según los historiadores, las acciones que precipitaron los acontecimientos del 15 de septiembre de 1821 en la Capitanía General de Guatemala, en donde se redacta el Acta de la Independencia de Guatemala y la de Centroamérica, destacan la invasión de Napoleón Bonaparte a España, que generó la caída de la monarquía española en 1808.

Así mismo, en 1810, representantes de América y España se reúnen en las Cortes de Cádiz y para 1812 surge una Constitución democrática, que el Rey Fernando VII veta al asumir de nuevo el trono.

Otro motivo fue el descontento de los criollos, es decir, los hijos de españoles nacidos en América, ya que éstos no tenían acceso al poder político que estaba destinado a los nacidos en España y las ideas de la Ilustración, que consignaban las ideas de igualdad, fraternidad y libertad comercial, y de pensamiento, por lo tanto, iban en contra de las monarquías absolutas.') }}
<br>
<br>
<hr>
<div> <center> <b> La Capitania General </b> </center> </div> 
<hr>
<br>
La república de Centroamérica, antes Reino de Guatemala, era una Capitanía General Independiente bajo el sistema colonial. En 1820 ejercía el gobierno de sus provincias en calidad de presidente y capitán general el teniente general Carlos de Urrutia, cuando se restableció la Constitución española de 1812.

Este restablecimiento dio dos fuertes partidos que tomaron pretexto en las elecciones populares de aquel año para diputados y municipales. El partido liberal tendía a la independencia, y sus candidatos eran independientes; el de oposición era el de los españoles europeos.

Los peligros a que estaba expuesta la tranquilidad pública persuadieron a la diputación provincial de Guatemala que el general Urrutia por su avanzada edad y por sus achaques era incapaz de gobernar, y le obligó a delegar los mandos en el inspector general don Gabino Gaínza, que acababa de llegar de España. Gaínza entró a ejercer el gobierno en marzo de 1821.
<br>
<br>
<hr>
<center> <b> Los Sucesos Previos </b> </center>
<hr>
<br>

En 1821 todo el Reino de Guatemala estaba pacíficamente sometido al gobierno español; no se ocupaban las autoridades y los pueblos sino de las innovaciones que producía el sistema constitucional, la libertad de la imprenta y la exaltación de los partidos, que nacían en las elecciones populares, extendían la opinión a favor de la independencia.

Los independientes celebraban juntas en Guatemala, pero no tenían recursos ni el valor necesario para insurreccionarse contra el gobierno; todo lo esperaban de los progresos que hiciera en México el Plan de Iguala o Plan de Independencia. Así mismo, no todos los independientes estaban conformes en el sistema de gobierno proclamado por Iturbide, y mucho menos por la dinastía llamada al trono mexicano  pero entonces sólo se trataba de independencia, reservando cada uno su opinión en cuanto a las formas de gobierno.

El 13 de septiembre se recibieron en Guatemala las actas de Ciudad Real de Chiapas y otros pueblos de aquel Estado adhiriéndose al Plan de Iguala; los progresos que hacía el ejército daban toda su fuerza a los pronunciamientos de Chiapas, que por sí misma nunca tuvo importancia política en aquel reino.

El síndico del ayuntamiento de Guatemala don Mariano Aycinena, pidió una sesión extraordinaria para presentar en ella una petición con el objeto de que se proclamase la independencia.

<hr>
<br>
<center> <b> Historico Congreso </b> </center>
<hr>
<br>
El 29 de marzo de 1823, el general Vicente Filísola, consultando solamente con los jefes y oficiales de la guarnición de Guatemala, expidió un decreto razonado convocando el Congreso de Guatemala con arreglo al acta de 15 de septiembre de 1821 anulada por la incorporación a México, para que este Congreso decidiese con vista de las circunstancias sobre la suerte de aquellas provincias.

El primer Congreso constitucional se instaló en Guatemala el 6 de febrero de 1825, y muchos de sus miembros lo habían sido de la Asamblea constituyente.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
