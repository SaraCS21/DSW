<?php

    class ImagenGaleria {
        private $nombre;
        private $descripcion;
        private $numVisualizaciones;
        private $numLikes;
        private $numDownloads;

        const RUTA_IMAGENES_PORTFOLIO = "imagen/index/portfolio/";
        const RUTA_IMAGENES_GALERIA = "imagen/index/galeria/";
        
        public function __construct($nombre, $descripcion, $numVisualizaciones=0, $numLikes=0, $numDownloads=0){
            $this->nombre = $nombre;
            $this->descripcion = $descripcion;
            $this->numVisualizaciones = $numVisualizaciones;
            $this->numLikes = $numLikes;
            $this->numDownloads = $numDownloads;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function getDescripcion(){
            return $this->descripcion;
        }

        public function getNumVisualizaciones(){
            return $this->numVisualizaciones;
        }

        public function getNumLikes(){
            return $this->numLikes;
        }

        public function getNumDownloads(){
            return $this->numDownloads;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function setDescripcion($descripcion){
            $this->descripcion = $descripcion;
        }

        public function setNumVisualizaciones($numVisualizaciones){
            $this->numVisualizaciones = $numVisualizaciones;
        }

        public function setNumLikes($numLikes){
            $this->numLikes = $numLikes;
        }

        public function setNumDownloads($numDownloads){
            $this->numDownloads = $numDownloads;
        }

        /**
         * 1.- ¿Cuál es la diferencia entre private, protected y public?
         * 
         * Public -> se pueden acceder a los métodos y propiedades desde cualquier parte
         * 
         * Private -> solo se pueden acceder a los métodos y propiedades dentro de la propia clase
         * 
         * Protected -> se pueden acceder a los métodos y propiedades desde la propia clase y cuando se hereda de esta
         */

        /**
         * 2.- El método __construct es un método mágico en PHP. ¿Qué quiere decir esto?
         * 
         * Que permite realizar cierta acción cuando ocurre un evento determinado.
         * 
         * Por ejemplo, en el caso de __construct, al crear una nueva instancia este 
         * se encarga de inyectar los parámetros de manera automática.
        */

        /**
         * 3.- ¿Una clase en PHP puede tener más de un constructor?
         * 
         * No, solo se puede tener un constructor
         */

        public function __toString(){
            return $this->getDescripcion();
        }

        public function getURLPortfolio() : string {
            return self::RUTA_IMAGENES_PORTFOLIO . $this->getNombre();
        }

        public function getURLGaleria() : string {
            return self::RUTA_IMAGENES_GALERIA . $this->getNombre();
        }
    }

    // $imgGaleria1 = new ImagenGaleria("Nombre", "Descripcion");
    // echo $imgGaleria1;
    // echo "<br>";

    /**
     * 4.- Vamos a hacer una prueba. Crea una instancia de la clase ImagenGaleria 
     * e imprímela con echo. ¿Qué sucede?
     * 
     * Da un error, pues no puede devolver como string un objeto.
     */

    /**
     * 5.- Crea un método mágico __toString() que devuelva la descripción de 
     * la imagen a través del getter y prueba ahora a imprimirla de nuevo con echo. 
     * ¿Qué ha sucedido?
     * 
     * Devuelve de manera correcta la descripción.
     */

    /**
     * ¿Cuál es la diferencia entre self y $this?
     * 
     * self -> se usa para métodos estáticos
     * 
     * $this -> se usa cuando se instancia una clase, no permite acceder a métodos estáticos
     * 
     * ¿Qué hace el operador de resolución de ámbito ::? ¿Cómo funciona?¿Podrías dar un 
     * ejemplo aplicado a esta clase?
     * 
     * El operador de ámbito :: permite acceder a elementos estáticos, constantes y
     * sobreescribir propiedades o métodos de una clase.
     * Cuando se hace referencia a alguno de estos elementos, se debe usar el nombre 
     * de la clase.
     * En este caso si tenemos $imgGaleria1 y queremos acceder a la constante 
     * RUTA_IMAGENES_PORTFOLIO lo haremos de la siguiente manera:
     */

    // echo $imgGaleria1::RUTA_IMAGENES_GALERIA;
?>