@extends('backend.auth.layout')

@section('title', 'Login')

@section('content')
    <!-- Main Content -->
    <div class="page-wrapper pa-0 ma-0 auth-page">
        <div class="container-fluid">
            <!-- Row -->
            <div class="table-struct full-width full-height">
                <div class="table-cell vertical-align-middle auth-form-wrap">
                    <div class="auth-form  ml-auto mr-auto no-float card-view pt-30 pb-30">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="mb-30">
                                    <h3 class="text-center txt-dark mb-10">Log In</h3>
                                    <h6 class="text-center nonecase-font txt-grey">Enter your details below</h6>
                                </div>
                                <div class="form-wrap">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="control-label mb-10" for="email">Email
                                                address</label>
                                            <input type="text" name="email" id="email"
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   placeholder="Enter email">
                                            @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="pull-left control-label mb-10" for="password-input">Password</label>
                                            <div class="clearfix"></div>
                                            <input type="password" name="password" class="form-control" placeholder="Enter password"
                                                   id="password-input">
                                        </div>

                                        <div class="form-group text-center">
                                            <button type="submit" class="btn btn-primary  btn-rounded">sign in</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Row -->
        </div>

    </div>
    <!-- /Main Content -->
@endsection
