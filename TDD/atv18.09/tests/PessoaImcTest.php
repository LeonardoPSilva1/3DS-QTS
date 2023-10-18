<?php
    use PHPUnit\Framework\TestCase;
    use app\libraries\pessoaIMC;

    class PessoaImcTest extends TestCase
    {
        public function testPessoaNome()
        {
            $pessoa = new pessoaIMC("Leonardo", 35, 1.75, 70);

            $this->assertEquals("Leonardo", $pessoa->getNome());
        }

        public function testPessoaIdade()
        {
            $pessoa = new pessoaIMC("Leonardo", 35, 1.75, 70);

            $this->assertEquals(35, $pessoa->getIdade());
        }


        public function testPessoaAltura()
        {
            $pessoa = new pessoaIMC("Leonardo", 35, 1.75, 70);

            $this->assertEquals(1.75, $pessoa->getAltura());
        }

        public function testPessoaPeso()
        {
            $pessoa = new pessoaIMC("Leonardo", 35, 1.75, 70);

            $this->assertEquals(70, $pessoa->getPeso());
        }

        public function testSetIdade()
        {
            $pessoa = new pessoaIMC("Leonardo", 35, 1.75, 70);
            $pessoa->setIdade(40);

            $this->assertEquals(40, $pessoa->getIdade());
        }

        public function testSetAltura()
        {
            $pessoa = new pessoaIMC("Leonardo", 35, 1.75, 70);
            $pessoa->setAltura(1.88);

            $this->assertEquals(1.88, $pessoa->getAltura());
        }

        public function testSetPeso()
        {
            $pessoa = new pessoaIMC("Leonardo", 35, 1.75, 70);
            $pessoa->setPeso(80);

            $this->assertEquals(80, $pessoa->getPeso());
        }

        public function testPessoaIMC()
        {
            $pessoa1 = new pessoaIMC("Leonardo", 35, 1.75, 70);
            $pessoaIMC = new pessoaIMC("Magno", 45, 1.60, 60);
            $pessoa3 = new pessoaIMC("Vitor", 25, 1.80, 90);

            $this->assertEquals(22.86, $pessoa1->getIMC());
            $this->assertEquals(23.44, $pessoaIMC->getIMC());
            $this->assertEquals(27.78, $pessoa3->getIMC());
        }

        public function testPessoaCategoria()
        {
            $pessoa1 = new pessoaIMC("Ana Paula", 30, 1.65, 50);
            $pessoaIMC = new pessoaIMC("Juliana Souza", 28, 1.70, 70);
            $pessoa3 = new pessoaIMC("Maria Souza", 45, 1.60, 70);
            $pessoa4 = new pessoaIMC("João da Silva", 35, 1.75, 100);
            $pessoa5 = new pessoaIMC("Carlos Silva", 50, 1.70, 110);
            $pessoa6 = new pessoaIMC("Pedro Santos", 25, 1.80, 130);

            $this->assertEquals("Abaixo do Peso", $pessoa1->getCategoria());
            $this->assertEquals("Normal", $pessoaIMC->getCategoria());
            $this->assertEquals("Sobrepeso", $pessoa3->getCategoria());
            $this->assertEquals("Obesidade Grau I", $pessoa4->getCategoria());
            $this->assertEquals("Obesidade Grau II", $pessoa5->getCategoria());
            $this->assertEquals("Obesidade Grau III", $pessoa6->getCategoria());
        }
    }
?>