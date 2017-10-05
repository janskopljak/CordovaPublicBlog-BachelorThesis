function getAvatar() {
	$.ajax({
    type: "POST",
    url: "http://sanjaprodan.net/jan_dipl/get_avatar.php",
    data: 'username=' + username,
    crossDomain: true,
    cache: false,
    success: function(data) {
      data = JSON.parse(data);
      for (var i = 0; i < data.length; i++) {
        $('#avatar').attr('src',data[i].avatar);
      }
    }
  });
}