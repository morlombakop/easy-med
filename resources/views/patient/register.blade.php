@extends('common.master')

@section('navigation')
    @include('common.navigation')
@endsection

@section('content')
<section class="body-section">
    <div class="wrap-center">
        @if(count($errors->all()))
            <div class="row">
                <div class="col-md-12">
                    <div class="error well">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif
        <form action="{{ route('patient.register') }}" class="form-horizontal" method="post">
            <fieldset>
                <legend>
                    <h3 class="section-sub-header">
                        Patient Registration
                    </h3>
                </legend>
                <div class="form-group">
                    <label class="col-lg-3 control-label" for="inputEmail">
                        User Name
                    </label>
                    <div class="col-lg-9">
                        <input class="form-control" name="username" placeholder="User Name" type="text">
                        </input>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label" for="inputPassword">
                        Password
                    </label>
                    <div class="col-lg-9">
                        <input class="form-control" id="inputPassword" name="password" placeholder="Password" type="password">
                        </input>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label" for="inputPassword">
                        Confirm Password
                    </label>
                    <div class="col-lg-9">
                        <input class="form-control" name="confirm-password" placeholder="Confirm Password" type="password">
                        </input>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label" name="first-name" for="inputFirstName">
                        First Name
                    </label>
                    <div class="col-lg-9">
                        <input class="form-control" name="first-name" placeholder="First Name" type="text">
                        </input>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">
                        Last Name
                    </label>
                    <div class="col-lg-9">
                        <input class="form-control" placeholder="Last Name" type="text">
                        </input>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">
                        IC Number
                    </label>
                    <div class="col-lg-9">
                        <input class="form-control" placeholder="IC Number" type="text">
                        </input>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">
                        Phone Number
                    </label>
                    <div class="col-lg-9">
                        <input class="form-control" placeholder="Phone Number" type="text">
                        </input>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">
                        Full Address
                    </label>
                    <div class="col-lg-9">
                        <input class="form-control" placeholder="Full Address" type="text">
                        </input>
                    </div>
                </div>
                {{--
                <div class="form-group">
                    <label class="col-lg-2 control-label" for="textArea">
                        Textarea
                    </label>
                    <div class="col-lg-10">
                        <textarea class="form-control" id="textArea" rows="3">
                        </textarea>
                        <span class="help-block">
                            A longer block of help text that breaks onto a new line and may extend beyond one line.
                        </span>
                    </div>
                </div>
                --}}
                 {{ csrf_field() }}
                <div class="form-group">
                    <div class="col-lg-9 col-lg-offset-3">
                        <button class="btn btn-default" type="reset">
                            Cancel
                        </button>
                        <button class="btn btn-primary" type="submit">
                            Submit
                        </button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</section>
@endsection
