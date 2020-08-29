@extends('layouts.admin')
@section('content')
{{-- @foreach ($user as $user_info) --}}

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Profile</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">User Profile</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        <span><strong>Success!!😍</strong> {{ session('success') }}</span>
    </div>
    @endif
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="{{ Auth::user()->avatar }}"
                                alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center">
                            {{ Auth::user()->firstName.' '.Auth::user()->lastName }}</h3>

                        <p class="text-muted text-center">{{ Auth::user()->headline }}</p>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Posts</b> <a class="float-right">{{ $user_posts_count }}</a>
                            </li>

                        </ul>

                        <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- About Me Box -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">About Me</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <strong><i class="fas fa-book mr-1"></i>Bio</strong>

                        <p class="text-muted">
                            {{ Auth::user()->bio }}
                        </p>

                        <hr>

                        <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                        <p class="text-muted">{{ Auth::user()->location }}</p>

                        <hr>

                        <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>
                        <?php
                            $skills = Auth::user()->skills;
                            $skills = explode(',', $skills);
                        ?>
                        <p class="text-muted">
                            @foreach ($skills as $skill)
                            <?php
                                $skill = ucwords($skill);
                            
                            ?>
                            <span class="badge badge-pill badge-info">{{ $skill }}</span>
                            
                            @endforeach
                            
                        </p>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link @if ($errors->first('avatar')) '' @else active @endif" href="#settings" data-toggle="tab">Settings</a>
                            </li>
                            <li class="nav-item"><a class="nav-link @error('avatar') active @enderror"
                                    href="#profilePic" data-toggle="tab">Change Profile
                                    Picture</a>
                            </li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="@if ($errors->first('avatar')) '' @else active @endif  
                             tab-pane" id="settings">
                                <form class="form-horizontal" action="/profile/update" method="POST">
                                    @csrf
                                    @method('patch')
                                    <div class="form-group row">
                                        <label for="inputFirstName" class="col-sm-2 col-form-label">Firstname</label>
                                        <div class="col-sm-10">
                                            <input type="text"
                                                class="form-control @error('firstName') is-invalid @enderror"
                                                name="firstName" id="inputFirstName"
                                                value="{{ Auth::user()->firstName }}">
                                            @error('firstName')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputLastName" class="col-sm-2 col-form-label">Lastname</label>
                                        <div class="col-sm-10">
                                            <input type="text"
                                                class="form-control @error('lastName') is-invalid @enderror"
                                                name="lastName" id="inputLastName" value="{{ Auth::user()->lastName }}">
                                            @error('lastName')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
                                        <div class="col-sm-10">
                                            <input type="text"
                                                class="form-control @error('username') is-invalid @enderror"
                                                name="username" id="inputUsername" value="{{ Auth::user()->username }}">
                                            @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                id="inputEmail" value="{{ Auth::user()->email }}">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputLocation" class="col-sm-2 col-form-label">Location</label>
                                        <div class="col-sm-10">
                                            <input type="text"
                                                class="form-control @error('location') is-invalid @enderror"
                                                name="location" id="Location" value="{{ Auth::user()->location }}">
                                            @error('location')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                                        <div class="col-sm-10">
                                            <input type="text"
                                                class="form-control @error('skills') is-invalid @enderror" name="skills"
                                                id="inputSkill" value="{{ Auth::user()->skills }}">
                                                <small class="text-muted">Skills should be separated with a comma</small>
                                                
                                            @error('skills')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputHeadline" class="col-sm-2 col-form-label">Headline</label>
                                        <div class="col-sm-10">
                                            <input type="text"
                                                class="form-control @error('headline') is-invalid @enderror"
                                                name="headline" id="inputHeadline" value="{{ Auth::user()->headline }}">
                                            @error('headline')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control @error('experience') is-invalid @enderror"
                                                name="experience"
                                                id="inputExperience">{{ Auth::user()->experience }}</textarea>
                                            @error('experience')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputBio" class="col-sm-2 col-form-label">Bio</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control @error('bio') is-invalid @enderror" name="bio"
                                                id="inputBio">{{ Auth::user()->bio }}</textarea>
                                            @error('bio')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane @error('avatar') active @enderror" id="profilePic">
                                <form action="/profile/updateAvatar" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('patch')
                                    <div class="input-group">
                                        <div class="custom-file">
                                            
                                            <input type="file"
                                                class="custom-file-input @error('avatar') is-invalid @enderror"
                                                name="avatar" id="profilePic">
                                            <label class="custom-file-label" for="profilePic">Choose Image</label>
                                            
                                        </div>
                                        <div class="input-group-append">
                                            <button type="submit" class="input-group-text btn-warning"
                                                id="">Upload</button>
                                        </div>
                                        
                                        {{-- @error('avatar')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror --}}
                                    </div>

                                </form>
                            </div>
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
{{-- @endforeach --}}
@endsection
