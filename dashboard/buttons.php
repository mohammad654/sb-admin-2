
<?php
$viewTitle='Buttons';

include 'block.header.php';
include_once 'app/global.init.php';

$db = new Database();
//Delete
if ($what = 'album'){
    $db->delete('album');
}
if ($what = 'song'){
    $db->delete('song');
}
//insert
if(isset($_POST)&&!empty($_POST)){
    $db = new Database();
    if (isset($_POST['add_album'])){
        $db->writer(
            'album',
            array(
                'album'=>$_POST['album'],
                'date'=>$_POST['date']
            )
        );
    }
        if (isset($_POST['add_song'])){
        $db->writer(
            'song',
            array(
                'song'=>$_POST['song'],
                'img'=>$_POST['img']
            )
        );

    }

}
include 'block.sidebar.php';
include 'block.navigation.php';

echo '<h1 class="text-center text-danger">'.' This is Buttons Page '.'</h1>';
?>
<!-- Begin Page Album  -->
<div class="container-fluid mt-5  h-100">
    <!--  Row 1-->
    <div class="row ">
        <div class="col">
            <div class="container">
                <h3 class="font-weight-bold text-primary text-center pt-4 mt-2">Album</h3>
                <table class="table table table-bordered border-primary table-hover rounded-3 ">
                    <thead>
                    <tr class="">
                        <th scope="col">ID</th>
                        <th scope="col">Album</th>
                        <th scope="col">Date</th>
                        <th scope="col" class='text-success'>Up date</th>
                        <th scope="col" class='text-danger'>Delete</th>
                    </tr>
                    </thead>
                    <tbody class="">
                    <?php  foreach ($db->read('album') as $row){?>
                    <tr class="">
                        <th scope="row"><?php echo htmlspecialchars($row['id']); ?></th>
                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                        <td><?php echo htmlspecialchars($row['date']); ?></td>
                        <td class=" px-3 text-center "><a href="" class='text-success '>Update</a></td>
                        <td class="text-center"><a href="buttons.php?id=<?php echo $row['id']; ?>" class='text-danger '>Delete</a></td>
                        <?php } ?>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!--  Content Row    2 -->
        <div class="col ">
            <div class="container">
                <h2 class="font-weight-bold text-primary text-center">Album</h2>
                <form method="POST">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Album</label>
                                <input type="text" name="album" class="form-control" placeholder="Album" required >
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Album</label>
                                <input type="date" name="date" class="form-control" placeholder="date" required >
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Album</label>
                                <input type="file" name="img" class="form-control"   >
                            </div>
                        </div>
                        <!--  col-md-6   -->
                    </div>
                    <!--  row   -->
                    <button type="submit" class="btn btn-primary col" name="add_album">Album</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Page Album  -->
<!-- Begin Page Song -->
<div class="container-fluid h-100">
    <!--  Row 1-->
    <div class="row ">
        <div class="col">
            <div class="container">
                <h3 class="font-weight-bold text-primary text-center">Song</h3>
                <table class="table table table-bordered border-primary table-hover rounded-3 mt-5 ">
                    <thead>
                    <tr class="">
                        <th scope="col">ID</th>
                        <th scope="col">Song</th>
                        <th scope="col">image</th>
                        <th scope="col">ID_Artist</th>
                        <th scope="col" class='text-success'>Up date</th>
                        <th scope="col" class='text-danger'>Delete</th>
                    </tr>
                    </thead>
                    <tbody class="">
                    <?php  foreach ($db->read('song') as $row){?>
                    <tr class="">
                        <th scope="row"><?php echo htmlspecialchars($row['id']); ?></th>
                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                        <td><?php echo htmlspecialchars($row['img']); ?></td>
                        <td><?php echo htmlspecialchars($row['id_artist']); ?></td>
                        <td class=" px-3 text-center "><a href="" class='text-success '>Update</a></td>
                        <td class="text-center"><a href="buttons.php?id=<?php echo $row['id']; ?>" class='text-danger '>Delete</a></td>
                        <?php } ?>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!--  Content Row    2 -->
        <div class="col ">
            <div class="container">
                <h2 class="font-weight-bold text-primary text-center">Song</h2>
                <form method="POST" >
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Song</label>
                                <input type="text" name="song" class="form-control" placeholder="Song" required >
                            </div>
                        </div>
                        <!--  col-md-6   -->

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Img	</label>
                                <input type="file" name="img"  placeholder="Img"  >
                            </div>
                        </div>
                        <!--  col-md-6   -->
                    </div>
                    <!--  row   -->
                    <button type="submit" class="btn btn-primary col" name="add_song">Song</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Page Song -->
<?php
include 'script.php';
include "block.footer.php";


