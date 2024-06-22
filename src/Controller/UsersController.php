<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Event\EventInterface;
use Cake\Core\Configure;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{
    /**
     * join method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function join()
    {
        $userTable = $this->fetchTable('Users');
        $user = $userTable->newEmptyEntity();
        $userProfileImg = $userTable->UsersProfileImg->newEmptyEntity();

        if ($this->request->is('post')) {

            // valadations
            if($this->request->getData('profile')->getError() > 0) {
                $this->Flash->error(__('프로필 사진이 없습니다.'));
            } else if(strcmp($this->request->getData('password'), $this->request->getData('password-confirm'))!=0) {
                $this->Flash->error(__('비밀번호가 일치하지 않습니다.'));
            } else if($user->hasErrors()) {
                $this->Flash->error($user->getErrors());
            } else {
                $profileDir = Configure::read("datadir.profile");

                if(!file_exists($profileDir)) {
                    mkdir($profileDir, 0777, true);
                }

                // save profile image
                $profile = $this->request->getData('profile');
                $ext = pathinfo($profile->getClientFilename(), PATHINFO_EXTENSION);
                $profileFileName = $profileDir.DIRECTORY_SEPARATOR.$this->request->getData('username').".".$ext;
                $profile->moveTo($profileFileName);

                // $profileImgTable = $this->getTableLocator()->get('UsersProfileImg');
                // $profileImg = $profileImgTable->newEmptyEntity();

                // $user = $this->Users->patchEntity($user, $data);
                $date = new \DateTime();
                $now = $date->format('Y-m-d H:i:s');

                $user = $this->Users->patchEntity($user, $this->request->getData());
                $user->password = password_hash($user->password, PASSWORD_BCRYPT);
                $userProfileImg->path = $profileFileName;
                $userProfileImg->type = $profile->getClientMediaType();
                $userProfileImg->size = $profile->getSize();

                $user->userProfileImg = $userProfileImg;

                if ($this->Users->save($user)) {
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('사용자를 저장할 수 없습니다. 다시 시도해주세요.'));
      
            }
        }
        $this->set(compact('user'));

        // Set layout to user
        $this->viewBuilder()->setLayout('user');
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function beforeFilter(EventInterface $event)
    {
        parent::beforeFilter($event);

        // Configure the login action to not require authentication, preventing
        // the infinite redirect loop issue
        $this->Authentication->addUnauthenticatedActions(['login', 'join']);
    }

    public function login()
    {
        $this->request->allowMethod(['get', 'post']);
        $result = $this->Authentication->getResult();
        // regardless of POST or GET, redirect if user is logged in
        if ($result && $result->isValid()) {
            // redirect to /articles after login success
            // $redirect = $this->request->getQuery('redirect', [
            //     'controller' => 'Articles',
            //     'action' => 'index',
            // ]);

            return $this->redirect('/');
        }

        // display error if user submitted and authentication failed
        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error(__('아이디 또는 비밀번호가 일치하지 않습니다.'));
        }

        // Set layout to user
        $this->viewBuilder()->setLayout('user');
    }

    public function logout()
    {
        $result = $this->Authentication->getResult();
        // regardless of POST or GET, redirect if user is logged in
        if ($result && $result->isValid()) {
            $this->Authentication->logout();

            return $this->redirect('/');
        }
    }
}
