@extends('layouts.layouts')
@section('content')
@if (count($data) > 0)
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
                    @if ($row->status === 1)
                        <button type="button" class="btn btn-small btn-yellow btn-draft">Draft</button>
                    @elseif ($row->status == 2)
                        <button type="button" class="btn btn-small btn-green btn-ready">Ready</button>
                    @elseif ($row->status == 3)
                        <button type="button" class="btn btn-small btn-prodd">PROD-D</button>
                    @elseif ($row->status == 4)
                        <button type="button" class="btn btn-small btn-green btn-prodz">Prod-z</button>
                    @elseif ($row->status == 5)
                        <button type="button" class="btn btn-small btn-green btn-edit">Edit</button>
                    @elseif ($row->status == 6)
                        <button type="button" class="btn btn-small btn-moss btn-update">Update</button>
                    @endif
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
<div class="container-fluid footer">
    <ul class="pull-right">
        <li><a href="#"><<</a></li>
        <li><a href="#">Pre</a></li>
        <li><a href="#">Next</a></li>
        <li><a href="#">>></a></li>
    </ul>
</div>
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
@endsection










