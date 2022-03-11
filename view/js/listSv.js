$(document).ready(function(){
    
    $('#btn_add').click(function (e) { 
        location.href = "addsv.php";
        e.preventDefault();
    });
    
    var myArray = [];

    $.ajax({
        url: "http://localhost:80/formsv/api/read.php",
        method: 'GET',
        dataType: "json",
        success: function(response) {
            myArray = response.data
            buildTable(myArray);
            // console.log(myArray);
            // console.log(response);
        }
    });
    function buildTable(data) {
        console.log(data); 
        var table = document.getElementById('table_api');
        data.map((item) => {
            // console.log(item);
            var row =  `<tr>
            <td>${item.id}</td>
            <td>${item.masv}</td>
            <td>${item.hodem} ${item.ten} </td>
            <td>${item.gioitinh}</td>
            <td>${item.ngaysinh}</td>
            <td>${item.sdt}</td>
            <td>${item.email}</td>
            <td>${item.noisinh}</td>
            <td>${item.cccd}</td>
            <td>${item.diachi}</td>
            <td>
                <button type="button" class="btn btn-outline-primary btn-sm"><i class="fa fa-edit"></i></button>
                <button type="button" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></button>
            </td>
            

        </tr>`
        table.innerHTML += row;
        })
        // for (var i=0; i<data.lenngth; i++){
        //     console.log(i);
        //     var row = `<tr>
        //                     <td>${data.id}</td>
        //                     <td>${data.masv}</td>
        //                     <td>${data.ten} </td>
        //                     <td>${data.gioitinh}</td>
        //                     <td>${data.ngaysinh}</td>
        //                     <td>${data.sdt}</td>
        //                     <td>${data.email}</td>
        //                     <td>${data.noisinh}</td>
        //                     <td>${data.cccd}</td>
        //                     <td>${data.diachi}</td>
            
        //                 </tr>`
        //     table.innerHTML += row;
        // }
    }
    
});