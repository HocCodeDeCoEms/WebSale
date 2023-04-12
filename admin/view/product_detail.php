<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .img-product {
            width: 150px;
            height: 150px;
        }
    </style>
</head>

<body>
    <header></header>
    <main>
        <div class="container mb-4 mt-5">
            <div class="row">
                <div class="col-12">
                <a href="#" class="btn btn-lg btn-block btn-success text-uppercase mb-4">thêm sản phẩm</a>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Hình ảnh</th>
                                    <th scope="col">Tên sản phẩm</th>
                                    <!-- <th scope="col">Available</th> -->
                                    <th scope="col" class="text-center">Hãng</th>
                                    <th scope="col" class="text-end">Giá</th>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img class="img-product" src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                                    <td>Product Name Dada</td>
                                    <!-- <td>In stock</td> -->
                                    <td class="text-center"></td>
                                    <td class="text-end">124,90 €</td>
                                    <td class="text-end">
                                        <button class="btn btn-sm btn-danger ms-2"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img class="img-product" src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                                    <td>Product Name Toto</td>
                                    <!-- <td>In stock</td> -->
                                    <td class="text-center"></td>
                                    <td class="text-end">33,90 €</td>
                                    <td class="text-end">
                                        <button class="btn btn-sm btn-danger ms-2"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img class="img-product" src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                                    <td>Product Name Titi</td>
                                    <!-- <td>In stock</td> -->
                                    <td class="text-center"></td>
                                    <td class="text-end">70,00 €</td>
                                    <td class="text-end">
                                        <button class="btn btn-sm btn-danger ms-2"><i class="fa fa-trash"></i> </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer></footer>
</body>

</html>