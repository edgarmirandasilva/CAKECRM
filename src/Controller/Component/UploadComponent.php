<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\Network\Exception\InternalErrorException;
use Cake\Utility\Text;
use Cake\ORM\TableRegistry;
use Cake\Network\Session\DatabaseSession;



class UploadComponent extends Component {

    public function send($data) {
        
        $clientes = TableRegistry::get('Clientes');
        $session = $this->request->session();
        $idss = $session->read('idcli'); 
        
        $filename = $data['name'];
        $file_tmp_name = $data['tmp_name'];
        $dir = WWW_ROOT . 'img' . DS . 'uploads';
        if (is_uploaded_file($file_tmp_name)) {
            move_uploaded_file($file_tmp_name, $dir . DS . $filename);

            $query = $clientes->query();
            $query->update()
                    ->set(['logo' => $filename])
                    ->where(['id' => $idss])
                    ->execute();
        }
    }

}
