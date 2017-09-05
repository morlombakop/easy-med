@extends('common.sidemaster')

@section('side-bar')
    @include('common.patient-sidebar')
@endsection

@section('side-content')
    <div class="w-100">
        <form class="form-horizontal w-100">
            <fieldset>
                <legend>
                    <h3 class="section-sub-header">
                        Update Patient Account
                    </h3>
                </legend>
                <div class="form-group">
                    <label class="col-lg-3 control-label" for="inputEmail">
                        User Name
                    </label>
                    <div class="col-lg-9">
                        <input class="form-control" 
                            placeholder="User Name" type="text" 
                            value="{{ $patient['username'] }}">
                        </input>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label" for="inputPassword">
                        Password
                    </label>
                    <div class="col-lg-9">
                        <input class="form-control" id="inputPassword" placeholder="Password" type="password">
                        </input>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label" for="inputPassword">
                        Confirm Password
                    </label>
                    <div class="col-lg-9">
                        <input class="form-control" placeholder="Confirm Password" type="password">
                        </input>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label" for="inputFirstName">
                        First Name
                    </label>
                    <div class="col-lg-9">
                        <input class="form-control" placeholder="First Name" type="text">
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
@endsection
