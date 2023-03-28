@include('partials.header')

<h3>Edit Account</h3>


<form action="/updateProduct" method="POST">
  
    @csrf
   
    @error('email')
        <p>Invalid Account</p>
    @enderror

 
    <input type="hidden" id="Id" name="id" value="{{$products->id}}">

    <div class="mb-3">
      <label for="productName" class="form-label">Product Name</label>
      <input 
      type="text" 
      class="form-control" 
      name="productName"
      value="{{$products->productName}}">
    </div>

    <div class="mb-3">
      <label for="firstName" class="form-label">Quantity</label>
      <input 
      type="text" 
      class="form-control" 
      name="quantity"
      value="{{$products->quantity}}">
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Price</label>
      <input 
      type="text" 
      class="form-control" 
      name="price"
      value="{{$products->price}}">
    </div>
   
   

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  
  @include('partials.footer')