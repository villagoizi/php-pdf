<?php 
namespace App\Controllers;

class usuarioController{

    ///////////////////////////
    /// TABLA U
    /// ///////////////////////
    /**
     * Nombre de usuario
     * @var string usuario
     * @access private
     */
    private $usuario;
    /**
    * Email del usuario
    * @var string email
    * @access private
    */
    private $email;
    /**
    * Password encriptado
    * @var strig password
    * @access private
    */
    private $password;
    /**
    * Imagen de perfil
    * @var string imagen
    * @access private
    */
    private $imagen;
    /**
    * Fecha de registros
    * @var datetime fecharegistro
    * @access private
    */
    private $registro;
    /**
    * Ip de registro
    * @var char ip
    * @access private
    */
    private $ip;
    /**
    * Guarda la fecha actual y la fecha anterior de ingresos
    * @var array ingresos
    * @access private
    */
    private $ingresos;
    /**
    * Determina si el candidato tiene una URL pública
    * @var integer publico
    * @access private
    */
    private $publico;
    /**
    * Determina el lugar(código) de procedencia (referido) del registro del usuario
    * @var char referido
    * @access private
    */
    private $ref;
    /**
    * Token unico del usuario
    * @var text TOKEN
    * @access private
    */
    private $token;
    /**
    * Verifica si el correo del usuario ha sido validado
    * @var int validado
    * @access private
    */
    private $validado;
    /**
    * Verifica si el perfil del candidato está terminado
    * @var int terminado
    * @acccess private
    */
    private $terminado;
    /**
    * Guarda la información única de sessión
    * @var array sid;
    * @access private
    */
    private $sid;
    /**
    * Verifica si el candidato se ha registrado desde Jobtify o desde Jobtify Custom Package
    * @var integer id de empresa refirda
    * @access private
    */
    private $empresa_ref;
    
    ///////////////////////////
    /// TABLA UD
    /// ///////////////////////
    /**
    * Clave unica del candidato
    * @var string cui
    * @access private
    */
    private $cui;
    /**
    * Nombre del usuario
    * @var string nombre
    * @access private
    */
    private $nombre;
    /**
    * Apellido parterno del usuario
    * @var string apellido1
    * @access private
    */
    private $apellido1;
    /**
    * Apellido materno del usuario
    * @var string apellido 2
    * @access private
    */
    private $apellido2;
    /**
    * Fecha de nacimiento
    * @var date fnacimiento
    * @access private
    */
    private $fnacimiento;
    /**
    * Sexo
    * @var char sexo
    * @access private
    */
    private $sexo;
    /**
    * Estado civil
    * @var int estado_civil
    * @access private
    */
    private $idestadocivil;
    /**
     * Salario mensual deseado
     * @var integer idsalario
     * @access private
     */
    private $idsalario;
    /**
     * Disponibilidad laboral
     * @var integer iddisponibilidad
     * @access private
     */
    private $iddisponibilidad;
    /**
     * Teléfono
     * @var string telefono
     * @access private
     */
    private $telefono;
    /**
     * Nivel de estudio
     * @var integer nivel_estudios
     * @access private
     */
    private $nivel_estudios;
    /**
     * Id del estado/provincia
     * @var integer idestado
     * @access private
     */
    private $idestado;
    /**
     * Id del municipio
     * @var integer idmunicipio
     * @access private
     */
    private $idmunicipio;
    /**
     * Id de la localidad
     * @var integer idlocalidad
     * @access private
     */
    private $idlocalidad;
    /**
     * Dirección del usuario
     * @var string direccíón
     * @access private
     */
    private $direccion;
    /**
     * Código postal
     * @var integer cp
     * @access private
     */
    private $cp;
    /**
     * Profesion del candidato
     * @var string profesion
     * @access private
     */
    private $profesion;
    /**
     * ID categoria de interés
     * @var integer idcategoria
     * @access private
     */
    private $idcategoria;
    /**
     * Id subcategoria de interés
     * @var integer idsubcategoria
     * @access private
     */
    private $idsubcategoria;
    /**
     * Nombre del archivo CV PDF en bucket s3
     * @var string pdfs3
     * @access private
     */
    private $pdfs3;
    /**
     * ID de la plantilla HTML a utilizar para su CV
     * @var int pdflocal
     * @access private
     */
    private $pdflocal;


    

    public function __construct(){
        
    }

    /**
     * Regresa el valor de una propiedad existente en el controlador
     * @param string $property 
     * @return string|integer|date
     */
    public function __get($property){
        if(property_exists($this, $property)) {
            return $this->$property;
        }else{
            return false;
        }
    }

