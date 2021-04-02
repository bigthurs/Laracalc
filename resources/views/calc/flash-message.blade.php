@if ($message = Session::get('success'))
    <div class="flex justify-center items-center mt-4">	
        <strong class="text-lg pl-6">Result is: {{ $message }}</strong>
    </div>
@endif
