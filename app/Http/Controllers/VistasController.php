<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bibliografia;
use App\Models\unidad1;
use App\Models\unidad2;

class VistasController extends Controller
{
     public function index()
     {
         
          return view('ExamenBlog.index');
     }

     public function contacto()
     {
          return view('ExamenBlog.Contacto');
     }

     public function posts()
     {
          $bibliografia1= new Bibliografia;
          $bibliografia1->titulo="Arquitectura cliente servidor";
          $bibliografia1->autor="Juan Zarate Gonzalez";
          $bibliografia1->url="https://es.wikipedia.org/wiki/Cliente-servidor";
          $bibliografia1->año="2017";

          $bibliografia2= new Bibliografia;
          $bibliografia2->titulo="Sistemas de Informacion";
          $bibliografia2->autor="Roxana Ibarra Espinosa";
          $bibliografia2->url= "https://concepto.de/sistema-de-informacion/";
          $bibliografia2->año= "2015";

          $bibliografia3= new Bibliografia;
          $bibliografia3->titulo="La evolución de los sistemas de información.";
          $bibliografia3->autor="Israel Sosa Castro";
          $bibliografia3->url= "https://www.tecnologias-informacion.com/evolucionsistemas.html";
          $bibliografia3->año= "2014";

          $bibliografia4= new Bibliografia;
          $bibliografia4->titulo="Computadoras Centrales y Dedicadas";
          $bibliografia4->autor="Marco Antonio Sánchez";
          $bibliografia4->url= "https://softwarelab.org/es/servidor-dedicado/#:~:text=Un%20servidor%20dedicado%20es%20un,";
          $bibliografia4->año= "2019";

          $bibliografia5= new Bibliografia;
          $bibliografia5->titulo="Los sistemas de conexión libre y a través de redes";
          $bibliografia5->autor="Juan Carlos Sánchez";
          $bibliografia5->url= "https://www.ecured.cu/Arquitectura_Cliente_Servidor";
          $bibliografia5->año= "2014";

          $bibliografia6= new Bibliografia;
          $bibliografia6->titulo="Los sistemas con arquitectura  Cliente/Servidor ";
          $bibliografia6->autor="Juan Carlos Sánchez";
          $bibliografia6->url= "https://www.ecured.cu/Arquitectura_Cliente_Servidor";
          $bibliografia6->año= "2014";

          $bibliografia7= new Bibliografia;
          $bibliografia7->titulo="Protocolos de comunicación en red.";
          $bibliografia7->autor="Elizabeth Santos Rodriguez";
          $bibliografia7->url= "https://www.kionetworks.com/blog/data-center/protocolos-de-comunicaci%C3%B3n-de-redes";
          $bibliografia7->año= "2015";

          $bibliografia8= new Bibliografia;
          $bibliografia8->titulo="Clasificacion por Arquitectura";
          $bibliografia8->autor="Gabriel Martinez Bae";
          $bibliografia8->url= "https://megasoft-ltd.ru/es/classification/architecture/";
          $bibliografia8->año= "2014";

          $bibliografia9= new Bibliografia;
          $bibliografia9->titulo="Clasificacion por Arquitectura";
          $bibliografia9->autor="Gabriel Martinez Bae";
          $bibliografia9->url= "https://megasoft-ltd.ru/es/classification/architecture/";
          $bibliografia9->año= "2014";

          $bibliografia10= new Bibliografia;
          $bibliografia10->titulo="Clasificacion por Arquitectura";
          $bibliografia10->autor="Gabriel Martinez Bae";
          $bibliografia10->url= "https://megasoft-ltd.ru/es/classification/architecture/";
          $bibliografia10->año= "2014";

          $bibliografia11= new Bibliografia;
          $bibliografia11->titulo="Clasificacion por Arquitectura";
          $bibliografia11->autor="Gabriel Martinez Bae";
          $bibliografia11->url= "https://megasoft-ltd.ru/es/classification/architecture/";
          $bibliografia11->año= "2014";

          $bibliografia12= new Bibliografia;
          $bibliografia12->titulo="Clasificacion por Arquitectura";
          $bibliografia12->autor="Gabriel Martinez Bae";
          $bibliografia12->url= "https://megasoft-ltd.ru/es/classification/architecture/";
          $bibliografia12->año= "2014";

          $bibliografia13= new Bibliografia;
          $bibliografia13->titulo="Clasificacion por Arquitectura";
          $bibliografia13->autor="Gabriel Martinez Bae";
          $bibliografia13->url= "https://megasoft-ltd.ru/es/classification/architecture/";
          $bibliografia13->año= "2014";

          $bibliografia14= new Bibliografia;
          $bibliografia14->titulo="Clasificacion por Arquitectura";
          $bibliografia14->autor="Gabriel Martinez Bae";
          $bibliografia14->url= "https://megasoft-ltd.ru/es/classification/architecture/";
          $bibliografia14->año= "2014";
          
          //agregar db
          $unidad2=unidad2::all();
          $unidades=[];
          foreach ($unidad2 as $unidad2) {
               $unidades[]=[
                    'titulo'=>$unidad2->titulo,
                    'descripcion'=>$unidad2->contenido,
                    'url'=>$unidad2->img,
               ];
               
          } 
          //fin
          return view('ExamenBlog.Posts',['bibliografia1'=>$bibliografia1,'bibliografia2'=>$bibliografia2,'bibliografia3'=>$bibliografia3, 'bibliografia4'=>$bibliografia4,
                      'bibliografia5'=>$bibliografia5,'bibliografia6'=>$bibliografia6,'bibliografia7'=>$bibliografia7,'bibliografia8'=>$bibliografia8,'bibliografia9'=>$bibliografia9, 
                      'bibliografia10'=>$bibliografia10,'bibliografia11'=>$bibliografia11,'bibliografia12'=>$bibliografia12,'bibliografia13'=>$bibliografia13, 'bibliografia14'=>$bibliografia14,'unidades'=>$unidades]);
     }

     public function Unidad2()
     {
          $unidad1=unidad1::all();
          $unidades=[];
          foreach ($unidad1 as $unidad1) {
               $unidades[]=[
                    'titulo'=>$unidad1->titulo,
                    'descripcion'=>$unidad1->contenido,
                    'url'=>$unidad1->imagen,
               ];
               
          } 
          return view('ExamenBlog.Unidad2',['unidades'=>$unidades]);
     }

     public function sobreN()
     {
          return view('ExamenBlog.SobreN');
     }
}
