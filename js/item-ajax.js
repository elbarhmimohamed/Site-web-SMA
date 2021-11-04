$( document ).ready(function() {


    var page = 1;
    
    var current_page = 1;
    
    var total_page = 0;
    
    var is_ajax_fire = 0;
    
    
    manageData();
    
    
    /* manage data list */
    
    function manageData() {
    
        $.ajax({
    
            dataType: 'json',
    
            url: url+'getData.php',
    
            data: {page:page}
    
        }).done(function(data){
    
            total_page = Math.ceil(data.total/10);
    
            current_page = page;
    
    
            $('#pagination').twbsPagination({
    
                totalPages: total_page,
    
                visiblePages: current_page,
    
                onPageClick: function (event, pageL) {
    
                    page = pageL;
    
                    if(is_ajax_fire != 0){
    
                      getPageData();
    
                    }
    
                }
    
            });
    
    
            manageRow(data.data);
    
            is_ajax_fire = 1;
    
    
        });
    
    
    }
    
    
    /* Get Page Data*/
    
    function getPageData() {
    
        $.ajax({
    
            dataType: 'json',
    
            url: url+'getData.php',
    
            data: {page:page}
    
        }).done(function(data){
    
            manageRow(data.data);
    
        });
    
    }
    
    
    /* Add new Item table row */
    
    function manageRow(data) {
    
        var	rows = '';
    
        $.each( data, function( key, value ) {
    
              rows = rows + '<tr>';
    
              rows = rows + '<td>'+value.nom+'</td>';
    
              rows = rows + '<td>'+value.password+'</td>';
    
              rows = rows + '<td data-id="'+value.id+'">';
    
            rows = rows + '<button data-toggle="modal" data-target="#edit-item" class="btn btn-primary edit-item">Edit</button> ';
    
            rows = rows + '<button class="btn btn-danger remove-item">Delete</button>';
    
            rows = rows + '</td>';
    
              rows = rows + '</tr>';
    
        });
    
    
        $("tbody").html(rows);
    
    }
    
    
    /* Create new Item */
    
    $(".crud-submit").click(function(e){
    
        //e.preventDefault();
    
        var form_action = $("#create-item").find("form").attr("action");
    
        var nom = $("#create-item").find("input[name='nom']").val();
    
        var password = $("#create-item").find("textarea[name='password']").val();
    
    
        if(nom != '' && password != ''){
    
            $.ajax({
    
                dataType: 'json',
    
                type:'POST',
    
                url: url + form_action,
    
                data:{nom:nom, password:password}
    
            }).done(function(data){
    
                $("#create-item").find("input[name='title']").val('');
    
                $("#create-item").find("textarea[name='description']").val('');
    
                getPageData();
    
                $(".modal").modal('hide');
    
                toastr.success('Item Created Successfully.', 'Success Alert', {timeOut: 5000});
    
            });
    
        }else{
    
            alert('You are missing name or password.')
    
        }
    
    
    });
    
    
    /* Remove Item */
    
    $("body").on("click",".remove-item",function(){
    
        var id = $(this).parent("td").data('id');
    
        var c_obj = $(this).parents("tr");
    
    
        $.ajax({
    
            dataType: 'json',
    
            type:'POST',
    
            url: url + 'getData.php',
    
            data:{id:id}
    
        }).done(function(data){
    
            c_obj.remove();
    
            toastr.success('Item Deleted Successfully.', 'Success Alert', {timeOut: 5000});
    
            getPageData();
    
        });
    
    
    });
    
    
    /* Edit Item */
    
    $("body").on("click",".edit-item",function(){
    
    
        var id = $(this).parent("td").data('id');
    
        var nom = $(this).parent("td").prev("td").prev("td").text();
    
        var password = $(this).parent("td").prev("td").text();
    
    
        $("#edit-item").find("input[name='title']").val(nom);
    
        $("#edit-item").find("textarea[name='description']").val(password);
    
        $("#edit-item").find(".edit-id").val(id);
    
    
    });
    
    
    /* Updated new Item */
    
    $(".crud-submit-edit").click(function(e){
    
    
        e.preventDefault();
    
        var form_action = $("#edit-item").find("form").attr("action");
    
        var nom = $("#edit-item").find("input[name='nom']").val();
    
    
        var password = $("#edit-item").find("textarea[name='password']").val();
    
        var id = $("#edit-item").find(".edit-id").val();
    
    
        if(nom != '' && password != ''){
    
            $.ajax({
    
                dataType: 'json',
    
                type:'POST',
    
                url: url + form_action,
    
                data:{nom:nom, password:password,id:id}
    
            }).done(function(data){
    
                getPageData();
    
                $(".modal").modal('hide');
    
                toastr.success('Item Updated Successfully.', 'Success Alert', {timeOut: 5000});
    
            });
    
        }else{
    
            alert('You are missing title or description.')
    
        }
    
    
    });
    
    });