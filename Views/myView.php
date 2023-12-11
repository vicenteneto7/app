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
                            <?php foreach ($rows as $row) : ?>
                                <tr>
                                    <td><?php echo $row->fullName; ?></td>
                                    <td><?php echo $row->email; ?></td>
                                    <td><?php echo $row->country; ?></td>
                                    <td><?php echo $row->state; ?></td>
                                    <td>
                                        <button class="btn btn-sm btn-light border" onclick="showEditModal('<?php echo $row->id; ?>')">Edit</button>
                                        <button class="btn btn-sm btn-danger" onclick="showDeleteModal('<?php echo $row->id; ?>')">Delete</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha384-qlmct0AOBiA2VPZkMY3+2WqkHtIQ9lSdAsAn5RUJD/3vA5MKDgSGcdmIv4ycVxyn" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>

    </script>
</body>

</html>