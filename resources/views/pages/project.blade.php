@extends('welcome')

@section('contain')
<div class="container-fluid text-center"><h1>Projects</h1></div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-4 text-center">
            <img src="{{ asset('assets/images/eam2.png') }}" alt="Girl in a jacket" width="200" height="200">
            <h4>Enterprise Asset Maintenanc & Management </h4>
        </div>
        <div class="col-8 ">
            <p> <strong>Enterprise Assst Maintenance & Management System </strong>effectively covers the following areas</p>
           
            <div class="modules text-left"> 
                <h5>Modules :</h5>
               <h6>* Asset Creation and Stock Manage</h6>
               <h6>* Work Reqest</h6>
               <h6>* Maintenance Activities</h6>
               <h6>* Issuing and Return</h6>
               <h6>* Transfer Movement</h6>
               <h6>* Disposal/ </h6>
               <h6>* Depriciation Calculation</h6>
            </div>
        </div>
        <hr>    
        <div class="col-4 text-center">
            <img src="{{ asset('assets/images/hms.png') }}" alt="Girl in a jacket" width="200" height="200">
            
        </div>
        <div class="col-8 ">
            <p> <strong>Hospital Management system</strong> is integrated with Digital Automated Machines are effectively covers the following areas</p>
           
            <div class="modules text-left"> 
                <h5>Modules :</h5>
               <h6>* Patient Registration and Admission</h6>
               <h6>* Nurse Station</h6>
               <h6>* Doctor's Chamber</h6>
               <h6>* Aduting</h6>
               <h6>* Account & Finance</h6>
               <h6>* Patient Discharge</h6>
               <h6>* Diagnostics & reports</h6>
            </div>
        </div>
<hr>
        <div class="col-4 text-center">
            <img src="{{ asset('assets/images/sms.png') }}" alt="Girl in a jacket" width="250" height="250">
            
        </div>
        <div class="col-8 ">
            <p> <strong>School Management System</strong> effectively covers the following areas</p>
           
            <div class="modules text-left"> 
                <h5>Modules :</h5>
               <h6>* Student Registration and Admission</h6>
               <h6>* Attendance : Sudents & Officials </h6>
               <h6>* Student's Evaluation</h6>
               <h6>* Accounts & Finance</h6>
               <h6>* Extra Curiculams </h6>
               <h6>* Employee Management</h6>
               <h6>* Guardian's portals</h6>
            </div>
        </div>
    </div>
</div>
    
@endsection