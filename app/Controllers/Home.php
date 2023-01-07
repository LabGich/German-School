<?php

namespace App\Controllers;

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
}
