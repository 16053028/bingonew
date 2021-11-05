  $(function () {
    // Summernote
    $('#summernote').summernote({height : 150})

    

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      height: 150,
      theme: "monokai"
    });
  })