
<br>


<div class="w3-white container center" >
<div class="w3-row">
<div class="w3-card-2 w3-round-large"><!--left images-->
    <div class="w3-responsive" id="i">
        <select id="sel"></select>
        <select id="city"></select>
    <script type="text/javascript">
    $(document).ready(function(){
       send_change("#sel");
       $("#sel").on("change",not);
       function not(){
           send_change("#city",false,this.value);
       }
       function send_change(sel,pro=true,name=""){
           var send_url='http://localhost/golbon/ajax/province';
           if(!pro){
              send_url='http://localhost/golbon/ajax/city/'+name;
            }
          
            $.ajax({
            url:send_url,
            type:'GET',
            dataType: 'json',
            success: function( json ) {
                 $(sel).empty();
                $.each(json, function(i, value) {
                    $(sel).append($('<option>').text(i+' '+value).attr('value', i));
                });
            }
            });
       }
    
    
    });
    </script>
add_address
choose address
</div>

</div>
</div>
</div>
