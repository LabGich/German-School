<?php

namespace App\Controllers;

use Config\Database;
use CodeIgniter\Database\BaseConnection;



class Admin extends BaseController
{
    public function index()
    {
        return view('Loginstaff');
    }
    public function Login()
    {
        return view('Login');
    }

    public function Loginstaff()
    {
        return view('Loginstaff');
    }
     public function Admitcontroller()
    {
        // var_dump($_GET);
        $admissionnum = $_GET['admissionnum'];
        $idtable = $_GET['id'];
        $db = Database::connect();
         $query2 = $db->query("SELECT * FROM flcENROLLMENT where ID = '$idtable'");
            // $query = $db->query("SELECT * FROM flcusers ");
        $result2 = $query2->getResultArray();            
                    // echo 'Database connection successful';
                // var_dump($result);                    
                foreach ($result2 as $row2) {
                    $id = $row2['ID'];
                    $TRIMESTER = $row2['TRIMESTER'];
                    $GENDER = $row2['GENDER'];
                    $IDNO = $row2['IDNO'];
                    $EMAIL = $row2['EMAIL'];
                    $TELEPHONE = $row2['TELEPHONE'];
                    $COURSE = $row2['COURSE'];
                    $INTAKE = $row2['INTAKE'];
                    $FULLNAMES = $row2['FULLNAMES'];
                   
                    $data = [
                                'USERNAME'       => $EMAIL,
                                'FIRSTNAME'        => $FULLNAMES,                                
                                'EMAIL' => $admissionnum,
                                'PHONENUM'        => $TELEPHONE,
                                'USERTYPE'        => 'Student',
                                'PASSWORD'        => $IDNO
                            ];
                            // var_dump($data);
                            $db = Database::connect();
                            $builder = $db->table('USERS');
                            $builder->insert($data);

                            $builder2 = $db->table('flcENROLLMENT');                            
                            $builder2->set('Status', 'Admitted');
                            $builder2->where('ID', $idtable);
                            $builder2->update();

                            $query = $db->query("SELECT * FROM flcUSERS ");
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

    }
    public function Admitstudent()
    {
        $this->session = \Config\Services::session();
        if ($this->session->get('usertype') === "Admin"){
            return view('Admitstudent');
        }
        else{
            return view('Loginstaff');            
        }
    }
    public function logincontrollerstaff()
    {
        // var_dump($this->request->getPost());
        $username = $this->request->getPost('admissionnumber');
        $password = $this->request->getPost('password');
        $db = Database::connect();
        $query = $db->query("SELECT * FROM flcUSERS where EMAIL = '$username' and PASSWORD = '$password'");
        // $query = $db->query("SELECT * FROM flcusers ");
        $result = $query->getResultArray();
        if ($result) {
            // echo 'Database connection successful';
            // var_dump($result);
            // $data['users'] = $result;
            foreach ($result as $row) {
                 $id = $row['USERID'];
                 $data['FIRSTNAME'] = $row['FIRSTNAME'];
                 $data['LASTNAME'] = $row['LASTNAME'];
                 $data['EMAIL'] = $row['EMAIL'];
                 $data['USERTYPE'] = $row['USERTYPE'];                
                 $data['DATE'] = $row['DATE'];                
                 $data['PHONENUM'] = $row['PHONENUM'];                
                
            }
            $this->session 	= \Config\Services::session();
            $datasess = array(
                'username' 	=> $username,
                'email' 	=> $data['EMAIL'],
                'firstname'  =>  $data['FIRSTNAME'],
                'lastname'  =>  $data['LASTNAME'],
                'usertype'  =>  $data['USERTYPE'],
                'phone'  =>  $data['PHONENUM'],
                'date'  =>  $data['DATE'],
                'logged_in'	=> TRUE
            );
            $this->session->set($datasess);
        if ($this->session->get('usertype') === "Admin"){
            return view('Adminprofileview',$datasess);     
        }   
        else {
            $data['error'] = 'Please Login';
            return view('Login');
        }   
        } else {
            $data['error'] = 'Password or Username incorrect!!';
            return view('Loginstaff');
        }                
    }
    public function userlist()
    {
        $this->session = \Config\Services::session();
        if ($this->session->get('usertype') === "Admin"){
        $db = Database::connect();
        $query = $db->query("SELECT * FROM flcUSERS ");
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
        else{
            return view('Loginstaff');            
        }
    }
    public function Scholarshiplist()
    {
        $this->session = \Config\Services::session();
        if ($this->session->get('usertype') === "Admin"){
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
        else{
            return view('Loginstaff');            
        }
    }
    public function EnrollmentList()
    {
        $this->session = \Config\Services::session();
        if ($this->session->get('usertype') === "Admin"){
        $db = Database::connect();
        $query2 = $db->query("SELECT * FROM flcENROLLMENT where Status = 'Pending' ");
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
        else{
            return view('Loginstaff');
        }
    }
    public function Adminprofileview()
    {
        $this->session = \Config\Services::session();
        if ($this->session->get('usertype') === "Admin"){
            return view('Adminprofileview');
        }else{
            return view('Loginstaff');
        }
        
    }
}