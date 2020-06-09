<?php include("header.php"); ?>

<?php

$tablename="bookissue";
$pagename="bookissue.php";


if(isset($studentname)) {
insert($tablename);
}


if(isset($id)) {
destroy($id, $tablename);
}


 ?>
<form method="post" action="<?php echo $pagename?> " name="myform" id="myform">
<div class="container">


   <h2 style="text-align:center; text-decoration:underline; color:green">Student Record</h2>

  <div class="row form-group">
                    <div class="col-sm-4">
                          <label>Student Name</label>
                           <select name="studentname" id="studentname" class="form-control">
                     <?php
                     $rows=select("libray");

                                if($rows!=null) {

                                                     foreach($rows as $row)
                                                      {

                                                            $studentname=$row['studentname'];
                                                            echo "<option >$studentname</option>";
                                                       }
                                                    }
                        ?>

                                                    </select>
                     </div>
                    <div class="col-sm-4">
                        <label>Fater Name</label>
                         <select name="fathername" id="fathername" class="form-control">
                             <?php
                                     $rows=select("libray");

                                                if($rows!=null) {

                                                     foreach($rows as $row)
                                                                {

                                                                    $studentname=$row['fathername'];
                                                                     echo "<option >$studentname</option>";
                                                                  }

                                                                }
                                                     ?>
                                                  </select>
                    </div>

                     <div class="col-sm-4">
                              <label>MOTHER Name</label>
                             <select name="mothername" id="mothername" class="form-control">
                                                  <?php
                                                      $rows=select("libray");

                                                          if($rows!=null) {


                                                            foreach($rows as $row)
                                                                           {

                                                                                     $studentname=$row['mothername'];
                                                                                    echo "<option >$studentname</option>";
                                                                            }
                                                                        }
                                                                          ?>

                                                      </select>
                      </div>




                </div>

          <div class="row form-group">
                        <div class="col-sm-3">
                        <label>Rollno</label>
                          <select name="rollno" id="rollno" class="form-control">
                                <?php
                                     $rows=select("libray");

                                          if($rows!=null) {

                                                        foreach($rows as $row)
                                                               {

                                                               $rollno=$row['rollno'];
                                                                echo "<option >$rollno</option>";
                                                                }
                                                           }
                                                        ?>

                                                   </select>
                         </div>
                           <div class="col-sm-3">
                               <label>Issuedbook</label>

                                 <input type="date"  id="issuedate" name="issuedate" class="form-control" >

                            </div>
                              <div class="col-sm-3">
                               <label>Returnbook</label>

                              <input type="date"  id="bookreturn" name="bookreturn" class="form-control" >
                               <input type="hidden"  id="breturn" name="return" class="form-control" >



                       </div>

                            <div class="col-sm-3">
                                     <label>class</label>
                                     <select name="class" id="class" class="form-control">
                                     <?php
                                        $rows=select("libray");

                                            if($rows!=null)
                                             {

                                                 foreach($rows as $row)
                                                   {

                                                          $studentname=$row['class'];
                                                       echo "<option >$studentname</option>";
                                                   }
                                           }
                                                                ?>

                           </select>
                             </div>



                       </div>



  <h2 style="text-align:center; text-decoration:underline; color:green">Book Record</h2>


          <div class="row form-group">
                    <div class="col-sm-4">
                          <label>Book Name</label>
                           <select name="bookname" id="bookname" class="form-control">
                        <?php
                                             $rows=select("bookrec");

                                                        if($rows!=null) {

                                                                             foreach($rows as $row)
                                                                              {

                                                                                    $studentname=$row['bookname'];
                                                                                    echo "<option >$studentname</option>";
                                                                               }
                                                                            }
                                                ?>

                                                    </select>
                     </div>
                    <div class="col-sm-4">
                        <label>subject</label>
                        <select name="subject" id="subject" class="form-control">
                       <?php
                           $rows=select("bookrec");

                            if($rows!=null) {

                                          foreach($rows as $row)
                                           {

                                             $studentname=$row['subject'];
                                              echo "<option >$studentname</option>";
                                            }
                                          }
                        ?>

                                                 </select>
                    </div>

                     <div class="col-sm-4">
                              <label>Uid</label>
                              <select name="uid" id="uid" class="form-control">
                       <?php
                                              $rows=select("bookrec");

                                               if($rows!=null) {

                                                             foreach($rows as $row)
                                                              {

                                                                $studentname=$row['uid'];
                                                                 echo "<option >$studentname</option>";
                                                               }
                                                             }
                                           ?>

                                                       </select>
                      </div>




                </div>

          <div class="row form-group">
                        <div class="col-sm-4">
                        <label>Price</label>
                        <select name="price" id="price" class="form-control">
                               <?php
                                                      $rows=select("bookrec");

                                                       if($rows!=null) {

                                                                     foreach($rows as $row)
                                                                      {

                                                                        $studentname=$row['price'];
                                                                         echo "<option >$studentname</option>";
                                                                       }
                                                                     }
                                                   ?>

                          </select>
                         </div>
                           <div class="col-sm-4">
                               <label>publishedyear</label>
                               <select name="publishedyear" id="publishedyear" class="form-control">
                                      <?php
                                                             $rows=select("bookrec");

                                                              if($rows!=null) {

                                                                            foreach($rows as $row)
                                                                             {

                                                                               $studentname=$row['publishedyear'];
                                                                                echo "<option >$studentname</option>";
                                                                              }
                                                                            }
                                                          ?>

                                                        </select>
                           </div>

                            <div class="col-sm-4">
                                     <label>writername</label>
                                     <select name="writername" id="writername" class="form-control">
                                          <?php
                                                                 $rows=select("bookrec");

                                                                  if($rows!=null) {

                                                                                foreach($rows as $row)
                                                                                 {

                                                                                   $studentname=$row['writername'];
                                                                                    echo "<option >$studentname</option>";
                                                                                  }
                                                                                }
                                                              ?>

                                                              </select>
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
                        <th>studentName</th>
                        <th>r0llno</th>
                        <th>class</th>
                        <th>bookname</th>
                       <th>view</th>
                       <th>return</th>

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
                                $studentname=$row['studentname'];
                                $rollno=$row['rollno'];
                                $class=$row['class'];
                                $bookname=$row['bookname'];
                                $breturn=$row['breturn'];



                                echo
                                "<tr><td>$count</td>
                                 <td>$studentname</td>
                                 <td>$rollno</td>
                                 <td>$class</td>
                                 <td>$bookname</td>
                                 <td><div class='btn btn-primary' onclick=view($id,this)>View </div></td>";
                                 echo  "<td><button type='button' class='btn btn-info btn-sm' onclick=edit($id)>Return Book</button></td>";;
                                 echo "<td><div class='btn btn-danger' onclick=del($id,this)>Delete </div></td>

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
function edit(id)
{
console.log(id);
$("#dataid").val(id);

$('#myModal').modal('show');
}





$(document).ready(function (e) {

$( "#btnsubmit" ).click(function() {

    var date1=$("#ereturn" ).val();

     var id=$("#dataid" ).val();


    if(date1.length!=0)
    {
    console.log(date1);
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


    }
    else
    {
    alert("please select date !");
    }
    var id= $("#dataid").val();



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


<?php include("footer.php");  ?>