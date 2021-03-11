@extends('layouts.modaltemplate')

@section('modal-body')
    <!-- Add margin if you want to see some of the overlay behind the modal-->
    <div class="modal-content text-left">
        <!--Title-->
        <div class="bg-blue-600 flex justify-between items-center py-4 text-white">
            <p class="text-2xl px-6">Add Doctor</p>
            <div class="modal-close cursor-pointer z-50 px-6">
                <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                </svg>
            </div>
        </div>

        <!--Body-->
        <div class="px-6 py-4">
            <form action="{{ route('add-doctor') }}" method="POST">
                @csrf
                <div class="md:flex justify-between my-2">
                    <div class="w-full mx-2">
                        <input type="text" name="username" value="{{old('username')}}" placeholder="Username" class="input-box @error('username') border-red-500 @enderror">
                        @error('username')
                            {{$message}}
                        @enderror
                    </div>
                    <div class="w-full mx-2">
                        <input type="email" name="email" value="{{old('email')}}" placeholder="Email Address" class="input-box @error('email') border-red-500 @enderror">
                        @error('email')
                            {{$message}}
                        @enderror
                    </div>
                </div>
                
                <div class="md:flex justify-between my-2">
                    <div class="w-full mx-2">
                        <input type="text" name="title" value="{{old('title')}}" placeholder="title" class="input-box @error('title') border-red-500 @enderror">
                        @error('title')
                            {{$message}}
                        @enderror
                    </div>
                    <div class="w-full mx-2">
                        <input type="text" name="name" value="{{old('name')}}" placeholder="Full Name" class="input-box @error('name') border-red-500 @enderror">
                        @error('name')
                            {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="md:flex justify-between my-2">
                    <div class="w-full mx-2">
                        <select name="gender" value="{{old('gender')}}" class="input-box @error('gender') border-red-500 @enderror">
                            <option value="">Click to select gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        @error('gender')
                            {{$message}}
                        @enderror
                    </div>
                    <div class="w-full mx-2">
                        <input type="date" name="dob" value="{{old('dob')}}" placeholder="Contact No" class="input-box @error('dob') border-red-500 @enderror">
                        @error('dob')
                            {{$message}}
                        @enderror
                    </div>
                    <div class="w-full mx-2">
                        <input type="text" name="phone" value="{{old('phone')}}" placeholder="Contact No" class="input-box @error('phone') border-red-500 @enderror">
                        @error('phone')
                            {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="md:flex justify-between my-2">
                    <div class="w-full mx-2">
                        <input type="text" name="city" value="{{old('city')}}" placeholder="City" class="input-box @error('city') border-red-500 @enderror">
                        @error('city')
                            {{$message}}
                        @enderror
                    </div>
                    <div class="w-full mx-2">
                        <input type="country" name="country" value="{{old('country')}}" placeholder="Country" class="input-box @error('country') border-red-500 @enderror">
                        @error('country')
                            {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="md:flex justify-between my-2">
                    <div class="w-full mx-2">
                        <textarea type="text" name="city" value="{{old('address')}}" placeholder="Address" class="input-box @error('address') border-red-500 @enderror"></textarea>
                        @error('address')
                            {{$message}}
                        @enderror
                    </div>
                </div>
                <!--Footer-->
                <div class="px-6 py-4 flex justify-end">
                    <button type="submit" class="modal-close btn tracking-wider">Add Doctor</button>
                </div>
            </form>    
        </div>
    </div>
@endsection 