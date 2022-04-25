<section class="full-container chainGrid margin_bottom_10">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="chainGridBox">
                    <li><a href="#"><i class="fa fa-home"></i></a><i class="fa fa-angle-right"></i></li>
                    <li><a href="#" class="active">page</a><i class="fa fa-angle-right"></i></li>
                    <li><a href="#">login & register</a></li>
                </ul>
            </div>
        </div><!-- row -->
    </div>
</section><!-- container -->

<section class="full-container loginSection  margin_bottom_20">
    <div class="container form">

        <div class="row">
            <div class="col-md-6">

                <div class="signInBox signReg">
                    <div class="headdingBox">
                        <h3 class="headdingLine">Sign In</h3>
                    </div>
                    <p>Welcome back! Sign in to Your Account</p>
                    <form action="{{ route('login') }}" method="post" id="login_form">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" id="email"
                                placeholder="User Name or Email Address*" name="email" />
                            @error('email')
                            <strong class="text-danger mb-5">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="password*"
                                name="password" />
                            @error('password')
                            <strong class="text-danger" style="margin-top:-50px;">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember"> Remember me
                            </label>
                            <a href="#" class="forgot float-right">Forgotten Password?</a>
                        </div>
                        <button type="submit" class="btn btn-primary yellowbtn">Login</button>
                    </form>
                </div>
                <!--signInBox-->

                <div class="Orbox">
                    <hr /><span>Or</span>
                </div>
            </div>

            <div class="col-md-6">
                <div class="newAcount signReg">
                    <div class="headdingBox">
                        <h3 class="headdingLine">Create New Account</h3>
                    </div>
                    <p>Create Your very own Electro Account</p>

                    <form action="{{ route('register') }}" method="post" id="register_form">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="name" class="form-control" id="name" placeholder="User Name" name="name" />
                            @error('name')
                            <strong class="text-danger mb-5">{{ $message }}</strong>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" id="email"
                                placeholder="User Name or Email Address*" name="email">
                            @error('email')
                            <strong class="text-danger mb-5">{{ $message }}</strong>
                            @enderror

                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password"
                                placeholder="User Name or Email Address*" name="password" />
                            @error('password')
                            <strong class="text-danger mb-5">{{ $message }}</strong>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary yellowbtn">Register</button>
                        <div class="form-group">
                            <div class="registerDetail">
                                <span>Sign up today and you will be able to:</span>
                                <ul>
                                    <li><i class="fa fa-check"></i><a href="#">Speed your way through the checkout</a>
                                    </li>
                                    <li><i class="fa fa-check"></i><a href="#">Track your orders easily</a></li>
                                    <li><i class="fa fa-check"></i><a href="#">Keep a record of all your purchases</a>
                                    </li>
                            </div>
                        </div>
                    </form>
                </div>
                <!--signInBox-->
            </div>
        </div>

    </div><!-- container -->
</section>
<!--full container -->




@push('scripts')

<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
<script>
$(document).ready(function() {
    console.log("Hello");

    $('#login_form').validate({

        rules: {
            email: {
                required: true
            },
            password: {
                minlength: 8,
                required: true
            },
        },
        highlight: function(element) {
            $(element).closest('.cls').removeClass('success').addClass('error');
            $(".error").css("color", "red");
        }
    });
});


$(document).ready(function() {

    $('#register_form').validate({
        rules: {
            name: {
                minlength: 3,
                required: true
            },
            email: {
                required: true
            },
            password: {
                minlength: 8,
                required: true
            },
        },
        highlight: function(element) {
            $(element).closest('.cls').removeClass('success').addClass('error');
            $(".error").css("color", "red");
        }
    });
});
</script>
@endpush