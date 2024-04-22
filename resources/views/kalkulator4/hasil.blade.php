<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kalkulator</title>
    <style type="text/css">
    body{
        background: linear-gradient(to right, rgb(0, 0, 160), rgb(240,240,240), rgb(0,0,160));
    }
    table{
        border: 1px solid black;
        margin-left: auto;
        margin-right: auto;
        background-color: #454545;
    }
    input[type="text"]{
        padding: 20px 30px;
        font-size: 30px;
        font-weight: bold;
        border: 2px solid black;
        border-radius: 5px;
    }
    input[type="submit"]{
        width: 100%;
        background-color: #8b1717;
        color: white;
        padding: 20px 40px;
        font-size: 30px;
        font-weight: bold;
        border:none;
        border-radius: 5px;
        box-shadow: 6px 6px 6px rgba(0,0,0,0.9);
    }
    .back{
        width: 100%;
        background-color: #8b1717;
        color: white;
        padding: 20px 40px;
        font-size: 30px;
        font-weight: bold;
        border:none;
        border-radius: 5px;
        box-shadow: 6px 6px 6px rgba(0,0,0,0.9);
    }

    </style>
</head>
<body>
    <form action="{{route('hitung4')}}" method="post">
        @csrf
        <table>
            <tr>
                <td colspan="4">KALKULATOR</td>
            </tr>
            <tr>
                <td colspan="2"><input type="text" name="angka1" id=""></td>
                <td colspan="2"><input type="text" name="angka2" id=""></td>
            </tr>
            <tr>
                <td colspan="4"><input type="text" name="hasil" value="{{$hasil}}"></td>
            </tr>
            <tr>
                <td><input type="submit" name="operator" value="kali"></td>
                <td><input type="submit" name="operator" value="bagi"></td>
                <td><input type="submit" name="operator" value="tambah"></td>
                <td><input type="submit" name="operator" value="kurang"></td>
            </tr>
            <tr>
                <td colspan="4"><input type="submit" name="operator" value="reset"></td>
            </tr>
            <tr>
                            <td colspan="4" align="left" style="color:white; font-size: 24px;">
                                <p>AHMAD ALDI</p>
                                <p>XII PPLG 1</p>
                            </td>
                        </tr>
        </table>
        <a href="{{route('home')}}" class="back">kembali</a>
    </form>
</body>
</html>