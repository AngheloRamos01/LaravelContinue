@include('partials.header')

<h3>Edit Account</h3>


<form action="/updateUser" method="POST">
  
    @csrf
   
    @error('email')
        <p>Invalid Account</p>
    @enderror

 
    <input type="hidden" id="Id" name="id" value="{{$customers->id}}">

    <div class="mb-3">
      <label for="LastName" class="form-label">Last Name</label>
      <input 
      type="text" 
      class="form-control" 
      name="lastName"
      value="{{$customers->lastName}}">
    </div>

    <div class="mb-3">
      <label for="firstName" class="form-label">First Name</label>
      <input 
      type="text" 
      class="form-control" 
      name="firstName"
      value="{{$customers->firstName}}">
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input 
      type="text" 
      class="form-control" 
      name="email"
      value="{{$customers->email}}">
    </div>
    <div class="mb-3">
      <label for="contactNumber" class="form-label">Contact Number</label>
      <input 
      type="text" 
      class="form-control" 
      name="contactNumber"
      value="{{$customers->contactNumber}}">
    </div>
    <div class="mb-3">
      <label for="address" class="form-label">Address</label>
      <input 
      type="text" 
      class="form-control" 
      name="address"
      value="{{$customers->address}}">
    </div>
   

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  
  @include('partials.footer')