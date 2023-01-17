<?php

namespace App\Controllers;

use Config\Database;
use CodeIgniter\Database\BaseConnection;



class Admin extends BaseController
{
    public function index()
    {
        return view('Adminhome');
    }
    public function Login()
    {
        return view('Login');
    }

public function Loginstaff()
    {
        return view('Loginstaff');
    }
    public function logincontrollerstaff()
    {
        // var_dump($this->request->getPost());
        $username = $this->request->getPost('admissionnumber');
        $password = $this->request->getPost('password');
        $db = Database::connect();
        $query = $db->query("SELECT * FROM users where email = '$username' and password = '$password' ");
        // $query = $db->query("SELECT * FROM users ");
        $result = $query->getResultArray();
        if ($result) {
            // echo 'Database connection successful';
            // var_dump($result);
            // $data['users'] = $result;
            foreach ($result as $row) {
                 $id = $row['userid'];
                 $firstname = $row['firstname'];
                 $email = $row['email'];
                 $usertype = $row['usertype'];
                //  $session->set('username', $email);
                 $query2 = $db->query("SELECT * FROM flcENROLLMENT");
                 $result2 = $query2->getResultArray();
                 $data['enrollment'] = $result2;
            }
            return view('Adminprofileview');
        } else {
            echo 'No User found!';
            return view('Loginstaff');
        }
        
    }
    public function userlist()
    {
        $db = Database::connect();
        $query = $db->query("SELECT * FROM users ");
        $result = $query->getResultArray();
        $data['users'] = [];
        if ($result) {

            // var_dump($result);
            $data['users'] = $result;
            // foreach ($result as $row)
            // {
            //   echo $id = $row['userid'];
            //   echo $firstname = $row['firstname'];
            //   echo $email = $row['email'];
            //   echo $usertype = $row['usertype'];
            // }
        } else {
            echo 'No User found!';
        }
        return view('userlist', $data);
    }
    public function Scholarshiplist()
    {
        $db = Database::connect();
        $query = $db->query("SELECT * FROM flcSCHOLARSHIP ");
        $result = $query->getResultArray();
        $data['scholarship'] = [];
        if ($result) {

            // var_dump($result);
            $data['scholarship'] = $result;
            // foreach ($result as $row)
            // {
            //   echo $id = $row['userid'];
            //   echo $firstname = $row['firstname'];
            //   echo $email = $row['email'];
            //   echo $usertype = $row['usertype'];
            // }
        } 
        return view('scholarshiplist', $data);
    }
    public function EnrollmentList()
    {
        $db = Database::connect();
        $query2 = $db->query("SELECT * FROM flcENROLLMENT");
        $result2 = $query2->getResultArray();
        $data['enrollment'] = $result2;
        if ($result) {

            // var_dump($result);
            $data['enrollment'] = $result;
            // foreach ($result as $row)
            // {
            //   echo $id = $row['userid'];
            //   echo $firstname = $row['firstname'];
            //   echo $email = $row['email'];
            //   echo $usertype = $row['usertype'];
            // }
        } 
        return view('enrollmentlist', $data);
    }
    public function Adminprofileview()
    {
        return view('Adminprofileview');
    }
}