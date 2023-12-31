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

    public function Logout()
    {
        $this->session  = \Config\Services::session();
        if ($this->session->get('usertype') === "Admin" || $this->session->get('usertype') === "Instructor") {
            $this->session->destroy();
            $data['error'] = "You Have been logged out";
            return view('Loginstaff', $data);
        } else {
            $this->session->destroy();
            $data['error'] = "You Have been logged out";
            return view('Login', $data);
        }
    }
    public function Profile()
    {
        $this->session  = \Config\Services::session();
        if ($this->session->get('usertype') === "Admin") {
            return view('Adminprofileview');
            // return view('Adminprofileview', $datasess);
        }
        if ($this->session->get('usertype') === "Instructor") {
            return view('Instructorprofile');
            // return view('Instructorprofile', $datasess);
        }
        if ($this->session->get('usertype') === "Student") {
            return view('Studentprofileview');
            // return view('Studentprofileview', $datasess);
        }
            
    }
    public function loginfunc()
    {
        // var_dump($this->request->getPost());
        $username = $this->request->getPost('admissionnumber');
        $data['username'] = $username;
        $password = $this->request->getPost('password');
        $db = Database::connect();
        $query = $db->query("SELECT * FROM flcUSERS where EMAIL = '$username' and PASSWORD = '$password' ");
        // $query = $db->query("SELECT * FROM flcusers ");
        $result = $query->getResultArray();
        if ($result) {
            // echo 'Database connection successful';
            // var_dump($result);
            $this->session     = \Config\Services::session();
            foreach ($result as $row) {
                $data['id'] = $row['USERID'];
                $this->session->set('ID',$row['USERID']);
                $firstname = $row['FIRSTNAME'];
                $lastname = $row['LASTNAME'];
                $email = $row['EMAIL'];
                $usertype = $row['USERTYPE'];
                $phone = $row['PHONENUM'];
                $idno = $row['IDNO'];
                $emailpass = $row['USERNAME'];
                $data['PROFILEIMG'] = $row['PROFILEIMG'];                
            }

            

            $query2 = $db->query("SELECT * FROM flcENROLLMENT where IDNO = '$idno' limit 1");
            // $query = $db->query("SELECT * FROM flcusers ");
            $result2 = $query2->getResultArray();
            // echo 'Database connection successful';
            var_dump($result2);                    
            foreach ($result2 as $row2) {
                $id = $row2['userid'];
                $trimester = $row2['TRIMESTER'];
                $gender = $row2['GENDER'];
                $idno = $row2['IDNO'];
                $course = $row2['COURSE'];
                $telephone = $row2['TELEPHONE'];
                $intake = $row2['INTAKE'];
            }
            $datasess = array(
                'username'     => $username,
                'email'     => $emailpass,
                'firstname' => $firstname,
                'lastname' => $lastname,
                'usertype' => $usertype,
                'phone' => $telephone,
                'trimester' => $trimester,
                'gender' => $gender,
                'idno' => $idno,
                'intake' => $intake,
                'course' => $course,
                'telephone' => $telephone,
                'profileimg'  =>  $data['PROFILEIMG'],
                'logged_in'    => TRUE
            );
            $this->session->set($datasess);
            // var_dump($datasess);
            if ($this->session->get('usertype') === "Admin") {
                return view('Adminprofileview', $datasess);
            }
            if ($this->session->get('usertype') === "Instructor") {
                return view('Instructorprofile', $datasess);
            }
            if ($this->session->get('usertype') === "Student") {
                return view('Studentprofileview', $datasess);
            }
        } else {
            $data['error'] = 'Password or Username incorrect!!';
            return view('Login', $data);
        }
    }
    public function Loginstaff()
    {
        return view('Loginstaff');
    }
    public function userlist()
    {
        $this->session = \Config\Services::session();
        if ($this->session->get('usertype') === "Admin") {
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
        } else {
            return view('Loginstaff');
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
    public function Admittedfeepayment()
    {
        return view('Admittedfeepayment');
    }
    public function Courses()
    {
        return view('Courses');
    }
    public function Feepayment()
    {
        $trimester = $_GET["trimester"];
        $year = $_GET["year"];
        $firstname = $_GET["firstname"];
        $lastname = $_GET["lastname"];
        $gender = $_GET["gender"];
        $idno = $_GET["idno"];
        $placeofbirth = $_GET["placeofbirth"];
        $dob = $_GET["dob"];
        $residence = $_GET["residence"];
        $profession = $_GET["profession"];
        $pobox = $_GET["pobox"];
        $emailadd = $_GET["email"];
        $telephone = $_GET["telephone"];
        $guardian = $_GET["guardian"];
        $course = $_GET["course"];
        $intake = $_GET["intake"];

        $data = [
            'TRIMESTER'       => $trimester,
            'FULLNAMES'        => $firstname . " " . $lastname,
            'GENDER'        => $gender,
            'IDNO' => $idno,
            'PLACEOFBIRTH'        => $placeofbirth,
            'DOB'        => $dob,
            'RESIDENCE'        => $residence,
            'PROFESSION'        => $profession,
            'POBOX'        => $pobox,
            'EMAIL'        => $emailadd,
            'TELEPHONE'        => $telephone,
            'GUARDIAN'        => $guardian,
            'COURSE'        => $course,
            'INTAKE'        => $intake
        ];
        // var_dump($data);
        $db = Database::connect();
        $builder = $db->table('ENROLLMENT');
        $builder->insert($data);
        
        $email = \Config\Services::email();

        $email->setFrom($emailadd, $firstname . " " . $lastname);
        $email->setTo('info@foreignlanguagemombasa.co.ke');
        $email->setCC('natashatanya@foreignlanguagemombasa.co.ke');
        $email->setBCC('cheruiyotkenedy@gmail.com');
        $email->setSubject('Enrollment');
        $email->setMessage($firstname . " " . $lastname." has enrolled for ".$course. " intake ".$intake);

        $email->send();
        
        
        // var_dump($email);
        // return $builder;        
        $data['insert'] = 'We will contact you with more information thank you!';
        return view('Feepayment');
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
    public function Feestructureportuguese()
    {
        return view('Feestructureportuguese');
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
        $this->session = \Config\Services::session();
        if ($this->session->get('usertype') === "Student") {
            return view('Studentprofileview');
        } else {
            return view('Adminprofileview');
        }
    }
    public function Enrollment()
    {
        $trimester = $_GET["trimester"];
        $year = $_GET["year"];
        $firstname = $_GET["firstname"];
        $lastname = $_GET["lastname"];
        $gender = $_GET["gender"];
        $idno = $_GET["idno"];
        $placeofbirth = $_GET["placeofbirth"];
        $dob = $_GET["dob"];
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
            'FULLNAMES'        => $firstname . " " . $lastname,
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
        $builder = $db->table('ENROLLMENT');
        $builder->insert($data);


        $email = new Email();

        $email->setFrom($email, $firstname . " " . $lastname);
        $email->setTo('cheruiyotkenedy@gmail.com');
        $email->setSubject('Enrollment');
        $email->setMessage($firstname . " " . $lastname." has enrolled for ".$course. " intake ".$intake);

        $email->send();

        //var_dump($builder);
        // return $builder;        
        $data['insert'] = 'We will contact you with more information thank you!';
        return view('Feepayment', $data);
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
        // var_dump($db);
        $builder = $db->table('SCHOLARSHIP');
        $builder->insert($data);
        // var_dump($builder);
        $data['insert'] = 'We will contact you with more information thank you!';
        return view('Scholarship', $data);
    }
}
