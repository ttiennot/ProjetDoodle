<?php
if (isset($_POST['envoyer'])) {
    foreach ($tabUser as $User) {
        if ($User['login'] == $_POST['login']) {
            $EtatLogin = 1;
            $IdLogin = $User['id'];

            break;
        } else {
            $EtatLogin = false;
            $IdLogin = NULL;
        }
    }

    if ($EtatLogin == 1) {                                    
        $requete = "SELECT `password` FROM `User` WHERE id=$IdLogin" 
        $mdpCorrect = $GLOBALS["pdo"]->query($requete);
                                    
        foreach ($mdpCorrect as $MDP) {
                                    
        }
                                    
        if ($MDP['password'] == $_POST['password']) {
                                        
            $EtatMdp = true;
                                    
        } else {
                                        
            $EtatMdp = false;
                                                                                    
        }
                                                                                
    } else {
                                                                                    
        $EtatMdp = false;
                                                                                
    }
}
                                                                                        
    ?>