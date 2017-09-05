<?php
class LoginModel{

    public static function verifyUser($email, $senha){

        $sql  = "SELECT * FROM users WHERE (email = :email OR login = :login) AND password = :senha";
        $stmt = DB::prepare($sql);

        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->bindValue(':login', $email, PDO::PARAM_STR);
        $stmt->bindValue(':senha', $senha, PDO::PARAM_STR);

        $stmt->execute();

        if ($stmt->rowCount()==1) {
            $data = $stmt->fetch(PDO::FETCH_OBJ);
            $_SESSION['user'] = array( 'id' => $data->id, 'name' => $data->name, 'email' => $data->email );
            $_SESSION['logado'] = true;

            return true;
        } else {
            return false;
        }

    }

}