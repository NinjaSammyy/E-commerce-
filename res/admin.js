$(".error-box").hide();
$(".msg_underoverlay").hide();
$("form[name='insertCategory']").submit(function (e) {
  let popup_msg = document.getElementsByClassName("popup_msg");
  e.preventDefault();
  if ($("#cat_id").val() != "") {
    let formData = new FormData($(this)[0]);
    $.ajax({
      url: "adminfunction.php?data=updateCategory",
      type: "POST",
      data: formData,
      async: false,
      success: function (data) {
        // alert(data);
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
  // alert(formData);
  $.ajax({
    url: "admin/adminfunction.php?data=login",
    type: "POST",
    data: formData,
    async: false,
    success: function (data) {
      // alert(data);
      if (data == 401) {
        $("#error").html("Invalid Email!");
        $(".error-box").css("background-color", "#fa5c7c");
        $(".error-box").show();
        reload();
      } else if (data == 402) {
        $("#error").html("Successfully Login!");
        $(".error-box").css("background-color", "#0acf97");
        $(".error-box").show();
        window.location.assign("admin/adminpanel.php");
      } else if (data == 403) {
        $("#error").html("Kindly Input the field");
        $(".error-box").css("background-color", "#fa5c7c");
        $(".error-box").show();
        reload();
      } else if (data == 404) {
        $("#error").html("Invalid Password");
        $(".error-box").css("background-color", "#fa5c7c");
        $(".error-box").show();
        reload();
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

// Contact us form

$("form[name='contactUs']").submit(function (e) {
  e.preventDefault();
  let formData = new FormData($(this)[0]);
  $.ajax({
    url: "admin/adminfunction.php?data=contactUs",
    type: "POST",
    data: formData,
    async: false,
    success: function (data) {
      // alert(data);
      if (data == 1000) {
        $("#error").html(
          "Due to some techincal error the query is not submitted Please Try again"
        );
        $(".error-box").css("background-color", "#fa5c7c");
        $(".error-box").show();
        setTimeout(() => {
          let location = window.location;
          location.reload();
        }, 2000);
      } else if (data == 1001) {
        console.log("sdf");
        $("#error").html("Query has been submitted Thankyou!.");
        $(".error-box").show();
        $(".error-box").css("background-color", "#0acf97");
        setTimeout(() => {
          let location = window.location;
          location.reload();
        }, 2000);
      }
    },
    cache: false,
    contentType: false,
    processData: false,
  });
});

function approvedQuery(id, cus_name, cus_email) {
  let datastring =
    "id=" + id + "&cus_name=" + cus_name + "&cus_email" + cus_email;
  $.ajax({
    url: "adminfunction.php?action=approvedQuery",
    data: datastring,
    type: "POST",
    success: function (data) {
      // alert(data);
      if (data == 1000) {
        $(".popup_msg").html("The Mail has been send! Please Continue");
        $(".msg_underoverlay").show();
        document.querySelector(".popup").style.top = "50%";
        document.querySelector(".popup").style.transition = "all 1s";
        setTimeout(() => {
          $(".msg_underoverlay").hide();
        }, 1000);
        setTimeout(() => {
          let location = window.location;
          location.reload();
        }, 1000);
      } else if (data == 1001) {
        $(".popup_msg").html("Due to technical issue mail is not being sent!");
        $(".msg_underoverlay").show();
        setTimeout(() => {
          $(".msg_underoverlay").hide();
        }, 1000);
        setTimeout(() => {
          let location = window.location;
          location.reload();
        }, 1000);
      } else if (data == 1002) {
        $(".popup_msg").html("Customer query doesn't exist");
        $(".msg_underoverlay").show();
        setTimeout(() => {
          $(".msg_underoverlay").hide();
        }, 1000);
        setTimeout(() => {
          let location = window.location;
          location.reload();
        }, 1000);
      }
    },
  });
}

function reload() {
  setTimeout(() => {
    let location = window.location;
    location.reload();
  }, 1000);
}

// Logout User

function logoutUser(email) {
  let datastring = "email=" + email;
  $.ajax({
    url: "adminfunction.php?action=logout",
    data: datastring,
    type: "POST",
    success: function (data) {
      // alert(data);
      if (data == 401) {
        alert("Successfully logout");
        window.location.assign("../login.php");
        
      } else if (data == 402) {
        alert("Technical Error");
      }
    },
  });
}
