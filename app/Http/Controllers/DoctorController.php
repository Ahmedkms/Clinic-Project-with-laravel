<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Models\Doctors;

class DoctorController extends Controller
{
    //
    public function filldataToDoctrosI()
    {
        // $name = 'ahmed';
        // $email = 'ahmed377@gmail.com';
        // $speciality = 'surgery';
        // $phone = '01110426264';
        // Doctor::create([

        //             'name' => $name,
        //             'specialization' => $speciality,
        //             'phone' => $phone,
        //             'email' => $email      
        //     ]);

        // $doctor = new Doctor();
        // $doctor->name = "mohamed";
        // $doctor->email = "mohamed@gmail.com";
        // $doctor->specialization = "anything";
        // $doctor->phone = 978645676;
        // $doctor->save();

        //    dd( Doctor::all());
        //    $doctor = Doctor::find(4);
        //    dd($doctor);

        // $doctor = Doctor::where('id',4)->get()->first();
        //     echo "name = " . $doctor->name . "<br>".
        //     "email = " . $doctor->email . "<br>";

        $doctors = Doctor::all();
        foreach($doctors as $doctor){
            echo "name = " . $doctor->name . "<br>".
                 "email = " . $doctor->email . "<br>";
                 "specialization = " . $doctor->specialization . "<br>";
                 "phone  = " . $doctor->phone . "<br>";

            echo "<hr>";


        }
    }
}
