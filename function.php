<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
    // include('conn.php');
    $conn=new mysqli("localhost","root","","test1");
    // Database configuration
    $servername = "localhost"; // Usually 'localhost'
    $username = "root";        // Default username for Laragon
    $password = "";            // Default password is empty for Laragon
    $dbname = "test1"; // Replace with your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    function InsertData(){
        global $conn;
        if(isset($_POST['btn_submit'])){
            $name    = $_POST['name'];
            $gender  = $_POST['gender'];
            $position= $_POST['position'];
            $salary  = $_POST['salary'];
            
            $sql = "INSERT INTO `employee`(`name`,`gender`,`position`,`salary`) VALUES ('$name','$gender','$position','$salary')";

            $rs  = $conn->query($sql);

            if($rs){
                echo `
                    $(document).ready(function () {
                        Swal.fire({
                            title: "The Internet?",
                            text: "That thing is still around?",
                            icon: "question"
                        });
                    })
                `;
            }
        }
    }
    InsertData();

    function getData()
    {
        global $conn;
        $respone = array();
        $sql = "SELECT * FROM employee ORDER BY id DESC";
        $result=$conn->query($sql);
        $i =0;
        // while($row=mysqli_fetch_assoc($result)){
        //     $name     = $row['name'];
        //     $gender   = $row['gender'];
        //     $position = $row['position'];
        //     $salary   = $row['salary'];

        //     echo '
        //         <tr>
        //             <td>'.$name.'</td>
        //             <td>'.$gender.'</td>
        //             <td>'.$position.'</td>
        //             <td>'.$salary.'</td>
        //             <td>
        //                 <button class="btn btn-warning p-2 me-2" name="btn_update">Update</button>
        //                 <button class="btn btn-danger p-2 me-2" name="btn_update">Delete</button>
        //             </td>
        //         </tr>
            
        //     ';
        // }

        while ($row = mysqli_fetch_assoc($result)) {
            $response[] = array(
                'name'    => $row['name'],
                'gender'  => $row['gender'],
                'position'=> $row['position'],
                'salary'  => $row['salary']
            );
        }
        header("Content-Type: application/json; charset=UTF-8");
        echo json_encode($response, JSON_PRETTY_PRINT);
    }
    getData();

    
?>
