@include('partials.header')


<div class = "d-flex justify-content-center mb-4">
<img src="yesss.jpeg" alt="" width="150" height="150" class="center-block">
</div>

<h3 class="d-flex align-items-center justify-content-center mb-5"> Login Page</h3>
<div class="d-flex justify-content-center">
<form action="/login/process" method="POST">
    @csrf
    
    @error('email')
        <p>Invalid Account</p>
    @enderror

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label h5">Email address</label>
      <input 
      type="email" 
      class="form-control" 
      id="exampleInputEmail1" 
      aria-describedby="emailHelp"
      name="email">
      <div id="emailHelp" class="form-text text-white">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label h5">Password</label>
      <input type="password" 
      class="form-control" 
      id="exampleInputPassword1"
      name="password">
    </div>
   

    <button type="submit" class="btn btn-primary mb-3">Submit</button>
    <h6><a href={{"/register"}}>New User? Sign up here.</a></h6>
  </form>

</div>

  
