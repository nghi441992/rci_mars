@extends('layouts.layouts')
@section('content')
    <div class="main-content clearfix">
        <div class="top-content">
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <div class="pull-left form-inline">
                        <div class="form-group">
                            <input type="text" name="search-keyword" class="form-control box-search1" placeholder="Enter some keywords">
                            <button type="button" class="btn btn-search1" id="search-keyword">Search</button>
                        </div>
                        <div class="form-group form-search-2">
                            <div class="btn-group">
                                <button type="button" class="btn btn-drop dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    All Alphabetical <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-drop btn-drop2 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    All Alphabetical <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                            <button type="button" class="btn btn-search122 btn-search2">Search</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="pull-right-option">
                        <button type="button" class="btn btn-big btn-yellow">+  Add New Merchant</button>
                        <button type="button" class="btn btn-big btn-green">Export Ready Merchants</button>
                        <button type="button" class="btn btn-big btn-moss">Export Updated Merchants</button>
                    </div>
                </div>
            </div>
        </div><!--top-content-->
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead >
                <tr class="info">
                    <th class="text-right">Merchant name</th>
                    <th class="text-center">Scanov <br>Merchant ID</th>
                    <th class="text-center">SCANOV <br>User ID</th>
                    <th class="text-center">MARS User ID</th>
                    <th class="text-center">HQ <br>Country</th>
                    <th class="text-center">POS <br>Country</th>
                    <th>City</th>
                    <th>Postal code</th>
                    <th class="text-center">ISIC <br />Category</th>
                    <th class="text-center">Captova <br />Category</th>
                    <th class="text-center">Document <br />Type</th>
                    <th>Algo Type</th>
                    <th class="text-center">Algo <br />Key Name</th>
                    <th	class="text-center">Line <br />Items</th>
                    <th class="text-center">Inferred Algo Name</th>
                    <th class="text-center">Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $row)
                    <tr>
                        <th class="text-right" scope="row">{{$row->name}}</th>
                        <td class="text-right">NULL</td>
                        <td class="text-right">NULL</td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->countries_code}}</td>
                        <td></td>
                        <td>{{$row->city}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-right">{{$row->receipt_types_code != ''?$row->receipt_types_code:$row->invoice_types_code}}</td>
                        <td class="text-right">{{$row->algorithm_types_code}}</td>
                        <td class="text-right">Ross1-Y</td>
                        <td class="text-right">Y</td>
                        <td>PR-ZBOT-US-Ross1-Y</td>
                        <td class="text-center"><button type="button" class="btn btn-small btn-green btn-ready">Ready</button></td>
                    </tr>
                @endforeach


                </tbody>
            </table>
        </div>
        <div class="page pull-right">
            <ul class="pagination">
                <li>
                    <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                    <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container-fluid footer">
        <ul class="pull-right">
            <li><a href="#"><<</a></li>
            <li><a href="#">Pre</a></li>
            <li><a href="#">Next</a></li>
            <li><a href="#">>></a></li>
        </ul>
    </div>
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h2 class="modal-title text-center text-uppercase" id="myModalLabel">Edit Merchant - Algo</h2>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 box-left">
                            <h3>Merchant</h3>
                            <div class="form-group">
                                <label >Merchant Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label >Scanop Merchant ID</label>
                                <input type="text" class="form-control form-grey" >
                            </div>
                            <div class="form-group">
                                <label >Scanop User ID</label>
                                <input type="text" class="form-control form-grey">
                            </div>
                            <div class="form-group">
                                <label >Mars User ID</label>
                                <input type="text" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label >HD Country</label>
                                <div class="bs-select">
                                    <select class="form-control">
                                        <option>Tất cả danh mục</option>
                                        <option>Thời trang</option>
                                        <option>Điện tử</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label >Pos Country</label>
                                <div class="bs-select">
                                    <select class="form-control">
                                        <option>Tất cả danh mục</option>
                                        <option>Thời trang</option>
                                        <option>Điện tử</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label >City</label>
                                <div class="bs-select">
                                    <select class="form-control">
                                        <option>Tất cả danh mục</option>
                                        <option>Thời trang</option>
                                        <option>Điện tử</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label >Post Code</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label >ISIC Category</label>
                                <div class="bs-select">
                                    <select class="form-control">
                                        <option>Tất cả danh mục</option>
                                        <option>Thời trang</option>
                                        <option>Điện tử</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label >Captova Category</label>
                                <div class="bs-select">
                                    <select class="form-control">
                                        <option>Tất cả danh mục</option>
                                        <option>Thời trang</option>
                                        <option>Điện tử</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 box-right">
                            <h3>Algo</h3>
                            <div class="form-group">
                                <label >Document Type</label>
                                <div class="bs-select">
                                    <select class="form-control">
                                        <option>Tất cả danh mục</option>
                                        <option>Thời trang</option>
                                        <option>Điện tử</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label >Algo Type</label>
                                <div class="bs-select">
                                    <select class="form-control">
                                        <option>Tất cả danh mục</option>
                                        <option>Thời trang</option>
                                        <option>Điện tử</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label >Algo Key Name</label>
                                <div class="bs-select">
                                    <select class="form-control">
                                        <option>Tất cả danh mục</option>
                                        <option>Thời trang</option>
                                        <option>Điện tử</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label >Line Item</label>
                                <div class="form-inline">
                                    <div class="radio">
                                        <label>
                                            <input id="optionsRadios1" type="radio" value="option1" name="optionsRadios" >
                                            Yes
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input id="optionsRadios2" type="radio" value="option2" name="optionsRadios">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label >Inferred Algo Name</label>
                                <input type="text" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label >Keywords</label>
                                <ul class="keyword">
                                    <li><a href="#">abadjf</a><button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button></li>
                                    <li><a href="#">Friday today</a><button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button></li>
                                    <li><a href="#">abadjf</a><button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button></li>
                                    <li><a href="#">Friday today</a><button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button></li>
                                </ul>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Input your name">
                            </div>
                            <div class="list-btn pull-right">
                                <ul>
                                    <li><button type="button" class="btn btn-small btn-draft-pop btn-popup">Draft</button></li>
                                    <li><button type="button" class="btn btn-small btn-ready-pop btn-popup">Ready</button></li>
                                    <li><button type="button" class="btn btn-small btn-prodd-pop btn-popup">Prod-d</button></li>
                                </ul>
                                <ul>
                                    <li><button type="button" class="btn btn-small btn-edit-pop btn-popup">Edit</button></li>
                                    <li><button type="button" class="btn btn-small btn-update-pop btn-popup">Update</button></li>
                                    <li><button type="button" class="btn btn-small btn-prodz-pop btn-popup">Prod-z</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-big pull-left btn-delete">Delete Merchant</button>
                    <button type="button" class="btn btn-big pull-right btn-cancel" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-big pull-right btn-save">Save & Close</button>

                </div>
            </div>
        </div>
    </div>
@endsection



