<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('login');
    }
    public function auth()
    {
        $session=session();

        //get user input
        $email=$this->request->getPost('email');
        $password=password_hash($this->request->getPost('password', PASSWORD_DEFAULT));

        $usermodel=new User();
        $userData = [
            'email' => $email,
            'password' => $password
        ];

        // Insert user into the database
        if ($userModel->createUser($userData)) {
            // User created successfully
            $session->setFlashdata('success', 'User registered successfully!');
            return redirect()->to('login');
        } else {
            // Error inserting user
            $session->setFlashdata('error', 'Failed to register user!');
            return redirect()->back()->withInput();
        }




    }
    public function insert()
    {
        //echo "Data insert";
        $email=$this->request->getVar('email');
        $password=$this->request->getVar('password');
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $data=['email'=>$email,'password' => $hashedPassword 
    ];
    $db = \Config\Database::connect();
             $builder = $db->table('users');
             $builder->insert($data);
             //return redirect()->to(site_url('portfolio/show'));

               // Set session data
    $session = session();
    $session->setFlashdata('success', 'User registered successfully!');
    $session->set('email', $email); // Set email in session


        return view('dashboard');
        
}
public function dashboard()
{
    return view('dashboard');
}
}