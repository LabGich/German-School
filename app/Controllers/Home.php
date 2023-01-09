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
}
