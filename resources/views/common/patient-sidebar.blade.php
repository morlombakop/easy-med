<div>
    <div class="wrap-search">
        <div class="input-group">
            <input class="form-control" placeholder="search medicine" type="text">
                <span class="input-group-addon">
                    SEARCH
                </span>
            </input>
        </div>
    </div>
    <ul class="nav-pills nav-stacked">
        <li class="nav-item">
            <a class="nav-link" href="{{route('patient', ['id'=> 1])}}">
                My Account
            </a>
        </li>
         <li class="nav-item">
            <a class="nav-link" href="#">
                Change Password
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('patient.update', ['id'=> 1]) }}">
                Update Account
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                Delete Account
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                My Medicines
            </a>
        </li>
    </ul>
</div>