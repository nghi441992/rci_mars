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
                $("#hqCountry").append('<option idHqCountry = '+item.id+' value='+item.code+'>'+item.name+'</option>');
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
    $("#modal_container").load('template/formmerchant.blade.php',function () {
        $('#modal-add-merchant').modal('show');
    });
};
merchant.addNew = function () {
    var data = {};
    var idMerchant = $("#id_merchant_hidden").val();
    $('[name^="Merchant"]').each(function() {
        if($(this).attr('name') == 'Merchant[optionsRadios]')
            data[$(this).attr('name')] = $("input[name='Merchant[optionsRadios]']:checked").val();
        else  if($(this).attr('name') == 'Merchant[listKeyWord]')
        {
            var listKeyword = $("ul[name='Merchant[listKeyWord]']").find('li');
            if(listKeyword.length > 0)
            {
                console.log(listKeyword);
                var arrKeywored = [];
                $.each( listKeyword, function( key, value ) {
                    arrKeywored[key] = $(value).attr('data');
                });
                data[$(this).attr('name')] = arrKeywored;
            }
        }
        else
            data[$(this).attr('name')] = $(this).val();
    });
    var url = fly.baseUrl + "/addNewMerChant";
    var data1 = JSON.stringify(data);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    if(idMerchant != '' && $.isNumeric(idMerchant))
    {
        var url = fly.baseUrl + "/editNewMerChant";
        var data1 = JSON.stringify(data);
        $.ajax({
            type: "POST",
            url: url,
            data: {'idMerchant':idMerchant,'data':data1},
            success: function (data) {
                if(data.status)
                {
                    $('#modal-add-merchant').modal('hide');
                    merchant.showMessage('Edit merchant success!');
                    $('#modalSeachFilter').modal('show');
                }else{
                    merchant.showMessage('Error.Please check again!');
                    $('#modalSeachFilter').modal('show');
                }
            },
            error: function (data) {
                $('.modal-search').css('display','none');
                console.log('Error:', data);
            }
        });
    }else {
        $.ajax({
            type: "POST",
            url: url,
            data: {'data':data1},
            success: function (data) {
                if(data.status)
                {
                    $('#modal-add-merchant').modal('hide');
                    merchant.showMessage('Insert merchant success!');
                    $('#modalSeachFilter').modal('show');
                }else{
                    merchant.showMessage('Error.Please check again!');
                    $('#modalSeachFilter').modal('show');
                }
            },
            error: function (data) {
                $('.modal-search').css('display','none');
                console.log('Error:', data);
            }
        });
    }

};

merchant.edit = function (merchantId) {
    merchant.preAddNew();
    var url = fly.baseUrl + "/getOneMerchant";
    // var data1 = JSON.stringify(data);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    })
    $.ajax({
        type: "POST",
        url: url,
        data: {'merchantId':merchantId},
        success: function (data) {
            if(data.status)
            {
                var dataMerchant = $.parseJSON(data.data);
                console.log(dataMerchant.dataMerchant);
                $("input[name='Merchant[merchantName]']").val(dataMerchant.dataMerchant.name);
                $("#hqCountry").append('<option idHqCountry = '+dataMerchant.hqcountry[0].id+' selected="selected" value='+dataMerchant.hqcountry[0].code+'>'+dataMerchant.hqcountry[0].name+'</option>');
                $("select[name='Merchant[posCountry]']").append('<option idPosCountry = '+dataMerchant.poscountry[0].id + ' selected="selected" value='+dataMerchant.poscountry[0].code+'>'+dataMerchant.poscountry[0].name+'</option>');
                $("input[name='Merchant[city]']").val(dataMerchant.dataMerchant.city);
                $("input[name='Merchant[postalcode]']").val(dataMerchant.dataMerchant.postal_code);
                $("#id_merchant_hidden").val(dataMerchant.dataMerchant.id);
            }else {
                merchant.showMessage('Merchant not exits!');
                $('#modalSeachFilter').modal('show');
            }
        },
        error: function (data) {
            $('.modal-search').css('display','none');
            console.log('Error:', data);
        }
    });
    
};

merchant.delete = function () {
    var txt;
    var r = confirm("Are you sure that you want to delete this merchant?");
    if (r == true) {
        var merchantId = utils.removeSpecialChar($("#id_merchant_hidden").val());
        if(merchantId != null && $.isNumeric(merchantId)) {
            var url = fly.baseUrl + "/deleteMerchant";
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: url,
                data: {'merchantId':merchantId},
                success: function (data) {
                    if(data.status)
                    {
                        $('#modal-add-merchant').modal('hide');
                        merchant.showMessage('Delete merchant success!');
                        $('#modalSeachFilter').modal('show');

                    }else {
                        merchant.showMessage('Merchant not exits!');
                        $('#modalSeachFilter').modal('show');
                    }
                },
                error: function (data) {
                    $('.modal-search').css('display','none');
                    console.log('Error:', data);
                }
            });
        }else {
            merchant.showMessage('Error please try again!');
            $('#modalSeachFilter').modal('show');
        }
    }
 
};
merchant.addNewKeyword = function (keyword) {
    $('#list_keyword').append('<li data = "'+keyword+'"> <a href="#">'+keyword+'</a> <button type="button" class="close" aria-label="Close"><span aria-hidden="true" onclick="merchant.deleteKeyword(this)">&times;</span></button> </li>');
};

merchant.deleteKeyword = function (element) {
    $(element).parent().parent().remove();
};

merchant.showMessage = function (str) {
    $('#modalSeachFilter .alert-danger').html(str);
    $("#modalSeachFilter").on('hide', function () {
        window.location.reload();
    });
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

$(document).on('change', "input[name='Merchant[optionsRadios]']", function (e) {
    var valueCheced =  $("input[name='Merchant[optionsRadios]']:checked").val();
    if(valueCheced == '1')
    {
        merchant.algoKeyName = $("input[name='Merchant[algoKeyName]']").val() + '-Y';
        $("input[name='Merchant[algoKeyName]']").val(merchant.algoKeyName);
    }
    else
    {
        merchant.algoKeyName = $("input[name='Merchant[algoKeyName]']").val().replace('-Y','');
        $("input[name='Merchant[algoKeyName]']").val(merchant.algoKeyName);
    }


});




