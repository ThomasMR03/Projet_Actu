<?php
namespace Core\Auth;
use Core\Database\Database;
/**
* Class Auth pour la connexion au site via DB
*/
class DBAuth
{
    protected $db;
    function __construct(Database $db){
        $this->db =$db;
    }

    public function login($username, $password)
    {
        $user = $this->db->prepare('SELECT * FROM users WHERE name = ?', [$username], null, true);
        
        if ($user) {
            if ($user->password === sha1($password)) {
                $_SESSION['Auth'] = $user->name;
                $_SESSION['Age'] = $user->date_de_naissance;
                $_SESSION['Rang'] = $user->membre_rang;
                return true;
            }
        }
        return false;
    }
    
    public function logged()
    {
        return isset($_SESSION['Auth']);
        return isset($_SESSION['Rang']);
        return isset($_SESSION['Age']);
    }    
    public function getUserID(){
        if ($this->logged()) {
            return $_SESSION['Auth'];
            return $_SESSION['Rang'];
            return $_SESSION['Age'];
        }else{
            return false;
        }
    }
}
?>