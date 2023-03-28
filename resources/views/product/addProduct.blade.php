@include('partials.header')

<div class = "d-flex justify-content-center mb-3">
<img src="yesss.jpeg" alt="" width="150" height="150" class="center-block">

</div>
<h3 class = "d-flex justify-content-center mb-3">Create an New Product</h3>
<div class = "d-flex justify-content-center mb-3">

<form action="/saveProduct" method="POST">
    @csrf
    
    @error('email')
        <p>Invalid Account</p>
    @enderror

<div class="container">
  <div class="row">
    <div class="mb-3">
      <label for="productName" class="form-label">Product Name</label>
      <input 
      type="text" 
      class="form-control" 
      name="productName">
    </div>

    <div class="mb-3">
      <label for="quantity" class="form-label">Quantity</label>
      <input 
      type="text" 
      class="form-control" 
      name="quantity">
    </div>
  </div>
</div>

<div class="container">
<div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input 
      type="text" 
      class="form-control" 
      name="price">
    </div>
</div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  
</div>
  @include('partials.footer')
