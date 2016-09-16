    <?php  	
        session_start();


        try
        {
            $bdd = new PDO("mysql:host=localhost;dbname=parking","root","");

        }
        catch(Exception $e)
        {
            die("erreur de connection");
        }




        //require "content/connections/connection.php";




        if(isset($_GET['page']))
        {
            if (file_exists("content/".$_GET['page']))
            {
                
                $contenu = "content/".$_GET['page'];
            }
        
            
            else
            {
                $contenu = "content/404.php";
                echo "page erreur 404";
            }
        }
        else
        {
            $contenu = "content/accueil.php";


        }

        require "layout.php";


    ?>
