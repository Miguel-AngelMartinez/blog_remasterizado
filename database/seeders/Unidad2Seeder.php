<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
class Unidad2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('unidad2')->insert([
            'id' => 1,
            'titulo' => '<h1>Presentacion Distribuida</h1>',
            'contenido' => '<hr/><p class="title" id="DatosP"> La capa de presentación se encuentra distribuida entre el cliente y el servidor, de manera que en el cliente se modifica o adapta la presentación que ofrece el servidor. Este tipo de sistemas tienen un difícil mantenimiento.</p>',
            'img' => 'http://isa.uniovi.es/domotica/Temas/T6/T6-ClienteServidor_archivos/image010.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('unidad2')->insert([
            'id' => 2,
            'titulo' => '<h1>Presentacion remota</h1>',
            'contenido' => '<hr/><p class="title" id="DatosP">La capa de presentación de datos, se ejecuta en el cliente totalmente. En ella se realizan las validaciones de los datos de entrada, el formateo de los de salida, etc. La lógica de negocio y el acceso a la base de datos se aloja en el servidor.</p>',
            'img' => 'http://isa.uniovi.es/domotica/Temas/T6/T6-ClienteServidor_archivos/image008.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('unidad2')->insert([
            'id' => 3,
            'titulo' => '<h1>Proceso distribuido</h1>',
            'contenido' => '<hr/><p class="title" id="DatosP">Las ventajas de la arquitectura cliente/servidor son tan numerosas, que la mayoría de las compañías no pueden ignorarlas a la hora de plantearse una evolución en sus sistemas de gestión de información.Básicamente y de forma muy resumida, las ventajas de la informática distribuida frente a la centralizada son:1. Menor coste por transacción: Distribuyendo los procesos en ordenadores basados en microprocesadores, en lugar de sistemas de mayor tamaño, se obtienen unos costes por transacción mucho más reducidos.2. Escalabilidad: Por la naturaleza modular de la arquitectura cliente/servidor, las redes se pueden ampliar fácilmente, aumentando el número de nodos o sustituyendo los nodos por otros más potentes. Este proceso de ampliación no requiere la modificación de las aplicaciones.3. Menor coste de desarrollo: La disponibilidad de una gran variedad de herramientas de 4ª generación (4GL) para sistemas cliente/servidor, permite la elección de entornos de desarrollo muy productivos y adaptados a las necesidades de cada usuario.4. Entornos gráficos de usuario: Nadie pone en duda que la facilidad de uso de las nuevas herramientas de usuario redundan en una informática más productiva para el usuario, y por tanto para la empresa. Muchas aplicaciones cliente soportan ya estos entornos gráficos.</p>',
            'img' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('unidad2')->insert([
            'id' => 4,
            'titulo' => '<h1>Base de datos remota</h1>',
            'contenido' => '<hr/><p class="title" id="DatosP">El acceso remoto (o escritorio remoto) es la capacidad de acceder a un ordenador o dispositivo desde cualquier ubicación remota. Con el software de acceso remoto instalado en el ordenador, tienes la libertad de conectarte con otro dispositivo desde cualquier lugar.Una vez conectado, puedes tener control total sobre el dispositivo al que se estás conectando remotamente. Luego puedes ejecutar cualquier aplicación o abrir archivos en el ordenador.
            </p>',
            'img' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('unidad2')->insert([
            'id' => 5,
            'titulo' => '<h1>Base de datos Distribuida</h1>',
            'contenido' => '<hr/><p class="title" id="DatosP">La capa de presentación se encuentra distribuida entre el cliente y el servidor, de manera que en el cliente se modifica o adapta la presentación que ofrece el servidor. Este tipo de sistemas tienen un difícil mantenimiento.</p>',
            'img' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('unidad2')->insert([
            'id' => 6,
            'titulo' => '<h1>Logica de acceso</h1>',
            'contenido' => '<hr/><p class="title" id="DatosP">Una red lógica es una representación virtual de una red que aparece para el usuario como una red completamente separada y autónoma, aunque físicamente podría ser solo una parte de una red más grande o una red de área local.</p>',
            'img' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('unidad2')->insert([
            'id' => 7,
            'titulo' => '<h1>Logica de negocio</h1>',
            'contenido' => '<hr/><p class="title" id="DatosP">Capa de negocio: es donde residen los programas que se ejecutan, se reciben las peticiones del usuario y se envían las respuestas tras el proceso. Se denomina capa de negocio (e incluso de lógica del negocio) porque es aquí donde se establecen todas las reglas que deben cumplirse. Esta capa se comunica con la capa de presentación, para recibir las solicitudes y presentar los resultados, y con la capa de datos, para solicitar al gestor de base de datos almacenar o recuperar datos de él. También se consideran aquí los programas de aplicación.</p>',
            'img' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('unidad2')->insert([
            'id' => 8,
            'titulo' => '<h1>Nivel vinculado a programacion web</h1>',
            'contenido' => '<hr/><p class="title" id="DatosP"></p>',
            'img' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('unidad2')->insert([
            'id' => 9,
            'titulo' => '<h1>Proceso de planificacion en dos niveles</h1>',
            'contenido' => '<hr/><p class="title" id="DatosP"></p>',
            'img' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('unidad2')->insert([
            'id' => 10,
            'titulo' => '<h1>proceso de planificacion en  tres niveles</h1>',
            'contenido' => '<hr/><p class="title" id="DatosP"></p>',
            'img' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('unidad2')->insert([
            'id' => 11,
            'titulo' => '<h1>Proceso de planificacion multiniveles</h1>',
            'contenido' => '<hr/><p class="title" id="DatosP">Al hablar del desarrollo de aplicaciones Web resulta adecuado presentarlas dentro de las aplicaciones multinivel. Los sistemas típicos cliente/servidor pertenecen a la categoría de las aplicaciones de dos niveles. La aplicación reside en el cliente mientras que la base de datos se encuentra en el servidor. En este tipo de aplicaciones el peso del cálculo recae en el cliente, mientras que el servidor hace la parte menos pesada, y eso que los clientes suelen ser máquinas menos potentes que los </p>',
            'img' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('unidad2')->insert([
            'id' => 12,
            'titulo' => '<h1>Mantenimiento de aplicaciones multinivel</h1>',
            'contenido' => '<hr/><p class="title" id="DatosP">La capa intermedia es el código que el usuario invoca para recuperar los datos deseados. La capa de presentación recibe los datos y los formatea para mostrarlos adecuadamente. Esta división entre la capa de presentación y la de la lógica permite una gran flexibilidad a la hora de construir aplicaciones, ya que se pueden tener múltiples interfaces sin cambiar la lógica de la aplicación.La tercera capa consiste en los datos que gestiona la aplicación. Estos datos pueden ser cualquier fuente de información como una base de datos o documentos XML.</p>',
            'img' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('unidad2')->insert([
            'id' => 13,
            'titulo' => '<h1>Concepto (MVC) en la arquitectura  cliente servidor</h1>',
            'contenido' => '<hr/><p class="title" id="DatosP">1. Crear modeloPrimeramente, se hará la creación del modelo, el cual se llamará “Intern” y nos ayudará a describir las características propias del objeto.2. Crear vistaSe creará la vista para mostrar los resultados del ejemplo, en este caso, se utilizará imprimir en consola.3. Crear controladorPara tener una ejecución de los eventos correctamente, se creará el controlador y será el intermediario entre el modelo y la vista.4. Crear clase principalFinalmente, se necesitará crear una clase principal para utilizar los métodos del controlador y demostrar el uso del patrón de diseño MVC.5. Verificar resultadoPara verificar que el ejemplo funcione correctamente es necesario verificar el resultado que nos da la consola, y como se muestra, el resultado es correcto.</p>',
            'img' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('unidad2')->insert([
            'id' => 14,
            'titulo' => '<h1>Proceo de flujo de control apartir del MVC en arquitectura cliente servidor</h1>',
            'contenido' => '<hr/><p class="title" id="DatosP"></p>',
            'img' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('unidad2')->insert([
            'id' => 15,
            'titulo' => '<h1>Concepto de comunicacion orientada a conexion e interfaz de programacion de aplicaciones (API)</h1>',
            'contenido' => '<hr/><p class="title" id="DatosP"></p>',
            'img' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('unidad2')->insert([
            'id' => 16,
            'titulo' => '<h1>Proceso de comunicacion orientada a conexiones (api)</h1>',
            'contenido' => '<hr/><p class="title" id="DatosP"></p>',
            'img' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('unidad2')->insert([
            'id' => 17,
            'titulo' => '<h1>Sockets</h1>',
            'contenido' => '<hr/><p class="title" id="DatosP"></p>',
            'img' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
    }
}
