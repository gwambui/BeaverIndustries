<?php
if(!isset($_SESSION)){session_start();}

/**
 * Class SessionBA
 */
class SessionBA extends BaseBA
{
    /**
     * @param $username
     * @param $password
     * @return bool
     */
    public function Login($username, $password)
    {
        //var_dump($password);
        $da = new UserDA();

        $user = $da->GetUser($username); //strcmp

        if (!empty($user) && !password_verify($password, $user['PassCode']))
        { //var_dump($user);
            // If user is retrieved, and password matches.

            // Let's not store the password in a public session.
            unset($user['PassCode']);

            $_SESSION['user'] = $user;

            return true;
        }

        return false;
    }
}