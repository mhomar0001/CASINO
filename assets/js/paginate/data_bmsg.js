
//appid, name, cgpa, subject, uni,  download

     var data=[];
    $.ajax({
        type:"GET",
        url: "http://163.53.150.36:9980/job-portal/adminconx/get_applicationsbypostid?id=111",
        async: false,
        success: function(result){
            console.log(result);
            obj=JSON.parse(result);
            obj.forEach(function(entry){
                console.log(entry);
                nobj={
                    formCode: entry.app_id,
                    formName: entry.name,
                    fullName: entry.grad_result,
                    appointmentDate: entry.grad_degree,
                    appointmentTime: entry.grad_inst,
                    phone: "<a href='http://163.53.150.36:9980/job-portal/resume/?app_id="+entry.app_id+"' target='_blank'>CV</a>",
                };

                data.push(nobj);


            });

        }
    });



//appid, name, cgpa, subject, uni,  download
var columns = {
    formCode: 'ID',
    formName: 'Name',
    fullName: 'CGPA',
    appointmentDate: 'Subject',
    appointmentTime: 'University',
    phone: 'Resume',
}
