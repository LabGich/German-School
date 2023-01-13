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
        // $query = $db->query("SELECT * FROM users where email = '$username' and password = '$password' ");
        $query = $db->query("SELECT * FROM users ");
        $result = $query->getResultArray();
        if ($result) {
            // echo 'Database connection successful';
            var_dump($result);
            $data['users'] = $result;
            foreach ($result as $row) {
                echo $id = $row['userid'];
                echo $firstname = $row['firstname'];
                echo $email = $row['email'];
                echo $usertype = $row['usertype'];
            }
        } else {
            echo 'No User found!';
        }
        return view('userlist', $data);
    }
    public function userlist()
    {
        $db = Database::connect();
        $query = $db->query("SELECT * FROM users ");
        $result = $query->getResultArray();
        $data['users'] = [];
        if ($result) {

            var_dump($result);
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
        var_dump($builder);
        return $builder;
        // return view('Scholarship');
    }
    public function Applyscholarship()
    {
        $name = $_GET["name"];
        $admissionnum = $_GET["admissionnum"];
        $reasons = $_GET["reasons"];

        // $db = Database::connect();
        // $query = $db->query('SELECT * FROM users');
        // if ($query)
        // {
        //     echo 'Database connection successful';
        // }
        // else
        // {
        //     echo 'Error connecting to database';
        // }

        // $db = \Config\Database::connect();
        // $query = $db->query('SELECT * FROM users');
        // $results = $query->getResult();

        return $reasons;
    }
}
