<?php

namespace App\Controllers;

use Config\Database;
use CodeIgniter\Database\BaseConnection;



class Home extends BaseController
{
    public function index()
    {
        return view('Homepage');
    }
    public function Login()
    {
        return view('Login');
    }
    public function loginfunc()
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
            
            foreach ($result as $row) {
                $id = $row['userid'];
                $data['firstname'] = $row['firstname'];
                $data['email'] = $row['email'];
                $data['usertype'] = $row['usertype'];
                
            }
            $this->session 	= \Config\Services::session();
            $datasess = array(
                'username' 	=> $username,
                'email' 	=> $data['email'],
                'usertype'  =>  $data['usertype'],
                'logged_in'	=> TRUE
            );
            $this->session->set($datasess);
             return view('Studentprofileview', $data);
        } else {
            $data['error'] = 'Password or Username incorrect!!';
             return view('Login',$data);
        }
    }
    public function Loginstaff()
    {
        return view('Loginstaff');
    }    
    public function userlist()
    {
        $db = Database::connect();
        $query = $db->query("SELECT * FROM users ");
        $result = $query->getResultArray();
        $data['users'] = [];
        if ($result) {            
            $data['users'] = $result;            
            return view('userlist', $data);
        } else {            
            return view('userlist', $data);
        }        
    }
    public function Registration()
    {
        return view('Registration');
    }
    public function About()
    {
        return view('About');
    }
    public function Courses()
    {
        return view('Courses');
    }
    public function Feestructure()
    {
        return view('Feestructure');
    }
    public function Feestructurearabic()
    {
        return view('Feestructurearabic');
    }
    public function Feestructurechinese()
    {
        return view('Feestructurechinese');
    }
    public function Feestructureenglish()
    {
        return view('Feestructureenglish');
    }
    public function Feestructurefrench()
    {
        return view('Feestructurefrench');
    }
    public function Feestructuregerman()
    {
        return view('Feestructuregerman');
    }
    public function Feestructureitalian()
    {
        return view('Feestructureitalian');
    }
    public function Feestructurejapanese()
    {
        return view('Feestructurejapanese');
    }
    public function Feestructurespanish()
    {
        return view('Feestructurespanish');
    }
    public function Feestructureswahili()
    {
        return view('Feestructureswahili');
    }
    public function Contact()
    {
        return view('Contact');
    }
    public function Admission()
    {
        return view('Admission');
    }
    public function Attendance()
    {
        return view('Attendance');
    }
    public function Homework()
    {
        return view('Homework');
    }
    public function Scholarship()
    {
        return view('Scholarship');
    }
    public function Studentprofileview()
    {
        return view('Studentprofileview');
    }
    public function Enrollment()
    {
        $trimester = $_GET["trimester"];
        $year = $_GET["year"];
        $fullnames = $_GET["fullnames"];
        $gender = $_GET["gender"];
        $idno = $_GET["idno"];
        $placeofbirth = $_GET["placeofbirth"];
        $dob = ["dob"];
        $residence = $_GET["residence"];
        $profession = $_GET["profession"];
        $pobox = $_GET["pobox"];
        $email = $_GET["email"];
        $telephone = $_GET["telephone"];
        $guardian = $_GET["guardian"];
        $course = $_GET["course"];
        $intake = $_GET["intake"];

        $data = [
            'TRIMESTER'       => $trimester,
            'FULLNAMES'        => $fullnames,
            'GENDER'        => $gender,
            'IDNO' => $idno,
            'PLACEOFBIRTH'        => $placeofbirth,
            'DOB'        => $dob,
            'RESIDENCE'        => $residence,
            'PROFESSION'        => $profession,
            'POBOX'        => $pobox,
            'EMAIL'        => $email,
            'TELEPHONE'        => $telephone,
            'GUARDIAN'        => $guardian,
            'COURSE'        => $course,
            'INTAKE'        => $intake
        ];
        // var_dump($data);
        $db = Database::connect();
        $builder = $db->table('flcENROLLMENT');
        $builder->insert($data);
        // var_dump($builder);
        // return $builder;        
        $data['insert'] = 'We will contact you with more information thank you!';
        return view('Admission',$data);
    }
    public function Applyscholarship()
    {

        $name = $_GET["name"];
        $admissionnum = $_GET["admissionnum"];
        $reasons = $_GET["reasons"];


        $data = [
            'name'       => $name,
            'admissionnum'        => $admissionnum,
            'Reasons'        => $reasons,
        ];
        // var_dump($data);
        $db = Database::connect();
        $builder = $db->table('flcSCHOLARSHIP');
        $builder->insert($data);
        $data['insert'] = 'We will contact you with more information thank you!';
        return view('Scholarship',$data);
    }
}
