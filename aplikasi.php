<?php
function connect_to_db()
{
    $koneksi = mysqli_connect("localhost","root","","gfl");

    if($koneksi == false)
    {
        echo mysqli_error($koneksi);
        die;
    }
    return $koneksi;
}
function proses_login($username, $password)
{
    $password = md5($password);
    $conn = connect_to_db();
    $sql = "select * from user where username='$username' and password='$password'";
    $data = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($data);

    return ($num > 0);
}
// ambil data
function get_data_member()
{
    // konek ke db
    $koneksi = connect_to_db();
    $sql = "select * from member";
    return mysqli_query($koneksi,$sql);
}

function get_member_by_code($code)
{
    $conn = connect_to_db();
    $sql = "select * from member where code=".$code;
    $query = mysqli_query($conn,$sql);
    return mysqli_fetch_array($query);

}

function hapus_member($code)
{
    $koneksi = connect_to_db();
    $sql = "delete from member where code=".$code;
    mysqli_query($koneksi,$sql);
}

function simpan_data_member($data)
{
    $conn = connect_to_db();
    $code = $data['code'];
    $name = $data['name'];
    $address = $data['address'];
    $sql = "insert into member

        values ('$code','$name','$address')";
    mysqli_query ($conn,$sql);
}

function update_data_member($data)
{
    $conn = connect_to_db();
    $code = $data['code'];
    $name = $data['name'];
    $address = $data['address'];
    $sql = "update member
        set name ='$name',
            address = '$address'
        where code = '$code'";
    mysqli_query ($conn,$sql);
}

function redirect_to($page)
{
    echo "<script>
    window.location='index.php?page=$page';
    </script>"
    ;
}

?>