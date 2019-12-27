@extends('admin.layout.app')
@section('head-content')

@endsection

@section('content')

        <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                
                                
                                 <a class="btn btn-social btn-bitbucket" href="{{route('user.create')}}">
                                        <i class="fa fa-plus"></i> 
                                        Add User
                                    </a>

                            </h1>
                        </div>
                        
                    </div>
                    <div class="col-12">
                        <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Role</th>
                                                    
                                                    
                                                    <th>Edit</th>
                                                    
                                                    <th>Delete</th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $user)
                                                    
                                                        <tr>
                                                            <td>{{ $loop->index +1 }}</td>
                                                            <td>{{ $user->name }}</td>
                                                            <td>{{ $user->email }}</td>
                                                            <td>{{ $user->user_role }}</td>
                                                            
                                                           

                                                           
                                                                <td class="center">
                                                                    <a href="{{route('user.edit',$user->id)}}"class="btn btn-social-icon btn-bitbucket"><i class="fa fa-pencil"></i></a>
                                                                </td>
                                                           

                                                            <td class="center">
             <form id="delete-form-user-{{$user->id}}" action="{{route('user.destroy',$user->id)}}" method="post" style="display: none;">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
             </form>
                                                                <a onclick="ConfirmDelete({{$user->id}})" class="btn btn-social-icon btn-google-plus"><i class="fa fa-trash"></i></a>
                                                            </td>
                                                           

                                                        </tr>

                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                        
                    </div>
                    
                </div>
                
            </div>
@endsection

@section('footer-content')

<script>

            function getConfirm()
            {
                alert('ok');
            }
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });



            function ConfirmDelete(id)
            {
                var config = confirm('Are Your Sure');
                if(config)
                {
                  $('#delete-form-user-'+id).submit();
                }
            }
 </script>
  @endsection          