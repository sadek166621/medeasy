@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<section class="content-main">
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="content-header">
                <h2 class="content-title">Add Health Article</h2>
                <div class="">
                    <a href="{{route('health-artical.index') }}" class="btn btn-primary p-3" title="Category List"><i class="fa fa-list"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
    	<div class="col-sm-8">
    		<form method="post" action="{{ route('health-artical.store') }}" enctype="multipart/form-data">
		        @csrf
	    		<div class="card">
					<div class="card-header">
						<h3>Health Article</h3>
					</div>
		        	<div class="card-body">
		        		<div class="row">
		                	<div class="col-sm-12 mb-12">
	                           	<label for="title_en" class="col-form-label" style="font-weight: bold;"> Title:</label>
	                            <input class="form-control" id="title_en" type="text" name="title_en" placeholder="Write Health Article title english" value="{{old('title_en')}}">
	                            @error('title_en')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
	                        </div>
	                        <div class="col-sm-6 mb-4 d-none">
	                          	<label for="title_bn" class="col-form-label" style="font-weight: bold;"> Title (Bangla):</label>
	                            <input class="form-control" id="title_bn" type="text" name="title_bn" placeholder="Write Health Article title bangla" value="{{old('title_bn')}}">
	                        </div>

	                        <div class="col-sm-12 mb-12">
	                          	<label for="description_en" class="col-form-label" style="font-weight: bold;"> Description:</label>
	                            {{-- <input class="form-control" id="description_en" type="text" name="description_en" placeholder="Write Health Article description english" value="{{old('description_en')}}"> --}}
                                <textarea class="form-control" id="description_en" name="description_en" placeholder="Write Health Article description" value="{{old('description_en')}}"></textarea>
	                        </div>

	                        <div class="col-sm-6 mb-4 d-none">
	                          	<label for="description_bn" class="col-form-label" style="font-weight: bold;"> Description (Bangla):</label>
	                            <input class="form-control" id="description_bn" type="text" name="description_bn" placeholder="Write Health Article description bangla" value="{{old('description_bn')}}">
	                        </div>

	                       <div class="mb-2 col-sm-6">
	                       		<img id="showImage" class="rounded avatar-lg mb-3" src="{{ (!empty($editData->profile_image))? url('upload/admin_images/'.$editData->profile_image):url('upload/no_image.jpg') }}" alt="Card image cap" width="100px" height="80px;">
	                       </div>
	                        <div class="col-sm-12 mb-4">
	                         	<label for="image" class="col-form-label" style="font-weight: bold;">Health Article Photo:</label>
	                            <input name="banner_img" class="form-control" type="file" id="image">
	                            @error('Health Article_img')
                                	<p class="text-danger">{{$message}}</p>
                            	@enderror
	                        </div>
	                        <div class="mb-4">
	                            <div class="custom-control custom-switch">
	                                <input type="checkbox" class="form-check-input me-2 cursor" name="status" id="status" checked value="1">
	                                <label class="form-check-label cursor" for="status">Status</label>
	                            </div>
                            </div>

	                        <div class="row mb-4 justify-content-sm-end">
								<div class="col-lg-3 col-md-4 col-sm-5 col-6">
									<input type="submit" class="btn btn-primary" value="Submit">
								</div>
							</div>

			            </div>
			            <!-- .row // -->
			        </div>
			        <!-- card body .// -->
			    </div>
			    <!-- card .// -->
			</form>
    	</div>
    </div>
</section>

@endsection
