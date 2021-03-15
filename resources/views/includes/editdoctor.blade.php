<form class="bg-white shadow-lg p-4" action="{{ route('add.doctor') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div>
        <h2 class="text-2xl text-center py-4 font-medium border-b-4 uppercase">Edit {{ $doctorBio->name }}</h2>
    </div>
    <div class="my-2 md:flex">
        <div class="w-full md:mr-2">
            <input disabled value="{{ $doctorRecord->username }}" type="text" name="username" value="{{old('username')}}" placeholder="Username" class="input-box @error('username') border-red-500 @enderror">
            @error('username')
                {{$message}}
            @enderror
        </div>
        <div class="w-full md:ml-2">
            <input disabled value="{{ $doctorRecord->email }}" type="email" name="email" value="{{old('email')}}" placeholder="Email Address" class="input-box @error('email') border-red-500 @enderror">
            @error('email')
                {{$message}}
            @enderror
        </div>
    </div>
    
    <div class="my-2">
        <div class="w-full">
            <input value="{{ $doctorBio->title }}" type="text" name="title" value="{{old('title')}}" placeholder="title" class="input-box @error('title') border-red-500 @enderror">
            @error('title')
                {{$message}}
            @enderror
        </div>
        <div class="w-full">
            <input value="{{ $doctorBio->name }}" type="text" name="name" value="{{old('name')}}" placeholder="Full Name" class="input-box @error('name') border-red-500 @enderror">
            @error('name')
                {{$message}}
            @enderror
        </div>
    </div>
    <div class="my-2 md:flex">
        <div class="w-full">
            <select name="gender" value="{{old('gender')}}" class="input-box @error('gender') border-red-500 @enderror">
                <option value="{{ $doctorBio->gender }}">{{ $doctorBio->gender }}</option>
                @if($doctorBio->gender == 'Male')
                    <option value="female">Female</option>
                @else 
                    <option value="male">Male</option>
                @endif
            </select>
            @error('gender')
                {{$message}}
            @enderror
        </div>
        <div class="w-full md:mx-2">
            <input value="{{ $doctorBio->dob }}" type="date" name="dob" value="{{old('dob')}}" placeholder="Contact No" class="input-box @error('dob') border-red-500 @enderror">
            @error('dob')
                {{$message}}
            @enderror
        </div>
        <div class="w-full">
            <input value="{{ $doctorBio->phone }}" type="text" name="phone" value="{{old('phone')}}" placeholder="Contact No" class="input-box @error('phone') border-red-500 @enderror">
            @error('phone')
                {{$message}}
            @enderror
        </div>
    </div>
    <div class="my-2 md:flex">
        <div class="w-full md:mr-2">
            <input value="{{ $doctorBio->city }}" type="text" name="city" value="{{old('city')}}" placeholder="City" class="input-box @error('city') border-red-500 @enderror">
            @error('city')
                {{$message}}
            @enderror
        </div>
        <div class="w-full md:ml-2">
            <input value="{{ $doctorBio->country }}" type="country" name="country" value="{{old('country')}}" placeholder="Country" class="input-box @error('country') border-red-500 @enderror">
            @error('country')
                {{$message}}
            @enderror
        </div>
    </div>
    <div class="my-2">
        <div class="w-full">
            <textarea type="text" name="address" value="{{old('address')}}" placeholder="Address" class="border-2 my-2 text-lg focus:outline-none text-lg px-4 w-full @error('address') border-red-500 @enderror" rows="3">
            {{ $doctorBio->address }}
            </textarea>
            @error('address')
                {{$message}}
            @enderror
        </div>
    </div>
    <div class="my-2">
        <div class="w-full">
            <input type="file" name="photo" value="{{old('photo')}}" class="input-box border-0 @error('photo') border-red-500 @enderror">
            @error('photo')
                {{$message}}
            @enderror
        </div>
    </div>
    <!--Footer-->
    <div class="px-6 py-4 flex justify-end">
        <button type="submit" class="modal-close btn tracking-wider">Edit Doctor</button>
    </div>
</form>