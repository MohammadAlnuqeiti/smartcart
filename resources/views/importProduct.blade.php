@extends('layouts.master')







@section('content')
<div class="container mt-5 text-center">
    <h2 class="mb-4">
       Import Products Using Excel File
    </h2>
    @if (isset($errors) && $errors->any())

        <div class="alert">
            @foreach ($errors->all() as $error)
                {{$error}}
            @endforeach
        </div>

    @endif
    <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-4">

            <select class="custom-select rounded-0" name="merchant">

                @foreach ($merchants as $merchant)
                    <option value="{{$merchant->id}}">{{$merchant->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-4">

            <div class="custom-file text-left">

                <input type="file" name="file" class="custom-file-input" id="customFile" class="@error('file') is-invalid @enderror">
                <label class="custom-file-label" for="customFile">Choose file</label>
                @error('file')
                <div class="error">{{ $message }}</div>
               @enderror

            </div>
        </div>
        <button class="btn btn-primary">Import Users</button>
        {{-- <a class="btn btn-success" href="{{ route('export-users') }}">Export Users</a> --}}
    </form>
</div>
@endsection


