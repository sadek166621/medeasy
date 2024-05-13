@extends('admin.admin_master')
@section('admin')
<section class="content-main">
    <div class="content-header">
        <div class="col-md-10">
            <h2 class="content-title">Prescription</h2>
            <strong style="font-weight: bold" class="text-dark"> {{ count($prescriptions) }} Prescriptions Found </strong>

        </div>
        <div class="col-md-2">
            {{-- <a href="{{ route('best-prescription.create') }}" class="btn btn-primary" title="Add Best- Pharmacy"><i class="material-icons md-plus"></i></a> --}}
        </div>

    </div>
    <div id="imageModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img id="fullImage" src="" class="img-fluid" alt="Full Size Image">
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-body">
            <div class="table-responsive-sm">
                <table id="example" class="table table-bordered table-striped" width="100%">
                    <thead>
                        <tr>
                            <th scope="col">Sl</th>
                            <th scope="col">Prescription Photo</th>
                            <th scope="col">Address</th>
                            <th scope="col">Download</th>
                            <th scope="col" >Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($prescriptions as $key => $prescription)
                        <tr>
                            <td> {{ $key+1}} </td>
                            <td width="15%">
                                <a href="#" class="itemside">
                                    <div class="left">
                                        <!-- Add an onclick attribute to trigger the modal -->
                                        <img src="{{ asset($prescription->image) }}" class="img-sm img-avatar" alt="Userpic" onclick="showFullImage('{{ asset($prescription->image) }}')" />
                                    </div>
                                </a>
                            </td>
                            <td> {!! $prescription->address ?? 'NULL' !!} </td>
                            <td>
                                <a href="#" onclick="downloadImage('{{ asset($prescription->image) }}')">
                                    <i class="fas fa-download"></i> <!-- Assuming you are using Font Awesome for icons -->
                                </a>
                            </td>
                            <td class="">
                                <div class=" btn-group" style="">
                                    <a href="{{ route('prescription.delete',$prescription->id) }}" id="delete" class="btn btn-danger" title="Delete"
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
@push('footer-script')
<script>
    function showFullImage(imageSrc) {
        // Set the src attribute of the modal image
        $('#fullImage').attr('src', imageSrc);
        // Show the modal
        $('#imageModal').modal('show');
    }
</script>
<script>
    function downloadImage(imageSrc) {
        var link = $('<a>', {
            href: imageSrc,
            download: 'image.jpg' // Set the desired filename for the downloaded image
        }).appendTo('body');

        link[0].click();
        link.remove();
    }
</script>
@endpush
