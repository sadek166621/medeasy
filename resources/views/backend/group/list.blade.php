@extends('admin.admin_master')
@section('admin')
<section class="content-main">
    <div class="content-header">
        <div class="col-md-10">
            <h2 class="content-title">Group List</h2>
            {{-- <strong style="font-weight: bold" class="text-dark"> {{ count($categories) }} Products Found </strong> --}}

        </div>
        <div class="col-md-2">
            <a href="{{ route('group.create') }}" class="btn btn-primary" title="Add Group"><i class="material-icons md-plus"></i></a>
        </div>
    </div>

    {{-- <br> --}}
    <div class="card mb-4">

        <div class="card-body">
            <form action="{{ route('import-group') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <label for="">Upload Excel File</label>
                    <div class="col-md-10">
                        <input type="file" class="form-control" required name="file">
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary" type="submit">Upload</button>
                    </div>
                </div>
            </form>
            <br>
            <div class="table-responsive-sm">
                <table id="example" class="table table-bordered table-striped" width="100%">
                    <thead>
                        <tr>
                            <th scope="col">Sl</th>
                            <th scope="col">Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($groups as $key => $group)
                        <tr>
                            <td> {{ $key+1}} </td>
	                        <td>
                                {{ $group->name}}
                            </td>
                            <td>
                                @if($group->status == 1)
                                  <a @if(Auth::guard('admin')->user()->role != '2') href="{{ route('group.in_active',['id'=>$group->id]) }}" @endif>
                                    <span class="status badge rounded-pill alert-success">Active</span>
                                  </a>
                                @else
                                  <a @if(Auth::guard('admin')->user()->role != '2') href="{{ route('group.active',['id'=>$group->id]) }}" @endif> <span class="status badge rounded-pill alert-danger">Disable</span></a>
                                @endif
                            </td>
                            @if(Auth::guard('admin')->user()->role != '2')
                                <td >
                                    <div class=" btn-group">
                                        <a href="{{ route('group.edit',$group->id) }}" class="btn btn-primary" title="Edit"
                                           style="padding:12px; margin-right: 5px; border-radius: 5px"><i class="fa fa-pencil"></i></a>
                                        <a href="{{ route('group.delete',$group->id) }}" class="btn btn-danger" title="Delete"
                                           style="border-radius: 5px"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- table-responsive //end -->
        </div>
        <!-- card-body end// -->
    </div>
</section>
@endsection
