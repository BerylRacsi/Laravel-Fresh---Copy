@extends('layouts.app')

@section('content')
<div class="container pt-md-5" style="padding-bottom: 9em;">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <h5 class="card-header">Login Peserta</h5>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="row form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 col-form-label">Email</label>

                            <div class="col-md-8">
                                <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Masukkan Email" required autofocus>

                                @if ($errors->has('email'))
                                    <div class="btn btn-danger btn-block disabled">
                                            {{ $errors->first('email') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="row form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 col-form-label">Password</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control" name="password" placeholder=" Masukkan Password" required>

                                @if ($errors->has('password'))
                                    <div class="btn btn-danger btn-block disabled">
                                        {{ $errors->first('password') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <div class="col-sm-8 ml-auto">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection