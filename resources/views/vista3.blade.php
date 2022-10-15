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
                <div class="card-header"> <center> <b>  Lugares Turisticos De Guatemala </b> </center>  </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Una de las actividades económicas y culturales más importantes con las que cuenta un país hoy en día es el turismo, el cual además, contribuye a los Objetivos de Desarrollo Sostenible de las Naciones Unidas.
El turismo esconde valores importantes para el desarrollo de la humanidad: es un medio de esperanza, genera prosperidad y fomenta el entendimiento entre gentes de distintas culturas, religiones. Y lo más importante, es un medio de vida y de generación de riqueza para muchas personas.
El turismo en Guatemala
La Política Nacional para el Desarrollo Turístico Sostenible de Guatemala 2012-2022 -PNDTS-, define al turismo como motor del desarrollo económico y social para Guatemala y adopta el modelo de sostenibilidad como eje transversal. El Instituto Guatemalteco de Turismo, formuló el Plan Maestro de Turismo Sostenible de Guatemala 2015-2025(PMTS), aprobado por Acuerdo Gubernativo No. 149-2016 del 1de agosto de 2016.') }}
<br>
<br>
En este marco, INGUAT como entidad rectora del turismo en Guatemala, a partir del año 2015 ha socializado el PMTS, como un instrumento de planificación que visualiza el desarrollo del sector a 10 años, asimismo, realiza gestiones con el sector público y privado turístico, con el propósito que los proyectos se ejecuten bajo la coordinación de los actores responsables; además de buscar el apoyo de la cooperación internacional y de esta forma desarrollar la actividad turística en Guatemala de forma sostenible.<br>
<br>
La implementación del PMTS ha sido un trabajo en conjunto con el sector público y privado turístico, que ha permitido poner en valor la oferta turística del país, diversificarla y promoverla, derivado de la planificación y ordenamiento del territorio, en áreas prioritarias de desarrollo y sostenibilidad. 
<br>

<hr>
<b> Se identifican 10 destinos turísticos principales de Guatemala:  </b> 
<hr>
1. Parque Nacional Tikal, Petén<br>
2. Parque Arqueológico Quirigua, Izabal<br>
3. Monumento Natural Semuc Champey, Las Verapaces<br>
4. Quetzaltenango, Quetzaltenango<br>
5. Chichicastenango, Quiché<br>
6. Lago de Atitlán, Sololá<br>
7. Ciudad de Guatemala, Guatemala<br>
8. La Antigua Guatemala, Sacatepéquez<br>
9. Esquipulas, Chiquimula<br>
10. Guatemágica, Costa Sur<br>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
