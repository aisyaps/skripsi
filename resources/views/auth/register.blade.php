@extends('layouts.newlogin')

@section('content')
    <div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle">
                <div class="auth-box ">
                    <div class="left">
                        <div class="content">
                            <div class="header">
                                <div class="logo text-center"><img src="{{asset('admin/assets/img/logo1.jpg')}}" alt="Klorofil Logo"></div>
                                <p class="lead">Register</p>
                            </div>
                              <form method="POST" action="{{ route('register') }}">
                        @csrf

                                <div class="form-group">
                                    <label for="name" class="control-label sr-only">Full Name</label>
                                      <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="masukan nama lengkap">

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="form-group">
                                    <label for="email" class="control-label sr-only">Email</label>
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="masukan email">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>
                                 <div class="form-group">
                                    <label for="password" class="control-label sr-only">Password</label>
                                     <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="masukan pasword">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>
                               <div class="form-group">
                                    <label for="konfirmasi" class="control-label sr-only">Konfirmasi Password</label>
                                <input id="konfirmasi" type="password" class="form-control" name="password_confirmation" required placeholder="konfirmasi password">
                                </div>
                                  <div class="form-group">
                                    <label for="level" class="control-label sr-only">Daftar Sebagai</label>
                                    <select class="form-control" id="level" name="level">
                                      <option value="1">Program Studi</option>
                                      <option value="2">Gugus jaminan mutu fakultas</option>
                                      <option value="4">KK Rekayasa data</option>
                                      <option value="5">KK Rekayasa perangkat lunak dan multimedia</option>
                                      <option value="6">KK Tata kelola dan sistem enterprise</option>
                                      <option value="7">KK Teknologi informasi</option>
                                    </select>
                                </div>
                                <div class="form-group clearfix">
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>   
                            </form>
                        </div>
                    </div>
                    <div class="right">
                        <div class="overlay"></div>
                        <div class="content text">
                            <h1 class="heading">Sistem Informasi Monitoring dan Pendataan Tridharma Dosen Fakultas Informatika</h1>
                            <p>by 16102002</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
