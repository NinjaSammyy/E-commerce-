$(".error-box").hide();

$("form[name='insertCategory']").submit(function (e) {
  e.preventDefault();
  if ($("#cat_id").val() != "") {
    let formData = new FormData($(this)[0]);
    $.ajax({
      url: "adminfunction.php?data=updateCategory",
      type: "POST",
      data: formData,
      async: false,
      success: function (data) {
        alert(data);
        if (data == 1001) {
          $("#error").html("Data has been Updated Successfully");
          $(".error-box").show();
          $(".error-box").css("background-color", "#0acf97");
          setTimeout(() => {
            window.location.reload();
            let location = window.location;
            location.reload();
          }, 1000);
        } else if (data == 1002) {
          $("#error").html("Cannot be updated!");
          $(".error-box").show();
          $(".error-box").css("background-color", "#fa5c7c");
        } else if (data == 500) {
          alert("Error uploading your file");
        } else if (data == 501) {
          alert("File has been uploaded");
        } else if (data == 900) {
          alert("File is not an image");
        } else if (data == 901) {
          alert("File already exists");
        } else if (data == 902) {
          alert("FIle size is greater");
        } else if (data == 903 || data == 904) {
          alert("error uploading file");
        } else if (data == 904) {
          alert("File has been uploaded");
        } else if (data == 905) {
          alert("Can not be processed your image");
        }
      },
      cache: false,
      contentType: false,
      processData: false,
    });
  } else {
    let formData = new FormData($(this)[0]);
    $.ajax({
      url: "adminfunction.php?data=insertCategory",
      type: "POST",
      data: formData,
      async: false,
      success: function (data) {
        if (data == 1000) {
          $("#error").html("Entered Category name is already exists!.");
          $(".error-box").css("background-color", "#fa5c7c");
          $(".error-box").show();
          setTimeout(() => {
            window.location.reload();
            let location = window.location;
            location.reload();
          }, 2000);
        } else if (data == 1001) {
          $("#error").html("Data has been submitted Successfully");
          $(".error-box").show();
          $(".error-box").css("background-color", "#0acf97");
          setTimeout(() => {
            window.location.reload();
            let location = window.location;
            location.reload();
          }, 1000);
        } else if (data == 500) {
          alert("Error uploading your file");
        } else if (data == 501) {
          alert("File has been uploaded");
        } else if (data == 900) {
          alert("File is not an image");
        } else if (data == 901) {
          alert("File already exists");
        } else if (data == 902) {
          alert("FIle size is greater");
        } else if (data == 903 || data == 904) {
          alert("error uploading file");
        } else if (data == 904) {
          alert("File has been uploaded");
        }
      },
      cache: false,
      contentType: false,
      processData: false,
    });
  }
});

$("form[name='insertSubCategory']").submit(function (e) {
  e.preventDefault();
  let formData = new FormData($(this)[0]);
  $.ajax({
    url: "adminfunction.php?data=insertSubCategory",
    type: "POST",
    data: formData,
    async: false,
    success: function (data) {
      // alert(data);
      if (data == 1000) {
        $("#error").html("Entered Sub name is already exists!.");
        $(".error-box").css("background-color", "#fa5c7c");
        $(".error-box").show();
        setTimeout(() => {
          let location = window.location;
          location.reload();
        }, 2000);
      } else if (data == 1001) {
        console.log("sdf");
        $("#error").html("Data has been submitted Successfully");
        $(".error-box").show();
        $(".error-box").css("background-color", "#0acf97");
        setTimeout(() => {
          let location = window.location;
          location.reload();
        }, 1000);
      }
    },
    cache: false,
    contentType: false,
    processData: false,
  });
});

$("form[name='loginform']").submit(function (e) {
  e.preventDefault();
  let formData = new FormData($(this)[0]);
  $.ajax({
    url: "adminfunction.php?data=login",
    type: "POST",
    data: formData,
    async: false,
    success: function (data) {
      if (data == 401) {
        $("#error").html("Invalid Email!");
        $(".error-box").css("background-color", "#fa5c7c");
        $(".error-box").show();
      } else if (data == 402) {
        $("#error").html("Successfully Login!");
        $(".error-box").css("background-color", "#0acf97");
        $(".error-box").show();
        window.location.assign("./adminpanel.php");
      } else if (data == 403) {
        $("#error").html("Kindly Input the field");
        $(".error-box").css("background-color", "#fa5c7c");
        $(".error-box").show();
      } else if (data == 404) {
        $("#error").html("Invalid Password");
        $(".error-box").css("background-color", "#fa5c7c");
        $(".error-box").show();
      }
    },
    cache: false,
    contentType: false,
    processData: false,
  });
});

// Delete Data function
function deleteData(id, img) {
  let datastring = "id=" + id + "&image=" + img;
  $.ajax({
    url: "adminfunction.php?action=deleteData",
    data: datastring,
    type: "POST",
    success: function (data) {
      // alert(data);
      if (data == 401) {
        $("#error").html("Item is deleted");
        $(".error-box").css("background-color", "#0acf97");
        $(".error-box").show();
        setTimeout(() => {
          let location = window.location;
          location.reload();
        }, 2000);
      } else if (data == 402) {
        alert(data);
        $("#error").html("Unable to delete");
        $(".error-box").css("background-color", "#fa5c7c");
        $(".error-box").show();
        setTimeout(() => {
          let location = window.location;
          location.reload();
        }, 2000);
      }
    },
  });
}

function deleteSd(id, img) {
  let datastring = "id=" + id + "&image=" + img;
  // alert(datastring);
  $.ajax({
    url: "adminfunction.php?action=deleteSd",
    data: datastring,
    type: "POST",
    success: function (data) {
      if (data == 401) {
        $("#error").html("Item is deleted");
        $(".error-box").css("background-color", "#0acf97");
        $(".error-box").show();
        setTimeout(() => {
          let location = window.location;
          location.reload();
        }, 1000);
      } else if (data == 402) {
        $("#error").html("Unable to delete");
        $(".error-box").css("background-color", "#fa5c7c");
        $(".error-box").show();
        setTimeout(() => {
          let location = window.location;
          location.reload();
        }, 1000);
      }
    },
  });
}

function editData(id) {
  let datastring = "id=" + id;
  // alert(datastring);
  $.ajax({
    url: "adminfunction.php?action=editData",
    data: datastring,
    type: "POST",
    success: function (data) {
      let obj = JSON.parse(data);
      if (obj) {
        $("#cat_name").val(obj[0].category_name);
        $("#cat_id").val(obj[0].id);
        $("#cat_desc").val(obj[0].meta_desc);
        $("#cat_meta").val(obj[0].meta_title);
        $("#cat_slug").val(obj[0].slug);
        $("#cat_oldimg").attr("src", obj[0].category_img);
      } else if (data == 402) {
        $("#error").html("Unable to edit");
        $(".error-box").css("background-color", "#fa5c7c");
        $(".error-box").show();
        setTimeout(() => {
          let location = window.location;
          location.reload();
        }, 1000);
      }
    },
  });
}