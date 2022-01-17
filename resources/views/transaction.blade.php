@extends('layout')

@section('title', 'Transaction')

@section('content')

<div class="container">
    <div class="row justify-content-center pt-3">
    
     <div class="col-8 border">
        <div class="col-6">
            <table>
                <tr>
                    <td>Transaction Id</td><td>: #</td>
                </tr>
                <tr>
                    <td>User Id</td><td>: #</td>
                </tr>
                <tr>
                    <td>Property Id</td><td>: #</td>
                </tr>
            </table>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Name</td>
                    <td>Price</td>
                    <td>Location</td>
                    <td>Type</td>
                </tr>
            </thead>
         <tbody>
             
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Price</td>
                <td>Location</td>
                <td>Type</td>
            </tr>
            <tr>
                <td class="text-center "colspan="5">Payment Successful/card number sensor? idk</td>
            </tr>
        </tbody>
        </table>
     </div>
    </div>
</div>

    </div>
    </div>

  </section>

@endsection
