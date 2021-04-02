@extends('layouts.app')

@section('content')
    <div class="flex justify-center pt-12">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <form action="{{ route('calculate') }}" method="post" class="mb-4">
                @csrf
                <div class="flex items-center">

                    <div class="mr-4">
                        <input type="number" name="input_1" placeholder="First input" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('input_1') border-red-500 @enderror">

                        @error('input_1')
                            <div class="text-red-500 pt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mr-4">
                        <select name="operator" id="" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('operator') border-red-500 @enderror">
                            <option value="+"> + </option>
                            <option value="-"> - </option>
                            <option value="*"> * </option>
                            <option value="/"> / </option>
                        </select>

                        @error('operator')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mr-4">
                        <input type="number" name="input_2" placeholder="Second input" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('input_2') border-red-500 @enderror">

                        @error('input_2')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mr-4">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Calculate</button>
                    </div>
                </div>

            </form>

            <div class="my-6">
                    @if ($calculations->count())
                        @foreach ($calculations as $calculation)
                            <div class="mb-4 text-md">
                                <a href=""> {{ $calculation->input_1  }}</a>
                                <a href=""> {{ $calculation->operator  }}</a>
                                <a href=""> {{ $calculation->input_2  }}</a>
                                <a href=""> = {{ $calculation->result  }}</a>
                                <span class="text-gray-600 text-sm">{{ $calculation->created_at->diffForHumans() }}</span>
                            </div>
                    @endforeach
            
                    {{ $calculations->links() }}
                    
                    @else
                        <p>There are no results, get to mathing!</p>
                    @endif
            </div>

        </div>
    </div>

    
@endsection