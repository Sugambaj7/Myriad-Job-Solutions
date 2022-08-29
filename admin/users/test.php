<?php
            include '../connection/connection.php';

            $query = "select * from admin order by User_id desc";
            $queryRun = mysqli_query($conn,$query);
            $adminDatas = [];
            while($data = mysqli_fetch_assoc($queryRun)){
                $adminDatas = $data;
            }
        ?>
    <div>
                                    User List
                                </div>
                                <div>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>User Id</th>
                                                <th>UserName</th>
                                                <th>Password</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr> 
                                        </thead>

                                        <tbody>
                                            <?php
                                                foreach($adminDatas as $adminData){
                                            ?>
                                            <tr>
                                                <td><?php echo $adminDatas['User_Id'];?></td>
                                                <td><?php echo $adminDatas['Username'];?></td>
                                                <td><?php echo $adminDatas['Password'];?></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <?php
                                                }
                                                ?>
                                         
                                        </tbody>
                                    </table>
                                </div>