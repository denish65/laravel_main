<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h2 class="p-4 text-center bg-dark text-white">Manage All Category</h2>
                <div class="row">

                    <div class="col-md-3 bg-light p-4 text-dark">
                      
                        <ul class="sidebar-link">
                            <li><a href="/addcategory"><i class="bi bi-cart-dash"></i> Add Category</a></li>
                            <li><a href="/managecategory"><i class="bi bi-cart-dash"></i> Manage Category</a></li>
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
                        
                        @if(Session("del"))
                        <div class="alert alert-danger">
                           <span class="text-center">
                               <b> {{ session('del') }} </b>
                           </span>
                        </div>
                        @endif
                        

                       <table id="mng" class="table" width="100%">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>CategoryName</th>
                            <th>Descriptions</th>
                            <th>Actions</th>
                    </tr>
                        </thead>

                        <tbody>
                            
                        @foreach($data as $row)
                        
                        <tr>
                          <td> {{ $row->id }}</td>
                          <td> {{ $row->catname }}</td>
                          <td> {{ $row->catdescriptions }}</td>
                          <td>
                              
                            <a href='{{ URL("/managecategory/{$row->id}") }}' class="btn btn-danger btn-sm" title="click to delete Category?" onclick="return confirm('Are you sure to Delete your category ?')"><i class="bi bi-trash"></i></a> 
                            
                            <span class="text-danger">|</span> 
                            
                            <a href='{{ URL("/editcategory/{$row->id}") }}' class="btn btn-success btn-sm" title="click to Edit Category?" onclick="return confirm('Are you sure to Edit your category ?')"><i class="bi bi-pencil-square"></i></a>
                        

                        
                        </td>
                        </tr>

                        @endforeach
                    </tbody>

                        
                       </table>

                   




                    </div>

                </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
