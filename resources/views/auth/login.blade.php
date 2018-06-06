<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="{{asset('content/css/login.css')}}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="{{asset('content/js/login.js')}}"></script>

<title>Login</title>
<!------ Include the above in your HEAD tag ---------->

<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->
    <div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="{{asset('content/images/logo.png')}}" />
            @if (count($errors)>0)
                <p class="bg-danger">
                    @foreach($errors->all() as $error)
                        <strong>{{$error}}</strong>
                        <br>
                    @endforeach
                </p>
            @endif
            <form id="login_form" method="POST" action="{{route('custom.login')}}">
                {{ csrf_field() }}
                
                <div class="form-group">
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <label for="user_type" class="cols-sm-2 control-label">User Type</label><br>
                            <div  id="user_type">
                                <label class="radio-inline"><input type="radio" name="user_type" value="guardian" checked>Guardian</label>
                                <label class="radio-inline"><input type="radio" name="user_type" value="teacher">Teacher</label>
                                <label class="radio-inline"><input type="radio" name="user_type" value="admin">Admin</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="guardian_login_panel" style="display: none;">                    

                    <div class="form-group">
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon">Class</span>
                                <select class="select-class" name="student_class" required="true">
                                    <option value="6">Six</option>
                                    <option value="7">Seven</option>
                                    <option value="8">Eight</option>
                                    <option value="9">Nine/Ten</option>
                                    <option value="11">Candidate</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon">Section</span>
                                <select class="select-class" name="student_section" required="true">
                                    <option value="A">Section A</option>
                                    <option value="B">Section B</option>
                                    <option value="C">Section C</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon">Roll</span>
                                <input type="text" class="form-control" name="roll_no" placeholder="Roll" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon">ID</span>
                                <input type="password" class="form-control" name="student_id"   placeholder="Student ID" />
                            </div>
                        </div>
                    </div>
                </div>               

                <div class="teacher_login_panel" style="display: none;">
                    <div class="form-group">
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon">ID</span>
                                <input type="text" class="form-control" name="teacher_id" placeholder="Teacher ID"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon">Password</span>
                                <input type="password" class="form-control" name="teacher_password"   placeholder="Password"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="admin_login_panel">
                    <div class="form-group">
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon">Email</span>
                                <input type="email" class="form-control" name="admin_email" placeholder="Admin Email"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon">Password</span>
                                <input type="password" class="form-control" name="admin_password"   placeholder="Password"/>
                            </div>
                        </div>
                    </div>
                </div>
                
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Login</button>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->