<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <title>Therapist Availability</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <p>
                        Logo goes here
                    </p>
                </div>
                <div class="col-sm-8">
                    <h2>Hello Derek</h2>
                </div>
                <div class="col-sm-2">
                    <button type="button">Logout</button> 
                </div>
            </div>
        </div>
@extends('layouts.user_type.auth')

    @section('content')
        <div>
            <table>
                <tr>
                    <th><button type="button">Dashboard</button></th>
                </tr>
                <tr>
                    <th><button type="button">Clients</button></th>
                </tr>
                <tr>
                    <th><button type="button">Therapists</button></th>
                </tr>
                <tr>
                    <th><button type="button">Terms and Conditions</button></th>
                </tr>
                <tr>
                    <th><button type="button">Privacy Policy</button></th>
                </tr>
                <tr>
                    <th><button type="button">FAQ</button></th>
                </tr>
                <tr>
                    <th><button type="button">Change Password</button></th>
                </tr>
            </table>
        </div>
        <div>
            <h3>Billy Wright</h3>
            <table>
                <tr>
                    <th>Client</th>
                    <th>Appointment</th>
                    <th>Referral</th>
                </tr>
                <tr>
                    <td>Calvin Johnson</td>
                    <td>15:00 27/07/2022</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td>James Hamilton</td>
                    <td>17:00 12/08/2022</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td>William Hudson</td>
                    <td>11:00 09/10/2022</td>
                    <td>No</td>
                </tr>
                <tr>
                    <td>Anna Fay</td>
                    <td>13:00 19/11/2022</td>
                    <td>No</td>
                </tr>
            </table>
        </div>
    @endsection
    </body>
</html>