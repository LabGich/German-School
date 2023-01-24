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
    public function GetUser()
    {
        $USERID = $_GET['ID']; 
        // echo $USERID;
        $db = Database::connect();
        $query = $db->query("SELECT * FROM flcUSERS where USERID = '$USERID'");
        // $query = $db->query("SELECT * FROM flcusers ");
        $result = $query->getResultArray();
        // var_dump($query);
        $data['users'] = $result;    
        if ($result) {
            // var_dump($result);
            return view('GetUser',$data);
        }
        
    }
    public function Loginstaff()
    {
        return view('Loginstaff');
    }
    public function Instructorprofile()
    {        
        $this->session = \Config\Services::session();
        if ($this->session->get('usertype') === "Instructor")
        {
          return view('Instructorprofile');
        }
    }   
    public function Addinstructor()
    {
        $this->session = \Config\Services::session();
        if ($this->session->get('usertype') === "Admin")
        {
            return view('Addinstructor');
        }
    }
    public function UpdateUser()
    { 
        $userid = $this->request->getPost('userid');
        $firstname = $this->request->getPost('firstname');
        $lastname = $this->request->getPost('lastname');
        $emailaddress = $this->request->getPost('emailaddress');        
        $password = $this->request->getPost('password');
        $idno = $this->request->getPost('idno');
        $telephoneno = $this->request->getPost('telephoneno');        


        $data = ['USERNAME' => $emailaddress,
                'FIRSTNAME' => $firstname,                                
                'LASTNAME' => $lastname,                                
                'EMAIL' => $emailaddress,
                'PHONENUM' => $telephoneno,
                'IDNO' => $idno,
                'PASSWORD' => $password
                ];
                // var_dump($data);
                $db = Database::connect();
        $builder = $db->table('USERS');   
        $builder->update($data, ['USERID' => $userid]);
         $this->session = \Config\Services::session();
        if ($this->session->get('usertype') === "Admin"){        
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
            return view('Login');            
        }        
    }
    
    public function Saveinstructor()
    { 
               
        $firstname = $this->request->getPost('firstname');
        $lastname = $this->request->getPost('lastname');
        $emailaddress = $this->request->getPost('emailaddress');
        $course = $this->request->getPost('course');
        $idno = $this->request->getPost('idno');
        $telephoneno = $this->request->getPost('telephoneno');
        $USERTYPE = 'Instructor';


        $data = ['USERNAME' => $emailaddress,
                'FIRSTNAME' => $firstname,                                
                'LASTNAME' => $lastname,                                
                'EMAIL' => $emailaddress,
                'PHONENUM' => $telephoneno,
                'USERTYPE' => $USERTYPE,
                'IDNO' => $idno,
                'COURSE' => $course,
                'PASSWORD' => $idno
                ];
                // var_dump($data);
                $db = Database::connect();
                $builder = $db->table('USERS');
                $builder->insert($data);



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
            return view('Addinstructor');            
        }        
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

                            $builder2 = $db->table('ENROLLMENT');                            
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
        if ($this->session->get('usertype') === "Instructor"){
            return view('Instructorprofile',$datasess);     
        }   
        if ($this->session->get('usertype') === "Student"){
            return view('Studentprofileview',$datasess);     
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