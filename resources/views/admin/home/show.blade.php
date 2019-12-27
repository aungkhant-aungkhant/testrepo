@extends('admin.layout.app')
@section('head-content')

@endsection

@section('content')

<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                           
                                    Dashboard
                                   
                            </h1>
                        </div>
                        <div class = "row">
                        	<div class="col-12" >
                            @foreach($products as $product)
		                        <div class="col-lg-3 col-md-6">
		                            <div class="panel panel-primary">
		                                <div class="panel-heading">
		                                    <div class="row">
		                                        <div class="col-xs-3">
		                                            <i class="fa fa-navicon fa-5x"></i>
		                                        </div>
		                                        <div class="col-xs-9 text-right">
		                                            <div class="huge"></div>
		                                            <div>{{ $product->product_name }}</div>
		                                        </div>
		                                    </div>
		                                </div>
		                                <a href="#">
		                                    <div class="panel-footer">
		                                        <span class="pull-left">View Details</span>
		                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

		                                        <div class="clearfix"></div>
		                                    </div>
		                                </a>
		                            </div>
		                        </div>
                            @endforeach    
		                        
                        </div>

                                 

                                 
                     </div>
                     
                </div>
                
      </div>
    </div>
  </div>
@endsection

@section('footer-content')

@endsection                