    /**
     * Inicializa las propiedades de la clase con los valores obtenidos en base de datos
     * Creado para cuando se necesita acceder al controlador para setear valores
     * y no para obtenerlos. Esto aumenta la velocidad de carga y optimiza recursos en 
     * el servidor
     * @return string|int property
     */
    public function init(){
        $this->usuario=1;
        $this->email="email@correo.com";
        $this->password="123";
        $this->imagen="default.jpg";
        $this->registro="12-08-2020";
        $this->ip="192.168.1.254";
        $this->imgresos=NULL;
        $this->publico=1;
        $this->ref=NULL;
        $this->token=NULL;
        $this->empresa_ref=NULL;
        ///////////////////////////
        /// Se obtienen los datos de la tabla UD
        /// ///////////////////////
        $this->cui="FARR92126H69";
        $this->nombre="Ricardo";
        $this->apellido1="Farrera";
        $this->apellido2="Romero";
        $this->fnacimiento="25-02-1989";
        $this->sexo="M";
        $this->idestadocivil=1;
        $this->idsalario = 11;
        $this->iddisponibilidad=2;
        $this->telefono="1122334455";
        $this->nivel_estudios=8;
        $this->idestado=30;
        $this->idmunicipio=2309;
        $this->idlocalidad=284787;
        $this->direccion="Gema odila 68 Fracc Virginia";
        $this->cp="91445";
        $this->profesion="Abogado de lo familiar";
        $this->idcategoria=1;
        $this->idsubcategoria=1;
        $this->pdfs3=NULL;
        $this->pdflocal=1;

    }

    /**
     * Regresa el nombre completo del candidato
     * @return string
     */
    public function getNombreCompleto(){
        return $this->nombre.' '.$this->apellido1.' '.$this->apellido2;
    }
    /**
     * Obtiene el sexo del usuario en texto completo
     * @return string sexo
     */
    public function getSexo(){
        if($this->sexo=="M"){
            return "Masculino";
        }else if($this->sexo=="F"){
            return "Femenino";
        }else{
            return "No definido";
        }
    }
    /**
     * Obtiene la descripción profesional del usuario
     * @param  boolean $band Bandera para determinar si se convierten los saltos de línea a html
     * @return string descripción del sobre mi
     */
    public function getAbout($band=false){
        $datos = '<p><strong>Perfil PDA profesional.</strong></p><br /><p>Neftali es expeditivo con un urgente e impaciente deseo de producir resultados r&aacute;pidos. Es bastante competitivo, seguro de s&iacute; mismo y busca el &eacute;xito. Neftali disfruta el reto, busca objetivos dif&iacute;ciles y quiere autoridad dentro de su &aacute;rea de conocimiento. Disfruta mucho la variedad en su trabajo, cambiando de ambientes y r&aacute;pidamente se aburre con la rutina y el trabajo repetitivo. Neftali responde a las situaciones &ldquo;de presi&oacute;n&rdquo; pronta y positivamente. Es inquieto y en&eacute;rgico. Es un individuo previsor, planea a futuro, se anticipa a las dificultades y por lo general est&aacute; bien preparado para la mayor&iacute;a de las eventualidades. Neftali est&aacute; dispuesto a tomar riesgos y a usar su iniciativa; incluso cuando se encuentra en circunstancias amenazantes o desfavorables. Neftali tiene un fuerte deseo de generar cambios para la mejora de m&eacute;todos existentes, sistemas y procesos. Es, en muchos aspectos, "agente de cambio&rdquo;. Tratando con las personas, Neftali ser&aacute; intenso, r&aacute;pidamente cambiante y exigente. Es persuasivo y tiene habilidad para comunicarse debido a su energ&iacute;a, intensidad, entusiasmo y su acercamiento carism&aacute;tico. Tiene capacidad para motivar a los dem&aacute;s para que act&uacute;en. Puede trabajar con y a trav&eacute;s de las personas para conseguir hacer las cosas, pero tiende a escuchar s&oacute;lo superficialmente,. Tiene un fuerte sentido de urgencia, Por ser inquisitivo y l&oacute;gico, Neftali tiene la habilidad de resolver los problemas detallados, presentar la informaci&oacute;n de manera sistem&aacute;tica y verifica las normas de calidad. Al ser una persona directa y competitiva, buscar&aacute; activamente tener el control en las situaciones en las que se encuentre. En general, le producir&aacute; mucha tensi&oacute;n ceder el control en manos de otros.</p>';
        if(!$band){
            return str_replace("<br />",  "\n", $datos);
        }else{
            return $datos;
        }
    }

