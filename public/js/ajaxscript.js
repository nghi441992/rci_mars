/**
 * Created by nghipt on 9/6/2016.
 */

//display modal form for product editing
$(document).on('click','#search-keyword',function(){
    var url = fly.baseUrl + "/searchMerchant";
    var keyword = $('input[name=search-keyword]').val();
    $('.modal-search').css('display','block');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    })
    $.ajax({
        type: "POST",
        url:  url,
        data: {'keyword': keyword},
        success: function (data) {
            $('.modal-search').css('display','none');
            $('.main-content').html(data);
        },
        error: function (data) {
            $('.modal-search').css('display','none');
            console.log('Error:', data);
        }
    });
});

//delete product and remove it from list
$(document).on('click','#sort-status-alpha',function(){
    var alphabet = $('#sort-alpha-select input[name=alpha-select]').val();
    var status = utils.removeDiacritical($('#select-status').val());
    if(!utils.alphabet(alphabet)) {
        alphabet = null;
    }
    var url = fly.baseUrl + "/searchMerchant";
    $('.modal-search').css('display','block');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    })
    $.ajax({
        type: "POST",
        url: url,
        data: {'alphabet':alphabet,'status':status},
        success: function (data) {
            $('.modal-search').css('display','none');
            $('.main-content').html(data);
        },
        error: function (data) {
            $('.modal-search').css('display','none');
            console.log('Error:', data);
        }
    });
});
//create new product / update existing product
$("#btn-save").click(function (e) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    })
    e.preventDefault();
    var formData = {
        name: $('#name').val(),
        details: $('#details').val(),
    }
    //used to determine the http verb to use [add=POST], [update=PUT]
    var state = $('#btn-save').val();
    var type = "POST"; //for creating new resource
    var product_id = $('#product_id').val();;
    var my_url = url;
    if (state == "update"){
        type = "PUT"; //for updating existing resource
        my_url += '/' + product_id;
    }
    console.log(formData);
    $.ajax({
        type: type,
        url: my_url,
        data: formData,
        dataType: 'json',
        success: function (data) {
            console.log(data);
            var product = '<tr id="product' + data.id + '"><td>' + data.id + '</td><td>' + data.name + '</td><td>' + data.details + '</td>';
            product += '<td><button class="btn btn-warning btn-detail open_modal" value="' + data.id + '">Edit</button>';
            product += ' <button class="btn btn-danger btn-delete delete-product" value="' + data.id + '">Delete</button></td></tr>';
            if (state == "add"){ //if user added a new record
                $('#products-list').append(product);
            }else{ //if user updated an existing record
                $("#product" + product_id).replaceWith( product );
            }
            $('#frmProducts').trigger("reset");
            $('#myModal').modal('hide')
        },
        error: function (data) {
            console.log('Error:', data);
        }
    });
});
