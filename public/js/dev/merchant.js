var merchant = {};

merchant.getListCountry = function () {
    var url = fly.baseUrl + "/getListCountry";
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    })
    $.ajax({
        type: "GET",
        url: url,
        success: function (data) {
            merchant.listCountry = data;
            return data;
        },
        error: function (data) {
            $('.modal-search').css('display','none');
            console.log('Error:', data);
        }
    });
}

merchant.preAddNew = function () {
      // var sdfsdf = merchant.getListCountry();
    var data = [
        'US','UK','KN'
    ];
    data = JSON.stringify(data);
    $(".show-modal").load('template/formmerchant.blade.php',{'data':data},function () {
        var content = $('#modal-add-merchant').parent().html();
        var modal = $(content);
        modal.modal('show');
    });
};
merchant.addNew = function () {
    var data = {};
    $('[name^="Merchant"]').each(function() {
        data[$(this).attr('name')] = $(this).val();
    });
    var url = fly.baseUrl + "/addNewMerChant";
    var data1 = JSON.stringify(data);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    })
    $.ajax({
        type: "POST",
        url: url,
        data: {'data':data1},
        success: function (data) {
            merchant.showMessage('Insert merchant success!');
            $('#modal-add-merchant').modal().hide();
            $('#modalSeachFilter').modal('show');
        },
        error: function (data) {
            $('.modal-search').css('display','none');
            console.log('Error:', data);
        }
    });
};
merchant.showMessage = function (str) {
    $('#modalSeachFilter .alert-danger').html(str);
};




