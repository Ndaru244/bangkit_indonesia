<!-- footer -->
<nav class="navbar fixed-bottom navbar-light bg-light">
    <div class="text-center text-sm" href="#">Copyright 2022 &copy; <a class="font-weight-bold" style="text-decoration: none;" target="_blank"> Bangkitkan Semangat Indonesia</a>. All right reserved.</div>
</nav>
<!-- ./footer -->

<!-- Speififc Script -->
<script>
  $('#summernote').summernote({
      placeholder: '',
      height: 300,
      focus: true
  });
  $(document).ready(function(){
    $('#tabel-data').DataTable();
  });
imgInp.onchange = evt => {
  const [file] = imgInp.files
  if (file) {
    preview.src = URL.createObjectURL(file)
  };
};
</script>
</body>

</html>