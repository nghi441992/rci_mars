<div class="modal fade bs-example-modal-lg" tabindex="-1"  id="modal-add-merchant" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center text-uppercase" id="myModalLabel">Edit Merchant - Algo</h2>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 box-left">
                        <h3>Merchant</h3>
                        <div class="form-group">
                            <label>Merchant Name</label>
                            <input name="Merchant[merchantName]" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Scanop Merchant ID</label>
                            <input  type="text" class="form-control form-grey">
                        </div>
                        <div class="form-group">
                            <label>Scanop User ID</label>
                            <input type="text" class="form-control form-grey">
                        </div>
                        <div class="form-group">
                            <label>Mars User ID</label>
                            <input name="Merchant[email]" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>HQ Country</label>
                            <div class="bs-select">
                                <select name="Merchant[hqCountry]" id="hqCountry" class="form-control">
                                    <option>Select country</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Pos Country</label>
                            <div class="bs-select">
                                <select name="Merchant[posCountry]" class="form-control">
                                    <option value="1">Select POS Country</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>City</label>
                            <input name="Merchant[city" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Postal Code</label>
                            <input name="Merchant[postalcode]" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>ISIC Category</label>
                            <div class="bs-select">
                                <select name="Merchant[isicCategory]" class="form-control">
                                    <option>Select ISIC category</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Captova Category</label>
                            <div class="bs-select">
                                <select name="Merchant[captovaCategory]" class="form-control">
                                    <option>Select Captova category</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 box-right">
                        <h3>Algo</h3>
                        <div class="form-group">
                            <label>Document Type</label>
                            <div class="bs-select">
                                <select name="Merchant[documentType]" class="form-control">
                                    <option>Select Doccument type</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Algo Type</label>
                            <div class="bs-select">
                                <select name="Merchant[alogoType]" class="form-control">
                                    <option>Select Algo type</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Algo Key Name</label>
                            <div class="bs-select">
                                <select name="Merchant[algoKeyName]" class="form-control">
                                    <option>Select Algo Name</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Line Item</label>
                            <div class="form-inline">
                                <div class="radio">
                                    <label>
                                        <input id="optionsRadios1" type="radio" value="option1" name="optionsRadios">
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
                            <label>Inferred Algo Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Keywords</label>
                            <ul class="keyword">
                                <li><a href="#">abadjf</a>
                                    <button type="button" class="close" aria-label="Close"><span
                                                aria-hidden="true">&times;</span></button>
                                </li>
                                <li><a href="#">Friday today</a>
                                    <button type="button" class="close" aria-label="Close"><span
                                                aria-hidden="true">&times;</span></button>
                                </li>
                                <li><a href="#">abadjf</a>
                                    <button type="button" class="close" aria-label="Close"><span
                                                aria-hidden="true">&times;</span></button>
                                </li>
                                <li><a href="#">Friday today</a>
                                    <button type="button" class="close" aria-label="Close"><span
                                                aria-hidden="true">&times;</span></button>
                                </li>
                            </ul>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                   placeholder="Enter more keyword">
                        </div>
                        <div class="list-btn pull-right">
                            <ul>
                                <li>
                                    <button type="button" class="btn btn-small btn-draft-pop btn-popup">Draft</button>
                                </li>
                                <li>
                                    <button type="button" class="btn btn-small btn-ready-pop btn-popup">Ready</button>
                                </li>
                                <li>
                                    <button type="button" class="btn btn-small btn-prodd-pop btn-popup">Prod-d</button>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <button type="button" class="btn btn-small btn-edit-pop btn-popup">Edit</button>
                                </li>
                                <li>
                                    <button type="button" class="btn btn-small btn-update-pop btn-popup">Update</button>
                                </li>
                                <li>
                                    <button type="button" class="btn btn-small btn-prodz-pop btn-popup">Prod-z</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-big pull-left btn-delete">Delete Merchant</button>
                <button type="button" class="btn btn-big pull-right btn-cancel" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-big pull-right btn-save" onclick="merchant.addNew()">Save & Close</button>
            </div>
        </div>
    </div>
</div>