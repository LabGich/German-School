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
                 $data['firstname'] = $row['firstname'];
                 $data['email'] = $row['email'];
                 $data['usertype'] = $row['usertype'];                
                
            }
            return view('Adminprofileview',$data);        
        } else {
            $data['error'] = 'Password or Username incorrect!!';
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
            return view('userlist', $data);        
        } else {
            return view('userlist', $data);
        }        
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
            return view('scholarshiplist', $data);
        } 
        else{
        return view('scholarshiplist', $data);
        }
    }
    public function EnrollmentList()
    {
        $db = Database::connect();
        $query2 = $db->query("SELECT * FROM flcENROLLMENT");
        $result2 = $query2->getResultArray();
        $data['enrollment'] = $result2;
        if ($result2) {

            // var_dump($result);
            $data['enrollment'] = $result2;         
            return view('enrollmentlist', $data);
        } else{
            return view('enrollmentlist', $data);
        }        
    }
    public function Adminprofileview()
    {
        return view('Adminprofileview');
    }
}