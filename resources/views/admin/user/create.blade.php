@extends('admin.layout.app')
@section('head-content')

@endsection

@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                           
                        <a class="btn btn-social btn-bitbucket" href="{{route('user.index')}}">
                            <i class="fa fa-arrow-left"></i> Back
                        </a>

                            Create User

                    </h1>
                </div>
                <div class = "row">
                   <div class="col-12 col-sm-12 col-md-6">
                        
                        <form role="form" action="{{route('user.store')}}" method="post">
                            @csrf
                            <div class="form-group">

                                <label>User Name</label><br>
                                <span style="color:red;">
                                  *{{$errors->first('name')}}
                                </span>
                                <input class="form-control" name="name" value="{{old('name')}}" placeholder="user name.....">     
                                
                            </div>

                            <div class="form-group">

                                <label>Email</label><br>
                                <span style="color:red;">
                                  *{{$errors->first('email')}}
                                </span>
                                <input class="form-control" name="email" value="{{old('email')}}" placeholder="user email.....">     
                                
                            </div>
                            
                            <div class="form-group">
                                <label for="password">{{ __('Password') }}</label>

                                
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="1234...">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                
                            </div>

                            <div class="form-group">
                                <label for="password-confirm">{{ __('Confirm Password') }}</label>

                                
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="1234...">
                                
                            </div>

                            <div class="form-group">

                                <label>User Role</label><br>
                                <span style="color:red;">
                                  *{{$errors->first('user_role')}}
                                </span>
                                <select name="user_role" class="form-control" value="{{old('user_role')}}">
                                	
							                  <option value="">---select---</option>
                                              <option value="Admin">Admin</option>
                                              <option value="Manager">Manager</option>
                                </select>     
                                
                            </div>

                            <div class="form-group">
                            <label>Status</label><br>
                                <div class="checkbox">
                                    <label>
                                        
                                        <input type="hidden" name="active" value="0">
                                        <input type="checkbox" name="active" @if (old('status') == 1 )

                                        checked
                                            
                                        @endif  value="1">
                                        
                                        Active
                                        
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Products</label><br>
                                <label for=""><input type="checkbox" name="product_permission[]" value="1"> AA </label>
                                <label for=""><input type="checkbox" name="product_permission[]" value="2"> BB </label>
                                <label for=""><input type="checkbox" name="product_permission[]" value="3"> CC </label>
                                <label for=""><input type="checkbox" name="product_permission[]" value="4"> DD </label>
                              
                            </div>  

                            <input type="submit" value="Create User" class="btn btn-primary">


                        </form>
                                
                   </div>
                            


                </div>
                        
            </div>
        </div>
    </div>  


@endsection

@section('footer-content')
 

@endsection          