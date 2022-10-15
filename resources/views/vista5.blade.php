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
                <div class="card-header"> <center> <b> Costumbres De Guatemala </b> </center> </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                Guatemala es un país de gran diversidad ecológica y biológica, pero también posee una historia rica, compleja e integrada de tradiciones de los mayas y otros pueblos precolombinos, es decir, aquellos que fueron traídos por los españoles. Por esta razón, sus costumbres han pasado de generación en generación, dando como resultado una mezcla de culturas y celebraciones.

Este país posee celebraciones que enamoran tanto a locales como visitantes gracias a sus atractivos colores, música, trajes y el ambiente. Por ello, a continuación encontrarás las costumbres y tradiciones de Guatemala más conocidas en la actualidad.

<br>
<br>
<hr>
<div> <center> <b> Ritual para honrar a los muertos </b> <center> </div>
<hr>
El 1ero de noviembre de cada año se convierte en una fecha especial para los guatemaltecos, ya que es un día para honrar a los amigos, familiares y conocidos que han fallecido. Para ello, caminan hasta el cementerio con hermosas flores, cartas y ofrendas para adornar las tumbas de sus difuntos.
<br>
<br>
Después de Navidad, esta es la tradición más representativa de Guatemala y a pesar de lo que se pueda pensar, está muy llena de color porque celebran la transición del mundo material al espiritual. Usualmente, se llevan a cabo varios tipos de actividades, entre ellas se encuentra la de honrar y rezar a los muertos, volar cometas y adornar las calles con banderillas.
<br>
<br>
Cabe destacar que entre todas las costumbres y tradiciones de Guatemala, esta celebración tiene mayor impacto y es más visitada por turistas en los municipios del departamento de Sacatepequez, pues gracias al viento se lleva a cabo el vuelo de barriletes gigantes.
<br>
<br>
<br>
<hr>
<div> <center> <b>  Belejeb B’atz: el día de la mujer maya </b> <center> </div>
<hr>
Según la cultura maya, la mujer es la representación viva de la belleza, fidelidad, energía vital y sabiduría. Por ello, cada vez que transcurran 260 días en el calendario conmemoran la creación de las mujeres con una celebración llamada Belejeb B’atz.
<br>
<br>
Esta es una de las costumbres y tradiciones de Guatemala más populares y forma parte de la cultura de la antigua Guatemala, pues su primera su mención se encuentra en el Popol Vuh. En este libro se expresa claramente que las mujeres mayas fueron creadas por Ajaw, gobernante de las civilizaciones pasadas.
<br>
<br>
Además, se puede leer que ellas fueron capaces de engendrar hombres que pertenecieron a las grandes tribus, por lo que se les debe respeto y gratitud. De esta forma, durante el día la mujer maya se acostumbra a que vistan trajes llamativos y llenos de color, siempre que sus cuerpos permanezcan cubiertos completamente. También, se llevan a cabo fiestas y bailes folklóricos populares.
<br>
<hr>
<div> <center> <b>  Adoración a Maximón </b> <center> </div>
<hr>
<br>
San Simón o mejor conocido como Maximón es una figura adorada en Guatemala, mitad Dios y mitad hombre, el cual se caracteriza por ser de los principales objetos estudiados en el país. Usualmente es venerado en San Andrés, pues sus habitantes aseguran que es capaz de cumplir deseos, por ejemplo conseguir empleo, recuperar la salud, encontrar el amor y obtener dinero.
<br>
<br>
En la celebración convierten a Maximón en una divinidad con un sombrero de color marrón, un traje negro oscuro y un tabaco en sus labios. Una característica del evento es que está repleto de vicios, se pueden observar a las personas tomando grandes cantidad de ron y fumando tabacos, con el propósito de alcanzar un estado de trance y comunicarse con este ser.
<br>
<br>
También es común que los fieles seguidores enuncien sus deseos en lenguas mayas, ya que es la mejor forma de conectarse y de rendir tributo.
<br>
<hr>
<div> <center> <b> Danzas de los moros y cristianos </b> <center> </div>
<hr>
<br>
En la mayoría de las ciudades de Guatemala se tiene la costumbre de realizar la danza de los moros, una representación de lo externa y variada que es la cultura del país. Se caracteriza por ser la tradición más alegre y divertida, por lo que es común observar cómo las personas emplean máscaras y trajes llamativos.
<br>
<br>
Esta festividad es una representación de lo que fue la batalla entre los cristianos de España y los llamados moros. De este modo, el primer grupo suele usar tocados que parecen turbantes y el segundo es representado con barbas largas.
<br>
<br>
<div> <center> <b> La quiebra de cascarones </b> <center> </div>
<br>
<br>
En Guatemala siguen existiendo tradiciones divertidas y populares entre los jóvenes, como es el caso de la quiebra de cascarones. Esta celebración se realiza durante el período de carnaval y consiste en rellenar el cascarón de miles de huevos con picante, harina, confeti y otros elementos, con el fin de lanzárselos a las personas. ¡Es una fiesta de risas y burlas sin igual!
<br>
<br>
En general, la quiebra de cascarones es una de las costumbres y tradiciones de Guatemala más populares, la cual se lleva a cabo para pasar un rato divertido entre amigos y familiares. La idea no es buscar problemas con los participantes, pues no existen ganadores ni perdedores, solo se busca celebrar el carnaval guatemalteco. 


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
