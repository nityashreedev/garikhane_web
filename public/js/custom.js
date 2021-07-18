$(document).on('click', '.changeStatus', function() {

    if(!confirm($(this).data('confirm'))){
        e.stopImmediatePropagation();
        e.preventDefault();
    }


    var user_id = $(this).data('id');
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "{{url('/admin/changeStatus')}}",
        data: {'user_id': user_id},
        cache: false,
        success: function(data){
            if(data.status === 'success')
            {
                $('button.changestatus-'+data.userId).text(data.text);
                $('td.status-'+data.userId).text(data.newStatus);
            }
        },
        failure: function(){
            console.log("failed")
        }
    });
});


function deleteData(element) {

    var url = $(element).attr('href');
    $("#deleteForm").attr('action', url);
}
