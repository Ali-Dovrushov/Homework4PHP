<?php

    if (isset($_POST['name']) && isset($_POST['pass']))
    {
        session_start();
        $name = $_POST['name'];
        $pass = $_POST['pass'];

        $path = 'database.txt';
        $check = false;

        if (file_exists($path))
        {
            $salamos = explode('|', file_get_contents($path));
            for ($i = 0; $i < count($salamos); $i++)
            {
                if ($name == trim($salamos[$i]) && $pass == trim($salamos[$i+1]) && 'admin' == trim($salamos[$i+2]))
                {
                    $_SESSION['admin'] = $name;
                    $_SESSION['adminPass'] = $pass;
                    header('Location: /adminpanel.php');
                    $check = false;
                    break;
                }
                elseif ($name == trim ($salamos[$i]) && $pass == trim ($salamos[$i+1]) && 'user' == trim ($salamos[$i+2]))
                {
                    $_SESSION['user'] = $name;
                    $_SESSION['userPass'] = $pass;
                    header('Location: /userpanel.php');
                    $check = false;
                    break;

                }
                elseif ($name == trim ($salamos[$i]) && $pass == trim ($salamos[$i+1]) && 'manager' == trim ($salamos[$i+2]))
                {
                    $_SESSION['manager'] = $name;
                    $_SESSION['managerPass'] = $pass;
                    header('Location: /managerpanel.php');
                    $check = false;
                    break;

                }
            }

            if ($check == true)
            {
                echo 'vvod nepravilniy';
            }
        }

        else
        {
            echo "Net takoy papka";
        }
    }