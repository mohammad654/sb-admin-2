
<?php

$viewTitle='Card';
 include 'block.header.php';

include_once 'app/global.init.php';

$db = new Database();
if ($what = 'albumhassong'){
    $db->delete('albumhassong');
}


 include 'block.sidebar.php';
 include 'block.navigation.php';

echo '<h1 class="text-center text-danger">'.' This is Card Page '.'</h1>';
?>

<!-- Begin Page albumhassong  -->
<div class="container-fluid mt-5  h-100">
    <!--  Row 1-->
    <div class="row ">
        <div class="col">
            <div class="container">
                <h3 class="font-weight-bold text-primary text-center pt-4 mt-2">albumhassong</h3>
                <table class="table table table-bordered border-primary table-hover rounded-3 ">
                    <thead>
                    <tr class="">
                        <th scope="col">ID</th>
                        <th scope="col">id_song</th>
                        <th scope="col">id_album</th>
                        <th scope="col" class='text-success'>Up date</th>
                        <th scope="col" class='text-danger'>Delete</th>
                    </tr>
                    </thead>
                    <tbody class="">
                    <?php  foreach ($db->read('albumhassong') as $row){?>
                    <tr class="">
                        <th scope="row"><?php echo htmlspecialchars($row['id']); ?></th>
                        <td><?php echo htmlspecialchars($row['id_song']); ?></td>
                        <td><?php echo htmlspecialchars($row['id_album']); ?></td>
                        <td class=" px-3 text-center "><a href="" class='text-success '>Update</a></td>
                        <td class="text-center"><a href="cards.php?id=<?php echo $row['id']; ?>" class='text-danger '>Delete</a></td>
                        <?php } ?>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

<!--  albumhassong -->
        <div class="col">
            <div class="container">
                <h3 class="font-weight-bold text-primary text-center pt-4 mt-2">artisthasalbum</h3>
                <table class="table table table-bordered border-primary table-hover rounded-3 ">
                    <thead>
                    <tr class="">
                        <th scope="col">ID</th>
                        <th scope="col">id_artist</th>
                        <th scope="col">id_album</th>
                        <th scope="col" class='text-success'>Up date</th>
                        <th scope="col" class='text-danger'>Delete</th>
                    </tr>
                    </thead>
                    <tbody class="">
                    <?php  foreach ($db->read('artisthasalbum') as $row){?>
                    <tr class="">
                        <th scope="row"><?php echo htmlspecialchars($row['id']); ?></th>
                        <td><?php echo htmlspecialchars($row['id_artist']); ?></td>
                        <td><?php echo htmlspecialchars($row['id_album']); ?></td>
                        <td class=" px-3 text-center "><a href="" class='text-success '>Update</a></td>
                        <td class="text-center"><a href="cards.php?id=<?php echo $row['id']; ?>" class='text-danger '>Delete</a></td>
                        <?php } ?>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

 <!-- artisthasgenre -->
        <div class="col">
            <div class="container">
                <h3 class="font-weight-bold text-primary text-center pt-4 mt-2">artisthasgenre</h3>
                <table class="table table table-bordered border-primary table-hover rounded-3 ">
                    <thead>
                    <tr class="">
                        <th scope="col">ID</th>
                        <th scope="col">id_artist</th>
                        <th scope="col">id_gener</th>
                        <th scope="col" class='text-success'>Up date</th>
                        <th scope="col" class='text-danger'>Delete</th>
                    </tr>
                    </thead>
                    <tbody class="">
                    <?php  foreach ($db->read('albumhassong') as $row){?>
                    <tr class="">
                        <th scope="row"><?php echo htmlspecialchars($row['id']); ?></th>
                        <td><?php echo htmlspecialchars($row['id_song']); ?></td>
                        <td><?php echo htmlspecialchars($row['id_album']); ?></td>
                        <td class=" px-3 text-center "><a href="" class='text-success '>Update</a></td>
                        <td class="text-center"><a href="cards.php?id=<?php echo $row['id']; ?>" class='text-danger '>Delete</a></td>
                        <?php } ?>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- songhasgenre -->
        <div class="col">
            <div class="container">
                <h3 class="font-weight-bold text-primary text-center pt-4 mt-2">songhasgenre</h3>
                <table class="table table table-bordered border-primary table-hover rounded-3 ">
                    <thead>
                    <tr class="">
                        <th scope="col">ID</th>
                        <th scope="col">id_song</th>
                        <th scope="col">id_gener</th>
                        <th scope="col" class='text-success'>Up date</th>
                        <th scope="col" class='text-danger'>Delete</th>
                    </tr>
                    </thead>
                    <tbody class="">
                    <?php  foreach ($db->read('albumhassong') as $row){?>
                    <tr class="">
                        <th scope="row"><?php echo htmlspecialchars($row['id']); ?></th>
                        <td><?php echo htmlspecialchars($row['id_song']); ?></td>
                        <td><?php echo htmlspecialchars($row['id_album']); ?></td>
                        <td class=" px-3 text-center "><a href="" class='text-success '>Update</a></td>
                        <td class="text-center"><a href="cards.php?id=<?php echo $row['id']; ?>" class='text-danger '>Delete</a></td>
                        <?php } ?>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
 include 'script.php';
 include "block.footer.php";

