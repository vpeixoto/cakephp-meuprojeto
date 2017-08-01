<?php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

class AppController extends Controller
{
	
    public function initialize()
    {
        parent::initialize();

		/*
		$this->viewBuilder()->theme('TwitterBootstrap');
		$this->viewBuilder()->layout('adminlte');
		$this->set('Projeto 1', 'Titulo');
		*/
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'loginRedirect' => [
                'controller' => 'Users',
                'action' => 'index'
            ]/*,
            'logoutRedirect' => [
                'controller' => 'Pages',
                'action' => 'display',
                'home'
            ]
			*/
        ]);
		
		$this->loadComponent('Auth');
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');
    }

    public function beforeRender(Event $event)
    {
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
    }
	
	public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['add', 'login']);
		//$this->Auth->allow('login');
    }
	/*
	function beforeFilter() {
        $this->Auth->allow('login');
    }
	*/
}
