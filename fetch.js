let btnAction = "Insert";

// $("#servicesForm").submit(function(e){
//     e.preventDefault();

    // this variable have the form data
    // let form_data = new FormData($("#servicesForm")[0]);

    //adds the action to the form value
//     if(btnAction == "Insert"){ 
//         form_data.append("action", "registerStudent");
//     }else{
//         form_data.append("action", "updateService");
//     }
// })
// function fetchService(id){
//     let sendingData ={
//         "action":"readServices",
//         "id": id,
//     }

//     $.ajax({
//         method : "POST",
//         dataType: "JSON",
//         url : "api.php",
//         data : sendingData,
//         success: function(data){
//             let status = data.status;
//             let response = data.data;

//             if(status){
//                 $("#id").val(response[0].id);
//                 $("#title").val(response[0].card_title);
//                 $("#content").val(response[0].card_content);

//                 $("#serviceModal").modal("show");
//                 btnAction = "Update";
//             }
//         },
//         error: function(date){

//         }
//     })
// }
// $("#servicesTable").on("click", ".btn_update", function(){
    // let id = $(this).attr("update_id"); // this reads and retrieves the row id 
    // console.log(id);
    // fetchService(id);
// })