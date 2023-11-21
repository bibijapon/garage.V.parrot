<?php
namespace App\Controller;

class VoitureController extends Controller 
{
    public function route(): void
    {
        try {
            if (isset($_GET['action'])) { 
                switch ($_GET['action']) {
                    case 'show' :
                        //Appeler 
                        $this->show();
                        break;
                    case 'list' :
                        //On appele la méthode home
                        $this->list();
                        break;
                    default:
                        throw new \Exception("Cette action n'existe pas : ".$_GET['action']);
                        break;
                }           
            }else {
                throw new \Exception("Aucune action détectée");
            }
        }catch(\Exception $e) {
            $this->render('errors/default', [
                'error' => $e->getMessage()
            ]);
        }
        
    }

    protected function show()
    {
        $this->render('voiture/show');
    }
    protected function list()
    {
        $this->render('page/home', [
        ]);
    }

}