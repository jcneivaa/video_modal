$(document).ready(function(){
    $("#exampleModal").modal('show');
});

$("#exampleModal").on('hidden.bs.modal', function (e) { // on closing the modal
    // stop the video
        $("#exampleModal iframe").attr("src", null);
  });