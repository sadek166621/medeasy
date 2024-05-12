@extends('admin.admin_master')
@section('admin')
<section class="content-main">
    <div class="content-header">
        <div class="col-md-10">
            <h2 class="content-title">Best- Pharmacy List</h2>
            <strong style="font-weight: bold" class="text-dark"> {{ count($pharmacies) }} Best- Pharmacys Found </strong>

        </div>
        <div class="col-md-2">
            {{-- <a href="{{ route('best-pharmacy.create') }}" class="btn btn-primary" title="Add Best- Pharmacy"><i class="material-icons md-plus"></i></a> --}}
        </div>

    </div>
    <div class="card mb-4">
        <div class="card-body">
            <div class="table-responsive-sm">
                <table id="example" class="table table-bordered table-striped" width="100%">
                    <thead>
                        <tr>
                            <th scope="col">Sl</th>
                            <th scope="col">Best-Pharmacy Photo</th>
                            <th scope="col">Description</th>
                            <th scope="col">Status</th>
                            <th scope="col" class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pharmacies as $key => $pharmacy)
                        <tr>
                            <td> {{ $key+1}} </td>
                            <td width="15%">
                                <a href="#" class="itemside">
                                    <div class="left">
                                        <img src="{{ asset($pharmacy->pharmacy_img) }}" class="img-sm img-avatar" alt="Userpic" />
                                    </div>
                                </a>
                            </td>
                            <td> {!! $pharmacy->description ?? 'NULL' !!} </td>
                            <td>
                                @if($pharmacy->status == 1)
                                  <a href="">
                                    <span class="badge status rounded-pill alert-success">Active</span>
                                  </a>
                                @else
                                  <a href=""> <span class="badge status rounded-pill alert-danger">Disable</span></a>
                                @endif
                            </td>
                            <td class="text-end">
                                <div class=" btn-group" style="margin: 25% 0">
                                    <a href="{{ route('best-pharmacy.edit', $pharmacy->id) }}" class="btn btn-primary" title="Edit"
                                       style="padding:12px; margin-right: 5px; border-radius: 5px"><i class="fa fa-pencil"></i></a>
                                    <a href="{{ route('best-pharmacy.delete',$pharmacy->id) }}" id="delete" class="btn btn-danger" title="Delete"
                                       style="border-radius: 5px"><i class="fa fa-trash"></i></a>
                                </div>

                            </td>
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
