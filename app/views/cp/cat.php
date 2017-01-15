<!--<html><head><title>ramin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?= URL ?>bootstrap-3.3.6-dist/css/bootstrap.min.css">
  <script src="<?= URL ?>bootstrap-3.3.6-dist/js/jquery.min.js"></script>
  <script src="<?= URL ?>bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
<script src="<?= URL ?>js/j.js"></script>

<style>

</style>
</head>
<body>-->

  <script> 
$(function(){
function ale(){
	alert('dd');
}

	//$('li[pa=""],li[pa="0"]').last().css('background','#CB3336');

	$('li[pa=""],li[pa="0"]').last().each(function(e) {
		var pa=$(this).attr('pa');
        //$(this).css('background','#5B4141');
		$(this).after('<li id="a"><form id="z" action="" method="post" style="">'+pa+'<input type="hidden" name="pa" value="'+pa+'">'+'<input name="cat" type="text"><button name="add_row" class="add">add row</button></form></li>');	
    });
	
	

$('.add_list_a').click(function(e) {
    var c=$(this).attr('pa');
	$('#list_pacat').val(c);
	
});

		
});

//
</script>

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
<form method="post" action="">
<input type="hidden" name="pa_cat" id="list_pacat">
<input name="cat">
<button name="add_list" class="btn btn-default">submit</button>
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</form>
        </div>
      </div>
      
    </div>
  </div>
  <?= $data ?>
<!--</body>
</html>-->