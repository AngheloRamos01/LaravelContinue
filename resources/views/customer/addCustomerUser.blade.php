@include('partials.header')

<div class = "d-flex justify-content-center mb-3">
<img src="yesss.jpeg" alt="" width="150" height="150" class="center-block">

</div>
<h3 class = "d-flex justify-content-center mb-3">Create an Account</h3>
<div class = "d-flex justify-content-center mb-3">

<form action="/save" method="POST">
    @csrf
    
    @error('email')
        <p>Invalid Account</p>
    @enderror

<div class="container">
  <div class="row">
    <div class="mb-3">
      <label for="LastName" class="form-label">Last Name</label>
      <input 
      type="text" 
      class="form-control" 
      name="lastName">
    </div>

    <div class="mb-3">
      <label for="firstName" class="form-label">First Name</label>
      <input 
      type="text" 
      class="form-control" 
      name="firstName">
    </div>
  </div>
</div>

<div class="container">
<div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input 
      type="text" 
      class="form-control" 
      name="email">
    </div>
    <div class="mb-3">
      <label for="contactNumber" class="form-label">Contact Number</label>
      <input 
      type="text" 
      class="form-control" 
      name="contactNumber">
    </div>
    <div class="mb-3">
      <label for="address" class="form-label">Address</label>
      <input 
      type="text" 
      class="form-control" 
      name="address">
    </div>
</div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  
</div>
  @include('partials.footer')
