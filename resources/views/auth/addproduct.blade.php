<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h2 class="p-4 text-center bg-dark text-white">Welcome to Dashboard</h2>
                <div class="row">

                    <div class="col-md-3 bg-light p-4 text-dark">
                      
                        <ul class="sidebar-link">
                            <li><a href="/addproducts"><i class="bi bi-cart-dash"></i> Add Products</a></li>
                            <li><a href="/manageproduct"><i class="bi bi-cart-dash"></i> Manage Products</a></li>
                        </ul>
                       
                    </div>

                    
                    <div class="col-md-9 bg-light p-4 text-dark shadow">

                        @if(Session("success"))
                        <div class="alert alert-success">
                           <span class="text-center">
                               <b> {{ session('success') }} </b>
                           </span>
                        </div>
                        @endif
                        
                        <form method="POST" enctype="multipart/form-data">

                         @csrf 
                         <div class="form-group">
                            Category Name 
                            <select  name="catname" placeholder="Category Name *"  class="@error('catname') is-invalid @enderror form-control col-md-8">
                            <option value="">Select Category</option>
                               @foreach($category as $key=>$category)
                            <option value="{{ $key }}">{{ $category }}</option>
                            
                             @endforeach
                            </select>
                            <br>
                            @error('catname')
                            <div class="alert alert-danger col-md-8">{{ $message }}</div>
                            @enderror
                         </div>


                         <div class="form-group">
                            Product Name 
                            <input type="text"  name="productname" placeholder="Products Name *"  class="@error('productname') is-invalid @enderror form-control col-md-8">
                            <br>
                            @error('productname')
                            <div class="alert alert-danger col-md-8">{{ $message }}</div>
                            @enderror
                         </div>

                         <div class="form-group">
                            Product Image
                            <input type="file"  name="productimage" placeholder="Products Image *"  class="@error('productimage') is-invalid @enderror form-control col-md-8">
                            <br>
                            @error('productimage')
                            <div class="alert alert-danger col-md-8">{{ $message }}</div>
                            @enderror
                         </div>


                         <div class="form-group">
                            Qty
                            <input type="number"  name="qty" placeholder="qty *"  class="@error('qty') is-invalid @enderror form-control col-md-8">
                            <br>
                            @error('qty')
                            <div class="alert alert-danger col-md-8">{{ $message }}</div>
                            @enderror
                         </div>


                         <div class="form-group">
                            Product Price
                            <input type="text"  name="price" placeholder="Products price *"  class="@error('price') is-invalid @enderror form-control col-md-8">
                            <br>
                            @error('price')
                            <div class="alert alert-danger col-md-8">{{ $message }}</div>
                            @enderror
                         </div>


                         <div class="form-group">
                            Products Descriptions 
                            <textarea  name="descriptions" placeholder="Products Descriptions*"  class="@error('descriptions') is-invalid @enderror form-control col-md-8"></textarea>
                            <br>
                            @error('descriptions')
                            <div class="alert alert-danger col-md-8">{{ $message }}</div>
                            @enderror
                         </div>

                         <div class="form-group">
                           
                            <input type="submit" name="addproduct" class="btn btn-info  btn-sm" value="AddProduct" style="background-color: brown">
                         </div>

                        </form>
                            

                    </div>

                </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
