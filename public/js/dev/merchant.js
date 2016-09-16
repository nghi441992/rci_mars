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
        aync: false,
        type: "GET",
        url: url,
        success: function (data) {
            listCountry = $.parseJSON(data);
            $.each(listCountry,function (i,item) {
                $("select[name='Merchant[hqCountry]']").append('<option idHqCountry = '+item.id+' value='+item.code+'>'+item.name+'</option>');
                $("select[name='Merchant[posCountry]']").append('<option idPosCountry = '+item.id+' value='+item.code+'>'+item.name+'</option>');
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
        aync: false,
        type: "GET",
        url: url,
        success: function (data) {
            // merchant.returnData(data);
            listDocumentType = $.parseJSON(data);
            $.each(listDocumentType,function (i,item) {
                $("select[name='Merchant[documentType]']").append('<option value='+item.code+'>'+item.code+'</option>');
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
        aync: false,
        type: "GET",
        url: url,
        success: function (data) {
            // merchant.returnData(data);
            listAlgoType = $.parseJSON(data);
            $.each(listAlgoType,function (i,item) {
                $("select[name='Merchant[alogoType]']").append('<option value='+item.code+'>'+item.code+'</option>');
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
        if($(this).attr('name') == 'Merchant[optionsRadios]')
            data[$(this).attr('name')] = $("input[name='Merchant[optionsRadios]']:checked").val();
        else
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
            if(data.status)
            {
                alert('ahuhu');
                $('#modal-add-merchant').modal().hide();
                merchant.showMessage('Insert merchant success!');
                $('#modalSeachFilter').modal('show');
            }
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

merchant.fillInferredAlgoName = function () {
    var documentType = merchant.documentType;
    var algotype = merchant.alogoType;
    var countryCode = merchant.posCountry;
    var algoKeyName = merchant.algoKeyName;
    // console.log(documentType + ' ' + algotype + ' '+countryCode+ ' '+  algoKeyName);
    if(documentType != '' && algotype != '' && countryCode != '' && algoKeyName != '')
    {
        var inferredAlgoName = documentType +'-'+algotype+'-'+countryCode+'-'+algoKeyName;
        $("input[name='Merchant[inferredAlgoName]']").attr('value',inferredAlgoName);
    }
    else
    {
        // $('#save-merchant').disable();
        return false;
    }
};


$(document).on('change','.modal-body',function () {
    merchant.fillInferredAlgoName();
});
$(document).on('change', "select[name='Merchant[documentType]']", function (e) {
    merchant.documentType = $(this).val();
});
$(document).on('change', "select[name='Merchant[alogoType]']", function (e) {
    merchant.alogoType = $(this).val();
});
$(document).on('change', "select[name='Merchant[posCountry]']", function (e) {
    merchant.posCountry = $(this).val();
});

$(document).on('change', "input[name='Merchant[algoKeyName]']", function (e) {
    merchant.algoKeyName = $(this).val();
});




