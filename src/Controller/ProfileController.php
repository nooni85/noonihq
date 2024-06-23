<?php
declare(strict_types=1);

namespace App\Controller;

use Laminas\Diactoros\Stream;

/**
 * Profile Controller
 *
 */
class ProfileController extends AppController
{
    /**
     * View method
     *
     * @param string|null $id Profile id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id)
    {
        $this->disableAutoRender();

        $usersTable = $this->fetchTable("users");
        $user = $usersTable->get($id, contain: ['UsersProfileImg']);

        if($user == null) {
            throw new NotFoundException(__('User '.$id.' not found'));
        }


        $userProfileImg = $user->userProfileImg;

        if($userProfileImg == null) {
            throw new NotFoundException(__('Profile Image not found'));
        }

        $stream = new Stream($userProfileImg['path'], 'rb');
        $response = $this->response->withType($userProfileImg['type'])->withBody($stream);
        return $response;
    }

    public function index() {
        
    }
}
