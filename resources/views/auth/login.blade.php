<link rel="icon" type="image/png" href="{{asset('icon/login.png')}}">
<title>Login | Admin</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{asset('css/css.css')}}">
<!------ Include the above in your HEAD tag ---------->

<section class="login-block">
<div class="container">
  <div class="row">
    <div class="col-md-4 login-sec">
      <h2 class="text-center">Login Now</h2>
      <form class="login-form" action="{{route('login')}}" method="post">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1" class="text-uppercase">Username</label>
          <input type="text" class="form-control" name="email" placeholder=""> 
          <span class="text-danger">
          @if(count($errors)>0)
              {{$errors->first('email')}}
          @endif
          </span>        
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1" class="text-uppercase">Password</label>
          <input type="password" class="form-control" name="password" placeholder="">
          <span class="text-danger">
          @if(count($errors)>0)
              {{$errors->first('password')}}
          @endif
          </span> 
        </div>              
        <div class="form-check">
          <label class="form-check-label">
            <input type="checkbox" name="remember" value="1" class="form-check-input">
            <small>Remember Me</small>
          </label>
          <button type="submit" class="btn btn-login float-right">Submit</button>
        </div>        
      </form>
      <div>
        @if($errors->any())
        <span class="text-danger">
          {{$errors->first('msg')}}
        </span>
        @endif
      </div>
      <div class="copy-text">Created with <i class="fa fa-heart"></i> by Grafreez</div>
    </div>
        <div class="col-md-8 banner-sec">               
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active" >
                <img class="d-block img-fluid" src="https://static.pexels.com/photos/33972/pexels-photo.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                  <div class="banner-text">
                      <h2>This is Heaven</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                  </div>  
                </div>
              </div>
             
            </div>
       </div>     
        
    </div>
  </div>
</div>
</section>