    public function getImagen(){
        return __MEDIA__.$this->imagen;
    }
    /**
     * Obtiene la historia laboral del candidato
     * @param  boolean $band Bandera para determinar si se convierten los saltos de línea a html
     * @return array Historia laboral
     */
    public function getExperienciaLaboral($band=false){
        $datos = $usuarios_historialab = array(
            array(
                "id" => 9929,
                "id_usuario" => 4,
                "titulo" => "Desarrollador web",
                "empresa" => "NDSoluciones S.A. de C.V.",
                "inicio" => "Noviembre 2013",
                "fin" => "Abril 2014",
                "descripcion" => "NDSoluciones es una empresa nueva, en esta empresa ingresé con el puesto de programador web, pero aproveché mis conocimientos y sobre todo los pagos por comisiones para colaborar en los siguientes puestos:&lt;br /&gt;&lt;br /&gt;- Web Master: Encargado de la administración de contenido de diversas páginas web.&lt;br /&gt;- Community Manager: Encargado en la planeación de estrategias en las redes sociales.&lt;br /&gt;- Social Media: Encargado de organizar a un equipo de trabajo conformado por 15 personas para lograr los objetivos establecidos como Community manager.&lt;br /&gt;- Agente de Ventas: Ventas por cambaceo, puedo decir que mi gran capacidad social y amplia visión me permitió concretar grandes tratos que ha llevado al éxito a esta empresa.&lt;br /&gt;",
                "orden" => 1,
                "activo" => 1,
                "fecha" => "2020-08-19 11:55:36",
            ),
            array(
                "id" => 9930,
                "id_usuario" => 4,
                "titulo" => "Auxiliar de sistemas",
                "empresa" => "Agencia Aduanal Reyes Kuri",
                "inicio" => "Febrero del 2014",
                "fin" => "julio del 2014",
                "descripcion" => "En esta agencia aduanal colaboré en el área de sistemas en diferentes sub áreas:&lt;br /&gt;&lt;br /&gt;-Soporte técnico: Encargado de brindar soporte a todos los departamentos que dependen de sistemas. Configuración de redes, configuración de equipos, configuración del sistema interno en caso de fallas.&lt;br /&gt;-Desarrollo: Colaborador de desarrollo en tiempos libres para proyectos en fase inicial.",
                "orden" => 2,
                "activo" => 1,
                "fecha" => "2020-08-19 11:55:36",
            ),
            array(
                "id" => 9931,
                "id_usuario" => 4,
                "titulo" => "Encargado de soporte técnico y atención a clientes",
                "empresa" => "Excelencia en Factor Humano S.A de C.V.",
                "inicio" => "4/04/15",
                "fin" => "21/11/17",
                "descripcion" => "En esta inicié colaborando en el área de desarrollo de sistemas como Tester analytics. Sin embargo, mis habilidades me permitieron escalar dentro de la empresas y afrontar nuevos retos y más responsabilidades.&lt;br /&gt;&lt;br /&gt;*Encargado del control de calidad del los sistemas desarrollados en el corporativo.&lt;br /&gt;ACTIVIDADES:&lt;br /&gt;-Creación de casos de pruebas&lt;br /&gt;-Reportes de actualización de los sistemas&lt;br /&gt;-Reportes de control de Impedimentos de los sistemas.&lt;br /&gt;-Lectura de casos de uso.&lt;br /&gt;&lt;br /&gt;*Colaborador en el área de soporte técnico.&lt;br /&gt;-Asistencia vía Livezilla.&lt;br /&gt;-Asistencia telefónica personalizada para solucionar inconveniente con respecto a los sistemas que la empresa comercializa.&lt;br /&gt;-Soporte técnico remoto vía Team Viewer.&lt;br /&gt;-Atención a cliente&lt;br /&gt;-Instalación de instancias SQL&lt;br /&gt;-Configuración de Windows Server con IIS X para la instalación de los sistemas adquiridos por los clientes.&lt;br /&gt;-Seguimiento de peticiones de soporte&lt;br /&gt;-Realización de reportes &lt;br /&gt;&lt;br /&gt;*Programador web junior&lt;br /&gt;-Proyectos internos de la empresa.&lt;br /&gt;-Gestión de servidores IIS&lt;br /&gt;-Gestión de servidores Linux&lt;br /&gt;-Administración de blogs de la empresa",
                "orden" => 3,
                "activo" => 1,
                "fecha" => "2020-08-19 11:55:37",
            ),
        );
        if($band==false){
            for($i=0; $i<sizeof($datos); $i++){
                $des = htmlspecialchars_decode($datos[$i]['descripcion']);
                $datos[$i]['descripcion'] = str_replace("<br />",  "\n", $des);
            }
        }else{
            for($i=0; $i<sizeof($datos); $i++){
                $datos[$i]['descripcion'] = html_entity_decode($datos[$i]['descripcion']);
            }
        }
        return $datos;
    }

