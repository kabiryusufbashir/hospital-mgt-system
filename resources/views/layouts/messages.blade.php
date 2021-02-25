@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="bg-red-500 text-red-600 py-2 px-4 text-center">
            {{$error}}
			<hr>
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="text-green-400 py-2 px-4 text-center">
        <h4>{{session('success')}}</h4>
		<hr>
    </div>
@endif


@if(session('error'))
    <div class="text-red-600 py-2 px-4 text-center">
        <h4>{{session('error')}}</h4>
		<hr>
    </div>
@endif