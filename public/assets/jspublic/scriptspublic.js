// pencarian di kolom koleksi

var $rows = $(".koleksi .benda");

$("#pencarianbenda").keyup(function () {
  var val = $.trim($(this).val()).replace(/ +/g, " ").toLowerCase();

  $rows
    .show()
    .filter(function () {
      var text = $(this).text().replace(/\s+/g, " ").toLowerCase();
      return !~text.indexOf(val);
    })

    .hide();
});

// laporan
// preview gambar
function showPreview(event) {
  if (event.target.files.length > 0) {
    var src = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("file-ip-1-preview");
    preview.src = src;
    preview.style.display = "block";
    preview.style.height = "100px";
    preview.style.width = "auto";
  }
}
//   validasi laporan
(function () {
  "use strict";

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll(".needs-validation");

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener(
      "submit",
      function (event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add("was-validated");
      },
      false
    );
  });
})();
