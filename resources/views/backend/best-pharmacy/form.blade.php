@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<section class="content-main">
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="content-header">
                <h2 class="content-title">Add Best- Pharmacy</h2>
                {{-- <div class="">
                    <a href="{{route('best-pharmacy.index') }}" class="btn btn-primary p-3" title="Category List"><i class="fa fa-list"></i></a>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
    	<div class="col-sm-8">
    		<form method="post" action="@isset($pharmacy){{ route('best-pharmacy.update',$pharmacy->id) }}@else{{ route('best-pharmacy.store') }}@endisset" enctype="multipart/form-data">
		        @csrf
	    		<div class="card">
					<div class="card-header">
						<h3>Best- Pharmacy</h3>
					</div>
		        	<div class="card-body">
		        		<div class="row">
	                        <div class="col-sm-12 mb-12">
	                          	<label for="description_en" class="col-form-label" style="font-weight: bold;"> Description:</label>
	                            {{-- <input class="form-control" id="description_en" type="text" name="description_en" placeholder="Write Best- Pharmacy description english" value="{{old('description_en')}}"> --}}
                                <textarea class="form-control summernote" id="description_en" required name="description" placeholder="Write Best- Pharmacy description" >@isset($pharmacy){{ $pharmacy->description }}@else{{old('description_en')}}@endisset</textarea>
	                        </div>

	                       <div class="mb-2 col-sm-6">
	                       		<img id="showImage" class="rounded avatar-lg mb-3" src="@isset($pharmacy){{ asset($pharmacy->pharmacy_img) }} @endisset" alt="Card image cap" width="100px" height="80px;">
	                       </div>
	                        <div class="col-sm-12 mb-4">
	                         	<label for="image" class="col-form-label" style="font-weight: bold;">Best- Pharmacy Photo:</label>
	                            <input name="pharmacy_img" class="form-control" type="file" id="image">
	                            @error('pharmacy_img')
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
