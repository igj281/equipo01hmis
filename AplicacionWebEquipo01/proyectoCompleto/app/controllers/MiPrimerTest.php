<?php
class MiPrimerTest extends PHPUnit_Framework_TestCase{
    // en este caso vamos a probar que True es igual a True
    public function testParaProbarQueTrueEsTrue(){
        $v = true;
        // primero vamos a ponerlo false para que la prueba falle
        
        // Probar que $v sea True de verdad
        $this->assertTrue($v);
    }
}
?>