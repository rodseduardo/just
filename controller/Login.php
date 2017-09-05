<?php

class Login extends DB{

    /**
     * Deixar apenas instanciar um objeto por vez na classe
     * @return Apenas uma instância da classe
     */
    protected function __construct()
    {

    }

    /**
     * Previne a clonagem dessa instancia
     * @return void
     */
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    /**
     * Retorna uma instância única da classe
     * @return Singleton instância
     */
    public static function getInstance()
    {
        static $instance = null;

        if(null === $instance){
            $instance = new static();
        }

        return $instance;
    }

    /**
     * @param $email
     * @param $senha
     * @return bool
     */
    public function logar($email, $senha)
    {

        return LoginModel::verifyUser($email, $senha);


    }


    public static function deslogar()
    {
        if (isset($_SESSION['logado'])) {
            unset($_SESSION['logado']);
            session_destroy();

            header("Location: painel.php");
        }
    }

}