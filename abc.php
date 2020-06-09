<?php
include('dbconnection.php');
extract($_REQUEST);

				$query="update bookissue set breturn='$date' where id='$id'";
				$sql =$GLOBALS['conn']->prepare ($query);
				echo $query;
				$sql->execute() or die(print_r($sql->errorInfo(), true));
				echo "<script>

				alert('Data inseted Successfully')</script>";

?>



/*<script type="text/javascript">

function edit(id)
{
console.log(id);
$("#dataid").val(id);

$('#myModal').modal('show');
}





$(document).ready(function (e) {

$( "#btnsubmit" ).click(function() {

    var date1=$("#ereturn" ).val();
    console.log(date1);
    var id= $("#dataid").val();

   $.ajax({
                url:"abc.php",

                type:"POST",
                data: {"id":id,"date":date1},

                success: function(data)
                {
                alert("Data Inserted !");

                window.location.href="<?php echo $pagename ?>";

                },

                error: function() {
                alert("Something went wrong !");
                }

            });



});


    $("#myform").on('submit',(function (e){
        e.preventDefault();

            $.ajax({
                url:"<?php echo $pagename?>",
                type:"POST",
                data: new FormData(this),
                contentType:false,
                cache:false,
                processData:false,
                success: function(data)
                {
                alert("Data Inserted !");

                window.location.href="<?php echo $pagename ?>";

                },

                error: function() {
                alert("Something went wrong !");
                }

            });

        }));
});
function view(id, o) {

alert(id);
                window.location.href='bookdetail.php?id='+id;
}

 function del(id, o) {
        //alert(id);
        if(confirm('Are you sure want to delete?'))
        {
            var p=o.parentNode.parentNode;
            p.parentNode.removeChild(p);

                $.ajax({
                    url:"<?php echo $pagename ?>",
                    type: "POST",
                    data: {"id":id},
                    success: function(data){
                        alert(data);
                    },

                    error: function(){
                        alert("Something went Wrong !");
                    }
                });
            //winoow.location.href='' ;
        }
    }
</script>

 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
         <h4 class="modal-title">Modal Header</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>
        <div class="modal-body">
            <input type="date"  id="ereturn" name="ereturn" class="form-control" >
             <input type="text"  id="dataid" class="form-control" >
        </div>
        <div class="modal-footer">
           <button type="button" class="btn btn-primary" id="btnsubmit">Submit Data</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>




<br>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    #button1 {
      width: 140px;
      padding: 20px;
      bottom: 150px;
      z-index: 9999;
      font-size: 15px;
      position: absolute;
      margin: 0 auto;
    }
    </style>
 </head>
<body>
  <div class="container">
    <h2>Sample</h2>
    <p>This is demo text.</p>
    <p>This is demo text.</p>
    <p>This is demo text.</p>
    <p>This is demo text.</p>
    <p>This is demo text.</p>
    <p>This is demo text.</p>
    <p>This is demo text.</p>
    <p>This is demo text.</p>
    <p>This is demo text.</p>
    <p>This is demo text.</p>
    <p>This is demo text.</p>
    <button type="button" class="btn btn-default btn-lg" id="button1">Click to hide</button>
      <div class="modal fade" id="newModal" role="dialog">
         <div class="modal-dialog">
           <div class="modal-content">
             <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">×</button>
               <h4 class="modal-title">Sample Modal</h4>
             </div>
           <div class="modal-body">
             <p>This is demo text.</p>
           </div>
         </div>
      </div>
   </div>
</div>

<script>
  $(document).ready(function(){
    $("#newModal").modal("show");
    $("#button1").click(function(){
      $("#newModal").modal("hide");
    });
  });
</script>

</body>
</html>