<?php include("header.php"); ?>
<?php

$tablename="additem";
$pagename="additems.php";


if(isset($itemsname)) {
insert($tablename);
}


if(isset($id)) {
destroy($id, $tablename);
}
?>

<form method="post" action="<?php echo $pagename?> " name="myform" id="myform">

<div class="container">


        <div class="row form-group">

            <div class="col-sm-12">
                <label>Items Name</label>
                <input type="text" name="itemsname" class="form-control">
            </div>

        </div>

        <div class="row form-group">

            <div class="col-sm-4">
                <label>Items Name[%]</label>
                <input type="text" name="commission" class="form-control">
            </div>
           <div class="col-sm-4">
                <label>Market Fees[%]</label>
                <input type="text" name="marketfees" class="form-control">
            </div>
             <div class="col-sm-4">
                            <label>RDF[%]</label>
                            <input type="text" name="rdf" class="form-control">
                        </div>
        </div>
        <div class="row form-group">

                    <div class="col-sm-4">
                        <label>Bardana Per Nug[%]</label>
                        <input type="text" name="bardana" class="form-control">
                    </div>
                   <div class="col-sm-4">
                        <label>Laga Per Nug[%]</label>
                        <input type="text" name="laga" class="form-control">
                    </div>

                </div>



             <div class="row form-group">
                 <div class="col-sm-8"></div>

                 <div class="col-sm-4">
                    <input type="submit" value="Submit" class="btn btn-primary form-control" >
                  </div>
             </div>
     </div>
</form>




<br>
<br>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Itemname</th>
                        <th>Commission</th>
                        <th>Marketfees</th>
                        <th>Rdf</th>
                        <th>Bardana</th>
                           <th>Laga</th>

                        <th>Action Delete </th>
                    </tr>
                </thead>

                <tbody>
                <?php $rows=select($tablename);

                        if($rows!=null) {
                            $count=1;
                            foreach($rows as $row)
                            {
                                $id=$row['id'];
                                $itemsname=$row['itemsname'];
                                $commission=$row['commission'];
                                $marketfees=$row['marketfees'];
                                $rdf=$row['rdf'];
                                    $bardana=$row['bardana'];
                                     $laga=$row['laga'];

                                echo
                                "<tr><td>$count</td>
                                 <td>$itemsname</td>
                                 <td>$commission</td>
                                 <td>$marketfees</td>
                                 <td>$rdf</td>
                                  <td>$bardana</td>
                                     <td>$laga</td>
                                 <td><div class='btn btn-danger' onclick=del($id,this)>Delete </div></td>
                                 </tr>";
                            $count=$count+1;
                            }}
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>




<script type="text/javascript">
$(document).ready(function (e) {
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





<br>
<br>
<br>


<br>
<br>
<br>


<br>
<br>
<br>


<br>
<br>
<br>


<br>
<br>
<br>


<br>
<br>
<br>



<?php include("footer.php");  ?>