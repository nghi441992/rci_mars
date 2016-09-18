/**
 * Created by nghipt on 9/6/2016.
 */

//display modal form for product editing
$(document).on('click','#search-keyword',function(){
    seachKeywordFilter();
});

//delete product and remove it from list
$(document).on('click','#sort-status-alpha',function(){
    seachKeywordFilter(true);
});

$(document).on('keypress',document,function (e) {
    if($('body').hasClass('modal-open')){
        return;
    }
    if(e.which == 13) {
        seachKeywordFilter();
    }
});

function showMessage(str) {
    $('#modalSeachFilter .alert-danger').html(str);
};
function seachKeywordFilter(flag) {
    var url = fly.baseUrl + "/searchMerchant";
    var keyword = utils.removeDiacritical($('input[name=search-keyword]').val());
    var alphabet = $('#sort-alpha-select input[name=alpha-select]').val();
    var status = utils.removeDiacritical($('#select-status').val());
    if(!utils.alphabet(alphabet)) {
        alphabet = null;
    }
    keyword = keyword != ''?keyword:null; status = status!=''?status:null;
    if(flag) {
        if(alphabet == null && status == null) {
            showMessage('Please select data filter');
            $('#modalSeachFilter').modal('show');
            return false;
        }
    }
    // if(keyword == null && alphabet == null && status == null) {
    //     showMessage('Please enter merchant name');
    //     $('#modalSeachFilter').modal('show');
    //     return false;
    // }
    $('.modal-search').css('display','block');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    })
    $.ajax({
        type: "POST",
        url: url,
        data: {'keyword':keyword,'alphabet':alphabet,'status':status},
        success: function (data) {
            $('.modal-search').css('display','none');
            $('#table-data-list').html(data);
        },
        error: function (data) {
            $('.modal-search').css('display','none');
            console.log('Error:', data);
        }
    });
};

