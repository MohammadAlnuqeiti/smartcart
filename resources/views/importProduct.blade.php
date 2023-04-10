@extends('layouts.master')







@section('content')
<div class="container mt-5 text-center">
    <h2 class="mb-4">
        Laravel 9 Import Export Excel
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
            <div class="custom-file text-left">
                <label for="exampleSelectRounded0">Merchants <code></code></label>

                <select class="custom-select rounded-0" name="merchant">
        
                    @foreach ($merchants as $merchant)
                    <option value="{{$merchant->id}}">{{$merchant->name}}</option>
                    @endforeach
                </select>
                <input type="file" name="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
        </div>
        <button class="btn btn-primary">Import Users</button>
        {{-- <a class="btn btn-success" href="{{ route('export-users') }}">Export Users</a> --}}
    </form>
</div>
@endsection


