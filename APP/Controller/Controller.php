<?php

namespace App\Controller;

Class Controller
{
    public function route(): void
    {
        try {
            if (isset($_GET['controller'])) { 
                switch ($_GET['controller']) {
                    case 'page' :
                        //charger controleur page
                        $pageController = new PageController();
                        $pageController->route();
                        break;
                    case 'services' :
                        //charger controleur services
                        var_dump('On charge servicesController');
                        break;
                    case 'voiture' :
                        //charger controleur voiture
                        var_dump('On charge voitureController');
                        break;
                    case 'avis' :
                        //charger controleur avis
                        var_dump('On charge avisController');
                        break;
                    default:
                        throw new \Exception("Le controleur n'existe pas");
                        break;
                }    
            }else {
                 // Chargement de la page d'accueil si pas de controleur dans l'url
                $pageController = new PageController();
                $pageController->home();
            }
        } catch (\Exception $e) {
            $this->render('errors/default', [
                'error' => $e->getMessage()
            ]);
        }
    }

    protected function render(string $path, array $params = []):void
    {
        $filePath = _ROOTPATH_.'/templates/'.$path.'.php';

        try {
            if (!file_exists($filePath)) {
                throw new \Exception("Fichier non trouvé : ".$filePath);
            } else {
                extract($params);
                require_once $filePath;
            }
        } catch(\Exception $e) {
            $this->render('errors/default', [
                'error' => $e->getMessage()
            ]);
        }

            
    }
}