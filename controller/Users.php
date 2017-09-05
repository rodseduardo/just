<?php

class Users extends Crud
{
    protected $table = 'users';
    private $name;
    private $email;
    private $password;
    private $login;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setPassword($password)
    {
        $this->password = md5($password);
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function insert()
    {
        try {
            $sql  = "INSERT INTO $this->table (name, email, password, login) VALUES (:name, :email, :password, :login)";
            $stmt = DB::prepare($sql);

            $stmt->bindValue(':name', $this->name, PDO::PARAM_STR);
            $stmt->bindValue(':email', $this->email, PDO::PARAM_STR);
            $stmt->bindValue(':password', $this->password, PDO::PARAM_STR);
            $stmt->bindValue(':login', $this->login, PDO::PARAM_STR);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function update($id)
    {

        try {
            $sql  = "UPDATE $this->table SET name = :name, email = :email, password = :password, login = :login
                                                WHERE id = :id";
            $stmt = DB::prepare($sql);

            $stmt->bindValue(':name', $this->getName(), PDO::PARAM_STR);
            $stmt->bindValue(':email', $this->getEmail(), PDO::PARAM_STR);
            $stmt->bindValue(':password', $this->getPassword(), PDO::PARAM_STR);
            $stmt->bindValue(':login', $this->getLogin(), PDO::PARAM_STR);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function findByEmail($email)
    {
        $sql = "SELECT * FROM $this->table WHERE email = :email";
        $stmt = DB::prepare($sql);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
    }
}
