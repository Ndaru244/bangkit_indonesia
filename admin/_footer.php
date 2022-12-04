<!-- footer -->
<nav class="navbar fixed-bottom navbar-dark bg-danger">
  <div class="text-center text-light text-sm" href="#">Copyright 2022 &copy; <a class="font-weight-bold" style="text-decoration: none;" target="_blank"> Bangkitkan Semangat Indonesia</a>. All right reserved.</div>
</nav>
<!-- ./footer -->

<!-- Speififc Script -->
<script>
  $("#alert").fadeTo(2500, 500).fadeToggle(500, function() {
    $("#alert").slideUp(500);
  });
  $('#summernote').summernote({
    placeholder: '',
    height: 300,
    focus: true
  });
  $(document).ready(function() {
    $('#tabel-data').DataTable();
  });
  imgInp.onchange = evt => {
    const [file] = imgInp.files
    if (file) {
      preview.src = URL.createObjectURL(file)
    };
  };
</script>
<!-- Show And Hide Password -->
<script>
  function password_show_hide() {
    var x = document.getElementById("password");
    var show_eye = document.getElementById("show_eye");
    var hide_eye = document.getElementById("hide_eye");
    hide_eye.classList.remove("d-none");
    if (x.type === "password") {
      x.type = "text";
      show_eye.style.display = "none";
      hide_eye.style.display = "block";
    } else {
      x.type = "password";
      show_eye.style.display = "block";
      hide_eye.style.display = "none";
    }
  }
</script>
</body>

</html>