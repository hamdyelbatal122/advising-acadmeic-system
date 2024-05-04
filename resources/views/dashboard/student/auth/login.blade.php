 
   @extends('dashboard.student.layouts.app-auth')
   @section('title', 'Login')
   @section('content')
   <!--=====================================
                LOGIN PART START   
    =======================================-->
    <section class="login">
        <div class="login-group">
           <div class="login-content">
    <h3>welcome back!</h3>
    <p>Please login to your account</p> 
 
    <form class="login-form" method="post" action="{{route('student.login.post')}}"> 
        @csrf

        @error('email')
        <div class="alert alert-danger " role="alert">
            {{$message}}
        </div>
        @enderror


         
        <div class="form-group">
            <label class="form-label required">Email</label>
            <input class="form-control" placeholder="Email" name="email" type="email" autofocus value="{{old('email')}}">
        </div>
        <div class="form-group">
            <label class="form-label required">Password</label>
            <input class="form-control" placeholder="Password" name="password" type="password">
        </div>
        <div class="checkbox d-flex align-items-center justify-content-between">
            <label class="mb-2">
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <span> &nbsp; Remember Me</span>
            </label>
            <span class="pull-right">
                <label>
                    <a class="mb-2 forgotPass" href=""> Forgot Password?</a>
                </label>
            </span>
        </div>
        
        <button type="submit" class="btn btn-inline">sign in</button>
    </form>

    </div>


<div class="login-banner">
    <img src="https://demo.school.inilabs.xyz/frontend/default/assets/images/login.jpg" alt="login">
    <div>
        <blockquote>“Education is the most powerful weapon which can use to change the world.”</blockquote>
        <label>--Nelson Mandela</label>
    </div>
</div>           
           
        </div>
    </section>
    <!--=====================================   
                LOGIN PART END   
    =======================================-->

@endsection