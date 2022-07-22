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
                            <li><a href="/addcategory"><i class="bi bi-cart-dash"></i> Add Category</a></li>
                            <li><a href="/managecategory"><i class="bi bi-cart-dash"></i> Edit Category</a></li>
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
                        
                        <form method="POST">

                         @csrf 
                         <div class="form-group">
                            <span class="text-success"> Edit Category Name *</span> 
                            <input type="text" name="catname" value="{{ $edcat->catname }}" placeholder="Category Name *"  class="@error('catname') is-invalid @enderror form-control col-md-8">
                            <br>
                            @error('catname')
                            <div class="alert alert-danger col-md-8">{{ $message }}</div>
                            @enderror
                         </div>

                         <div class="form-group">
                          
                            <span class="text-success"> Edit Category descriptions*</span>
                            <textarea  name="catdesc" placeholder="Caegory Descriptions*"  class="@error('catdesc') is-invalid @enderror form-control col-md-8">{{ $edcat->catdescriptions }}</textarea>
                            <br>
                            @error('catdesc')
                            <div class="alert alert-danger col-md-8">{{ $message }}</div>
                            @enderror
                         </div>

                         <div class="form-group">
                           
                            <input type="submit" name="updatecategory" class="btn btn-info  btn-sm" value="UpdateCategory" style="background-color: brown">
                         </div>

                        </form>
                            

                    </div>

                </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
