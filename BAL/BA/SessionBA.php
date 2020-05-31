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
        //($password);
        //var_dump($username);
        $da = new UserDA();

        $user = $da->GetUser($username); //!strcmp

        //var_dump(password_get_info('$2y$10$j9GdIBsRNY3zCRq6pLDubOrRGMd7NXe/RFjQQW'));
        if(!empty($user)){


            if ( password_verify($password, $user['PassCode'] ))
            {
                // If user is retrieved, and password matches.

                // Let's not store the password in a public session.
                unset($user['PassCode']);

                $_SESSION['user'] = $user;

                return true;
            }
        }
        return false;
    }
}