$("#btnid2").on("click", function (e) {
  e.preventDefault();
  var hasError = false, values, errormsg;
  $("#registerForm .form-control").each(function () {
    values = $(this).val();
    if (!values.length) {
      hasError = true;
      errormsg = $(this).attr("data-errmsg");
      $(this).addClass("errorInput").attr("placeholder",errormsg);
    }
  });

  if (hasError) {


  }
  else {
    $("#registerForm").submit();
  }
})


$(document).on("keyup change", ".errorInput", function () {
  var val = $(this).val();
  if (val.length > 0) {
    $(this).removeClass("errorInput").addClass("succs");
  }
  else {
    $(this).addClass("errorInput").removeClass("succs");
  }
})
