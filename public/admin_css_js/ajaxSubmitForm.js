$(".submitForm").submit(function(event){
    event.preventDefault();
    $(".submitFormBtn").attr("disabled", true);
    $(".formSpinner").show();
    var formData = new FormData($(this)[0]);
    if(typeof route === undefined || typeof route === 'undefined'){
      route = $('.submitForm').attr('action');
    }
    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
    $.ajax({
        url: route,
        type: 'POST',
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function (returndata, statusText, xhr) {
          $(".formSpinner").hide();
          $(".submitFormBtn").attr("disabled", false);
          if(xhr.status == 200 &&  statusText == 'success'){
            swal("Poooof!", "Success!", "success").then((value) => {
              $("form")[0].reset();
              window.location.reload(true); 
            });
          }
        },
        error: function (returndata) {
          $(".formSpinner").hide();
          $(".submitFormBtn").attr("disabled", false);
          var errors = returndata.responseJSON;
          var response = 'Error!';
          if(typeof errors !== null){
            var deepErrors = errors.errors;
            response = String(deepErrors[Object.keys(deepErrors)[0]]);
          }else if(typeof returndata.responseText !== null){
            response = returndata.responseText;
          }
			    swal("Error!", response , "error");
        }
    });
    return false;
});

