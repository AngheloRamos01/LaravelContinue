@include('partials.header')

<h3>Edit Account</h3>
<form action="/editUser{{$customers[0]->id}}" method="post">
    @csrf
    
    @error('email')
        <p>Invalid Account</p>
    @enderror


    <div class="mb-3">
      <label for="LastName" class="form-label">Last Name</label>
      <input 
      type="text" 
      class="form-control" 
      name="lastName"
      value="{{$customers[0]->lastName}}">
    </div>

    <div class="mb-3">
      <label for="firstName" class="form-label">First Name</label>
      <input 
      type="text" 
      class="form-control" 
      name="firstName"
      value="{{$customers[0]->firstName}}">
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input 
      type="text" 
      class="form-control" 
      name="email"
      value="{{$customers[0]->email}}">
    </div>
    <div class="mb-3">
      <label for="contactNumber" class="form-label">Contact Number</label>
      <input 
      type="text" 
      class="form-control" 
      name="contactNumber"
      value="{{$customers[0]->contactNumber}}">
    </div>
    <div class="mb-3">
      <label for="address" class="form-label">Address</label>
      <input 
      type="text" 
      class="form-control" 
      name="address"
      value="{{$customers[0]->address}}">
    </div>
   

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  
  @include('partials.footer')