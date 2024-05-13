@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<section class="content-main">
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="content-header">
                <h2 class="content-title">Add How To Order</h2>
                {{-- <div class="">
                    <a href="{{route('how-to-order.index') }}" class="btn btn-primary p-3" title="Category List"><i class="fa fa-list"></i></a>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
    	<div class="col-sm-8">
    		<form method="post" action="{{ route('how-to-order.update',$hto->id) }}" enctype="multipart/form-data">
		        @csrf
	    		<div class="card">
					<div class="card-header">
						<h3>How To Order</h3>
					</div>
		        	<div class="card-body">
		        		<div class="row">
	                        <div class="col-sm-12 mb-12">
	                          	<label for="text_en" class="col-form-label" style="font-weight: bold;"> Description:</label>
	                            {{-- <input class="form-control" id="text_en" type="text" name="text_en" placeholder="Write How To Order text english" value="{{old('text_en')}}"> --}}
                                <textarea class="form-control summernote" id="text_en" required name="text" placeholder="Write How To Order " >@isset($hto){{ $hto->text }}@else{{old('text')}}@endisset</textarea>
	                        </div>
	                        <div class="col-sm-12 mb-12">
	                          	<label for="text_en" class="col-form-label" style="font-weight: bold;"> Youtube Link:</label>
	                            <input class="form-control" id="text_en" type="text" required name="youtube_link" placeholder="Enter Youtube Link" value="{{$hto->youtube_link}}">
                                <br>
	                        </div>

	                       <div class="mb-2 col-sm-6">
	                       		<img id="showImage" class="rounded avatar-lg mb-3" src="@isset($hto){{ asset($hto->image) }} @endisset" alt="Card image cap" width="100px" height="80px;">
	                       </div>

	                        <div class="col-sm-12 mb-4">
	                         	<label for="image" class="col-form-label" style="font-weight: bold;">How To Order Photo:</label>
	                            <input name="image" class="form-control" type="file" id="image">
	                            @error('image')
                                	<p class="text-danger">{{$message}}</p>
                            	@enderror
	                        </div>
	                        <div class="mb-4">
	                            <div class="custom-control custom-switch">
	                                <input type="checkbox" class="form-check-input me-2 cursor" name="status" id="status" value="1" checked >
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
