  $(function () {
    // Summernote
    $('#TEKS_SOAL_PELAJARAN').summernote({height : 150})

    

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("TEKS_SOAL_PELAJARAN"), {
      mode: "htmlmixed",
      height: 150,
      theme: "monokai"
    });
  })