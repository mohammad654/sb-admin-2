<?php

//include 'config.php';
class Database extends Connection
{
    public function writer($what, $data){
        $length         = 15;
        $randomString   = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
//        artist
        if(isset($what)&&$what == 'artist'){
            $name           = trim(htmlspecialchars($data['name']));
            $slug           = trim(htmlspecialchars($data['slug']));
            $about          = trim(htmlspecialchars($data['about']));

            $db= new Database();
            $dbh = $db->getDb();

            $sql='INSERT INTO artist(id,name, slug, about) VALUES (:id,:name,:slug,:about)';
            $stmt= $dbh->prepare($sql);
            $stmt->bindParam(':id', $randomString);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':slug', $slug);
            $stmt->bindParam(':about', $about);
            $stmt->execute();
        }
//      genres
        if(isset($what)&&$what == 'genres'){
            $genre          = trim(htmlspecialchars($data['genres'])) ;

            $db= new Database();
            $dbh = $db->getDb();

            $sql='INSERT INTO genres(id,genre) VALUES (:id,:genre)';
            $stmt= $dbh->prepare($sql);
            $stmt->bindParam(':id', $randomString);
            $stmt->bindParam(':genre', $genre);
            $stmt->execute();

        }
//      album
        if (isset($what)&&$what == 'album'){
            $name          = trim(htmlspecialchars($data['album'])) ;
            $date          = trim(htmlspecialchars($data['date'])) ;
           // $img          = trim(htmlspecialchars($data['img'])) ;
            $img          = '' ;
            $db= new Database();
            $dbh = $db->getDb();

            $sql='INSERT INTO album (id,name, date, img) VALUES (:id,:name,:date,:img)';
            $stmt= $dbh->prepare($sql);
            $stmt->bindParam(':id', $randomString);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':date', $date);
            $stmt->bindParam(':img', $img);
            $stmt->execute();

        }
//      album
        if (isset($what)&&$what == 'song'){
            $name          = trim(htmlspecialchars($data['song'])) ;

            $id_artist="SELECT id FORM artist WHERE id='LW6hJ3ayOdjcNxT'";

            $db= new Database();
            $dbh = $db->getDb();

            $sql='INSERT INTO song (id, name, img, id_artist) VALUES (:id,:name,:img,:id_artist);';
            $stmt= $dbh->prepare($sql);
            $stmt->bindParam(':id', $randomString);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':img', $img);
            $stmt->bindParam(':id_artist', $id_artist);
            $stmt->execute();
//INSERT INTO `song`(`id`, `name`, `img`, `id_artist`)
//VALUES ('eee','222efewfewq2','2dasvpjewvgn22',
//        SELECT id FROM artist WHERE id='LW6hJ3ayOdjcNxT');
        }

        if (isset($what)){

            $db= new Database();
            $dbh = $db->getDb();

            $sql='INSERT INTO albumhassong (id, id_song,id_album) VALUES (:id,:id_song,:id_album);';
            $stmt= $dbh->prepare($sql);
            $stmt->bindParam(':id', $randomString);
            $stmt->bindParam(':id_song', $id_song);
            $stmt->bindParam(':id_album', $id_album);
            $stmt->execute();
        }

    }
//read
    public  function  read($what){
        $db= new Database();
        $sql = "SELECT * FROM $what";
        return   $this->getDb()->query($sql);
    }
//delete
    public function delete($what){
//        artist delete
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $db= new Database();
            $query = "DELETE FROM $what WHERE id='$id'";
            $dbh = $db->getDb();
            $stmt = $dbh->prepare($query);
            $stmt->execute();

        }

    }
}

?>

