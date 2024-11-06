<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bill;

class BillController extends Controller
{
    public function showForm()
    {
        return view('billing_form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'Firstname' => 'required|string|max:255',
            'Lastname' => 'required|string|max:255',
            'Middle_Initial' => 'required|string|max:1',
            'Email' => 'required|email|max:255',
            'Contact_No' => 'required|numeric',
            'Street' => 'required|string|max:255',
            'City' => 'required|string|max:255',
            'Province' => 'required|string|max:255',
            'Country' => 'required|string|max:255',
            'ZIP' => 'required|integer',
            'No_of_watts' => 'required|integer',
            'Sub_Type' => 'required|string',
        ]);

        // Calculate energy charge based on subscription type
        $subscriptionRates = [
            'Residential' => 2.75,
            'Industrial' => 3.75,
            'Commercial' => 4.25,
        ];
        $energyCharge = $validated['No_of_watts'] * $subscriptionRates[$validated['Sub_Type']];

        // Calculate other charges
        $disconnection = $request->has('Disconnection') ? 500 : 0;
        $latePayment = $request->has('Late_Payment') ? ($energyCharge * 0.30) : 0;

        // Calculate total bill
        $totalBill = $energyCharge + $disconnection + $latePayment;

        // Save the data to the database
        $bill = Bill::create([
            'Firstname' => $validated['Firstname'],
            'Lastname' => $validated['Lastname'],
            'Middle_Initial' => $validated['Middle_Initial'],
            'Email' => $validated['Email'],
            'Contact_No' => $validated['Contact_No'],
            'Street' => $validated['Street'],
            'City' => $validated['City'],
            'Province' => $validated['Province'],
            'Country' => $validated['Country'],
            'ZIP' => $validated['ZIP'],
            'No_of_watts' => $validated['No_of_watts'],
            'Sub_Type' => $validated['Sub_Type'],
            'Energy_charge' => $energyCharge,
            'Disconnection' => $disconnection,
            'Late_Payment' => $latePayment,
            'Total_Bill' => $totalBill,
        ]);

        // Redirect to the result view with data
        return view('billing_result', [
            'bill' => $bill
        ]);
    }
}