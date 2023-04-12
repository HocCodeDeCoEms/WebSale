<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        *{
            /* font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif */
        font-family: SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;
        font-family: system-ui,-apple-system,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans","Liberation Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
        }
        td,
        th {
            border: none;
        }

        td {
            font-size: 18px;
        }

        .btn:hover {
            background-color: white;
            border-color: black;
            color: black;
            transition: 0.5s;
        }
    </style>
</head>

<body>
    <main>
        <div class="container mt-5">
            <div class="mb-4">
                <span class="fs-1">Thêm sản phẩm</span>
                <hr>
            </div>
            <form class="w-50" action="" method="GET">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <td>Tên sản phẩm</td>
                            <td><input class="form-control" type="text"></td>
                        </tr>
                        <tr>
                            <td>Hãng</td>
                            <td><input class="form-control" type="text"></td>
                        </tr>
                        <tr>
                            <td>Hình ảnh</td>
                            <td><input class="form-control" type="file"></td>
                        </tr>
                        <tr>
                            <td>Giá</td>
                            <td><input class="form-control" type="text"></td>
                        </tr>
                        <tr>
                            <td class="pb-4">Mô tả sản phẩm:</td>
                            <!-- <td><input class="form-control"></td> -->
                        </tr>
                        <tr>
                            <td>Switch</td>
                            <td><input class="form-control" type="text"></td>
                        </tr>
                        <tr>
                            <td>Macro</td>
                            <td>
                                <select class="form-select" aria-label="Macro" name="macro">
                                    <option selected>Chọn</option>
                                    <option value="1">Có</option>
                                    <option value="0">Không</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Kết nối</td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="USB-C" name="cn_type1" checked>
                                    <label class="form-check-label" for="">
                                        USB-C
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Bluetooth" name="cn_type2" id="">
                                    <label class="form-check-label" for="">
                                        Bluetooth
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Wireless" name="cn_type3" id="">
                                    <label class="form-check-label" for="">
                                        Wireless
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr class="pt-2">
                            <td colspan="2"><button type="submit" class="btn btn-dark px-3 fs-4 text-center w-100 text-uppercase" name="submit">Thêm</button></td>
                        </tr>
                    </table>
                </div>

                
            </form>
            <?php
            if (isset($_GET['submit'])) {
                echo $_GET['macro'];
                if (isset($_GET['cn_type1'])) {
                    echo $_GET['cn_type1'];
                }
                if (isset($_GET['cn_type2'])) {
                    echo $_GET['cn_type2'];
                }
                if (isset($_GET['cn_type3'])) {
                    echo $_GET['cn_type3'];
                }
            }
            ?>
        </div>
    </main>
</body>

</html>