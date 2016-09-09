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

merchant.addNew = function () {
      var sdfsdf = merchant.getListCountry();
    console.log(sdfsdf);
    var data = [
        'US','UK','KN'
    ];
    data = JSON.stringify(data);
    $(".show-modal").load('template/formmerchant.blade.php',{'data':data},function () {
        var content = $('#modal-add-merchant').parent().html();
        var modal = $(content);
        modal.modal('show');
    });
}




