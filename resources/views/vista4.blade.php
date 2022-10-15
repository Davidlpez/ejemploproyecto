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
                <div class="card-header"> <center> <b> Economía De Guatemala </b> <center> </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  economía de Guatemala constituye la mayor economía de América Central, y la décima de América Latina. Su PIB, representa un tercio del PIB regional. El país mantiene fundamentos macroeconómicos sólidos en los últimos años, con un nivel de reservas elevado, un nivel controlado del déficit público (2,8% en 2011) y del déficit exterior y una deuda pública baja, del 30% del PIB en 2011. El nivel económico de la población es contrastante, con un 40% de sus habitantes que se encuentran por debajo del umbral de la pobreza y un 15% en pobreza extrema.
                  <br>
                  <br>
El sector más grande en la economía guatemalteca era tradicionalmente la agricultura, siendo Guatemala el mayor exportador mundial de cardamomo, el segundo mayor exportador de banano, el quinto exportador de azúcar y el décimo productor de café. El sector del turismo en Guatemala es el segundo generador de divisas para el país tras las remesas de los emigrantes, la industria es una importante rama de la economía guatemalteca y el sector de servicios está aumentando en importancia. 
<br>
<br>
<hr>
<div> <center> <b> Productos de exportación </b> <center>  </div> 
<hr>
Los principales productos de exportación son: azúcar, banano, café, cardamomo, petróleo y en menor medida la energía eléctrica.

El valor total de las exportaciones era de US$4 mil 839.8 millones a principio de diciembre de 2008 (unos US$808.3 millones más que el año pasado, de acuerdo a un reporte al 11 de diciembre del Banguat). Los cinco principales productos de exportación representan el 26.5% del total de exportaciones del país, que ascendió a US$ 1,516.6 millones. El crecimiento del valor total de las exportaciones guatemaltecas aumentó en un 20.1% debido a los altos ingresos por el aumento del precio del café, petróleo y cardamomo en los mercados mundiales. Sin embargo, el precio y volumen de las ventas de azúcar disminuyó considerablemente a la quiebra.
<br>
<hr>
<div> <b> <center> Productos de importación <center> </b> </div> 
<hr>
<br>
Los principales productos de importación son: materias primas, materiales de construcción, combustibles, bienes de consumo, bienes de capital.

El valor CIF de las importaciones ascendió al monto de US$ 7,482.1 millones, mayor en US$ 1,082.6 millones equivalente al 16.9% respecto al registrado durante el primer semestre de 2007. El ritmo de crecimiento que tuvieron las importaciones en esta primera mitad de 2008 fue mayor al 12.7% (durante igual período de 2007). Este aumento se atribuye al alza en la factura petrolera. A nivel de los bienes de consumo, cuyo monto (US$ 1,795.5 millones) absorbió el 24.0% de las importaciones totales, aumentó 5.6% en comparación con el 15.8% del año anterior. En gran parte, esta desaceleración se debió a la disminución en la importación de bienes de consumo duradero (-6.7%). Con respecto a las importaciones de combustibles y lubricantes, su valor CIF fue de US$ 1,592.8 millones, mayor en US$ 510.5 millones (47.2%) al monto en que se situaron a igual fecha del año anterior. 

<br>
<hr>
<div> <b> <center>  Sectores económicos principales </b> <center>  </div> 
<hr>
<br>

El sector más grande en la economía guatemalteca es la agricultura, siendo Guatemala el mayor exportador de cardamomo a nivel mundial, el quinto exportador de azúcar y el séptimo productor de café. El sector del turismo en Guatemala es el segundo generador de divisas para el país, mientras que la industria es una importante rama de la economía guatemalteca y el sector de servicios que año tras año cobra mayor importancia, por lo que convierte la típica economía guatemalteca basada en la agricultura en una economía basada en la prestación de servicios.
<br>
<br>
<div> <center>  <b> Los sectores que más aportes generan al PIB en Guatemala son: </b> <center> </div> 
<br>
<br>
    <b> Agricultura, Ganadería y Pesca: </b> El sector agrícola conforma un cuarto del PIB, dos tercios de las exportaciones, y la mitad de la fuerza laboral. Los productos agrícolas principales son café, caña de azúcar, bananos y plátanos. También se cultiva tabaco, algodón, maíz, frutas y todo tipo de hortalizas. El país destaca por el cultivo de productos agrícolas no tradicionales como brócoli, arveja china, col de Bruselas, ajonjolí, espárragos y chile, que en su mayor parte se destinan al comercio exterior. Guatemala cuenta con ganadería, básicamente para consumo interno y un pequeño porcentaje para exportación a Honduras y El Salvador. La pesca es importante principalmente en la costa sur, los principales productos de exportación son los camarones, langostas y calamares. Los departamentos de Escuintla y Retalhuleu son los más importantes para la pesca. Por su aridez, el llamado corredor seco que cubre parte de los departamentos de Baja Verapaz, Zacapa, El Progreso, Jalapa, Chiquimula, Jutiapa y Santa Rosa, es muy vulnerable a las sequías, no cuenta con seguridad alimentaria además de tener un alto grado de pobreza extrema.
    <br>
    <br>
    <b> Minería: </b>el único metal existente en grandes cantidades es el níquel, cuya extracción se destina mayoritariamente a la exportación —la explotación de níquel en El Estor, Izabal por la compañía canadiense EXMIBAL fue fuente de conflictos durante la Guerra Civil de Guatemala, especialmente en la década entre 1976 y 1986. Existen en el país grandes minas de oro y plata así como de jade y cobre. La mina más grande del país pertenece a la compañía Canadiense Goldcorp, que se dedica a la explotación de oro para la exportación.
    <br>
    <br>
    <b> Manufactura y construcción:</b> conforman un quinto del PIB. Las principales industrias son: transformación de alimentos, ensamblado de vehículos, aparatos eléctricos, pinturas, farmacéuticas, bebidas alcohólicas y no alcohólicas, editoriales y textiles, entre otras. La Ley de Propiedad Industrial vela por los derechos de la propiedad intelectual sobre patentes de invención y signos distintivos, lo que contempla la denominación de origen y la marca de certificación. Las principales industrias del país son de capital extranjero como American British Tabaco, Menarini, Laprin, Unipharm, Ambev. Existen muchas otras de capital mixto como Toyota, Hino, Mabe, General Electric, y empresas guatemaltecas como Kern´s, Cervecería Centroamericana, Cementos Progreso, etc.
    <br>
    <br>
    <b> Turismo en Guatemala: </b>el turismo se convirtió en uno de los motores principales de la economía, una industria que reportó más de $1,800 millones de dólares en el año 2008. Guatemala recibe alrededor de dos millones de turistas anualmente. En los últimos años se ha originado la visita de muchos cruceros que tocan puertos marítimos importantes de Guatemala, lo que conlleva la visita de más turistas al país. 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
