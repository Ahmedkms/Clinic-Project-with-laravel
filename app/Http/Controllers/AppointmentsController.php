<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
    //
    public function index()
    {
        $appointments = [
            [
                "ID" => 1,
                "Name" => "John Doe",
                "Email" => "johndoe@example.com",
                "Phone" => "+1234567890",
                "Gender" => "Male",
                "Status" => "Active",
                "Actions" => "Edit/Delete"
            ],
            [
                "ID" => 2,
                "Name" => "Jane Smith",
                "Email" => "janesmith@example.com",
                "Phone" => "+1987654321",
                "Gender" => "Female",
                "Status" => "Inactive",
                "Actions" => "Edit/Delete"
            ],
            [
                "ID" => 3,
                "Name" => "Michael Brown",
                "Email" => "michaelbrown@example.com",
                "Phone" => "+1122334455",
                "Gender" => "Male",
                "Status" => "Active",
                "Actions" => "Edit/Delete"
            ],
            [
                "ID" => 4,
                "Name" => "Emily Davis",
                "Email" => "emilydavis@example.com",
                "Phone" => "+1223344556",
                "Gender" => "Female",
                "Status" => "Pending",
                "Actions" => "Edit/Delete"
            ],
            [
                "ID" => 5,
                "Name" => "David Wilson",
                "Email" => "davidwilson@example.com",
                "Phone" => "+1334455667",
                "Gender" => "Male",
                "Status" => "Active",
                "Actions" => "Edit/Delete"
            ]
        ];
        return view("admin.pages.appointments",compact("appointments"));
    }
}
