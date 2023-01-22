
//appid, name, cgpa, subject, uni,  download

     var data=[];
    $.ajax({
        type:"GET",
        url: "http://localhost/bio/data_table",
        async: false,
        success: function(result){
            console.log(result);
            obj=JSON.parse(result);
            obj.forEach(function(entry){
                console.log(entry);
                nobj={
                    formCode: entry.emp_id,
                    formName: entry.pno,
                    fullName: entry.name,
                    appointmentDate: entry.post,
                    appointmentTime: '<a  style="margin-left:30%" class="editcl" id="edit_'+entry.emp_id+'"  href="#ex1" rel="modal:open"  data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>&nbsp;&nbsp;<a  class="remove" style="cursor: pointer;" id="delete_'+entry.emp_id+'" data-toggle="tooltip" data-original-title="Remove"><i class="fa fa-trash" aria-hidden="true"></i></a>', 
                    phone: "<a href='http://localhost/bio/generate?emp_id="+entry.emp_id +"' target='_blank'><button type='button' class='btn btn-sm btn-outline-dark mb-0'>Generate</button></a>"

                };
                //&nbsp;&nbsp;<a href="#ex2" rel="modal:open"  data-toggle="tooltip" data-original-title="Remove"><i class="fa fa-trash" aria-hidden="true"></i></a>',
                   
                data.push(nobj);


            });

        }
    });



//appid, name, cgpa, subject, uni,  download
var columns = {
    formCode: 'ID',
    formName: 'P.No',
    fullName: 'Name',
    appointmentDate: 'Post',
    appointmentTime: 'Action',
    phone: 'Report',
}
