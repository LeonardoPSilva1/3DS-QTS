<?php
    namespace tests;

    use PHPUnit\Framework\TestCase; 
    use app\libraries\PessoaIMP;

    class PessoaTest extends TestCase
    {
        public function testPessoaNome()
        {
            $p1 = new pessoaIMP("João", 10000.00, 0.0 );

            $this->assertEquals("João", $p1->getNome());
        }
        
        public function testPessoaSalarioAnual()
        {
            $p1 = new pessoaIMP("João", 10000.00, 0.0);

            $this->assertEquals(10000.00, $p1->getSalarioAnual());
        }


        public function testPessoaParcela()
        {
            $p1 = new pessoaIMP("João", 10000.00, 0.0);

            $this->assertEquals(0.0, $p1->getParcela());
        }

        public function testVerificarTrue(){
            $this->assertTrue(true);
        }

        public function testVerificarFalse(){
            $this->assertFalse(false);
        }

        public function testSetNome()
        {
            $p1 = new pessoaIMP("João", 10000.00, 0.0);
            $p1->setNome('Maria');
            $this->assertEquals("Maria", $p1->getNome());
        }

        public function testSetSalarioAnual()
        {
            $p1 = new pessoaIMP("João", 10000.00, 0.0);
            $p1->setSalarioAnual(20000.00);
            $this->assertEquals(20000.00, $p1->getSalarioAnual());
        }

        public function testSetParcela()
        {
            $p1 = new pessoaIMP("João", 10000.00, 0.0);
            $p1->setParcela(100.00);
            $this->assertEquals(100.00, $p1->getParcela());
        }


    }
?>


      