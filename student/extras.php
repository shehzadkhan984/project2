<div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Earnings By Items</h2>
                                <div class="table-responsive table--no-card m-b-50">
                                    <table class="table table-border table-striped table-earning table-hover table-responsive" id="dataTables-example">
                                       <thead>
                                                <tr>
                                                    <th align="center">#</th>
                                                    <th>Student Name</th>
                                                    <th>Student Roll No </th>
                                                    <th>Book Name</th>
                                                    <th>ISBN </th>
                                                    <th>Issued Date</th>
                                                    <th>Return Date</th>
                                                    <th>Fine in(PKR)</th>
                                                   
                                                   
                                                </tr>
                                            </thead>
                                       <tbody>
                                          <?php  
                                                    include 'conf.php';
                                                   
                                                    $stmt = $db->prepare("select * from tblissuedbookdetails where sturoll='$sroll'");
                                                    $stmt->execute();
                                                    $cnt=1;
                                                    if($stmt->rowCount() > 0)
                                                    {

                                                    while ($row = $stmt->fetch()) 
                                                    {

                                                        $id=   $row['id'];       
                                                       
                                                        
                                                        

                                                        
                                                            # code...
                                                       
                                                        ?>
                                                     <tr class="odd gradeX">
                                            <td class="center"><?php echo $cnt?></td>
                                            <td class="center"><?php echo $row['stuname']; ?></td>
                                            <td class="center"><?php echo $row['sturoll'];?></td>
                                            <td class="center"><?php echo $row['isbn']; ?></td>
                                            <td class="center"><?php echo $row['bookname'];?></td>
                                            <td class="center"><?php echo $row['IssuesDate'];?></td>
                                            <td class="center"><?php if($row['ReturnDate']=="")
                                            {?>
                                            <span style="color:red">
                                             <?php   echo htmlentities("Not Return Yet"); ?>
                                                </span>
                                            <?php } else {
                                            echo $row['ReturnDate'];
                                        }
                                            ?></td>
                                              <td class="center"><?php echo $row['fine'];?></td>
                                             </tr>
                                           
                                            


                                                
                                         <?php $cnt=$cnt+1;}} ?>  
                                            </tbody>
                                    </table>
                                </div>
                            </div>
                     
                        </div>
                        