    /**
     * Obtiene la historia académica del candidato
     * @param  boolean $band Bandera para determinar si se convierten los saltos de línea a html
     * @return array Historia laboral
     */
    public function getHistorialAcademico($band=false){
        $datos = $usuarios_historiaaca = array(
            array(
                "id" => 9916,
                "id_usuario" => 4,
                "curso" => "Ingeniero en sistemas computacionales",
                "institucion" => "Universidad Jean Piaget",
                "inicio" => "2012",
                "fin" => "2016",
                "descripcion" => "Ingeniero en sistemas computacionales.",
                "orden" => 1,
                "activo" => 1,
                "fecha" => "2020-08-19 11:46:12",
            ),
            array(
                "id" => 9917,
                "id_usuario" => 4,
                "curso" => "",
                "institucion" => "",
                "inicio" => "",
                "fin" => "",
                "descripcion" => "",
                "orden" => 2,
                "activo" => 0,
                "fecha" => "2020-08-19 11:46:12",
            ),
            array(
                "id" => 9918,
                "id_usuario" => 4,
                "curso" => "",
                "institucion" => "",
                "inicio" => "",
                "fin" => "",
                "descripcion" => "",
                "orden" => 3,
                "activo" => 0,
                "fecha" => "2020-08-19 11:46:13",
            ),
        );
        if($band==false){
            for($i=0; $i<sizeof($datos); $i++){
                $des = htmlspecialchars_decode($datos[$i]['descripcion']);
                $datos[$i]['descripcion'] = str_replace("<br />",  "\n", $des);
            }
        }else{
            for($i=0; $i<sizeof($datos); $i++){
                $des = htmlspecialchars_decode($datos[$i]['descripcion']);
                $datos[$i]['descripcion'] = html_entity_decode($datos[$i]['descripcion']);
            } 
        }
        return $datos;
    }

    /**
     * Obtiene los idiomas agregados al perfil
     * @param  boolean $band Bandera para determinar si se convierten los saltos de línea a html
     * @return array idiomas
     */
    public function getIdiomas(){
        return $idiomas = array(
            array(
                "id" => 5634,
                "id_usuario" => 4,
                "id_idioma" => 2,
                "orden" => 1,
                "puntuacion" => 5,
                "activo" => 1,
                "idioma" => "Inglés",
            ),
            array(
                "id" => 5635,
                "id_usuario" => 4,
                "id_idioma" => 5,
                "orden" => 2,
                "puntuacion" => 2,
                "activo" => 1,
                "idioma" => "Alemán",
            ),
            array(
                "id" => 5636,
                "id_usuario" => 4,
                "id_idioma" => 3,
                "orden" => 3,
                "puntuacion" => 4,
                "activo" => 1,
                "idioma" => "Francés",
            ),
        );
    }

    /**
     * Obtiene la descripción adicional del candidato
     * @param  boolean $band Bandera para determinar si se convierten los saltos de línea a html
     * @return string descripción del sobre mi
     */
    public function getInfoAdicional($band=false){
        $datos = '<p>Sin duda como personas sociales el desarrollo de habilidades se ha convertido pr&aacute;cticamente en una necesidad, para crecer personal y profesionalmente, en lo que a mi respecta, a continuaci&oacute;n listo las habilidades que a mi persona caracteriza.</p><br /><div><br /><br /><ul><br /><li>Flexibilidad</li><br /><li>Comunicaci&oacute;n</li><br /><li>Trabajo en equipo</li><br /><li>Empat&iacute;a</li><br /><li>Optimismo</li><br /><li>Responsable</li><br /><li>Compromiso</li><br /><li>Vocaci&oacute;n de servicio.</li><br /><li>Competente.</li><br /><li>Sociable.</li><br /><li>Competente.</li><br /><li>Proactivo.</li><br /></ul><br /><p>&nbsp;</p><br /><p>A lo largo de mi formaci&oacute;n profesional, siempre me ha gustado utilizar las plataformas virtuales para aprender y explotar todos los recursos existentes para mi desarrollo como futuro profesionista. Con orgullo puedo decir que a trav&eacute;s de plataformas virtuales he aprendido.</p><br /><div>&nbsp;</div><br /><div>Marketing, Social media, T&eacute;cnicas de Community Manager, SEO. C, C++, JQuery, php, HTML, MySql, sql, sql server, IIS 7, NET, BootStrap, Fundation 4, Less, css3, Desarrollo de themas para Wordpress, Gesti&oacute;n y administraci&oacute;n de Wordpress, Microsoft server management studio, Amazon AWS.&nbsp;</div><br /></div>';
        if(!$band){
            return str_replace("<br />",  "\n", $datos);
        }else{
            return $datos;
        }
    }
}
