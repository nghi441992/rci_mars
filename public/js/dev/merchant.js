var merchant = {};

merchant.binData = function () {
    var listCountry = merchant.getListCountry();
    var listDocumentType = merchant.getListDocumentType();
    var listAlgoType = merchant.getListAlgoType();
};
merchant.getListCountry = function () {
    var listCountry = null;
    var url = fly.baseUrl + "/getListCountry";
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    $.ajax({
        type: "GET",
        url: url,
        success: function (data) {
            // merchant.returnData(data);
            listCountry = $.parseJSON(data);
            $.each(listCountry,function (i,item) {
                $("select[name='Merchant[hqCountry]']").append('<option value='+item.id+'>'+item.name+'</option>');
            });
        },
        error: function (data) {
            console.log(data);
        }
    });
};

merchant.getListDocumentType = function () {
    var listDocumentType = null;
    var url = fly.baseUrl + "/getListDocumentType";
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    $.ajax({
        type: "GET",
        url: url,
        success: function (data) {
            // merchant.returnData(data);
            listDocumentType = $.parseJSON(data);
            $.each(listDocumentType,function (i,item) {
                $("select[name='Merchant[documentType]']").append('<option value='+item.id+'>'+item.name+'</option>');
            });
        },
        error: function (data) {
           console.log(data);
        }
    });
};

merchant.getListAlgoType = function () {
    var listAlgoType= null;
    var url = fly.baseUrl + "/getListAlgoType";
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    $.ajax({
        type: "GET",
        url: url,
        success: function (data) {
            // merchant.returnData(data);
            listAlgoType = $.parseJSON(data);
            $.each(listAlgoType,function (i,item) {
                $("select[name='Merchant[alogoType]']").append('<option value='+item.id+'>'+item.name+'</option>');
            });
        },
        error: function (data) {
            console.log(data);
        }
    });
};


merchant.preAddNew = function () {
    $(".show-modal").load('template/formmerchant.blade.php',function () {
        var content = $('#modal-add-merchant').parent().html();
        var modal = $(content);
        modal.modal('show');
    });
    merchant.binData();
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




