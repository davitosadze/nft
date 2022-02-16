@extends('admin.layout')
{{--@parent--}}
<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/vendors.min.css')}}">
<link rel="stylesheet" type="text/css"
      href="{{asset('app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" type="text/css"
      href="{{asset('app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css')}}">
<!-- END: Vendor CSS-->
@section('styles')
    @parent
@endsection
@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Marketplace</h2>
  
                    
                </div>
            </div>
        </div>

    </div>
    <div class="content-body">

        <section id="column-search-datatable">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h4 class="card-title">Marketplace</h4>
                            <a class="btn-icon btn btn-primary btn-round btn-md" type="button" href="{{route('admin.market.create')}}"><i
                                data-feather="plus"></i>Add Record</a>
                        </div>
                        <div class="card-datatable">
                            <table class="dt-column-search table" id="marketTable">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Item Name</th>
                                        <th>Image</th>
                                        <th>Edit</th>
                                        <th>Delete</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($market as $item) 
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->title}}</td>
                                            <td><img style="width:50px;" src="{{$item->image}}"></td>

                                            <td>
                                                <a class="btn btn-primary" href="{{route('admin.market.edit', $item->id)}}">Edit</a>
                                            </td>
                                            <td>
                                                <form method="POST" action="{{route('admin.market.destroy', $item->id)}}">
                                                    @csrf
                                                    @method("DELETE")
                                                    <input type="submit" value="Delete" class="btn btn-danger" name="submit" id="">
                                                </form>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>



    </div>
@endsection

@section('js')

    @parent
    <script>


            // // Filter form control to default size for all tables
            $('.dataTables_filter .form-control').removeClass('form-control-sm');
            $('.dataTables_length .custom-select').removeClass('custom-select-sm').removeClass('form-control-sm');

    </script>


    <script src="{{asset('app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>

    <script>
        $("#marketTable").DataTable();
    </script>

@endsection
