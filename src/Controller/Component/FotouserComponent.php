<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\Network\Exception\InternalErrorException;
use Cake\Utility\Text;
use Cake\ORM\TableRegistry;
use Cake\Network\Session\DatabaseSession;



class FotouserComponent extends Component {

    public function send($data) {
        
        $users = TableRegistry::get('Users');
        $session = $this->request->session();
        $idss = $session->read('iduser'); 
       
        
        $filename = $data['name'];
        $file_tmp_name = $data['tmp_name'];
        $dir = WWW_ROOT . 'img' . DS . 'uploads';
        if (is_uploaded_file($file_tmp_name)) {
            move_uploaded_file($file_tmp_name, $dir . DS . $filename);

            $query = $users->query();
            $query->update()
                    ->set(['photo' => $filename])
                    ->where(['id' => $idss])
                    ->execute();
        }
    }

}
