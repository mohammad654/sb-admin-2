<?php
include_once 'app/global.init.php';

$db = new Database();
if ($what = 'artist'){
    $db->delete('artist');
}
if ($what = 'genres'){
    $db->delete('genres');
}

if(isset($_POST)&&!empty($_POST)){
    $db = new Database();
    if (isset($_POST['add_genres'])){
        $db->writer(
            'genres',
            array(
                'genres'=>$_POST['genres'])
        );
    }
    if (isset($_POST['add_artist'])) {
        $db->writer(
            'artist',
            array(
                'name' => $_POST['name'],
                'slug' => $_POST['slug'],
                'about' => $_POST['about'])
        );

    }
}

?>
<!-- Begin Page  Artist -->
<div class="container-fluid mt-5 pt-5 h-100">
    <!--  Row 1-->
    <div class="row ">
            <div class="col">
                <div class="container">
                    <h3 class="font-weight-bold text-primary text-center">Artists</h3>
                            <table class="table table table-bordered border-primary table-hover rounded-3 ">
                                <thead>
                                <tr class="">
                                    <th scope="col">ID</th>
                                    <th scope="col">Artist Name</th>
                                    <th scope="col">slug</th>
                                    <th scope="col">about</th>
                                    <th scope="col" class='text-success'>Up date</th>
                                    <th scope="col" class='text-danger' >Delete</th>
                                </tr>
                                </thead>
                                <tbody class="">
                                <?php  foreach ($db->read('artist') as $row){?>
                                <tr class="">
                                        <th scope="row"><?php echo htmlspecialchars($row['id']); ?></th>
                                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                                        <td><?php echo htmlspecialchars($row['slug']); ?></td>
                                        <td><?php echo htmlspecialchars($row['about']); ?></td>
                                        <td class=" px-3 text-center "><a href="" class='text-success '>Update</a></td>
                                        <td class="text-center"><a href="index.php?id=<?php echo $row['id']; ?>" class='text-danger '>Detele</a></td>
                                        <?php } ?>
                                    </tr>
                                </tbody>
                            </table>
                </div>
            </div>

<!--  Content Row    2 -->
            <div class="col ">
                <div class="container">
                    <h2 class="font-weight-bold text-primary text-center">Artist</h2>
                    <form method="POST" required>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Artist Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Artist Name" required >
                                </div>
                            </div>
                            <!--  col-md-6   -->

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>slug	</label>
                                    <input type="text" name="slug" class="form-control" placeholder="slug" required >
                                </div>
                            </div>
                            <!--  col-md-6   -->
                        </div>
                        <div class="row">
                            <!--  col-md-6   -->

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>About</label>
                                    <div class="form-outline">
                                        <textarea name="about" class="form-control" id="textAreaExample1" rows="4" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <!--  col-md-6   -->
                        </div>
                        <!--  row   -->
                        <button type="submit" class="btn btn-primary col" name="add_artist">Artist</button>
                    </form>
                </div>
            </div>
    </div>
</div>
<!-- End Page Artist -->

<!-- Begin Page Genres  -->
<div class="container-fluid mt-5  h-100">
    <!--  Row 1-->
    <div class="row ">
        <div class="col">
            <div class="container">
                <h3 class="font-weight-bold text-primary text-center pt-4 mt-2">Genres</h3>
                <table class="table table table-bordered border-primary table-hover rounded-3 ">
                    <thead>
                    <tr class="">
                        <th scope="col">ID</th>
                        <th scope="col">Genres</th>
                        <th scope="col" class='text-success'>Up date</th>
                        <th scope="col" class='text-danger'>Delete</th>
                    </tr>
                    </thead>
                    <tbody class="">
                    <?php  foreach ($db->read('genres') as $row){?>
                    <tr class="">
                        <th scope="row"><?php echo htmlspecialchars($row['id']); ?></th>
                        <td><?php echo htmlspecialchars($row['genre']); ?></td>
                        <td class=" px-3 text-center "><a href="" class='text-success '>Update</a></td>
                        <td class="text-center"><a href="index.php?id=<?php echo $row['id']; ?>" class='text-danger '>Detele</a></td>
                        <?php } ?>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!--  Content Row    2 -->
        <div class="col ">
            <div class="container">
                <h2 class="font-weight-bold text-primary text-center">Genres</h2>
                <form method="POST">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Genres</label>
                                <input type="text" name="genres" class="form-control" placeholder="Genres" required >
                            </div>
                        </div>
                        <!--  col-md-6   -->
                    </div>
                    <!--  row   -->
                    <button type="submit" class="btn btn-primary col" name="add_genres">Genres</button>
                </form>
            </div>
        </div>
    </div>
</div>
