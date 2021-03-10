<div class="bg-gray-200 flex items-center justify-center h-screen body">
    <!--Modal-->
    <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
        <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
        
        <div class="modal-container bg-white sm:w-2/4 sm:mx-auto md:my-16 rounded shadow-lg z-50 overflow-y-auto">
        
            <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
                <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                </svg>
                <span class="text-sm">(Esc)</span>
            </div>

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
                    <form action="{{route('register')}}" method="POST">
                        @csrf
                        <div class="md:flex justify-between border-b my-2">
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
                        
                        <!--Footer-->
                        <div class="px-6 py-4 flex justify-end">
                            <button class="modal-close btn tracking-wider">Add Doctor</button>
                        </div>
                    </form>    
                </div>
                
            </div>
            
        </div>
    </div>

    <script>
        var openmodal = document.querySelectorAll('.modal-open-doctor')
        
        for (var i = 0; i < openmodal.length; i++) {
            openmodal[i].addEventListener('click', function(event){
                event.preventDefault()
                toggleModal()
            })
        }
        
        const overlay = document.querySelector('.modal-overlay')
        overlay.addEventListener('click', toggleModal)
        
        var closemodal = document.querySelectorAll('.modal-close')
        for (var i = 0; i < closemodal.length; i++) {
        closemodal[i].addEventListener('click', toggleModal)
        }
        
        document.onkeydown = function(evt) {
            evt = evt || window.event
            var isEscape = false
            if ("key" in evt) {
                isEscape = (evt.key === "Escape" || evt.key === "Esc")
            }else {
                isEscape = (evt.keyCode === 27)
            }
            if (isEscape && document.body.classList.contains('modal-active')) {
                toggleModal()
            }
        };
        
        function toggleModal () {
            const body = document.querySelector('.body')
            const modal = document.querySelector('.modal')
            modal.classList.toggle('opacity-0')
            modal.classList.toggle('pointer-events-none')
            body.classList.toggle('modal-active')
        }
    </script>
</div>