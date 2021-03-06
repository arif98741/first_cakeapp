<?php


namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;
use Cake\Routing\Router;
use Faker\Factory;
use Faker\Provider\bn_BD\Address;


class TestController extends  AppController
{
    private  $url;
    private $connection;
    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
        $this->url = Router::url();
        $this->connection = ConnectionManager::get('default');
        $this->viewBuilder()->setlayout('mainlayout');
        $this->loadModel('Posts');
    }

    public function index()
    {
        $url = $this->url;
        $this->set($url);
        $this->set('title','Something is better than nothing');
    }

    public function insertData($id)
    {

        $this->autoRender = false;
        $faker = Factory::create();
        $names = $address = $email = [];
      /* for ($i=1; $i<=10; $i++)
       {
           $this->connection->insert('employees',[
              'name' => $faker->firstNameMale,
              'email'  => $faker->unique()->safeEmail,
               'phone' => $faker->phoneNumber
             ]);
       }*/

      $this->connection->delete('employees',[

            'id' => $id
      ]);
      echo 'ID '.$id.' is deleted';


    }

    public function createData()
    {
        $this->autoRender = false;
        $this->connection->insert('employees',[
            'name' => 'Atikur Rahman',
            'email' => 'atikur@gmail.com',
            'phone' => '8968768687876786'

        ]);
    }

    /*
     * update method
     * @param $id
     * */
     public function updateData($id)
    {
        $this->autoRender = false;
        $this->connection->update('employees',[
            'name' => 'Mofidul Islam',
            'email' => 'ttikur@gmail.com',
            'phone' => '8956456468768687876786'

        ],['id' => $id]);
    }


    public function about()
    {
        $arr = [

            'name' => 'Ariful Islam',
            'mobile' => '01750-840217',
            'email' => 'arifsofg@gmail.com'
        ];

        $this->set('title','Title Here');
    }

    public function beta()
    {

    }

    public function upload()
    {
        $post = '';
        if ($this->request->is('post'))
        {
            if (!empty($this->request->data['file']['name']))
            {
                $filename = $this->request->data['file']['name'];
                $url = Router::url('/',true).'images/'.$filename;
                $upload_path = 'images/';
                $uploadfile = $upload_path.$filename;
                if(move_uploaded_file($this->request->data['file']['tmp_name'],$uploadfile))
                {
                    $post = $this->Employees->newEntity();
                }

            }else{

                $this->Flash->error(__('Please select a file to upload'));
            }
        }

        $this->set('posts',$post);
    }

}
