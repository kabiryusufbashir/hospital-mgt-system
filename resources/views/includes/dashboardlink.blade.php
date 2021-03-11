<div id="menu" class="hidden md:block px-3 bg-white col-span-1">
    <h2 class="text-2xl py-3 border-b font-medium">Menu</h2>
    <ul>
        <li class="py-3 flex border-b cursor-pointer">
            <a class="flex" href="{{ route('dashboard') }}">
                <img class="w-7 mr-4" src="{{ asset('images/dashboard.png') }}" alt="Dashboard">
                Dashboard
            </a>
        </li>
        
        <!-- Doctor -->
        <li id="doctorCaret" class="py-3 flex border-b cursor-pointer">
            <img class="w-7 mr-4" src="{{ asset('images/doctor_icon.png') }}" alt="Doctor">
            <a href="#">Doctors</a>
            <svg id="doctorPointer" class="users-caret" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        </li>
        <div id="doctorMenu" class="users-caret-menu hidden">
            <li class="py-3 flex border-b">
                <a href="{{ route('create-doctor') }}">Add Doctor</a>
            </li>
            <li class="py-3 flex">
                <a href="#">All Doctors</a>
            </li>
        </div>
        
        <!-- Nurse  -->
        <li class="py-3 flex border-t border-b">
            <img class="w-7 mr-4" src="{{ asset('images/nurse.png') }}" alt="Nurse">
            <a href="#">Nurses</a>
            <svg id="nurseCaret" class="users-caret" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        </li>
        <div id="nurseMenu" class="users-caret-menu hidden">
            <li class="py-3 flex border-b">
                <a href="#">Add Nurse</a>
            </li>
            <li class="py-3 flex">
                <a href="#">All Nurse</a>
            </li>
        </div>
        
        <!-- Pharmacist  -->
        <li class="py-3 flex border-t border-b"> 
            <img class="w-7 mr-4" src="{{ asset('images/pharmacist.png') }}" alt="Pharmacists">
            <a href="#">Pharmacists</a>
            <svg id="pharmacistCaret" class="users-caret" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        </li>
        <div id="pharmacistMenu" class="users-caret-menu hidden">
            <li class="py-3 flex border-b">
                <a href="#">Add Pharmacist</a>
            </li>
            <li class="py-3 flex">
                <a href="#">All Pharmacists</a>
            </li>
        </div>

        <!-- Laboratorist -->
        <li class="py-3 flex border-t">
            <img class="w-7 mr-4" src="{{ asset('images/laboratorist.png') }}" alt="Laboratorist">
            <a href="#">Laboratorists</a>
            <svg id="laboratoristCaret" class="users-caret" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        </li>
        <div id="laboratoristMenu" class="users-caret-menu hidden">
            <li class="py-3 flex border-b">
                <a href="#">Add Laboratorist</a>
            </li>
            <li class="py-3 flex">
                <a href="#">All Laboratorists</a>
            </li>
        </div>
        
        <!-- Accountants  -->
        <li class="py-3 flex border-t">
            <img class="w-7 mr-4" src="{{ asset('images/accounting.png') }}" alt="Accounting">
            <a href="#">Accountants</a>
            <svg id="accountantCaret" class="users-caret" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        </li>
        <div id="accountantMenu" class="users-caret-menu hidden">
            <li class="py-3 flex border-b">
                <a href="#">Add Accountant</a>
            </li>
            <li class="py-3 flex">
                <a href="#">All Accountants</a>
            </li>
        </div>

        <!-- Patient  -->
        <li class="py-3 flex border-t">
            <img class="w-7 mr-4" src="{{ asset('images/patient.png') }}" alt="Patient">
            <a href="#">Patients</a>
            <svg id="patientCaret" class="users-caret" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        </li>
        <div id="patientMenu" class="users-caret-menu hidden">
            <li class="py-3 flex border-b">
                <a href="#">Add Patient</a>
            </li>
            <li class="py-3 flex">
                <a href="#">All Patients</a>
            </li>
        </div>

        <!-- Manage Hospital -->
        <li class="py-3 flex border-t">
            <img class="w-7 mr-4" src="{{ asset('images/manage.png') }}" alt="Manage">
            <a href="#">Manage Hospital</a>
        </li>
    </ul>
</div>