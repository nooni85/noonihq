<?php

namespace App\Controller;

class SettingController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event) {
		parent::beforeFilter($event);

		$this->set('title', 'View Active Users');
        $this->viewBuilder()->setLayout('setting');
	}
}