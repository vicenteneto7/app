<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div>
        <div>
            <div>
                <form action="<?php echo base_url(); ?>insert-data" method="post" id="formInsert">
                    <input type="text" name="nameComplete" placeholder="Nome completo" class="form-control">
                    <input type="email" name="email" placeholder="E-mail" class="form-control">
                    <input type="text" name="country" placeholder="País" class="form-control">
                    <input type="text" name="state" placeholder="Estado" class="form-control">
                    <button type="submit">Adicionar</button>
                </form>
            </div>
            <div>
                <div>
                    <table>
                        <thead>
                            <tr>
                                <th>Nome Completo</th>
                                <th>E-mail</th>
                                <th>País</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody id="data">
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>