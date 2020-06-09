<?php include("header.php"); ?>

<?php

$tablename="libray";
$pagename="newaccount.php";


if(isset($Studentname)) {
insert($tablename);
}


if(isset($id)) {
destroy($id, $tablename);
}
?>

<form method="post" action="<?php echo $pagename?> " name="myform" id="myform">
<div class="container">





          <div class="row form-group">
                    <div class="col-sm-4">
                          <label>Student Name</label>
                           <input type="text" name="Studentname" class="form-control">
                     </div>
                    <div class="col-sm-4">
                        <label>Fater Name</label>
                        <input type="text" name="fathername" class="form-control">
                    </div>

                     <div class="col-sm-4">
                              <label>MOTHER Name</label>
                              <input type="text" name="mothername" class="form-control">
                      </div>




                </div>

          <div class="row form-group">
                        <div class="col-sm-4">
                        <label>Rollno</label>
                         <input type="text" name="rollno" class="form-control">
                         </div>
                           <div class="col-sm-4">
                               <label>dob</label>
                               <input type="text" name="dob" class="form-control">
                           </div>

                            <div class="col-sm-4">
                                     <label>class</label>
                                     <input type="text" name="class" class="form-control">
                             </div>



                       </div>



             <div class="row form-group">

              <div class="col-sm-6">
              <input type="submit" value="Submit" class="btn btn-primary form-control" >

              </div>
            <div class="col-sm-6">

            <div type="button" class="btn btn-danger form-control">Clear</div>
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
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Opening Bal</th>
                        <th>Address</th>
                        <th>City</th>

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
                                $customername=$row['studentname'];
                                $mobile1=$row['fathername'];
                                $openbal=$row['mothername'];
                                $address=$row['rollno'];
                                    $city=$row['dob'];
                                     $class=$row['class'];

                                echo
                                "<tr><td>$count</td>
                                 <td>$customername</td>
                                 <td>$mobile1</td>
                                 <td>$openbal</td>
                                 <td>$address</td>
                                  <td>$class</td>
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


<?php include("footer.php");  ?>