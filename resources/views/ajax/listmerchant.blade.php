@if (count($data) > 0)
        <!--Have Data-->
<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <thead>
        <tr class="info">
            <th class="text-right">Merchant name</th>
            <th class="text-right">Common Vendors </th>
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
                <td class="text-right">NULL</td>
                <td>{{$row->email}}</td>
                <td></td>
                <td>{{$row->countries_code}}</td>
                <td>{{$row->city}}</td>
                <td>{{$row->postal_code}}</td>
                <td></td>
                <td></td>
                <td class="text-right">{{$row->receipt_types_code != ''?$row->receipt_types_code:$row->invoice_types_code}}</td>
                <td class="text-right">{{$row->algorithm_types_code}}</td>
                <td class="text-right">{{$row->algo_key_name}}</td>
                @if($row->line_items == 1)
                    <td class="text-right">Y</td>
                @else
                    <td class="text-right"></td>
                @endif
                <td>{{$row->inferred_algo_name}}</td>
                <td class="text-center">
                    @if ($row->status === 1)
                        <button type="button" onclick="merchant.edit({{$row->id}})" class="btn btn-small btn-yellow btn-draft">Draft</button>
                    @elseif ($row->status == 2)
                        <button type="button" onclick="merchant.edit({{$row->id}})" class="btn btn-small btn-green btn-ready">Ready</button>
                    @elseif ($row->status == 3)
                        <button type="button" onclick="merchant.edit({{$row->id}})" class="btn btn-small btn-prodd">PROD-D</button>
                    @elseif ($row->status == 4)
                        <button type="button" onclick="merchant.edit({{$row->id}})" class="btn btn-small btn-green btn-prodz">Prod-z</button>
                    @elseif ($row->status == 5)
                        <button type="button" onclick="merchant.edit({{$row->id}})" class="btn btn-small btn-green btn-edit">Edit</button>
                    @elseif ($row->status == 6)
                        <button type="button" onclick="merchant.edit({{$row->id}})" class="btn btn-small btn-moss btn-update">Update</button>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@if ($data->lastPage() > 1)
    <div class="page pull-right">
        <ul class="pagination">
            @if($data->currentPage() == 1)
                <li class="disabled">
                    <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
            @else
                <li>
                    <a href="{{$data->url($data->currentPage() - 1)}}" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
            @endif
            <li>
                <a href="{{$data->url($data->firstItem())}}" aria-label="Next">
                    <span aria-hidden="true">Fist</span>
                </a>
            </li>
            @if($data->lastPage() - $data->currentPage() < 5)
                <?php
                $start = $data->lastPage() - 5 > 0 ? $data->lastPage() - 5 : 1;
                $step = $data->lastPage() > 5 ? $start + 5 : $data->lastPage();
                ?>
            @else
                <?php
                $start = $data->currentPage();
                $step = $start + 5;
                ?>
            @endif
            @for($i = $start;$i<=$step;$i++)
                <li class="{{$i==$data->currentPage()?'active':''}}"><a href="{{$data->url($i)}}">{{$i}}</a></li>
            @endfor
            @if($data->currentPage()+5 < $data->lastPage())
                <li><a href="javascript:void(0)">.......</a></li>
            @endif
            <li>
                <a href="{{$data->url($data->lastPage())}}" aria-label="Next">
                    <span aria-hidden="true">Last</span>
                </a>
            </li>
            @if($data->lastPage() > $data->currentPage())
                <li>
                    <a href="{{$data->url($data->currentPage()+1)}}" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            @else
                <li class="disabled">
                    <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            @endif
        </ul>
    </div>
    @endif
    </div>
    </div>

    @else
            <!-- end have data -->
    <!-- No data-->
    <div class="table-responsive">
        <p class="text-red">No result. Please try again or refesh brower</p>
    </div>
    <!-- end no data -->
@endif
<div id="modal_container" class="show-modal"></div>