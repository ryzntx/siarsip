@extends('layout.index')
@section('title', 'Sekertaris')
@section('content')

<div class="main-content side-content pt-0">

    <div class="main-container container-fluid">
        <div class="inner-body">

            <!-- Page Header -->
            <div class="page-header">
                <div>
                    <h2 class="main-content-title tx-24 mg-b-5">Dokumen Keluar</h2>
                </div>
                <div class="d-flex">
                    <div class="justify-content-center">
                        <button type="button" class="btn btn-white btn-icon-text my-2 me-2">
                          <i class="fe fe-download me-2"></i> Import
                        </button>
                        <button type="button" class="btn btn-white btn-icon-text my-2 me-2">
                          <i class="fe fe-filter me-2"></i> Filter
                        </button>
                        <button type="button" class="btn btn-primary my-2 btn-icon-text">
                          <i class="fe fe-download-cloud me-2"></i> Download Report
                        </button>
                    </div>
                </div>
            </div>
            <!-- End Page Header -->

            <!-- Row -->
            <div class="row row-sm">
                <div class="col-md-12 col-lg-12">
                    <div class="card custom-card">
                        <div class="card-header  border-bottom-0 pb-0">
                            <div>
                                <div class="d-flex">
                                    <label class="main-content-label my-auto pt-2">ARSIP DOKUMEN KELUAR</label>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row table-filter">
                                <div class="col-lg-3">
                                    <div class="show-entries">
                                        <span>Show</span>
                                        <select class="form-control select2 wd-50">
                                            <option>5</option>
                                            <option>10</option>
                                            <option>15</option>
                                            <option>20</option>
                                        </select>
                                        <span>entries</span>
                                    </div>
                                </div>
                                <div class="col-lg-9 d-lg-flex justify-content-end">
                                    <div class="d-flex mt-4 me-4 mt-lg-0">
                                        <div class="filter-group">
                                            <input type="text" class="form-control rounded-end-0" placeholder="search">
                                        </div>
                                        <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                    </div>
                                    <div class="d-flex mt-4 mt-lg-0">
                                        <div class="filter-group">
                                            <label>Location</label>
                                            <select class="form-control select2 ">
                                                <option>All</option>
                                                <option>Berlin</option>
                                                <option>London</option>
                                                <option>Madrid</option>
                                                <option>New York</option>
                                                <option>Paris</option>
                                            </select>
                                        </div>
                                        <div class="filter-group ms-3">
                                            <label>Status</label>
                                            <select class="form-control select2 ">
                                                <option>Any</option>
                                                <option>Delivered</option>
                                                <option>Shipped</option>
                                                <option>Pending</option>
                                                <option>Cancelled</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive border border-bottom-0">
                                <table class="table mb-0 text-nowrap text-md-nowrap">
                                    <thead>
                                        <tr class="border-bottom">
                                            <th>ID</th>
                                            <th>Invoice</th>
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>Total</th>
                                            <th>Warehouse</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-bottom">
                                            <th scope="row">#W83549801</th>
                                            <td>2</td>
                                            <td>Anna Sthesia</td>
                                            <td>08/11/2020</td>
                                            <td>$1000</td>
                                            <td>Boston</td>
                                            <td><span class="status bg-warning"></span> Pending</td>
                                            <td>
                                                <div class="button-list">
                                                    <a href="#" class="btn"><i class="ti ti-files"></i></a>
                                                    <a href="#" class="btn"><i class="ti ti-pencil"></i></a>
                                                    <a href="#" class="btn"><i class="ti ti-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <nav class="mt-3">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item disabled"><a class="page-link" href="#">Prev</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row -->
        </div>
    </div>
</div>

@endsection
