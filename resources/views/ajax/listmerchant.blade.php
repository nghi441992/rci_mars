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
                        <button type="button" class="btn btn-drop dropdown-toggle" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><input type="button"
                                                                                  class="box-alphabet"
                                                                                  name="alpha-select"
                                                                                  value="All Alphabetical">
                        </button>
                        <ul class="dropdown-menu alphabet-select">
                            <li><a href="#" class="alphabet-option" data-value="All Alphabetical">Reset</a></li>
                            <li><a href="#" class="alphabet-option" data-value="A">A</a></li>
                            <li><a href="#" class="alphabet-option" data-value="B">B</a></li>
                            <li><a href="#" class="alphabet-option" data-value="C">C</a></li>
                            <li><a href="#" class="alphabet-option" data-value="D">D</a></li>
                            <li><a href="#" class="alphabet-option" data-value="E">E</a></li>
                            <li><a href="#" class="alphabet-option" data-value="F">F</a></li>
                            <li><a href="#" class="alphabet-option" data-value="G">G</a></li>
                            <li><a href="#" class="alphabet-option" data-value="H">H</a></li>
                            <li><a href="#" class="alphabet-option" data-value="I">I</a></li>
                            <li><a href="#" class="alphabet-option" data-value="J">J</a></li>
                            <li><a href="#" class="alphabet-option" data-value="K">K</a></li>
                            <li><a href="#" class="alphabet-option" data-value="L">L</a></li>
                            <li><a href="#" class="alphabet-option" data-value="M">M</a></li>
                            <li><a href="#" class="alphabet-option" data-value="N">N</a></li>
                            <li><a href="#" class="alphabet-option" data-value="O">O</a></li>
                            <li><a href="#" class="alphabet-option" data-value="P">P</a></li>
                            <li><a href="#" class="alphabet-option" data-value="Q">Q</a></li>
                            <li><a href="#" class="alphabet-option" data-value="R">R</a></li>
                            <li><a href="#" class="alphabet-option" data-value="S">S</a></li>
                            <li><a href="#" class="alphabet-option" data-value="T">T</a></li>
                            <li><a href="#" class="alphabet-option" data-value="U">U</a></li>
                            <li><a href="#" class="alphabet-option" data-value="V">V</a></li>
                            <li><a href="#" class="alphabet-option" data-value="W">W</a></li>
                            <li><a href="#" class="alphabet-option" data-value="X">X</a></li>
                            <li><a href="#" class="alphabet-option" data-value="Y">Y</a></li>
                            <li><a href="#" class="alphabet-option" data-value="Z">Z</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <select id="select-status">
                            <option value="" selected>All Status</option>
                            <option value="darft">DRAFT</option>
                            <option value="ready">READY</option>
                            <option value="prod-d">PROD-D</option>
                            <option value="prod-z">PROD-Z</option>
                            <option value="edit">EDIT</option>
                            <option value="update">UPDATE</option>
                        </select>
                    </div>
                    <button type="button" class="btn btn-search122 btn-search2">Search</button>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-12">
            <div class="pull-right-option">
                <button type="button" class="btn btn-big btn-yellow">+ Add New Merchant</button>
                <button type="button" class="btn btn-big btn-green">Export Ready Merchants</button>
                <button type="button" class="btn btn-big btn-moss">Export Updated Merchants</button>
            </div>
        </div>
    </div>
</div><!--top-content-->
<!--Have Data-->
<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <thead>
        <tr class="info">
            <th class="text-right">Merchant name</th>
            <th class="text-center">Scanov <br>Merchant ID</th>
            <th class="text-center">SCANOV <br>User ID</th>
            <th class="text-center">MARS User ID</th>
            <th class="text-center">HQ <br>Country</th>
            <th class="text-center">POS <br>Country</th>
            <th>City</th>
            <th>Postal code</th>
            <th class="text-center">ISIC <br/>Category</th>
            <th class="text-center">Captova <br/>Category</th>
            <th class="text-center">Document <br/>Type</th>
            <th>Algo Type</th>
            <th class="text-center">Algo <br/>Key Name</th>
            <th class="text-center">Line <br/>Items</th>
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
                <td class="text-center">
                    <button type="button" class="btn btn-small btn-green btn-ready">Ready</button>
                </td>
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