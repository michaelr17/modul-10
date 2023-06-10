<!DOCTYPE html>
<html>

<head>
    <title>MODUL 2 HTML</title>
</head>

<body bgcolor="grey">
    <p> Selamat datang di website gw</p>
    <p align="left">HTML bukanlah sebuah bahasa pemrograman</p>
    <p align="right">HTML adalah singkatan dari hypertext markup languange</p>
    <p align="center">liverpoll 7-0 Manchester united</p>
    
    <p><b><h1> INI ADALAH PEMBANTAIAN MUNYUK </b></p></h1>
    <p><I><h1> #1 DI LALIGA </I></p></h1>
    <p><u><h1> BARCELONA #1 DI LALIGA </U></p></h1>
    <p><H4> 7-0 <sup>5/3</sup></H4></p>
    <p><H4> 0-5 <sub>24/10</sub></H4></p>
    <P><H4>LINK PEMBANTAIAN MU</H4></P>
    <p><a href="https://www.liputan6.com/bola/read/5224867/liverpool-vs-mu-7-0-jadi-kekalahan-paling-memalukan-setan-merah-dan-ten-hag">klik disini</a></p>

    <p><h4>berikut pembantaian BARCELONA</h4></p>
    <ol type="1">
        <li>5-0</li>
        <li>0-3</li>
        <li>15-1</li>
    </ol>
     <p><h4>berikut pembantaian BARCELONA</h4></p>
    <ol type="A">
        <li>5-0</li>
         <li>0-3</li>
         <li>15-1</li>
        
     <p><h4>berikut pembantaian BARCELONA</h4></p>
     <ul type="circle">
       <li>5-0</li>
       <li>0-3</li>
       <li>15-1</li>
    </ul>

    <table border="1" bgcolor="white">
        <tr bgcolor="green">
            <td> baris 1 kolom 1</td>
            <td> baris 2 kolom 2</td>
            <td rowspan="3"> baris 3 kolom 3</td>
        </tr>
        <tr bgcolor="red">
            <td> baris 2 kolom 1</td>
            <td> baris 2 kolom 2</td>
           
        </tr>

        <tr bgcolor="grey">
            <td colspan="2"> baris 3 kolom 1</td>
        </tr>

    </table>

    <?php
    echo "---------------<br><br>";
    $tipedataint = 2;
    $tipedatafloat = 4.5;
    $tipedatastring = "Bengkel Pemrograman";
    $tipedataboolean1 = true;
    $tipedataboolean0 = false;
    $inivariable = "86";

    echo gettype ($tipedataint), "<br>";
    echo gettype ($tipedatafloat), "<br>";
    echo gettype ($tipedatastring), "<br>";
    echo gettype ($tipedataboolean1), "<br>";
    echo gettype ($tipedataboolean0), "<br><br>";
    echo gettype ($inivariable), "<br>";

    echo "----------------<br><br>";

        $nama = ["fadel", "rifqi","tyo","sendi","iqbal"];
        $biodata = [
            [
                "nama" => "rifqi",
                "nim" => "6705211111",
                "email" => "rifqi@gmail.com"
            ],
            [
                "nama" => "sendi",
                "nim" => "670512222222",
                "email" => "sendi@gmail.com"
            ],
        ];
        echo $nama [3];
        echo "<br>";
        echo "nama : ";
        echo $biodata[0]["nama"];
        echo "<br>nim : ";
        echo $biodata[0]["nim"];
        echo "<br>email ; ";
        echo $biodata[0]["email"];
        echo "<br><br>";
        
        echo "---------------------<br><br>";
        $a=10;
        $b=5;
        $c=$a+$b;
        $d=$a-$b;
        $e=$a*$b;
        $f=$a/$b;
        $g=$a%$b;


        echo "penjumlahan $a + $b=$c<br>";
        echo "pengurangan $a = $b=$d<br>";
        echo "perkalian $a * $b=$e<br>";
        echo "pembagian $a / $b=$f<br>";
        echo "modulus $a % $b=$g<br>";
        echo $a+$b, "<br>";
        
        echo "-----------<br><br>";

        if ($a>$b) {
            echo "$a>$b pernyataan ini benar <br><br>";
        }
        else {
            echo "$a<$b pernyataan ini salah<br><br>";
        }
        echo "-----------<br><br>";

        $x="Bengkel Pemrograman";
        //save ingin print x sebanyak 5x;
        //i++ itu sama dengan i=i+i;
        for ($i=1;$i<=5;$i++) {
            echo $x."<br>";
        }
        echo "<br>";

        echo "-------------------<br><br>";

        $a=1;
        while ($a<=5) {
            echo "Bengkel Pemrograman - ".$a."<br>";
            $a++;
        }
        echo "<br>";
        echo "--------------<br><br>";
        $a=12;
        switch ($a) {
            case 0; echo "angka 0";
                break;
            case 1; echo "angka 1";
                break;
            case 2; echo "angka 2";
                break;
            case 3; echo "angka 3";
                break;
            case $a; echo "angka $a";
                break;
            default; echo "angka angka";
                break;
        }
        echo "<br><br>";

        echo "------------------<br><br>";

        $nilai=45;
        if ($nilai>=80) {
            echo "Nilai A";
        }
        elseif($nilai>=70) {
            echo "nilai B";
        }
        elseif($nilai>=60){
            echo "Nilai C";
        }
        else {
            echo "Nilai D";
        }
        echo "<br>---------------------<br><br>;"
?>
        <form action="index.php" method="GET">
            nama: <input type="text" name="nama01">
            hobi: <input type="text" name="hobi01">
    </form>
    <table Border=1 width=100%>
        <tr>
            <td align=center>nama</td>
            <td align=center>hobi</td>
    </tr>
    <tr>
        <td align=center>
            <?php
      2          echo $_GET['nama01'];
                ?>
            </td>
            <td align=center>
                <?php
                    echo $_GET['hobi'];
                ?>
                </td>
    </tr>
    </table>
    </body>

</html>
        <p> ini adalah fakta </p> 
    <img src="messi goat.jpg" width=100% height="100%"> 
    

</body>

</html>

