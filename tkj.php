<?php
$module = (isset($_GET['m'])) ? $_GET['m'] : 'home';
switch ($module) {
    case 'home': default:
        include('home.php');
        break; 

        case 'profil':
            include('profil.php');
            break; 

            case 'latihan':
                include('latihan.php');
                break; 
                
                
                case 'pi':
                    include('pi.php');
                    break; 

                    case 'wi':
                        include('wi.php');
                        break; 

                        case 'vidio1':
                            include('vidio1.php');
                            break; 

                            case 'vidieo':
                                include('vidieo.php');
                                break; 

                                case 'mikrotik':
                                    include('mikrotik.php');
                                    break; 

                                    

                                  
}