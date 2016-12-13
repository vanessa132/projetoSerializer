<?php 
namespace AppBundle\ClasseSerializer;

class Pessoa
{
	private $nome;
    private $email;
    private $sexo;

    // Getters
    public function getNome()
    {
        return $this->nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    // Setters
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }
}


?>