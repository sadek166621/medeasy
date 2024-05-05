@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<section class="content-main">
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="content-header">
                <h2 class="content-title">Add Group</h2>
                <div class="">
                    <a href="{{ route('group.index') }}" class="btn btn-primary p-3" title="Category List"><i class="fa fa-list"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                           <form class="form-horizontal" action="@isset($group){{ route('group.update',$group->id) }} @else {{ route('group.store') }} @endisset" method="POST" encgroup="multipart/form-data">
			                	@csrf
			                    <div class="form-group row mb-4">
			                        <label class="col-md-3 col-form-label" for="name">Name <span class="text-danger">*</span></label>
			                        <div class="col-md-9">
			                            <input group="text" placeholder="Name" name="name" value="@isset($group){{ $group->name }} @else {{old('name')}} @endisset" class="form-control" required>

										@error('name')
											<p class="text-danger">{{$message}}</p>
										@enderror
			                        </div>
			                    </div>
                                <div class="mb-4">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="form-check-input me-2 cursor" name="status" id="status" @isset($group) {{ $group->status == 1 ? 'checked': '' }} @else checked @endisset  value="1">
                                        <label class="form-check-label cursor" for="status">Status</label>
                                    </div>
                                </div>
			                    <div class="row mb-4 justify-content-sm-end">
									<div class="col-lg-3 col-md-4 col-sm-5 col-6">
										<input type="submit" class="btn btn-primary" value="Submit">
									</div>
								</div>
			                </form>
                        </div>
                    </div>
                    <!-- .row // -->
                </div>
                <!-- card body .// -->
            </div>
            <!-- card .// -->
        </div>
    </div>
</section>

@endsection
@push('footer-script')
    {{-- <script>
       function checkTabs() {
           $.ajax({
               url: '{{ route('check-group-tabs') }}',
               group: 'get',
               dataGroup: 'json',
               success: function (data) {
                   console.log(data);
               }
           });
       }
    </script> --}}
@endpush
